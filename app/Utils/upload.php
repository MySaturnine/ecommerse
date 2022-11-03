<?php



function isSelected($images)
{

    if (empty($images)) {
        return false;
    }


    foreach ($images as $filename) {
        if ($_FILES[$filename]["error"] != 0) {
            return false;
        }
    }

    return true;
}


function getFilename($file, $upload_folder)
{

    $new_name = "error";
    $target_dir = "images/$upload_folder/";
    $target_file = $target_dir . basename($_FILES[$file]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check file size
    if ($_FILES[$file]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        return "error";
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        return "error";
    }

    //https://stackoverflow.com/questions/1846202/how-to-generate-a-random-unique-alphanumeric-string
    $bytes = random_bytes(15);
    $name = bin2hex($bytes);
    $new_name = $target_dir . $name . "." . $imageFileType;

    return $new_name;
}

function upload($old_name, $new_name)
{
    $new_name = ROOT_DIR . $new_name;

    if (move_uploaded_file($_FILES[$old_name]["tmp_name"], $new_name)) {
        // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    return false;
}
