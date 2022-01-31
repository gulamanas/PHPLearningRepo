<?php
// Magic constants
echo __DIR__ . '<br>'; // print the directory
echo __FILE__ . '<br>'; // print the file name with path
echo __LINE__ . '<br>'; // print the no. of line where it has been written

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
$files = scandir('./');
// $files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'some content');

// file_get_contents from URL
// $usersJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
// echo $usersJson;


// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file