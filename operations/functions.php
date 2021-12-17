<?php


function redirectWithError($error)
{
    $location = "Location: ../index.php?error=" . $error;
    $location = str_replace(PHP_EOL, '', $location);
    header($location);
    exit();
}

function redirectFourZeroFour($error)
{
    $location = "Location: ../404.php?error=" . $error;
    $location = str_replace(PHP_EOL, '', $location);
    header($location);
    exit();
}
