<?php
include 'condb.php' ;
$p_name = $_POST['pname'];
$price = $_POST['price'];
$num = $_POST['num'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['fileA']['tmp_name'])) {
    $new_image_name = 'G'.uniqid().".".pathinfo(basename($_FILES['fileA']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['fileA']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

//คำสั่งเพิ่มข้อมูลในตาราง product
$sql="INSERT INTO product(pro_name,price,amount,image)
VALUES('$p_name','$price','$num','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
 echo "<script> alert('บันทึกข้อมูลเรียบร้อย');     </script>" ;
 echo "<script> window.location='showbook.php';   </script>" ;  
}else{
   echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้');     </script>" ;
}
?>