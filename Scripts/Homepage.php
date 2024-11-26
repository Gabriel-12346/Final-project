<?php
// gallery.php
$directory = 'images'; // Directory where images are stored
$imagePaths = [];

if (is_dir($directory)) {
    $files = scandir($directory);
    foreach ($files as $file) {
        // Check if the file is a valid image
        $filePath = $directory . '/' . $file;
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($fileExtension, $allowedExtensions)) {
            $imagePaths[] = $filePath; // Store the valid image paths
        }else{
            die("Invalid.");
        }
    }
}
?>