<?php
if(!isset($_POST["payload"])) {
    echo "works fine!";
} else {
    $postBody = $_POST['payload'];
    $payload = json_decode($postBody);
    $myfile = fopen("testfile.txt", "w");
    fwrite($myfile, $postBody);
    fclose($myfile);
}
?>