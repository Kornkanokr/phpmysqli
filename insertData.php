<?php
//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');


//รับค่าตัวแปรที่ส่งมาจากฟอร์ม
    $Trackingno = $_POST['Trackingno'];
    $Sname = $_POST['Sname'];
    $cid = $_POST['cid'];
    $Saddress = $_POST['Saddress'];
    $Sphoneno = $_POST['Sphoneno'];
    $date = $_POST['date'];
    $Rname = $_POST['Rname'];
    $Raddress = $_POST['Raddress'];
    $Rphoneno = $_POST['Rphoneno'];
    $status = $_POST['status'];

//บันทึกข้อมูล
$sql = "INSERT INTO trackno(Sname,cid,Saddress,Sphoneno,date,Rname,Raddress,Rphoneno,status) VALUES('$Sname','$cid','$Saddress','$Sphoneno','$date','$Rname','$Raddress','$Rphoneno','$status')";

$result = mysqli_query($connect,$sql); //รันคำสั่ง sql

if($result){
    echo "บันทึกข้อมูลเรียบร้อย";
}else{
    echo mysqli_error($connect);
}

?>
 <a href="index.php" class="btn btn-dark my-2">กลับหน้าแรก</a>