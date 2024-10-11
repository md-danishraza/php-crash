<?php
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/


echo "hello world";

// var_dump($_SERVER);

if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo $_POST['age'];
}


?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30" >click me</a>


<html>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</html>


