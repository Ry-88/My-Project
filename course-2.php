<?php 
$conn = mysqli_connect("localhost" , "root","", "P_njaah" );

$vsql = mysqli_query($conn,"SELECT * FROM t_courses WHERE C_number=2");
            $viewc1 = mysqli_fetch_assoc($vsql);
            $_SESSION['cname2'] = $viewc1['C_name'];
            $_SESSION['content2'] = $viewc1['content'];
            $_SESSION['dtime2'] = $viewc1['D_time'];
            $_SESSION['cdate2'] = $viewc1['C_date'];
            $_SESSION['stime2'] = $viewc1['S_time'];
            $_SESSION['etime2'] = $viewc1['E_time'];
            $_SESSION['req_name2'] = $viewc1['Requirements_name'];
            $_SESSION['lec_courses2'] = $viewc1['lec_courses'];
            $_SESSION['price2'] = $viewc1['price'];
            $_SESSION['filec2'] = $viewc1['file_course'];
?>

<div class="N_course">
                <?php  echo $_SESSION['cname2']; ?>
                </div>
<br>
                <iframe width="900" height="500" src="<?php echo $_SESSION['content2'] ?>"
                     frameborder="0"
                      allow="accelerometer; autoplay; picture-in-picture"
                       allowfullscreen>
                    </iframe>
                    <br> <br>
                    <div style="font-size: 20px;">
                    <?php if(!empty($_SESSION['filec2'])): echo
                "<a target='_blank' href='"; echo $_SESSION['filec2']; echo" '#toolbar=1''> ملف اضافي للدورة
                 <i class='logopdf'></i> </a>"; endif; ?>
                </div>