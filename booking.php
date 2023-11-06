<!DOCTYPE html>
<html>
<head>
    <title>صفحة حجز الحافلة</title>
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
    <?php
    include_once 'db.php';
    $eror ="" ;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       
        $date_reservation= $_POST["date_reservation"] ;
        $phone= $_POST["phone"] ;
        $Delivery_date= $_POST["Delivery_date"] ;
        $Delivery_time=$_POST["Delivery_time"] ;
        $place_delivery= $_POST["place_delivery"] ;

        $stmt =("INSERT INTO booking (date_reservation, phone, Delivery_date, Delivery_time, place_delivery) 
        VALUES ('$date_reservation', '$phone', '$Delivery_date','$Delivery_time','$place_delivery')");
        $result = mysqli_query($connection, $stmt);

      echo '<center><h3> تم حجز الحافلة بنجاح! </h3></center>';
    }else
    echo '<center><h3> بيانات الحقول مطلوبة </h3></center>';
    ?>

    <h1>حجز الحافلة</h1>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="date_reservation">تاريخ الحجز:</label>
        <input disabled value="<?php echo date('y-m-d'); ?>" id="date_reservation" name="date_reservation"  ><br>

        <label for="Delivery_date">تاريخ التسليم:</label>
        <input type="date" id="Delivery_date" name="Delivery_date" required><br>

        <label for="phone">رقم الهاتف:</label>
        <input type="number" id="phone" name="phone" required><br>

        <label for="Delivery_time"> وقت التسليم :</label>
        <input type="time" id="Delivery_time" name="Delivery_time" ><br>

        <label for="place_delivery"> مكان التسليم :</label>
        <input type="text" id="place_delivery" name="place_delivery" ><br>


        <input type="submit" value="حجز الحافلة">
    </form>
</body>
</html>