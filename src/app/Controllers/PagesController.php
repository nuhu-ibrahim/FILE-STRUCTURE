<?php

namespace App\Controllers;

use App\Models\Path;
use \Tamtamchik\SimpleFlash\Flash;

class PagesController extends BaseController
{
    protected $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Path();
    }

    public function index()
    {
        return view('index');
    }

    public function refresh()
    {
        // Purge the database
        $this->model->delete();

        try {
            $handle = fopen(gwd()."/fstructure.txt", "r");

            $folder_ind = array();
            while (($line = fgets($handle)) !== false) {
                $tab_count = get_number_of_tabs($line, ' ');
                $filename = trim($line);
                $file_type = "file";

                $directory = get_directory($filename, $folder_ind, $tab_count);

                // Check if it is a file or a folder.
                if (substr_count($filename, '.') == 0){
                    if(count($folder_ind) >= $tab_count){
                        $folder_ind[$tab_count] = $filename;
                    }else{
                        $folder_ind[] = $filename;
                    }
                    $file_type = "folder";
                }

                // Insert file/folder info into the database
                $this->model->insert([
                    'name' => $filename,
                    'directory' => $directory,
                    'type' => $file_type
                ]);
            }

            fclose($handle);
        }catch (\Exception $ex) {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }

        flash()->success('The file structures has been refreshed successfully!');
        return redirect('all-paths');
    }

    public function paths()
    {
        $paths = $this->model->selectAll();

        return view('all-paths', ['paths' => $paths]);
    }
}
