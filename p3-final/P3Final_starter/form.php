<?php 
/* [INFO/CS 1300 Project 3] form.php 
 * Contains code for the user form and submits it to posting_wall.php
 * 
 * 
 */



// A variable for the username of the current user.
$user = "NEW USER";

// TODO Include common header code

?>

  <!--TODO Add a name for your app -->
  <p><a href="index.php">Posting Wall</a></p>
  <p>Welcome <?php echo $user; ?></p>
  
  <html>
    <head>
        <meta charset = "utf-8">
        <title>DamnedDebugging | Vent Out Your Programming Frustrations!</title>
        <link type = "text/css" rel = "stylesheet"
        href = "../CSS/app_style.css">
    </head>
<body>
    <div id = "page-layout">
        <div id = "nav">
            <h1 class = "header">Damned Debugging</h1>
            <h2 class = "header">&#60;Vent out your programming frustrations!&#62;</h2>
        </div><!--nav-->
        <div id = "content">
            <form action = "../PHP/wall_post.php" method = "post">
            Name:
            <input type = "text" name = "name">
            E-mail:
            <input type = "email" name = "email">
            Programming Language:
            <input type = "text" name = "language">
            <p></p>
             Student: <input type="radio" name="occupation" value="Student">
             Programmer: <input type="radio" name="occupation" value="Programmer">
             Other: <input type="radio" name="occupation" value="Other">
             <p></p>
             Vent:
             <p></p>
             <textarea class = "post" name = "wallpost"></textarea>
            <p class = "reg"><input type = "submit" value = "Post to Wall"></p>
            </form>
        </div><!--content-->
        <div id = "footer">
            <hr>
            <p class = "footer">&copy; 2013 by Ariel Soriano<p></p>
        </div><!--footer-->
    </div><!--page-layout-->
</body>
</html>
