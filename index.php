<!-- index.php -->
<?php
include 'counter.php';
?>

<html>
  <head>


    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style.css">
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




 $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        console.log(clickBtnValue);
        var ajaxurl = 'counter.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            // alert("action performed successfully");
        });
    });

});
</script>

  </head>
  <body>
    <div class="content">
      <h1 class="writtenContent"> Clicker Website </h1>




      <form action="index.php">
        <button action="index.php" type="submit" class="button btn btn-3" name="insert" value="incrementCount">Clicker</button>
      </form>


      <h1 id="currentCount" class="writtenContent"> <?php  echo getCount(); ?>  </h1>

  </div>
  </body>
</html>
