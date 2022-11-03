<?php



function testStart($title)
{
    echo "<Br>";
    echo "<h3>$title</h3>";
}

function testEnd()
{
    echo "<Br>================== END ==================<Br>";
}

function doesDirExist($path)
{
    $exist = (is_dir($path)) ? "True" : "False";
    echo "<br>Does this path exist? -" . $path . " [" . $exist . "]";
}


function showDir($title, $path)
{
    //source: https://stackoverflow.com/questions/15774669/list-all-files-in-one-directory-php
    testStart("Show files in $title");
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    echo "<pre>";
    print_r($files);
    echo "</pre>";
    testEnd();
}


function showServerDirectories()
{
    testStart("Show Server directories");
    echo "<Br>Current directory is " . getcwd() . "<br>";
    echo "<Br>Current __file__" . __FILE__ . "<br>";
    echo "<Br>Current dirname __file__" . dirname(__FILE__) . "<br>";
    echo "<Br>Up 2 level, dirname __file__" . dirname(__FILE__, 2) . "<br>";
    echo "<Br>Up 2 level, dirname __DIR__" . dirname(__DIR__, 2) . "<br>";
    testEnd();
}



// TESTING STARTS HERE

echo "<h3>Start of Serverhelper</h3>";

// show current working directory
showServerDirectories();


// try and find app/Config dir
testStart("Test if app/Config directory exist, IMPORTANT!");
$loc1 = '../../class_template/app/Config'; //hardcoded
$loc1 = dirname(__DIR__, 1) . "/app/Config";
doesDirExist($loc1);
testEnd();

// Show files in config directory
showDir("app/Config", $loc1);
