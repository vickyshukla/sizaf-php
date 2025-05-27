<?php
function fetchFromWP($endpoint) {
    $url = 'https://backendcms.sizaf.com/wp-json/wp/v2/' . $endpoint;
    $response = file_get_contents($url);
    return json_decode($response, true);
}



?>
