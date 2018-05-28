
<?php
/* 
 * Copied from peters PHP
 * please change as you like
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <title>Blog</title>
    </head>
    <body>
        <!-- please keep this php -->
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'blog';
        $action     = 'viewAll';
  }

    require_once('views/layout.php');
        ?>
        <!--end of php-->
    </body>
</html>