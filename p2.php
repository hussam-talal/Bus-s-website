<?php 
include_once 'db.php';
$eror ="" ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $full_name = $_POST['full_name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $Job_title = $_POST['Job_title'];
        $Work_Phone = $_POST['Work_Phone'];
        $Mobile_Phone = $_POST['Mobile_Phone'];
        $city = $_POST['city'];
        $street_name = $_POST['street_name'];

$Company_Name = $_POST["Company_Name"];
$Type_of_trip = $_POST["Type_of_trip"];

$stmt =("INSERT INTO users (full_name, age, email, password, Job_title, Work_Phone, Mobile_Phone, city, street_name, Company_Name, Type_of_trip) VALUES ('$full_name', '$age', '$email','$password','$Job_title', '$Work_Phone','$Mobile_Phone','$city', '$street_name', '$Company_Name', '$Type_of_trip')");
$result = mysqli_query($connection, $stmt);


header('Location: p1.php');
}

 //$row = mysqli_fetch_assoc($result);
        
            
//$eror="معلومات غير صحيحة;


        

?>
<html>
<head>
<title>تسجيل حساب جديد</title>
<meta charset="UTF-8">
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>

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
input[type=”submit”] {
display: block;
width: 100%;
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
        margin-right: 20px;
        font-size: 18px;
}
</style>

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<h1>تسجيل حساب جديد</h1>
<label for="name">الاسم كامل:</label>
<input type="text" id="name" name="full_name" value="" required>
<label for=”age”>العمر:</label>
<input type="number" id="number" name="age" value="" required>

<label for="email">البريد الإلكتروني:</label>
<input type="email" id="email" name="email" value="" required>
<label for="password">كلمة المرور:</label>
<input type="password" id="password" name="password" value="" required>
<label for=”name”>المسمى الوظيفي:</label>
<input type="text" name” name="Job_title" value="" >
<label for="number">هاتف العمل:</label>
<input type="number" id="number" name="Work_Phone" value="">

<label for="number">الهاتف المحمول:</label>
<input type="number" id="number" name="Mobile_Phone" value="" require>

<label for="name">المدينة:</label>
<input type="text" id="name" name="city" value="" required>
<br><br>
<label for="name">اسم الشارع:</label>
<input type="text" id="name" name="street_name" value="" >
<label for="name">اسم الشركة:</label>
<input type="text" id="name" name="Company_Name" value="" >
<label for=”name”>نوع الرحلة:</label>
<input type="text" id="name" name="Type_of_trip" value=""  >
<center><input type="submit" value="انشاء حساب"></center>
<br><br>
<center><a href="p3.php">انقر للحجز</a></center>
</form>
        <a href="../../../dp.php"></a>

</body>
</html>