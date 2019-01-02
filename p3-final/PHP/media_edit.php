<?php
$PAGE_TITLE='Media Editor';
//This is an invisible page to users; only admins can see this page
//This page serves for clients to be able to add future media to the site easily without coding knowledge
?>

<!DOCTYPE html>
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div id='page_layout'>
        <h1>Media Editor Form for Articles About BRB</h1>
        <form action= "index.php" class="media_edit" method="post" name="form">
            Enter title of the article: <input type='text' name='title' required/>
            Enter date of the article was published by filling out the following:<br/>
            Month: <input type='number' name='month' min='1' max='12'/>  Day: <input type='number'/>  Year: <input type='number'/>
        </form>
    </div><!--page_layout-->
    <div id='footer'>
        <?php include 'footer.php'; ?>
    </div><!--footer-->
</body>
</html>