<?php

switch($_SERVER['REQUEST_URI']) {
    case '/':
        include '..views/index.php';
        break;
    case '/us':
        include '..views/us.php';
        break;
    default:
       echo '404 Not Found';
}