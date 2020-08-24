<!DOCTYPE html>
<html>

<body>
    <?php
        $fileName = 'my-budget.txt';

        try {
            $fileContent = file_get_contents($fileName);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        //  echo "<pre>", print_r($fileContent), "</pre>";

        $fileContentArray = explode(" ", $fileContent);
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
              <tr> 
                  <td> <font face="Arial">Number</font> </td> 
                  <td> <font face="Arial">Name</font> </td> 
              </tr>';

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
