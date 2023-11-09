<?php

// Insert the data into the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "practical";

            // Create a new MySQLi instance
            $con = new mysqli($servername, $username, $password, $dbname);

            // Check the database connection
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
?>