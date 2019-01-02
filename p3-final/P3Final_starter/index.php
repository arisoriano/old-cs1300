<?php 
/* [INFO/CS 1300 Project 3] index.php 
 * Main page for our app.
 * Shows all previous posts and highlights the current user's post, if any.
 * Includes a link to form.php if user wishes to create and submit a post.
 */ 

require('wall_database.php');

// Fetching data from the request sent by form.php  
$username = $_REQUEST['username'];

$is_valid_post = true;
// Checking if a form was submitted
if (isset($_REQUEST['username'])){
  // Fetching data from the request sent by form.php  
  $username = strip_tags($_REQUEST['username']);
  
   
  // Saving the current post, if a form was submitted
  $post_fields = array();
  $post_fields['username'] = $username;
  $success_flag = saveCurrentPost($post_fields);
}

//Fetching all posts from the database
$posts_array = getAllPosts();

require('header.php');
?>
    <p><a href="form.php">Submit a Post</a></p>
    
    <?php
    if(isset($username)) {
      echo "<h3>Thanks ".$username." for submitting your post.</h3>";
    }
    ?>
    
    <p>Here are all the posts we have received.</p>
    <ul id="posts_list">
    <?php 
    
    // Looping through all the posts in posts_array
    $counter = 1;
    foreach(array_reverse($posts_array) as $post){
      $username = $post['username'];
      if ($counter % 2==1)
        $li_class = "float-left";
      else
        $li_class = "float-right";
      
      echo '<li class="'.$li_class.'"><h3><span>'.$username.'</span> wrote a post.</h3></li>';
      // Add more details here
    }
    ?>
    </ul>
  </div>
  
</body>
</html>

