<?php session_start();
        
?>
<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>  <?php  echo $_SESSION['cname1']; ?> </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="B_ground_login">
        <div class="back_g_log">

        <?php if(empty($_SESSION['name'])){ include('header.php'); }else{ include('header-t.php'); } ?>

            <div class="div_courses_t">

            <?php 
                include('course-1.php');
            ?>
               
        </div>
        
        </div>
    </div>

    
    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

    </html>
    <?php if(isset($_SESSION['msg-c'])){ $msg = $_SESSION['msg-c'];
    echo "<script type='text/javascript'>alert('$msg');</script>"; } 
    
    unset($_SESSION['msg-c']); ?>