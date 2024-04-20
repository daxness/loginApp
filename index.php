<?php
require_once'includes/config_session.inc.php';

require_once'includes/login_view.inc.php';
?>

<!DOCTYPE html >
 <html lang="en">

  <head>
    <meta charset="UTF-8">
    
    <title> document </title>

</head>

<body>

  <h3> login <h3>

  <form action="includes/login.inc.php"  methode="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button > Login </button>
  </form>

  <?php
  check_login_errors();
  ?>

</body>

</html>

