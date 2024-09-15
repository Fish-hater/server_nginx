<?php

$dir = '/usr/share/nginx/html/created';

echo 'Running as user: ' . get_current_user() . "<br>";

if (!is_writable('/usr/share/nginx/html')) {
    echo "The directory /usr/share/nginx/html is not writable.<br>";
} else {
    echo "The directory /usr/share/nginx/html is writable.<br>";
}

if (!is_dir($dir)) {
    if (mkdir($dir, 0755, true)) {
        echo "Directory created successfully.";
    } else {
        $error = error_get_last();
        echo "Failed to create directory. Error: " . $error['message'];
    }
} else {
    echo "Directory already exists.";
}

?>