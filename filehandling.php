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
    $textArray14r = file("MyBudget.txt");

    foreach ($textArray14r as $key => $column) {
        array_map("<td></td>", $column);
    }
*/

    $textArray14r = file("MyBudget.txt");
    echo "<pre>", print_r($textArray14r), "</pre>";

    $textArray23c = explode("\t", $textArray14r[0]);
    echo '<br>' . print_r($textArray23c) ;

    $zeroThirteen = array_values($textArray23c);
    

/*
echo "<table border='1px solid'";

    echo '<tr>';
        foreach ($zeroThirteen as $value) echo '<th>' . $value . '</th>';
    echo '</tr>';
        foreach ($textArray14r as $value) echo '<td>' . $value . '</td>'; 
echo '</table>';

echo "<table border='1px solid'";
*/

    echo '<tr>';
        foreach ($zeroThirteen as $value) echo '<th>' . $value . '</th>';
    echo '</tr>';
        foreach ($textArray14r as $value) echo '<td>' . $value . '</td>'; 
echo '</table>';



    ?>



</body>

</html>