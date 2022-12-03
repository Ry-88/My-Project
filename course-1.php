<?php  
$conn = mysqli_connect("localhost" , "root","", "P_njaah" );

$vsql = mysqli_query($conn,"SELECT * FROM t_courses WHERE C_number=1");
            $viewc1 = mysqli_fetch_assoc($vsql);
            $_SESSION['cname1'] = $viewc1['C_name'];
            $_SESSION['content1'] = $viewc1['content'];
            $_SESSION['dtime1'] = $viewc1['D_time'];
            $_SESSION['cdate1'] = $viewc1['C_date'];
            $_SESSION['stime1'] = $viewc1['S_time'];
            $_SESSION['etime1'] = $viewc1['E_time'];
            $_SESSION['req_name1'] = $viewc1['Requirements_name'];
            $_SESSION['lec_courses1'] = $viewc1['lec_courses'];
            $_SESSION['price1'] = $viewc1['price'];
            $_SESSION['filec1'] = $viewc1['file_course'];
?>

<div class="N_course">
                <?php  echo $_SESSION['cname1']; ?>
                </div>
                
                <iframe width="900" height="500" src="<?php echo $_SESSION['content1'] ?>"
                     frameborder="0"
                      allow="accelerometer; autoplay; picture-in-picture"
                       allowfullscreen>
                    </iframe>
                    <br> <br>
                    <div style="font-size: 20px;">
                    <?php if(!empty($_SESSION['filec1'])): echo
                "<a target='_blank' href='"; echo $_SESSION['filec1']; echo" '#toolbar=1''> ملف اضافي للدورة
                 <i class='logopdf'></i> </a>"; endif; ?>
                </div>
                
                     