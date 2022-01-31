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
echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents


// file_get_contents from URL

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file