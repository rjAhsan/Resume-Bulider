<?php
            $servername = "localhost";
            $username = "root";
            $passwords = "";
            $dbname = "resumebulider";
            
            $conn = mysqli_connect($servername, $username, $passwords, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
          


?>