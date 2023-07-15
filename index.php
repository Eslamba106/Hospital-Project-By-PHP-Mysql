<?php include "header.php" ?>
        <div class="book" dir="rtl">
        <p>اهلا بك في مستشفي دار الشفاء </p>
        <p>للحجز املأ الاستمارة ادناة</p>
        <form action="index.php" method = "POST">
            <input type='text' placeholder='ادخل الاسم' name='name' />
            <input type='email' placeholder='ادخل البريد الالكتروني' name='email' />
            <input type='date' name='date' />
            <input type='submit' name='send' value="احجز الان"/>
        </form>
        <?php 
        #connect by database
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db   = 'hospital';
        $conn = mysqli_connect($host , $user , $pass , $db);
        ##############################################################
        #send info by patient
        $pname   = strip_tags($_POST['name']);
        $pemail  = strip_tags($_POST['email']);
        $pdate   = strip_tags($_POST['date']);
        $psend   = $_POST['send'];
        ###############
        if(isset($psend)){
            $result = "INSERT INTO patients (name , email , date) VALUE ('$pname' , '$pemail' , '$pdate')";
            $send   = mysqli_query($conn , $result);
            echo "<p style='color : green'>"."تم الحجز"."</p>";
        }else{
            echo "<p style='color : green'>"."عفوا هناك خطأ ما"."</p>"; 
        };

        
        ?>
        </div>
    </div>
</body>
</html>