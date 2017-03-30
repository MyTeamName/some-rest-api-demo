<form>
    <input type="text" name="city">
    <button type="submit">Search City Weather</button>
</form>

<pre>
<?php

$appid = '';

if (!empty($_GET['city'])) {
    $city = $_GET['city'];
    $endpoint = "api.openweathermap.org/data/2.5/weather?appid=$appid&q=$city&mode=html&units=imperial";

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
