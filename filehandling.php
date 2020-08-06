<!DOCTYPE html>
<html>

<body>
    <?php

    # //Reads a file and writes it to the output buffer
    //echo readfile("MyBudget.txt");

    /* Read File
$myFile = fopen("MyBudget.txt", "r") or die("Unable to open File!!");
echo fread($myFile, filesize("MyBudget.txt"));
fclose($myFile);
*/

    /* Read single lines in a file
$myFile = fopen("MyBudget.txt", "r") or die("Unable to open file!");
echo fgets($myFile);
fclose($myFile);
*/

    /*Loop through a file and display single lines up to end of file
//End of file checks whether a file has reached the end 
$myFile = fopen("MyBudget.txt", "r") or die("Unable to open file!!");
// Output one line until end of file
while (!feof($myFile)) {
    echo fgetc($myFile) . "<br>";
}
fclose($myFile);
*/

    // fopen can be used to create a new file if the filename does not exist so long as you write "w" or append "a"
    //$myFile = fopen("testFile.txt", "w");
    /*
//Writes an empty file
$myFile = fopen("newFile.txt", "w") or die("Unable to write file!!");
$txt = "Timothy Saina\n";
fwrite($myFile, $txt);
$txt = "Christine Moraa\n";
fwrite($myFile, $txt);
fclose($myFile);
*/
    /*
// You can overwrite file data
$myFile = fopen("newFile.txt", "w") or die("Unable to Open file!!");
$txt = "Moraa Christine\n";
fwrite($myFile, $txt);
$txt = "Murunya Saina\n";
fwrite($myFile, $txt);
fclose($myFile);
*/

    /*
$myFile = fopen("MyBudget.txt", "r") or die("Unable to open file!");

echo "<table>";
while (!feof($myFile)) {
    echo "<tr><td width='1150' bgcolor='grey'>";
    echo fgets($myFile) . "<br>";
    echo "</td></tr>";
}
echo "</table>";
fclose($myFile);
*/


    /*
if ($MyFile = fopen("MyBudget.txt", "r"))
{
$counter = 1;
echo "<table border = 2";
while (!feof($MyFile)) {
   $data = fgets($MyFile);
   echo "<tr><td>$counter</td>";
   echo "<td>" . chunk_split($data, 5, " | ") . "</td>";
   $counter++;
}
fclose($MyFile);
} else {
    echo "Unable to open file!!";
}
*/
    /*
    if ($MyFile = fopen("MyBudget.txt", "r")) {
        $counter = 1;
        echo "<table border = 2";
        while (!feof($MyFile)) {
            $data = fgets($MyFile);
            echo "<tr><td>$counter</td>";
            for ($i = 1; $i < 5; $i++){
            echo "<td>" . chunk_split($data, $i, " ") . "</td>";
            $counter++;
            }
        }
        fclose($MyFile);
    } else {
        echo "Unable to open file!!";
    }
*/

    
    //echo "<pre>", print_r(file("MyBudget.txt")), "</pre>";
    //$txt = fopen("MyBudget.txt", "r");
    //$arrayString[0] = fgets($txt);
    //echo $arrayString[0];
    //echo "<br>", str_word_count($arrayString[0]);
    //$counter = 1;
    //for ($counter=1; $counter < 23; $counter++) {
    //    echo "<td>" . chunk_split($arrayString[0], 4, ".") . "</td>"; 
    //}
    //echo str_word_count();
    //chunk_split();
    //explode();
    //str_split();
  /*  $myFile = fopen("MyBudget.txt", "r");
    $str = fgets($myFile);
    for ($i = 5; $i <= 5; $i++) {
        echo "<span styl\"color:red\">$i</span>:" . chunk_split($str, $i, "\r\n") . " <br />";
    } */

    #
    $textArray14r = file("MyBudget.txt");
    echo "<pre>", print_r($textArray14r), "</pre>";
    $textArray23c = explode("\t", $textArray14r[0]);
    echo "<pre>", print_r($textArray23c), "</pre>";
    ?>

</body>
</html>