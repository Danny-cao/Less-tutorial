<?php
    include_once("./lessphp/lessc.inc.php");

    $less = new lessc();


    $less->setVariables(array(
        "changeColor1" => "rgb(40,40,40)",
        "changeColor2" => "rgb(10, 18, 180)"
    ));

    $less->compileFile("less_compilefile.less", "less_compilefile.css");
?>

<!DOCTYPE html>
<html>
    <head>
       <title>Table LESS</title>
       <!--
       <link rel="stylesheet/less"  type="text/css" href="./style.less">
       <script src="./less.js/dist/less.js"></script>
       -->
       <link rel="stylesheet" type="text/css" href="less_compilefile.css">
    </head>
    <body>
        <table id="tbl1">
            <tr>
               <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>
            </tr>
        </table>

        <table id="tbl2">
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>
            </tr>
        </table>

        <form action="./lessphp_example_compileFile_tocss.php">
          Kleur: <input type="color" name="color" value"#tbl1"><br>
          <input type="submit" value="Submit">
        </form>

    </body>
</html>