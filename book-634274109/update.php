<?php
include 'condb.php';
$proid = $_POST['gname'];
$p_name = $_POST['pname'];
$price = $_POST['price'];
$num = $_POST['num'];
$image = $_POST['txtimg'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['fileA']['tmp_name'])) {
    $new_image_name = 'G'.uniqid().".".pathinfo(basename($_FILES['fileA']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['fileA']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "$image";
    }
//คำสั่ง Update 
$sql="UPDATE product SET
pro_name = '$p_name',
price = '$price',
amount = '$num',
image = '$new_image_name'
WHERE pro_id='$proid' ";


$result=mysqli_query($conn,$sql);
if($result){
 echo "<script> alert('แก้ไขข้อมูลเรียบร้อย');     </script>" ;
 echo "<script> window.location='showbook.php';   </script>" ;  
}else{
   echo "<script> alert('ไม่สามารถแก้ไขข้อมูลได้');     </script>" ;
}
?>