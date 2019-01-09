<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "seraphic99";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "menu";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
	$query = "SELECT * FROM newimports";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['number'] . " and the Username is: " . $row['dishname'];
    }

