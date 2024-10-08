<?php

$dir = getcwd();
$new_dir = $dir  . '/testdir';

echo 'Running as user: ' . get_current_user() . "<br>";

if (!is_writable($dir)) {
    echo "The directory $dir is not writable.<br>";
} else {
    echo "The directory $dir is writable.<br>";
}

if (!is_dir($dir)) {
    if (mkdir($new_dir, 0755, true)) {
        echo "Directory created successfully.";
    } else {
        $error = error_get_last();
        echo "Failed to create directory. Error: " . $error['message'];
    }
} else {
    echo "Directory already exists.";
}

?>
