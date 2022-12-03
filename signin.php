<?php
$conn = mysqli_connect("localhost" , "root","", "P_njaah" );

if (isset($_POST['login'])){
    $uname = $_POST['uname'];
    $pass = $_POST['password1'];
    $path = $_POST['path'];

    $errors = array();

    if (empty($path)){
        $errors['pth'] = "يجب اختيار نوع الدخول";
        };

        if(count($errors) == 0){
            $query = "SELECT * FROM $path WHERE Username='$uname' AND pass='$pass'";
            $sql = mysqli_query($conn,$query);
            if(mysqli_num_rows($sql) == 1){
                $data = mysqli_fetch_assoc($sql);
                if($path == "trainee"){
                $_SESSION['path'] = $path;
                $_SESSION['user_num'] = $data['Te_number'];
                $_SESSION['name'] = $data['F_name'];
                $_SESSION['lname'] = $data['L_name'];
                $_SESSION['uname'] = $data['Username'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['phnumber'] = $data['Ph_number'];
                $_SESSION['pass'] = $data['pass'];
                header('location: Home-trainee.php');
                }else{
                $_SESSION['path'] = $path;
                $_SESSION['user_num'] = $data['T_id'];
                $_SESSION['name'] = $data['F_name'];
                $_SESSION['lname'] = $data['L_name'];
                $_SESSION['uname'] = $data['Username'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['phnumber'] = $data['Ph_number'];
                $_SESSION['pass'] = $data['pass'];
                $_SESSION['years_exp'] = $data['Years_Exp'];
                $_SESSION['certi'] = $data['T_certificates'];
                header('location: Home-trainers.php');
                }
                
            }else{
                $errors['ero'] = "اسم المستخدم او كلمة المرور غير صحيحة";
            }
        }
}

    if(isset($_GET['logout'])){
        unset($_SESSION['name']); unset($_SESSION['path']);
        session_destroy();
        header('location: Home.php');
    }

?>