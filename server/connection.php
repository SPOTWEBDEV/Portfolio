<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)


if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/Portfolio/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "portfolio");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
} else {
    // Online (Live Server)
    $domain = "https://spotwebtech.com.ng/";

    define("USER", "spotwebt_portfolio");
    define("PASSWORD", "spotwebt_portfolio");
    define("DATABASE", "spotwebt_portfolio");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
}

// Site configurations
$sitename = "SPOTWEB TECH";

// Email Config 
$siteemail = "contact@spotwebtech.com.ng";
$emailpassword  = "contact@spotwebtech.com.ng";
$host = 'mail.spotwebtech.com.ng';
$sitephone  = "+234 8108833188";
$siteaddress  = "MTD Gariki Enugu State Nigeria";

session_start();

?>