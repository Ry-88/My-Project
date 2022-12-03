<?php session_start();
    include('signin.php');
    if(empty($_SESSION['name'])){
        header('location: Home.php');
    }elseif($_SESSION['path'] == "trainee"){
        header('location: personal page.php');
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

            <div class="b_info">

                <div class="mail_p">
                    <label>سنوات الخبرة</label>
                    <input type="text" class="mail_text_p" name="first_name" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['years_exp'];} ?>">
                </div>

                <div class="lname_p">
                    <label>الشهادات</label>
                    <input type="text" class="crti" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['certi'];}?>">
                </div>

            </div>
            <br> <br>
            <hr class="hr_login">

            <?php include('add.php');
    $name= $_SESSION['name'];
    $s = "SELECT * FROM t_courses WHERE lec_courses='$name'";
    $sql = mysqli_query($conn,$s) or die(mysqli_error($conn));
    $numrow = mysqli_num_rows($sql);
    if($numrow > 0){
        $course =  mysqli_fetch_assoc($sql);
    $_SESSION['cname'] = $course['C_name'];
    
    }

   include('deletcourse.php');
    
    
 ?>



    <div style="background-color: #ffffff;" class="div_courses" id="div_courses">
            <div class="N_course" id="N_course">
                    الدورات الخاصة بك <br>
                    <a href="insert.php" class="click_change" >
                        إضافة دورة
                    </a>
                </div>
                <form action="personal pageT.php" method="post">
                <div class="box_div">

                <div class="First_t">
                <?php if($numrow >= 1){ echo  "<a href='courses.php'>" ;} ?>
                    <div class="c_img">
                    </div>
                    <div class="c_info">
                    <?php if($numrow >=1){
                             $sqlcourse = mysqli_query($conn,"SELECT C_name from t_courses where C_number>=1 and lec_courses='$name'")
                              or die(mysqli_error($conn));
                             $cname1 = mysqli_fetch_assoc($sqlcourse);
                             $_SESSION['cname1'] = $cname1['C_name'];
                               echo $cname1['C_name'];} else{ echo "لا يوجد محتوى";}  ?> <br> 
                    </div> <?php if($numrow >= 1){ echo "</a>";
                    echo "<input style='width: 60px; font-size: 18px;' type='submit'  name='delet1t' value='حذف'>";} ?>
                </div>

                <div class="First_t">
                <?php if($numrow >= 2){ echo  "<a href='courses2.php'>" ;} ?>
                     <div class="c_img">
                    </div>
                    <div class="c_info">
                    <?php if($numrow >=2){
                             $sqlcourse = mysqli_query($conn,"SELECT C_name from t_courses where C_number>=2 and lec_courses='$name'")
                              or die(mysqli_error($conn));
                             $cname2 = mysqli_fetch_assoc($sqlcourse);
                             $_SESSION['cname2'] = $cname2['C_name'];
                               echo $cname2['C_name'];} else{ echo "لا يوجد محتوى";}  ?> <br> 
                    </div> <?php if($numrow >= 2){ echo "</a>";
                    echo "<input style='width: 60px; font-size: 18px;' type='submit'  name='delet2t' value='حذف'>";} ?>
                </div>

                <div class="First_t">
                <?php if($numrow >= 3){ echo  "<a href='courses3.php'>" ;} ?>
                     <div class="c_img">
                    </div>
                    <div class="c_info">
                    <?php if($numrow >=3){
                             $sqlcourse = mysqli_query($conn,"SELECT C_name from t_courses where C_number>=3 and lec_courses='$name'")
                              or die(mysqli_error($conn));
                              if(mysqli_num_rows($sqlcourse) == 1){
                                $cname3 = mysqli_fetch_assoc($sqlcourse);
                                $_SESSION['cname3'] = $cname3['C_name'];
                                  echo $cname3['C_name'];}
                              }
                              else{ echo "لا يوجد محتوى";}  ?>  <br> 
                    </div> <?php if($numrow >= 3){ echo "</a>";
                         echo "<input style='width: 60px; font-size: 18px;' type='submit'  name='delet3t' value='حذف'>";} ?>
                </div>

                <div class="First_t">
                <?php if($numrow >= 4){ echo  "<a href='courses4.php'>" ;} ?>
                     <div class="c_img">

                    </div>
                    <div class="c_info">
                    <?php if($numrow >=4){
                             $sqlcourse = mysqli_query($conn,"SELECT C_name from t_courses where C_number>=4 and lec_courses='$name'")
                              or die(mysqli_error($conn));
                             $cname4 = mysqli_fetch_assoc($sqlcourse);
                             $_SESSION['cname4'] = $cname4['C_name'];
                               echo $cname4['C_name'];} else{ echo "لا يوجد محتوى";}  ?>  <br> 
                    </div> <?php if($numrow >= 4){ echo "</a>";
                    echo "<input style='width: 60px; font-size: 18px;' type='submit'  name='delet4t' value='حذف'>";} ?>
                </div>

            </div>
                </form>
    </div>

            
         </div>
            
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
        if(isset($_SESSION['delet'])){
            $msg = $_SESSION['delet'];
            echo "<script type='text/javascript'>alert('$msg');</script>";
            unset($_SESSION['delet']);
            header('location: personal pageT.php');
        }
         ?>