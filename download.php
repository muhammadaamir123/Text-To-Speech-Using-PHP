<?php
if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'audio/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        header("location:http://localhost/t2s");
        exit;
    }else{
        echo 'The file does not exist.';
    }
}