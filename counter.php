<!-- counter.php -->

<?php

$GLOBALS['countFile'] = 'data.txt'; // Change to the log file name

  // Function  takes in aurguments from the website and will exectute appropiate method
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
  // Function retreives current count from file
  function getCount() {
      // $countFile = 'data.txt'; // Change to the log file name
     $lines = file($GLOBALS['countFile']);//file in to an array
     return $lines[0];
   }

  //  Function increments current count by one and automatically saves to file
  function incrementCount() {
     $x = 1 + getCount();
     saveCount($x);
  }

  // Function saves current count
  // Params = ¢currentCount passed in when executed
  function saveCount($currentCount) {
     file_put_contents($GLOBALS['countFile'], $currentCount);
  }

  ?>
