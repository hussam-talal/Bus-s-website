<?php
include_once 'db.php';
$eror ="" ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
$email = $_POST["email"];
$password = $_POST["password"];
$sql= "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
$result = mysqli_query($connection, $sql);

            $row = mysqli_fetch_assoc($result);
            if ($row){
                session_start();
                $_SESSION['ID_Number']    = $row['ID_Number'];
                $_SESSION['full_name']    = $row['full_name'];
                header('Location: html.php');

            
            }

        else{$eror="معلومات غير صحيحة";

        }

}



?>
<html>
<head>
<title>تسجيل الدخول</title>
<style>
    body {
        direction: rtl;
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: #f2f2f2;
}
form {
        
background-color: #fff;
margin: 50px auto;
padding: 20px;
max-width: 600px;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
h1 {
font-size: 36px;
margin-bottom: 20px;
text-align: center;
color: #333;
}
input {
/* display: block; */
display: flex;
width: 100%;
margin-bottom: 20px;
padding: 10px;
border: none;
border-radius: 5px;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
font-size: 16px;
color: #333;
font-family: Arial, sans-serif;
}
input[type="submit"] {
display: block;
width: 100px;
padding: 10px;
border: none;
border-radius: 5px;
background-color: #333;
color: #fff;
font-size: 18px;
cursor: pointer;
transition: background-color 0.3s ease-in-out;
}
input[type=”submit”]:hover {
background-color: #555;
}
label{
    text-align:right;
    font-size:  22px; ;
}
</style>
<meta charset="UTF-8">
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<link rel="stylesheet" href="css.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<h1>تسجيل الدخول</h1>
<label for="username">الايميل:</label>
    <input type="text" id="username" name="email" required>
<br><br>
<label for="password">كلمة المرور:</label>
<input type="password" id="password" name="password" required>
<br><br>
<div> <?php echo $eror ?></div>
<center><input type="submit" value="تسجيل الدخول"></center>
<br><br>
<center><a href="p2.php">انشاء حساب جديد</a></center>
</form>
<a href="../../../dp.php"></a>
</body>
</html>