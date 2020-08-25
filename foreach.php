<!DOCTYPE html>
<html>
<head>
<title>Tables</title>
<link rel="stylesheet" href="style.css">
</head>

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

    /*

echo "<table border='1px solid'";

    echo '<tr>';
        foreach ($zeroThirteen as $value) echo '<th>' . $value . '</th>';
    echo '</tr>';
        foreach ($textArray14r as $value) echo '<td>' . $value . '</td>'; 
echo '</table>';

echo "<table border='1px solid'";

    echo '<tr>';
        foreach ($textArray23c as $value) echo '<th>' . $value . '</th>';
    echo '</tr>';
        foreach ($textArray14r as $value) echo '<td>' . $textArray14r[5] . '</td>'; 
echo '</table>';
*/
$textArray14r = file("MyBudget.txt");

echo "<table border='1px solid'>";
echo "<tr class='tableHeading' colspan='23'>USING FOREACH() LOOP</tr>";
foreach ($textArray14r as $textRow) {
        $textArray23c = explode("\t", $textRow);
        echo '<tr>';
        foreach ($textArray23c as $textColumn) {
            echo "<td>$textColumn</td>";
        }
        echo '</tr>';
    }
echo '</table><br><br>';

echo "<table border='1px solid'>";
echo "<tr colspan='23'>USING FOR() LOOP</tr>";
    for ($i=0; $i < count($textArray14r); $i++) {
        $textRow = $textArray14r[$i];
        $textArray23c = explode("\t", $textRow);
        echo '<tr>';
        for ($j=0; $j < count($textArray23c); $j++) {
            echo "<td>$textArray23c[$j]</td>";
        }
        echo '</tr>';
    }
echo '</table>';

    ?>



</body>

</html>