<?php
// MVC Structure

// System folders included
include 'libs/Controller.php';
include 'libs/Database.php';
include 'libs/Model.php';

@$url = $_GET["url"]; // Get url
$url = rtrim($url, '/'); // Trim '/' character from url end
$url = explode('/', $url); // Explode url

// Check for first route include controller
if ($url[0]):
    // Include controller class and create object from class
    include 'app/controllers/' . $url[0] . '.php';
    $mainController = new $url[0];

    // Check for last route - Params
    if (isset($url[2])):
        // Call included class function
        $methodName = $url[1];
        $mainController->$methodName($url[2]);
    else:
        // Check for method include route
        if ($url[1]):
            $methodName = $url[1];
            $mainController->$methodName();
        endif;
    endif;
else:
    // if call main "/" route return home page
    include 'app/controllers/main.php';
    $mainController = new main();
    $mainController->homePage();
endif;
?>
