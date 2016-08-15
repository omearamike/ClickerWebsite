<!-- index.php -->
<?php
include 'counter.php';
?>

<html>
  <head>


    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<title>Test Page</title>
<script>
 function passVal(){
     var data = {
         fn: "filename",
         str: "this_is_a_dummy_test_string"
     };

     $.post("counter.php", data);
 }
 passVal();
</script>
    <style>

      body {
          color: #f1c72f;
          height: auto;
          background-color: white;
          height: auto;
          padding: 0 -8px 0 -8px;
      }

      .content {
          font-size: 2vw;
          font-weight: 900;
          height: 100vw;
          width: auto;
          -webkit-font-smoothing: antialiased;
          font-family: Montserrat;
          line-height: 1.2em;
          position: relative;
          text-align: center;
          list-style: none;
          background-color: #e2edf1;
          z-index: 1000;
          /*padding: 0%;*/
          padding-top: 15%;
          margin: 20px;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <h1> Clicker Website </h1>

      <script>
        var x = <?php  echo getCount(); ?> ; // should be var not int
      function counter() {
        x += 1;
        document.getElementById("currentCount").innerHTML = x; //getElementById() not getElementByID() Which you corrected in edit
        // document.getElementById("inputCount").value = "this is the count";
      }

      function postCount() {
        document.body.innerHTML += ' <form id="postCountForm" action="counter.php" method="POST"> <p>Your name: <input type="text" name="name" value="fjkdsk" /></p> <p>Your age: <input type="text" name="age" /></p> </form> ';
        document.getElementById("postCountForm").submit();
        // document.body.innerHTML += '<form id="postCountForm" action="counter.php" method="POST"><input type="text" name="name" value="454534"></form>';
        // document.getElementById("postCountForm").submit();
      }




      </script>

      <button class="clickerBtn">
        <a onclick="counter()" class="btn">   Clicker </a>
      </button>



      <h1 id="currentCount"> <?php  echo getCount(); ?>  </h1>

      <!-- <a href="counter.php?wonderful_data=this+is+meaningless">Click me to magically send data to the server</a> -->
      <!-- <form action="counter.php" method="POST">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form> -->
  </div>
  </body>
</html>
