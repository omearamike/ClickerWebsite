<!-- counter.php -->

<?php

$countFile = 'data.txt'; // Change to the log file name

  function controller() {
    if (isset($_POST['action'])) {
    switch ($_POST['action']) {
      case 'getCount':
          getCount();
          break;
      case 'incrementCount':
          incrementCount();
          break;
      }
    }
  }
  controller();

  function getCount() {
      $countFile = 'data.txt'; // Change to the log file name
     $lines = file($countFile);//file in to an array
     return $lines[0];
   }

  function incrementCount() {
     $x = 1 + getCount();
     saveCount($x);
  }

  function saveCount($currentCount) {
    $countFile = 'data.txt'; // Change to the log file name
    // $message = $_POST['name']; //outputs 'this is meaningless'
     file_put_contents($countFile, $currentCount);
    //  echo $message;

  }

  ?>
