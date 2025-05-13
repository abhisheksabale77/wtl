<?php
$filename = "example.txt";

$file = fopen($filename, "w");
fwrite($file, "Hello Abhishek!\nWelcome to PHP file handling.");
fclose($file);

$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
echo "<strong>Content of the file:</strong><br>";
echo nl2br($content);

$file = fopen($filename, "a");
fwrite($file, "\nYou just appended this line!");
fclose($file);

$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
echo "<br><br><strong>After appending:</strong><br>";
echo nl2br($content);


$files = fopen("abc.txt", "w");
fwrite($files,"Hiii !! This is my first file handling program in PHP.\n");
fwrite($files,"This is php test file");

$files = fopen("abc.txt", "r");
while(!feof($files)) {
    echo fgets($files) ."<br>";
}

if (file_exists("abc.txt")) {
    echo "File exists <br>";
} else {
    echo "File does not exist <br>";
}

unlink("abc.txt");

if (file_exists("abc.txt")) {
    echo "File exists";
} else {
    echo "File does not exist";
}
?>
