<?php
declare(strict_types=1);


//Last redirect to the game page
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}

if (array_key_exists("HTTP_X_FORWARDED_HOST", $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $forwardedHostComponents = explode(',', $_SERVER["HTTP_X_FORWARDED_HOST"]);
    $uri .= trim(end($forwardedHostComponents));
} else {
    $uri .= $_SERVER['HTTP_HOST'];
}
$redirectPath = $uri . "/SWUOnline";
$autoDeleteGames = false;

