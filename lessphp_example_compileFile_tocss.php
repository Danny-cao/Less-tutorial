<?php 
    include_once("./lessphp/lessc.inc.php");
    
    $less = new lessc();
    
    $colorArray = array( "changeColor1" => "rgb(67,103,188)",
                         "changeColor2" => "rgb(10, 18, 180)",
                         "lineThicknessSolid" => "1px solid",
                         "textColor" => "lighten(#FF0000, 0%)");
                         
    if (isset( $_POST["submit"]))
    {
        var_dump($_POST);
        $colorArray["changeColor1"] = $_POST["color1"];
        $colorArray["changeColor2"] = $_POST["color2"];
        $colorArray["lineThicknessSolid"] = $_POST["lineThickness"]."px solid";
        $colorArray["textColor"] = $_POST["darkOrLight"]."(".
                                   $_POST["color3"].", ".$_POST["colorPerc"]."% )";
        
    }
    
    $less->setVariables($colorArray);
    
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
        
        
        <form action="./lessphp_example_compileFile_tocss.php" method="post">
            <table>
                <tr><td>Voer kleur 1 in: </td><td><input type="color" name="color1" value="#FFAA00"></td></tr>
                <tr><td>Voer kleur 2 in: </td><td><input type="color" name="color2" value="#FFAA00"></td></tr>
                <tr><td>Kies een lijndikte: </td><td>
                                                    <select name="lineThickness">
                                                        <option value="1">1</option>
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>                                                        
                                                        <option value="20">20</option>                                                       
                                                    </select>
                                                 </td>
                </tr>
                <tr><td>Voer tekstkleur in: </td><td><select name="darkOrLight">
                                                        <option value="darken">darken</option>
                                                        <option value="lighten">lighten</option>                                             
                                                    </select>
                                                    <input type="color" name="color3" value="#FFAA00">
                                                    <select name="colorPerc">
                                                        <option value="1">1</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>                                                        
                                                        <option value="40">40</option>                                                       
                                                    </select>
                                             </td>
                </tr>
                <tr>
                    <td></td>
                    <td>               
                        <input type="submit" name="submit" value="verander tabel!"> 
                    </td>
                </tr>             
            </table>     
        </form>
    </body>
</html>