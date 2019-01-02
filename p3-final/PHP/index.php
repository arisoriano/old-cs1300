<?php
/* [INFO/CS 1300 Project 3] index.php 
 * Main page for our app.
 * Shows all previous posts and highlights the current user's post, if any.
 * Includes a link to form.php if user wishes to create and submit a post.
 */

// The current date and time, i.e. timestamp
$today = date("Y-m-d H:i:s");

$APP_TITLE = 'Damned Debugging';

// Fetching username from the request sent by form.php
//if (isset($_REQUEST['name'])){
//    $user = $_REQUEST['name'];
//}

// Imports database
require('wall_database.php');
?>

<?php

   
function remove_bad($data)
{
     $data = trim($data);
     $data = strip_tags($data);
     return $data;
}
?>

<?php
$is_valid_post = true;
// Checking if a form was submitted
if (isset($_REQUEST['name'])){
  // Fetching data from the request instance sent by form.php  
    $user = remove_bad($_REQUEST['name']);
    $user1 = remove_bad($_REQUEST['name']);
    $email = remove_bad($_REQUEST['email']);
    $language = remove_bad($_REQUEST['language']);
    $occupation = remove_bad($_REQUEST['occupation']);
    $wallpost = remove_bad($_REQUEST['limitedtext']);
    
  // Saving the current post, if a form was submitted
  $post_fields = array();
  $post_fields['name'] = $user;
  $post_fields['email'] = $email;
  $post_fields['language'] = $language;
  $post_fields['occupation'] = $occupation;
  $post_fields['limitedtext'] = $wallpost;
  $post_fields['time'] = $today;
  $success_flag = saveCurrentPost($post_fields);
}

//Fetching all posts from the database
$posts_array = getAllPosts();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title><?php echo $APP_TITLE ?> | Vent Out Your Programming Frustrations!</title>
        
        <link type = "text/css" rel = "stylesheet"
        href = "../CSS/app_style.css">
        <link
        href='http://fonts.googleapis.com/css?family=Share+Tech+Mono|Electrolize'
        rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div id = "page-layout">
            
            <?php include('header.php'); ?>
            
            <div id = "content">
                
                <?php
                if(isset($user)) {
                  echo '<p class="right">Welcome <span class="name">'.$user. '<span></p>';
                }
                ?>
             
                <p><a href="form.php" class="regg">&#62;&#62; Submit a Post</a></p>
        
                <?php
                if(isset($user)) {
                  echo '<p>Thanks <span class="name">'.$user.'</span> for submitting your post.</p>';
                }
                ?>
        
                <p>Here are some other coding frustrations that we've recieved:</p>
                <p></p>
                <div id="posts_list">
                    
                        <?php 
                        // Looping through all the posts in posts_array
            
                        foreach(array_reverse($posts_array) as $post){
                            $name = $post['name'];
                            $language = $post['language'];
                            $occupation = $post['occupation'];
                            $wallpost = $post['limitedtext'];
                            $today = $post['time'];
                            $div_class = "reg";
                            if (isset($user1)){
                                if ($name==$user1){
                                    $div_class = "current_user";
                                }
                                
                            }
                            $string = '<div class="'.$div_class.'"><h2 class="post">'.$name.' | '.$language.' | '.$occupation.' <span class="gray">'.$today.'</span></h2><br>'.$wallpost.'</div><p></p>';
                            echo $string;     
                            
                            }
                        
                        ?>
                </div><!--post_list-->   
            </div><!--content-->
            
            <?php include('footer.php'); ?>
            
        </div><!--page-layout-->
    </body>
</html>