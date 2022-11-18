<?php

require_once 'Helpers.php';

function showAbout(){
?>
     <!DOCTYPE html>
  <html>
    <head>
    <base href="<?php  echo url(); ?>" target="_blank">
      <meta charset="utf-8">
      <title>About Default</title>
    </head>
    <body>
      <h1>About Default</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo tempora voluptatum pariatur debitis? Recusandae cumque voluptatibus magnam vero culpa eligendi illum! Dolorem quis earum amet excepturi temporibus minus voluptatum laudantium!</p>
    </body>
  </html>
<?php
}
?>



<?php
  function showAboutAdmin(){
?>
     <!DOCTYPE html>
  <html>
    <head>
    <base href="<?php  echo url(); ?>" target="_blank">
      <meta charset="utf-8">
      <title>About Admin</title>
    </head>
    <body>
      <h1>About Admin</h1>
      <h1>Welcome <span style="color: goldenrod;">Admin</span> you are cool</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo tempora voluptatum pariatur debitis? Recusandae cumque voluptatibus magnam vero culpa eligendi illum! Dolorem quis earum amet excepturi temporibus minus voluptatum laudantium!</p>
    </body>
  </html>

<?php
}

function showAboutUser($parameters = null){
?>
  <!DOCTYPE html>
  <html>
    <head>
    <base href="<?php  echo url(); ?>" target="_blank">
      <meta charset="utf-8">
      <title>About User</title>
    </head>
    <body>
        <h1>About any user</h1>
        <?php
          $name = $parameters;
          echo "<h1>Welcome $name</h1>"
        ?>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo tempora voluptatum pariatur debitis? Recusandae cumque voluptatibus magnam vero culpa eligendi illum! Dolorem quis earum amet excepturi temporibus minus voluptatum laudantium!</p>
    </body>
  </html>
<?php
}
?>

