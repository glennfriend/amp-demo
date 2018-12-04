<?php

function init()
{

}

/**
 * example
 *      "data-json.php"         => "//127.0.0.1:5000/page/data-json.php"
 *      "/page/data-json.php"   => "//127.0.0.1:5000/page/data-json.php"
 *
 * @param $url
 * @return string
 */
function url($url)
{
    $firstChar = substr($url, 0, 1);
    // $domainUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    $domainUrl = "//$_SERVER[HTTP_HOST]";

    if ('/' === $firstChar) {
        return $domainUrl . $url;
    }
    else {
        return $domainUrl . $_SERVER['REQUEST_URI'] . $url;
    }
}

/**
 *
 */
function jsonHeaderOutput()
{
    $domainUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    header("Content-type: application/json");
    // header("Access-Control-Allow-Credentials: true");
    // header("Access-Control-Allow-Origin: ". str_replace('.', '-','https://example.com') .".cdn.ampproject.org");
    header("AMP-Access-Control-Allow-Source-Origin: " . $domainUrl);
    // header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
    // header("AMP-Redirect-To: https://example.com/thankyou.amp.html");
    // header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin");
}

function getCssContent()
{
    return file_get_contents(__DIR__ . '/inside.css');
}
