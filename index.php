<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_FORM'];?>">
        Name: <input type="text" name="fname">
        Age: <input type="text" name="inage">
        <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['fname'];
          $age = $_POST['inage'];
          if (empty($name)) {
            echo "Name is empty";
          } else {
            echo "Hello " . $name;
          }
          echo "<br>";
          if (empty($age)) {
            echo "Name is empty";
          } else {
            echo "You are " . $age . " years old!";
          }
}
    ?> 
  </body>
</html>
