<!-- counter.php -->

<?php

$countFile = 'mylog.txt'; // Change to the log file name


  function getCount() {
      $countFile = 'mylog.txt'; // Change to the log file name
     $lines = file($countFile);//file in to an array
     return $lines[0];
   }

  function incrementCount() {
     $x = 1 + getCount();
     saveCount($x);
  }

  function saveCount() {
    $countFile = 'mylog.txt'; // Change to the log file name
    $message = $_POST['name']; //outputs 'this is meaningless'
     file_put_contents($countFile, $message);
    //  echo $message;

  }
  // saveCount();

  // echo $_GET['wonderful_data']; //outputs 'this is meaningless'


  ?>
