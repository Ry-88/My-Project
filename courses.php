<?php session_start();
    $conn = mysqli_connect("localhost" , "root","", "P_njaah" );

    $vsql = mysqli_query($conn,"SELECT * FROM t_courses WHERE C_number=1");
                $viewc1 = mysqli_fetch_assoc($vsql);
                $_SESSION['cnum1'] = $viewc1['C_number'];
                $_SESSION['cname1'] = $viewc1['C_name'];
                $_SESSION['content1'] = $viewc1['content'];
                $_SESSION['dtime1'] = $viewc1['D_time'];
                $_SESSION['cdate1'] = $viewc1['C_date'];
                $_SESSION['stime1'] = $viewc1['S_time'];
                $_SESSION['etime1'] = $viewc1['E_time'];
                $_SESSION['req_name1'] = $viewc1['Requirements_name'];
                $_SESSION['lec_courses1'] = $viewc1['lec_courses'];
                $_SESSION['price1'] = $viewc1['price'];

                if(isset($_POST['reg-c'])){
                    if(empty($_SESSION['name'])){
                        echo "<script type='text/javascript'>alert('يجب عليك تسجيل الدخول اولاً');</script>";
                    }else{
                        if($_SESSION['path'] == 'trainers'){
                            if ($_SESSION['name'] == $_SESSION['lec_courses1']){
                                echo "<script type='text/javascript'>alert('لا تستطيع التسجيل في الدورة الخاصة بك');</script>";
                            }
                        }else{
                            $user_num = $_SESSION['user_num'];
                            $cnum = $_SESSION['cnum1'];
                            $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                            if(mysqli_num_rows($sqlcheck) == 1){
                                $_SESSION['msg-con'] = "انت مسجل مسبقاً في هذه الدورة";
                                header('location: personal page.php');
                            }else{
                                $cnum = $_SESSION['cnum1'];
                                $cname = $_SESSION['cname1'];
                                $fname = $_SESSION['name'];
                                $lname = $_SESSION['lname'];
                                $sqlinc = mysqli_query($conn,"INSERT into trainee_courses (Te_num,C_num,C_name,F_name,L_name)
                                values('$user_num','$cnum','$cname','$fname','$lname')") or die(mysqli_error($conn));
                                $_SESSION['msg-c'] = 'تم التسجيل في الدورة';
                                $_SESSION['course'] = 1;
                                 header('location: course-content.php');
                            }
                            
                        }
                    }
                    
                }
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
        <form action="courses.php" method="post">
            <div class="div_courses_t">
                <div class="N_course">
                <?php  echo $_SESSION['cname1']; ?>
                </div>
                <div class="view-course">
                <div class="c1_img">
                </div>
                <input type="submit" class="click_reg-c" name="reg-c" value="تـسـجـيـل">

                <div class="c1_info">
                    <h1>نبذة عن الدورة:</h1>
                    <ul>
                        <li>اسباب تعلم لغة بايثون.</li>
                        <li>مجالات استخدام البايثون.</li>
                        <li>ابرز اطر العمل المبنيه بالبايثون.</li>

                    </ul>
                    <h1>معلومات الدورة:</h1>
                    <ul>
                        <li>مدة الدورة: <?php echo $_SESSION['dtime1']; ?></li>
                        <li>تاريخ الدورة: <?php if($_SESSION['cdate1'] != '' ){ echo $_SESSION['cdate1']; }else{
                            echo 'لا يوجد تاريخ محدد للدورة';
                        } ?></li>
                        <li>وقت بداية الدورة: <?php if($_SESSION['stime1'] != '00:00:00' ){ echo $_SESSION['stime1']; }else{
                            echo 'لا يوجد وقت بداية للدورة';
                        }  ?> </li>
                        <li>وقت نهاية الدورة: <?php if($_SESSION['etime1'] != '00:00:00' ){ echo $_SESSION['etime1']; }else{
                            echo 'لا يوجد وقت نهاية للدورة';
                        }  ?> </li>
                        <li>شروط الدورة: <?php if($_SESSION['req_name1'] != '' ){ echo $_SESSION['req_name1']; }else{
                            echo 'لا يوجد شروط للدورة';
                        }  ?> </li>
                        <li>سعر الدورة: <?php if($_SESSION['price1'] != 0 ){ echo $_SESSION['price1']; echo ' ريال '; }else{
                            echo 'الدورة مجانيه';
                        }  ?> </li>
                        <li>مقدم الدورة: <?php echo $_SESSION['lec_courses1']; ?></li>

                    </ul>
                </div>

                </div>
    
            </div>
            
        </div>
                    </form>
        </div>
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

    </html>