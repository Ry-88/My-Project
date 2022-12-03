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



    <div style="height: 400px;" class="div_courses" id="div_courses">
            <div class="N_course" id="N_course">
                    الدورات<br>
                    <a href="insert.php" class="click_change" >
                        إضافة دورة
                    </a>
                </div>
                <br> <br> <br> <br>
                <form style="margin-top: -82px;" action="Home-trainers.php" method="post">
                <div class="box_div">
                    
                    
                <div class="First_c">
                    <?php if($numrow >= 1){ echo "<a href='courses.php' id='course1' class='viewc'>" ;} ?>
                     <div class='c_img'>
                    </div>
                    <div class="c_info">
                    <?php if($numrow >=1){
                             $sqlcourse = mysqli_query($conn,"SELECT * from t_courses where C_number=1") or die(mysqli_error($conn));
                             $cname1 = mysqli_fetch_assoc($sqlcourse);
                             $_SESSION['cnum1'] = $cname1['C_number'];
                             $_SESSION['cname1'] = $cname1['C_name'];
                               echo $_SESSION['cname1'];} else{ echo "لا يوجد محتوى";}  ?>
                        
                    </div> <?php if($numrow >= 1){ echo "</a>";} ?>
                </div> 

                

                <div class="First_c">
                <?php if($numrow >= 2){ echo  "<a id='course2' href='courses2.php'>" ;} ?>
                    <div class="c_img">
                    </div>
                    <div class="c_info"> <?php if($numrow >=2){
                    $sqlcourse = mysqli_query($conn,"SELECT * from t_courses where C_number=2") or die(mysqli_error($conn));
                    $cname2 = mysqli_fetch_assoc($sqlcourse);
                    $_SESSION['cnum2'] = $cname2['C_number'];
                             $_SESSION['cname2'] = $cname2['C_name'];
                     echo $_SESSION['cname2'];} else{ echo "لا يوجد محتوى";} ?><br> 
                    </div> <?php if($numrow >= 2){ echo "</a>";} ?>
                </div>

                <div class="First_c">
                <?php if($numrow >= 3){ echo  "<a href='courses3.php'>" ;} ?>
                    <div class="c_img">

                    </div>
                    <div class="c_info"> <?php if($numrow >=3){
                    $sqlcourse = mysqli_query($conn,"SELECT * from t_courses where C_number=3") or die(mysqli_error($conn));
                    $cname3 = mysqli_fetch_assoc($sqlcourse);
                    $_SESSION['cnum3'] = $cname3['C_number'];
                    $_SESSION['cname3'] = $cname3['C_name'];
                     echo $_SESSION['cname3'];} else{ echo "لا يوجد محتوى";} ?> <br> 
                    </div> <?php if($numrow >= 3){ echo "</a>";} ?>
                </div>

                <div class="First_c">
                <?php if($numrow >= 4){ echo  "<a href='courses4.php'>" ;} ?>
                    <div class="c_img">

                    </div>
                    <div class="c_info"> <?php if($numrow >=4){
                    $sqlcourse = mysqli_query($conn,"SELECT * from t_courses where C_number=4") or die(mysqli_error($conn));
                    $cname4 = mysqli_fetch_assoc($sqlcourse);
                    $_SESSION['cnum4'] = $cname4['C_number'];
                    $_SESSION['cname4'] = $cname4['C_name'];
                    echo $_SESSION['cname4'];} else{ echo "لا يوجد محتوى";} ?> <br> 
                    </div> <?php if($numrow >= 4){ echo "</a>";} ?>
                </div>

                </div>
                </form>
    </div>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <div class="div_courses" id="div_coursese">
                <div class="N_course" id="N_coursee">
                    منصات يمكنك الاستفادة منها
                </div>

                <div class="box_div">
                <div class="second_c">
                    <a href="https://doroob.sa/ar/"> <div class="drob">

                    </div>
                    <div class="c_info">
                        منصة دروب <br> 
                        <span>منصة وطنية للتدريب الإلكتروني، وهي إحدى مبادرات صندوق تنمية الموارد البشرية "هدف" التي تسعى إلى تطوير قدرات ورفع مهارات القوى الوطنية من الذكور والإناث</span>
                    </div> </a>
                </div>

                <div class="link2">
                    <a href="https://heemam.com/?https://heemam.com/diploma"> <div class="hemam">

                    </div>
                    <div class="c_info">
                        منصة هِمم <br> 
                        <span>همم منصة عربية جديدة توفر الدروس والدورات والحقائب التدريبية والمواد التعليمية في مجالات متنوعة لمجتمع عربي واعٍ ومتعلم</span>
                    </div> </a>
                </div>
                
                <div class="link3">
                    <a href="https://tp.ksu.edu.sa/"> <div class="ksuelearning">

                    </div>
                    <div class="c_info">
                        منصة التدريب الإلكتروني لمنسوبي جامعة الملك سعود <br> 
                        <span>
                        أُسست المنصة التدريبية
                        لتكون بيئة تدريب تفاعلية رقمية لكافة منسوبي الجامعة تُمكنهم من الالتحاق بالدورات التدريبية المختلفة من أي مكان وفي أي زمن مناسب لهم
                        </span>
                    </div> </a>
                </div>
                
                <div class="link4">
                    <a href="https://tamkeen-edu.org/"> <div class="tmken">

                    </div>
                    <div class="c_info">
                        منصة تمكين <br> 
                        <span>تعد مؤسسة تمكين للتدريب مشروعاً رائداً في تقديم التدريب بشكل احترافي عن بعد وعلى الأرض في سوريا . وتصبو لتنمية مهارات وفكر الأفراد للمساهمة في تشكيل جيل متمكن قادر على النهوض بالمجتمع.</span>
                    </div> </a>
                </div>
                    </div>
            
        </div>