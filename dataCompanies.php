
<?php
include_once 'db.php';
$eror ="" ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $Bus_size = $_POST['Bus_size'];   
    $busNumber = $_POST['Bus_number'];
    $Bus_type = $_POST['Bus_type'];
$companyName = $_POST['Company_Name'];
$Company_ID = $_POST['ID_Number'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$Work_Phone = $_POST['Work_Phone'];
$city = $_POST['City'];


$stmt =("INSERT INTO companies_and_buses (ID_Number, full_name, email, password, Work_Phone, City, Company_Name) VALUES ('$Company_ID', '$full_name', '$email','$password','$Work_Phone','$city', '$Company_Name')");
$result = mysqli_query($connection, $stmt);

$stmt1 =("INSERT INTO buses (Bus_number, Bus_size, Bus_type) VALUES ('$busNumber', '$Bus_size', '$Bus_type')");
$result1 = mysqli_query($connection, $stmt1);

header('Location: p3.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>إدخال معلومات الحافلة</title>
    <style>
        body {background: linear-gradient(rgba(0, 0, 0, 0.1),rgba(0,0,0.5,1)),  center/cover no-repeat !important;
            
            direction: rtl;
    Font-family: Arial, sans-serif;
    Margin: 0;
    Padding: 20px;
    Background-color: #f2f2f2;
}

h1 {
    margin-right: 45%;
    Color: #333;
}

Form {
    margin-top: 80px;
    Background-color: #fff;
    Padding: 20px;
    Border-radius: 5px;
    Box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

Label {
    margin-right: 40px;
    Margin-bottom: 10px;
    Font-weight: bold;
}

Input[type="text"],
Input[type="number"],
Input[type="password"],
Input[type="email"] {
    margin-bottom: 20px;
    Width: 22%;
    Padding: 10px;
    Font-size: 16px;
    Border-radius: 3px;
    Border: 1px solid #ccc;
}

Input[type="submit"] {
    Background-color: #4CAF50;
    Color: #fff;
    Border: none;
    Padding: 10px 20px;
    Font-size: 16px;
    Border-radius: 3px;
    Cursor: pointer;
    margin-right: 50%;
}

Input[type="submit"]:hover {
    Background-color: #45a049;
}

/* تنسيق العناصر في صف العمود */
Form > * {
    Margin-bottom: 10px;
}

    </style>
</head>
<body>
    <h1>إدخال معلومات الحافلة</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      
        <label for="ID_Number">رقم الشركة:</label>
        <input type="number" name="ID_Number" id="ID_Number" required>
        <label for="Company_Name">اسم الشركة:</label>
        <input type="text" name="Company_Name" id="Company_Name" required>
        <label for="full_name">الاسم الكامل :</label>
        <input type="text" name="full_name" id="full_name" required><br>
        <label for="email"> الايميل:</label>
        <input type="email" name="email" id="email" required>
        <label for="password"> كلمة المرور:</label>
        <input type="password" name="password" id="password" required>
        <label for="Work_Phone"> هاتف العمل:</label>
        <input type="number" name="Work_Phone" id="Work_Phone" required><br>
        <label for="City"> المدينة:</label>
        <input type="text" name="City" id="City" required>
        <label for="bus_number">رقم الحافلة:</label>
        <input type="text" name="bus_number" id="bus_number" required>

       
        <label for="bus_size">سعة الحافلة:</label>
        <input type="number" name="bus_size" id="bus_size" required>

        <label for="bus_type">نوع الحافلة:</label>
        <input type="text" name="bus_type" id="bus_type" required><br><br>

        <input type="submit" value="إرسال">
    </form>
</body>
</html>

