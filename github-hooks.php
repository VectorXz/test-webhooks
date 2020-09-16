<?php
if(!isset($_POST["payload"])) {
    echo "works fine!";
    $myfile = fopen("testfile.txt", "w");
    fwrite($myfile, "Hello");
    fclose($myfile);
} else {
    $postBody = $_POST['payload'];
    $payload = json_decode($postBody, true);
    $myfile = fopen("testfile.txt", "w");
    fwrite($myfile, $payload["repository"]["full_name"]);
    fwrite($myfile, $payload["commits"][0]["id"]);
    fclose($myfile);
    $file = fopen("testfile.txt","r");
    $contents = fread($file,filesize("testfile.txt"));
    fclose($file);
    echo $contents;
}
?>