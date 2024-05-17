<?php

require_once 'FileHandler.php';
require_once 'CSSGenerator.php'; // Include the CSSGenerator file


// First CSS file
$filePath1 = "style.css";
FileHandler::createFile($filePath1);

$generator1 = new MyNamespace\CSSGenerator();
$generator1->addSelector("body", null, null)
    ->addProperty("font-family", "Georgia")
    ->addProperty("margin", "0")
    ->addCloseSelector()

    ->addSelector(null, "class", "wrapper")
    ->addProperty("width", "100%")
    ->addProperty("max-width", "1080px")
    ->addProperty("padding", "0 10px")
    ->addProperty("margin", "0 auto")
    ->addCloseSelector();

FileHandler::saveCSSToFile($filePath1, $generator1->getCSSContent());

// Second CSS file
$filePath2 = "body.css";
FileHandler::createFile($filePath2);

$generator2 = new MyNamespace\CSSGenerator();
$generator2->addSelector("h1.logo", null, null)
    ->addProperty("background-image", "url(https://image.ibb.co/nuSZNa/logo.png)")
    ->addProperty("background-repeat", "no-repeat")
    ->addProperty("width", "100px")
    ->addProperty("text-indent", "-10000px")
    ->addProperty("float", "left")
    ->addCloseSelector();

FileHandler::saveCSSToFile($filePath2, $generator2->getCSSContent());



$filePath3 = "footer.css";
FileHandler::createFile($filePath3);

$generator3 = new MyNamespace\CSSGenerator();
$generator3->addSelector("h1.logo", null, null)
    ->addProperty("background-image", "url(https://image.ibb.co/nuSZNa/logo.png)")
    ->addProperty("background-repeat", "no-repeat")
    ->addProperty("width", "100px")
    ->addProperty("text-indent", "-10000px")
    ->addProperty("float", "left")
    ->addCloseSelector();

FileHandler::saveCSSToFile($filePath3, $generator3->getCSSContent());


?>

    // Add other selectors and properties similarly...

    ;

