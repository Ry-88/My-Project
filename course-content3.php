<?php session_start();
        
?>
<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>  <?php  echo $_SESSION['cname3']; ?> </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="B_ground_login">
        <div class="back_g_log">

        <?php if(empty($_SESSION['name'])){ include('header.php'); }else{ include('header-t.php'); } ?>

            <div class="div_courses_t">

            <?php 
$conn = mysqli_connect("localhost" , "root","", "P_njaah" );

$vsql = mysqli_query($conn,"SELECT * FROM t_courses WHERE C_number=3");
            $viewc1 = mysqli_fetch_assoc($vsql);
            $_SESSION['cname3'] = $viewc1['C_name'];
            $_SESSION['content3'] = $viewc1['content'];
            $_SESSION['dtime3'] = $viewc1['D_time'];
            $_SESSION['cdate3'] = $viewc1['C_date'];
            $_SESSION['stime3'] = $viewc1['S_time'];
            $_SESSION['etime3'] = $viewc1['E_time'];
            $_SESSION['req_name3'] = $viewc1['Requirements_name'];
            $_SESSION['lec_courses3'] = $viewc1['lec_courses'];
            $_SESSION['price3'] = $viewc1['price'];
            $_SESSION['filec3'] = $viewc1['file_course'];
?>

<div class="N_course">
                <?php  echo $_SESSION['cname3']; ?>
                </div>
<br>
                <iframe width="900" height="500" src="<?php echo $_SESSION['content3'] ?>"
                     frameborder="0"
                      allow="accelerometer; autoplay; picture-in-picture"
                       allowfullscreen>
                    </iframe>
                    <br> <br>
                    <div style="font-size: 20px;">
                    <?php if(!empty($_SESSION['filec3'])): echo
                "<a target='_blank' href='"; echo $_SESSION['filec3']; echo" '#toolbar=1''> ملف اضافي للدورة
                 <i class='logopdf'></i> </a>"; endif; ?>
                </div>
               
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