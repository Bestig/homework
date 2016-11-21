<?php

function createImage($text)
{
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="Diploma.png"');
    $im = imagecreatetruecolor(400, 600);
    $bc = imagecolorallocate($im, 255, 224, 221);
    $textColor = imagecolorallocate($im, 33, 144, 191);
    $boxPath = realpath(__DIR__ . '/assets/c013.png');

    $box = imagecreatefrompng($boxPath);
    $fontPath = realpath(__DIR__ . '/assets/font.ttf');

    imagefill($im, 0, 0, $bc);
    imagecopy($im, $box, 7, 20, 0, 0, 387, 546);
    imagettftext($im, 35, 0, 140, 350, $textColor, $fontPath, $text);

    imagepng($im);
    imagedestroy($im);
    imagedestroy($box);
}

function createImageWin($text)
{
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="Diploma.png"');
    $im = imagecreatetruecolor(400, 600);
    $bc = imagecolorallocate($im, 255, 224, 221);
    $textColor = imagecolorallocate($im, 33, 144, 191);
    $boxPath = realpath(__DIR__ . '/assets/win.png');

    $box = imagecreatefrompng($boxPath);
    $fontPath = realpath(__DIR__ . '/assets/font.ttf');

    imagefill($im, 0, 0, $bc);
    imagecopy($im, $box, 7, 20, 0, 0, 387, 546);
    imagettftext($im, 35, 0, 140, 350, $textColor, $fontPath, $text);

    imagepng($im);
    imagedestroy($im);
    imagedestroy($box);
}

function createImageLose($text)
{
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="Diploma.png"');
    $im = imagecreatetruecolor(400, 600);
    $bc = imagecolorallocate($im, 255, 224, 221);
    $textColor = imagecolorallocate($im, 33, 144, 191);
    $boxPath = realpath(__DIR__ . '/assets/lose.png');

    $box = imagecreatefrompng($boxPath);
    $fontPath = realpath(__DIR__ . '/assets/font.ttf');

    imagefill($im, 0, 0, $bc);
    imagecopy($im, $box, 7, 20, 0, 0, 387, 546);
    imagettftext($im, 35, 0, 140, 350, $textColor, $fontPath, $text);

    imagepng($im);
    imagedestroy($im);
    imagedestroy($box);
}


function showTest($testname)
{
    $directory ='D:\OpenServer\domains\localhost\tests';
    $availableTests = array_diff(scandir($directory), array('..', '.'));
    if (in_array($testname, $availableTests)) {

    } else {
        if (!empty($testname)) {
            http_response_code(404);
            echo 'Извините но запрашиваемая страница не найдена.';
            die;
        }
    }
}

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









