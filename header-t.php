<?php include('signin.php'); ?>
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
                        <a onclick="changeHr()" href="Home-trainee.php #div_courses">الدورات
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
                <form action="Home-trainee.php" method="GET">
                    <input type="submit" class='logout' value="تسجيل الخروج" name="logout">
                </form>
                </div>
        </div>
        <hr id="hr" class="tow">
</header>
