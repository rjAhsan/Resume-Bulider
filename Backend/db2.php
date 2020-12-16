<?php

    

if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>


