<?php

class Images{
    
    public function uploadImage(){

        try {
            $image_file = $_FILES['file'];
            // Move the temp image file to the images/ directory
            move_uploaded_file(
                $image_file["tmp_name"],
                // New image location, __DIR__ is the location of the current PHP file
                __DIR__ . "/../upload/" . $image_file['name'] . '.jpg'
            );
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return "upload/" . $image_file['name'] . '.jpg';
    }
}


