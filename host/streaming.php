<?php
// header("Access-Control-Allow-Origin: http://localhost:63342");
header("Content-Type: text/event-stream");
set_time_limit(10);

function get_header($url, $header) {
    $headers = get_headers($url, true);
    return isset($headers[$header]) ? $headers[$header] : '';
}

function get_scheme() {
    $protocol = get_server('SERVER_PROTOCOL');
    return strtolower(substr($protocol, 0, strpos($protocol, '/'))) . '://';
}
function get_host() {
    return get_server('HTTP_HOST');
}
function get_request_uri() {
    return get_server('REQUEST_URI');
}
function get_server($server) {
    return isset($_SERVER[$server]) ? $_SERVER[$server] : '';
}
// echo get_scheme() . get_host() . get_request_uri();

echo 'data:' . get_header("http://localhost:54321/sse.html", "Content-Type");
exit;
// echo 'data:' . json_encode($_SERVER, JSON_PRETTY_PRINT);
// echo 'data:' . json_encode($_SERVER);

$i = 0;
while (true) {
    echo "id:$i\n";
    echo "data:Number is $i\n\n";

    flush();

    sleep(3);

    $i++;
}
