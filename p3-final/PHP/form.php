<?php 
/* [INFO/CS 1300 Project 3] form.php 
 * Contains code for the user form and submits it to posting_wall.php
 * 
 * 
 */

// Name of app
$APP_TITLE = 'Damned Debugging';

// Maximum characters for a post by a user.
$CHAR_LIMIT = 1100;
$CHAR_TEXT = 30;

?>


<!DOCTYPE html>
  <html>
    <head>
        <meta charset = "utf-8">
        <title><?php echo $APP_TITLE ?> | Vent Out Your Programming Frustrations!</title>
        
        <link type = "text/css" rel = "stylesheet"
        href = "../CSS/app_style.css">
        <link
        href="http://fonts.googleapis.com/css?family=Share+Tech+Mono|Electrolize"
        rel="stylesheet" type="text/css">
        
        <script type="text/javascript">
        function limitText(limitField, limitCount, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            } else {
                limitCount.value = limitNum - limitField.value.length;
            }
        }    
        </script>
    </head>
    
    <body>
    <div id="page-layout">
      
        <?php include('header.php'); ?>
        
        <div id="content">
            <p><a class = "regg" href="index.php">&#60;&#60; Posting Wall</a></p>
            <p></p>
            <form action= "index.php" class="post" method="post" name="form">
            Name
            <input type="text" class="text" name="name" maxlength="<?php echo $CHAR_TEXT; ?>" required>
            E-mail
            <input type="email" name="email" maxlength="<?php echo $CHAR_TEXT; ?>" required>
            Programming Language
            <input type="text" class ="text" name="language" maxlength="<?php echo $CHAR_TEXT; ?>" required>
            <p></p>
             Student <input type="radio" name="occupation" value="Student" required>
             Programmer <input type="radio" name="occupation" value="Programmer">
             Other <input type="radio" name="occupation" value="Other">
             <p></p>
             Vent<span class="smaller">&#91; do not insert tags or HTML elements &#93;</span>
             <p></p>
            <!--<textarea class = "post" name = "wallpost"></textarea>-->
            <textarea name="limitedtext" class="post"
            onKeyDown="limitText(this.form.limitedtext,this.form.countdown,<?php echo $CHAR_LIMIT; ?>);" 
            onKeyUp="limitText(this.form.limitedtext,this.form.countdown,<?php echo $CHAR_LIMIT; ?>);" required></textarea>
            <br>
            <span class="smaller">
            You have <input class="read" readonly type="text" name="countdown" value="<?php echo $CHAR_LIMIT; ?>"> characters left
            </span>
            <br>
            <p></p>
            <input type="submit" value="Post"><input type="reset" value="Reset">
            </form>
        </div><!--content-->
        
        <?php include('footer.php'); ?>
        
    </div><!--page-layout-->
    </body>
</html>
