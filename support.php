<!DOCTYPE html>
<html dir="rtl">	
<head>
    <title>صفحة الاتصال بالدعم الفني</title>
    <style>
        h1{margin-right: 50%;
        }
        label{
            margin: 30px;
            font-size: 20px;
        }
        input[type="text"],input[type="email"]{padding: 10px;
        width: 20%;}
    </style>
</head>
<body>
    <h1>اتصل بالدعم الفني</h1>
    
    <?php
    include_once 'db.php';
    $eror ="" ;
    // التحقق من إرسال النموذج
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // معالجة البيانات المرسلة من النموذج
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
      
        
            $stmt =("INSERT INTO support (name, email, message) VALUES ('$name', '$email','$message')");
                 $result = mysqli_query($connection, $stmt);

            echo "<p>تم إرسال رسالتك بنجاح. سنتواصل معك قريبًا.</p>";
        
    }
    ?>
    
    <!-- نموذج الاتصال بالدعم الفني -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">الرسالة:</label><br>
        <textarea style="width: 30%;margin-right:7em" id="message" name="message" rows="7"  required></textarea><br><br>
        
        <input style="margin-right: 50%;padding:10px;width:70px" type="submit" value="إرسال">
    </form>
</body>
</html>
