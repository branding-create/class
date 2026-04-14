<?php
// api/index.php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($request_uri == '/' || $request_uri == '') {
    $request_uri = '/index.php';
}

// Append .php if there is no extension
if (preg_match('/^[^\.]+$/', $request_uri)) {
    $request_uri .= '.php';
}

$file = realpath(__DIR__ . '/..' . $request_uri);

if ($file && file_exists($file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
    // We set the SCRIPT_FILENAME so that the PHP file knows where it really is
    $_SERVER['SCRIPT_FILENAME'] = $file;
    // Change to directory of the target file so includes work (XAMPP relative includes might expect this)
    chdir(dirname($file));
    require $file;
} else {
    http_response_code(404);
    echo "404 Not Found";
}
