<?php

namespace App\Controllers;

use Core\Request\Request;
use App\Models\Path;
use \Tamtamchik\SimpleFlash\Flash;

class SearchController extends BaseController
{
    protected $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Path();
    }

    public function index()
    {
        return view('search');
    }

    public function search()
    {
        $request = new Request();
        $search_key = $request->get('search');

        $paths = $this->model->where(["name LIKE '%$search_key%'"])->select();

        if(count($paths) == 0){
            flash()->info('No file/path exist with similar name.');

            return redirect("search");
        }

        return view('all-paths', ['paths' => $paths]);
    }
}
