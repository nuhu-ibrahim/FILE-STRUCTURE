# Vanilla PHP for Managing and Searching File/Folder Structures
## Exectuting the Application
### Install all Packages Using Composer
To do this run the code below:
```
	composer install
```
### Create a Database and Import the Database File
The relational database designed for the purpose of this exercise can be found in the db folder. The name of the file is "folder_structure.sql" and it basically contains a single table named paths. You will have to create a database of your choice, import the table in this file and configure the database information in the .env file.
### Executing the Applcation
You can run this application by first navigating into the root directory, i.e. FILE-STRUCTURE, and then executing the command below:
```
	php -S localhost:<PORT>
```
The <PORT> can be any of your choice.
## About the Text File With Directories
The db folder contains a file with name "fstructure.txt" and this file is supposed to contain the well formatted text that will be read and fed into the database for subsequest search.

Upon updating of the content of this folder, a request to the "/refresh" path using a POST REQUEST will cause the program to purge the entire folders/files that are already existing and use the content of the fstructure.txt" file to create a new set of file structures. 

Note also that a single space is used to delimeter a tab to ensure text editor compatibility. This means two spaces before a file/folder name means it has depth of 2.

## Correct file or folder names
For the sake of this folder, a particular name is a file name as long as it contains a ".", but is a folder name otherwise.

## Choice of path structure
Considering the "C:" token in the test question, this work will assume windows path structure by default.
