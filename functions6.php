<?php
function getExt($fileName)
{
    return substr($fileName, strrpos($fileName, '.') + 1);
}

function uploadFile($inputFile, $fileName, $allowedExt = ['json'])
{
    $uploadDir = 'tests';
    if (isset($_FILES[$inputFile])) {
        $ext = getExt($_FILES[$inputFile]['name']);
        if (!in_array($ext, $allowedExt)) {
            return false;
        }
        $sourceFile = $_FILES[$inputFile]['tmp_name'];
        $fileName = "$fileName";
        $destinationFile = realpath(__DIR__ . "/$uploadDir") . '/' . $fileName;
        if(move_uploaded_file($sourceFile, $destinationFile)) {
            return "$uploadDir/$fileName";
        } else {
            return false;
        }
    }
}
