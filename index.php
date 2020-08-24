<!DOCTYPE html>
<html>

<body>
    <?php
        /**
         * this is the name of the file with content and it has to be in the root directory of the index file
         */
        $fileName = 'my-budget.txt';

        try {
            $fileContent = file_get_contents($fileName); //reading the content of the file into the variable $fileContent
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        /**
         *  In case you are interested in seeing what is in the file, uncomment this line
         */
        //  echo "<pre>", print_r($fileContent), "</pre>";

        /**
         * the delimeter is " " (empty space) because the data in the file is separated with empty spaces
         *  If the file is an excel sheet, then the delimeter would be '\t'
         */
        $fileContentArray = explode(" ", $fileContent);
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
              <tr> 
                  <td> <font face="Arial">Number</font> </td> 
                  <td> <font face="Arial">Name</font> </td> 
              </tr>';

        /**
         *  Display the content of the array in a foreach loop
         *  the key is the array index from 0 - 13 in this case
         */
        foreach ($fileContentArray as $key => $name) {
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            echo "<td>" . $name . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo '</table border="1px solid"';
    ?>
</body>

</html>
