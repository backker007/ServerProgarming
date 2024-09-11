<h1> Check your information</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $date = $_POST["date"];
    $rank = $_POST["rank"];
    $district = $_POST["district"];
    $city = $_POST["amphoe"];
    $state = $_POST["province"];
    $zip = $_POST["zipcode"];
    $Phone_num = $_POST["TELEPHONE"];
    
    echo "<h2>ชื่อ<br></h2>";
    echo" <h3> $rank$name   $surname</h3>";
    echo "<h2>วัน เดือน ปีเกิด<br></h2>";
    echo "<h3>$date</h3>";
    echo "<h2>ที่อยู่</h2>";
    echo "<h3> <br> $district</h3>";
    echo "<h3> <br> $city</h3>";
    echo "<h3> <br> $state</h3>";
    echo "<h3> <br> $zip</h3>";
    echo "<h2>เบอร์โทรศัพท์<br></h2>";
    echo "<h3>$Phone_num</h3>";
}
?>
<link rel="stylesheet" href="page_2.css">