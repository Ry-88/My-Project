<?php session_start();
?>
<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>  عن نجاح </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="B_ground_login">
        <div class="back_g_log">

        <?php if(empty($_SESSION['name'])){ include('header.php'); }else{ include('header-t.php'); }
         
        ?>
            
            <div class="div_courses_t">
                <div class="N_course">
               منصة نجاح
                </div>
                <br>
                <div class="about">
                <h4>الرؤية:</h4>
                 نهدف إلى  تخريج دفعات من المتدربين القادرين على التفاعل بإيجابية<br>
                 مع متطلبات العصر الحديث القائم على التكنولوجيا، عبر بيئة إلكترونية <br> 
                 تعليمية مفيدة من المجتمع وللمجتمع على حد سواء ،وتحقيق الريادة <br> 
                 والابتكار والإبداع في التعليم عن بعد وجميع مجالاته، وخدمة المجتمع  المحلي. <br> <br>

                 <h4>الرسالة:</h4>
                  نسعى عبر منصة نجاح إلى تحقيق مبدأ التعاون المثمر<br>
                بين أفراد العملية التعليمية، العمل على تعزيز مبدأ التنمية التعليمية
                المستدامة ،<br>
                 هدفنا في المنصة ان نقدم لك شيء تستفيد منه ويضيف الى  معرفتك شيئاً ثميناً
                 ، المساهمة الدائمة في <br>
                 تقدم العملية التعليمية (عن بعد)
                مساعدة المتدربين على مواجهة تحديات سوق العمل، <br>
                تقديم أكبر قدر ممكن
                من الدورات المفيدة ، تطوير التعليم عن بعد . <br> <br>

                <h4>وشعارنا:</h4>
                " حيث للنجاح لذة تنسيك مرارة الصعاب"

                </div>
    
            </div>
            
        </div>
        
        </div>
    </div>

    
    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

    </html>