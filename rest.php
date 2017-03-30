<form>
    <input type="text" name="acronym">
    <button type="submit">Search Acronym</button>
</form>

<pre>
<?php

if (!empty($_GET['acronym'])) {
    $acronym = $_GET['acronym'];
    $endpoint = "http://www.nactem.ac.uk/software/acromine/dictionary.py?sf=$acronym";

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

    $array = json_decode($res, true);

    echo "<ul>";

    foreach ( $array[0]['lfs'] as $key => $value ) {
        echo "<li>$value[lf]</li>";
    }

    echo "</ul>";
}
?>
</pre>
