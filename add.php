<meta charset="utf-8">
        <?php
        
		$errors = array();
		 $uname = "";
         $fname = "";
         $lname = "";
		 $email = "";
         $phnumber = "";
         $path = "";
         
       $conn = mysqli_connect("localhost" , "root","", "P_njaah" );
	   if(!$conn){
       die("Connection Failde:" .mysqli_connect_error()); }
       
       $ee = mysqli_query($conn,"SELECT Email FROM $path WHERE Email='$email'");

       if (isset($_POST['submit'])){

            $uname = $_POST["uname"];
            $fname = $_POST["first_name"];
            $lname = $_POST["last_name"];
            $email = $_POST["email"];
            $phnumber = $_POST["phone_number"];
            $path = $_POST["path"];
            $pass = $_POST["password1"];
            $pass2 = $_POST["password2"];
   
           $uu = mysqli_query($conn,"SELECT Username FROM $path WHERE Username='$uname' ");
           

           if ($fname == ""){
            $errors['fn'] = "يجب ادخال الاسم الاول";
            };

            if (empty($lname)){
                $errors['ln'] = "يجب ادخال الاسم الاخير";
            };
   
           if (empty($uname)){
               $errors['u'] = "يجب ادخال اسم المستخدم";
           }

           if (empty($path)){
            $errors['pth'] = "يجب اختيار مسار";
            };
   
           if (empty($email)){
               $errors['e'] = "يجب ادخال الايميل";
           }

           if (empty($phnumber)){
            $errors['pn'] = "يجب ادخال رقم الجوال";
            };

            if (empty($pass)){
                $errors['p1'] = "يجب ادخال كلمة المرور";
            };

            if (empty($pass2)){
                $errors['p2'] = "يجب تأكيد كلمة المرور";
            };

           if($_POST["password1"] != $_POST["password2"]) {
               $errors['p'] = "كلمتة المرور غير متطابقة";
           };
   
                if (count($errors)==0){
					if(mysqli_num_rows($uu) > 0){
						$errors['u'] = "اسم المستخدم غير متاح";
					}if(mysqli_num_rows($ee) > 0){
						$errors['e'] = "الايميل غير متاح";
					}else{
                        
                    $query = "insert into $path (F_name,L_name,Username,Email,Ph_number,pass)
								values('$fname','$lname','$uname','$email','$phnumber','$pass')";
                    $result = mysqli_query($conn,$query);
					$_SESSION['reg'] = "تم التسجيل بنجاح";
                    header('location: Login.php');
                    }

                }
               
            }

            $sqlcourse = mysqli_query($conn,"SELECT C_number from t_courses order by C_number desc limit 0,1");
            $_SESSION['num_course'] = 0;

            if(isset($_POST['insert'])){
                
                $cname = $_POST['cname'];
                $content1 = $_POST['urlcon'];
                $content2 = $_POST['content'];
                $dtime = $_POST['dtime'];
                $cdate = $_POST['cdate'];
                $strat_time = $_POST['strat_time'];
                $end_time = $_POST['end_time'];
                $price = $_POST['price'];
                $name_req1 = $_POST['name_req'];
                $lec_course = $_SESSION['name'];
                
                

                $content = "";
                $errors = array();

                if(empty($cname)){
                    $errors['1'] = "يجب ادخال اسم الدورة";
                }
                if(empty($content1)){
                        if(empty($content2)){
                             $errors['2'] = "يجب اضافة محتوى او رابط الدورة";
                            }
                }

                if($sqlcourse){
                    $datac = mysqli_fetch_assoc($sqlcourse);
                    if (empty($datac['C_number'])){
                        $c_number = 0;
                    }else{
                        $c_number = $datac['C_number'];
                    }
                
                }
                


                $c_number += 1;
                if(count($errors) == 0){
                    
                        
                        $i = "insert into t_courses (C_number,C_name,content,D_time,C_date,S_time,E_time,Requirements_name,lec_courses,price,file_course)
                        values('$c_number','$cname','$content1','$dtime','$cdate','$strat_time','$end_time','$name_req1','$lec_course','$price','$content2')";
                    $result = mysqli_query($conn,$i) or die(mysqli_error($conn));

                    $_SESSION['msg'] = "تم اضافة الدورة بنجاح";
                    $_SESSION['cnamenew'] = $cname;
                    $_SESSION['num_course'] += 1;
                    header('location: Home-trainers.php #div_courses');
                    
                }
            }

            if(isset($_POST['change'])){
                $newe = $_POST['email_new'];
                $cone = $_POST['email_newC'];
                $path = $_SESSION['path'];

                if($newe == $_SESSION['email']){
                    $errors['1'] = "يجب ان لا يكون نفس الايميل القديم";
                }

                if($newe != $cone){
                    $errors['1'] = "الايميل المدخل غير متطابق";
                }

                if(count($errors) == 0){
                    if(mysqli_num_rows($ee) > 0){
						$errors['1'] = "الايميل غير متاح";
					}else{
                        $sql = mysqli_query($conn,"UPDATE $path set Email='$newe'");
                    $_SESSION['update'] = "تم تغيير الايميل بنجاح";
                    $_SESSION['email'] = $newe;
                    header('location: personal page.php');
                    }
                    
                }
            }

            if(isset($_POST['changepass'])){
                $oldpass = $_POST['passold'];
                $newp = $_POST['passnew'];
                $conp = $_POST['passcon'];
                $path = $_SESSION['path'];
                $uname = $_SESSION['uname'];

                $conpass = mysqli_query($conn,"SELECT pass from $path where Username='$uname'") or die(mysqli_error($conn));
                $passcheck = mysqli_fetch_assoc($conpass);
                $passch = $passcheck['pass'];
                    if($oldpass != $passch){
                        $errors['1'] = "كلمة المرور القديمة غير صحيحة";
                    }else{
                        if($newp == $oldpass){
                            $errors['2'] = "يجب ان تختلف كلمة المرور الجديدة عن القديمة";
                        }

                        if($newp != $conp){
                            $errors['3'] = "كلمة المرور غير متطابقة";
                        }

                    }

                if(count($errors) == 0){
                        $sql = mysqli_query($conn,"UPDATE $path set pass='$newp'");
                    $_SESSION['update'] = "تم تغيير كلمة المرور بنجاح";
                    header('location: personal page.php');
                    
                }
            }

        ?>
