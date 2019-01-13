<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "seraphic99";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "menu";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
	$query1 = "SELECT * FROM newimports";
    $result = mysqli_query($connection, $query1);

    echo '<table style = "width: 80%; border: 1px solid black; margin: 0 auto;"> 
        <tr> 
            <td align = "center"> <b>ID</b> </td>
            <td align = "center"> <b>Dish Name</b> </td>
            <td align = "center"> <b>Price</b> </td>
            <td align = "center"> <b>Calories</b> </td>
            <td align = "center"> <b>Rating</b> </td>
        </tr>'
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr> <td align = "left">' . $row[number] .
            '</td> <td align = "left">' . $row[dishnmae] .
            '</td> <td align = "left">' . $row[cost] .
            '</td> <td align = "left">' . $row[calories] .
            '</td> <td align = "left">' . $row[rating] .
            '</td></tr>'
    echo '</table>'
    }

