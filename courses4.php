<?php session_start();
    $conn = mysqli_connect("localhost" , "root","", "P_njaah" );

    $vsql = mysqli_query($conn,"SELECT * FROM t_courses WHERE C_number=4");
            
                $viewc1 = mysqli_fetch_assoc($vsql);
                $_SESSION['cnum4'] = $viewc1['C_number'];
                $_SESSION['cname4'] = $viewc1['C_name'];
                $_SESSION['content4'] = $viewc1['content'];
                $_SESSION['dtime4'] = $viewc1['D_time'];
                $_SESSION['cdate4'] = $viewc1['C_date'];
                $_SESSION['stime4'] = $viewc1['S_time'];
                $_SESSION['etime4'] = $viewc1['E_time'];
                $_SESSION['req_name4'] = $viewc1['Requirements_name'];
                $_SESSION['lec_courses4'] = $viewc1['lec_courses'];
                $_SESSION['price4'] = $viewc1['price'];

        if(isset($_POST['reg-c'])){
            if(empty($_SESSION['name'])){
                echo "<script type='text/javascript'>alert('يجب عليك تسجيل الدخول اولاً');</script>";
            }else{
                if($_SESSION['path'] == 'trainers'){
                    if ($_SESSION['name'] == $_SESSION['lec_courses4']){
                        echo "<script type='text/javascript'>alert('لا تستطيع التسجيل في الدورة الخاصة بك');</script>";
                    }
                }else{
                    $user_num = $_SESSION['user_num'];
                            $cnum = $_SESSION['cnum4'];
                            $sqlcheck = mysqli_query($conn,"SELECT * FROM trainee_courses where Te_num='$user_num' and C_num='$cnum'");
                            if(mysqli_num_rows($sqlcheck) == 1){
                                $_SESSION['msg-con'] = "انت مسجل مسبقاً في هذه الدورة";
                                header('location: personal page.php');
                            }else{
                                $cnum = $_SESSION['cnum4'];
                                $cname = $_SESSION['cname4'];
                                $fname = $_SESSION['name'];
                                $lname = $_SESSION['lname'];
                                $sqlinc = mysqli_query($conn,"INSERT into trainee_courses (Te_num,C_num,C_name,F_name,L_name)
                                values('$user_num','$cnum','$cname','$fname','$lname')") or die(mysqli_error($conn));
                                 $_SESSION['msg-c'] = 'تم التسجيل في الدورة';
                                 $_SESSION['course'] = 4;
                                  header('location: course-content4.php');
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
    <title>  <?php  echo $_SESSION['cname4']; ?> </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="B_ground_login">
        <div class="back_g_log">

        <?php if(empty($_SESSION['name'])){ include('header.php'); }else{ include('header-t.php'); } ?>
        <form action="courses4.php" method="post">
            <div class="div_courses_t">
                <div class="N_course">
                <?php  echo $_SESSION['cname4']; ?>
                </div>
                <div class="view-course">
                <div class="c1_img">
                </div>
                
                <input type="submit" class="click_reg-c" name="reg-c" value="تـسـجـيـل">
                

                <div class="c1_info">
                    <h1>نبذة عن الدوره:</h1>
                    <ul>
                        <li>اساسيات الشبكات.</li>
                        <li>البورتات والبروتوكولات.</li>
                        
                    </ul>
                    <h1>معلومات الدوره:</h1>
                    <ul>
                        <li>مدة الدوره: <?php echo $_SESSION['dtime4']; ?></li>
                        <li>تاريخ الدوره: <?php if($_SESSION['cdate4'] != '0000-00-00' ){ echo $_SESSION['cdate4']; }else{
                            echo 'لا يوجد تاريخ محدد للدوره';
                        } ?></li>
                        <li>وقت بداية الدوره: <?php if($_SESSION['stime4'] != '00:00:00' ){ echo $_SESSION['stime4']; }else{
                            echo 'لا يوجد وقت بداية للدوره';
                        }  ?> </li>
                        <li>وقت نهاية الدوره: <?php if($_SESSION['etime4'] != '00:00:00' ){ echo $_SESSION['etime4']; }else{
                            echo 'لا يوجد وقت نهاية للدوره';
                        }  ?> </li>
                        <li>شروط الدوره: <?php if($_SESSION['req_name4'] != '' ){ echo $_SESSION['req_name4']; }else{
                            echo 'لا يوجد شروط للدوره';
                        }  ?> </li>
                        <li>سعر الدوره: <?php if($_SESSION['price4'] != 0 ){ echo $_SESSION['price4']; echo ' ريال '; }else{
                            echo 'الدوره مجانيه';
                        }  ?> </li>
                        <li>مقدم الدوره: <?php echo $_SESSION['lec_courses4']; ?></li>

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
    