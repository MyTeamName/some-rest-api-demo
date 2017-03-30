<form>
    <input type="text" name="acronym">
    <button type="submit">Search Acronym</button>
</form>

<pre>
<?php

$appid = '';

if (!empty($_GET['acronym'])) {
    $acronym = $_GET['acronym'];
    $endpoint = "api.openweathermap.org/data/2.5/weather?appid=$appid&q=$acronym&mode=html&units=imperial";

    // create a new cURL resource
    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // grab URL and pass it to the browser
    $res = curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);

    echo $res;
}
?>
</pre>
