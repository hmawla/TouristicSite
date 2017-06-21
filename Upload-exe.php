<?php
function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
        
    }  
    foreach ($file_post['tmp_name'] as $filename){
            echo $filename . " <br>";
        }
    return $file_ary;
}

$target_dir = "uploads/";
if(isset($_POST["submit"])) {
    
    
    $file_ary = reArrayFiles($_FILES['fileToUpload']);
    foreach ($file_ary as $file) {
        $target_file = $target_dir . $file['name'];
        
        if (file_exists($target_file)) {
            echo "Sorry, " . $file['name'] . " file already exists.";
            break;
        }
        if ($file["size"] > 10000000) {
            echo "Sorry, " . $file['name'] . " is too large.";
            break;
        }
        
        
        
        if (move_uploaded_file( $file['tmp_name'], $target_file)) {
            
            echo "The file " . $file['tmp_name']  . " has been uploaded. <br>";
            
        } else {
            
            echo "Sorry, there was an error uploading your file. " . $file['tmp_name'] . " " . $target_file . "<br>";
            
        }
    }
}


?>