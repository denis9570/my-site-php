<?php

 $savePath = "count.txt";
 $count = file_get_contents($savePath);
 $count++;
 file_put_contents($savePath, $count);
?>

<link href="style.css" rel="stylesheet" type="text/css">

<a href="index.php"><img src="pictures/logo.png" height="60px" align="left"/></a>
<div style="float: right; width: 300px;">
    <input type="button" value="Регистрация" id="registerButton" style="float: right;"/>
    <br clear="all"/>

    <!-- relative without taking space, see: https://stackoverflow.com/questions/6040005 -->
    <div style="position: relative; width: 0; height: 0;">
        <div style="position: absolute; display:none;" id="registerDialog" >

            <form action="" method="get" OnSubmit="return Validate(this);">
                <table style="background-color: rgb(116, 157, 195);">
                    <tr>
                        <td>User name:</td>
                        <td><input type="text" id="user"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="pass"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Repeat password:</td>
                        <td><input type="password" id="reppass"/>
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" id="mail"/>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Registration"/></td>
                        <td><input type="reset" value="Cancel"/>
                        </td>
                    </tr>
                </table>

            </form>

        </div>
    </div>
</div>
<br clear="all"/>

<div id="cssmenu" style="text-align:center;">
    <div style="display: inline-block;">
        <ul id="menu">

            <li><a href="rome.php">Распад Римской империи</a></li>
            <li><a href="crusades.php">Крестовые походы</a></li>
            <li><a href="war.php">Столетняя война</a></li>
            <li><a href="inquisition.php">Святая инквизиция</a></li>
            <li><a href="church.php">Раскол церкви</a></li>
            <li><a href="alchemist.php">Аниме</a></li>
        </ul>
    </div>
</div>

<script src="main.js" type="text/javascript"></script>