<?php
include 'condb.php';
$ids = $_GET['id'];//ต้องใช้ id เท่านั้น
$sql="DELETE FROM product WHERE pro_id = '$ids' ";
if(mysqli_query($conn,$sql)){
    echo "<script> alert('ลบข้อมูลเรียบร้อย');     </script>" ;
    echo "<script> window.location='showbook.php';   </script>" ;  
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>" ;
}

mysqli_close($conn);

?>