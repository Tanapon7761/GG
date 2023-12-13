<?php
include 'condb.php' ;
$p_name = $_POST['pname'];
$days = $_POST['days'];
$num = $_POST['num'];


//คำสั่งเพิ่มข้อมูลในตาราง product
$sql="INSERT INTO hire(hire_name,days,telephon)
VALUES('$p_name','$days','$num')";
$result=mysqli_query($conn,$sql);
if($result){
 echo "<script> alert('บันทึกข้อมูลเรียบร้อย');     </script>" ;
 echo "<script> window.location='showbook.php';   </script>" ;  
}else{
   echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้');     </script>" ;
}
?>