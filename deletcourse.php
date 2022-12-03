<?php
 $conn = mysqli_connect("localhost" , "root","", "P_njaah" );
if(isset($_POST['delet1t'])){
        $delet = mysqli_query($conn,"DELETE FROM t_courses WHERE C_number=1") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
    
    }

    if(isset($_POST['delet2t'])){
        $delet = mysqli_query($conn,"DELETE FROM t_courses WHERE C_number=2") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
    
    }

    if(isset($_POST['delet3t'])){
        $delet = mysqli_query($conn,"DELETE FROM t_courses WHERE C_number=3") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        
    }
    
    if(isset($_POST['delet4t'])){
        $delet = mysqli_query($conn,"DELETE FROM t_courses WHERE C_number=4") or die(mysqli_error($conn));
        $_SESSION['delet'] = 'تم حذف الدورة';
        $_SESSION['cnum4'] ="";
        
    }
    ?>