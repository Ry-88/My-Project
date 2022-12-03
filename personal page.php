<?php session_start();
    include('signin.php');
    if(empty($_SESSION['name'])){
        header('location: Home.php');
    }elseif($_SESSION['path'] == "trainers"){
        header('location: personal pageT.php');
    }
    

    if(isset($_POST['delet1'])){
        $delet = mysqli_query($conn,"DELETE FROM trainee_courses WHERE C_num=1") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        header('location: personal page.php');
    }

    if(isset($_POST['delet2'])){
        $delet = mysqli_query($conn,"DELETE FROM trainee_courses WHERE C_num=2") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        header('location: personal page.php');
    }

    if(isset($_POST['delet3'])){
        $delet = mysqli_query($conn,"DELETE FROM trainee_courses WHERE C_num=3") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        header('location: personal page.php');
    }

    if(isset($_POST['delet4'])){
        $delet = mysqli_query($conn,"DELETE FROM trainee_courses WHERE C_num=4") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        
        header('location: personal page.php');
    }
    if(isset($_SESSION['delet'])){
        $msg = $_SESSION['delet'];
        echo "<script type='text/javascript'>alert('$msg');</script>";
        unset($_SESSION['delet']);
    }

    if(empty($_SESSION['cnum1'])){
        $_SESSION['cnum1'] = "";
    }

    if(empty($_SESSION['cnum2'])){
        $_SESSION['cnum2'] = "";
    }

    if(empty($_SESSION['cnum3'])){
        $_SESSION['cnum3'] = "";
    }

    if(empty($_SESSION['cnum4'])){
        $_SESSION['cnum4'] = "";
    }
   
?>
<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> الصفحة الشخصية </title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
   
    <div class="B_ground_login">
        <div class="back_g_log">
            
        <header id="myheader" class="header">
            <div class="lists">
                <a class="name" href="Home-trainee.php">منصة نجاح
                </a>
                <div class="gets_log">
                <?php if(isset($_SESSION['name'])): ?>
                            <h4 class="hello"> مرحباً <?php echo $_SESSION['name']; ?></h4>
                </div>
                <?php endif ?>
                    <ul class="ulhomet"> 
                        <li id="one"> <a href="Home-trainee.php" href="#one">  
                            الصفحة الرئيسية </a>
                        </li>
                        <li id="tow">
                            <a href="Home-trainee.php #div_courses">الدورات
                            </a>
                        </li>
                        <li id="three">
                            <a href="personal page.php">الصفحة الشخصية</a>
                        </li>
                        <li id="four">
                            <a href="about.php">عن نجاح</a>
                        </li>
                    </ul>
                    
                    <div class="log-out">
                    <form action="header-t.php" method="GET">
                        <input type="submit" class='logout' value="تسجيل الخروج" name="logout">
                    </form>
                    </div>
            </div>
            <hr class="hr_per">
        </header>

        <div class="info_personal">
            <h2>
                الملف الشخصي
            </h2>
            <hr class="hr_login">
            <div class="account_info">معلومات الحساب</div>
            <div class="b_info">
                <div class="mail_p">
                        <label>الايميل</label>
                    <input type="email" class="mail_text_p" name="email" readonly="readonly" placeholder="الايميل"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['email'];} ?>">
                    <a class="change_e" href="ChangeEmail.php">تغيير الايميل</a>
                </div>
                    
                <div class="uname_p">
                            <label>اسم المستخدم</label>
                    <input type="text" class="uname_text_p" name="Uname" readonly="readonly" placeholder="اسم المستخدم"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['uname'];} ?>">
                </div>
                <div class="ch_pass">
                        <a href="changepass.php" class="change_pass">
                            تغيير كلمة المرور
                        </a>
                </div>
            </div>
            <br> <br> <br>
            <div class="account_info">المعلومات الشخصية</div>
            <div class="b_info">

                <div class="mail_p">
                    <label>الاسم الاول</label>
                    <input type="text" class="mail_text_p" name="first_name" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} ?>">
                </div>

                <div class="lname_p">
                    <label>الاسم الاخير</label>
                    <input type="text" class="uname_text_p" name="last_name" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['lname'];} ?>">
                </div>

                <div class="phnum_p">
                    <label>رقم الجوال</label>
                    <input type="text" class="phnumber_p" name="last_name" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['phnumber'];} ?>">
                </div>
            </div>
            <br> <br>
            <div class="account_info">الدورات المسجل فيها</div>

            <form action="personal page.php" method="post">
            <div class="box_div">
                    <?php 
                    $user_num = $_SESSION['user_num'];
                    $cnum = $_SESSION['cnum1'];
                    $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                    if (mysqli_num_rows($sqlcheck) >= 1):
                    ?> 
                    <?php echo "<div class='First_c'>
                         <a href='course-content.php' id='course1' class='viewc'>
                         <div class='c_img'>
                        </div>
                        <div class='c_info'>";
                                   echo  $_SESSION['cname1'];
                            
                                   echo "</div>   </a> 
                                   <input style='width: 60px; font-size: 18px;' type='submit'  name='delet1' value='حذف'>
                                    </div>"; ?>
                                   <?php endif; ?>
                                   

                    <?php 
                    $user_num = $_SESSION['user_num'];
                    $cnum = $_SESSION['cnum2'];
                    $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                    if (mysqli_num_rows($sqlcheck) >= 1):
                    ?> 
                    <?php echo "<div class='First_c'>
                         <a href='course-content2.php' id='course1' class='viewc'>
                         <div class='c_img'>
                        </div>
                        <div class='c_info'>";
                                   echo  $_SESSION['cname2'];
                            
                                   echo "</div>   </a>
                                   <input style='width: 60px; font-size: 18px;' type='submit'  name='delet2' value='حذف'>
                                   </div>"; ?>
                                   <?php endif; ?>

                                   
                    <?php 
                    $user_num = $_SESSION['user_num'];
                    $cnum = $_SESSION['cnum3'];
                    $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                    if (mysqli_num_rows($sqlcheck) >= 1):
                    ?> 
                    <?php echo "<div class='First_c'>
                         <a href='course-content3.php' id='course1' class='viewc'>
                         <div class='c_img'>
                        </div>
                        <div class='c_info'>";
                                   echo  $_SESSION['cname3'];
                            
                                   echo "</div>   </a>
                                   <input style='width: 60px; font-size: 18px;' type='submit'  name='delet3' value='حذف'>
                                   </div>"; ?>
                                   <?php endif; ?>

                                   
                    <?php 
                    $user_num = $_SESSION['user_num'];
                    $cnum = $_SESSION['cnum4'];
                    $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                    if (mysqli_num_rows($sqlcheck) >= 1):
                    ?> 
                    <?php echo "<div class='First_c'>
                         <a href='course-content4.php' id='course1' class='viewc'>
                         <div class='c_img'>
                        </div>
                        <div class='c_info'>";
                                   echo  $_SESSION['cname4'];
                            
                                   echo "</div>   </a> 
                                   <input style='width: 60px; font-size: 18px;' type='submit'  name='delet4' value='حذف'>
                                   </div>"; ?>
                                   <?php endif; ?>
                    </div> 
            

            </div>
            <br> <br>
            
            
         </div>
         </form>
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>
<?php if(isset($_SESSION['update'])){
    $msg = $_SESSION['update'];
    echo "<script type='text/javascript'>alert('$msg');</script>";
    unset($_SESSION['update']);}
    if(isset($_SESSION['msg-con'])){
        $msg = $_SESSION['msg-con'];
        echo "<script type='text/javascript'>alert('$msg');</script>";
        unset($_SESSION['msg-con']);}
     ?>