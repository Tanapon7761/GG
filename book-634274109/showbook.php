<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>
</head>
<body>
<div class="p-3 mb-2 bg-dark-subtle ">
    <div class="container">
    <div class="alert alert-primary h4 text-center text-dark" role="alert">
  แสดงข้อมูลหนังสือ
</div>
<a class="btn btn-primary" href="addbook.php" role="button">เพิ่มหนังสือ+</a><br><br>
    <table class="table  table-dark table-hover" >
<tr>
        <th>รหัสหนังสือ</th>
        <th>ชื่อเกม</th>
        <th>ราคา</th>
        <th>จำนวน</th>
        <th>รูปเกม</th>
        <th>แก้ไขข้อมูล</th>
        <th>ลบข้อมูล</th>
        <th>เช่าหนังสือ</th>
        <th>โชหน้าเช่าหนังสือ</th>
</tr>

<?php
$sql="SELECT * FROM product ";
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
?>   
<tr>
<td class="table-light"><?=$row['pro_id']?></td>
<td class="table-light"><?=$row['pro_name']?></td>
<td class="table-light"><?=$row['price']?></td>
<td class="table-light"><?=$row['amount']?></td>
<td class="table-light"><img src="img/<?=$row['image']?>" width="200px" height="150px"></td>
<td class="table-light"><a class="btn btn-outline-warning" href="editbook.php?id=<?=$row['pro_id']?>">Edit</a></td>
<td class="table-light"><a class="btn btn-outline-danger" href="delete.php?id=<?=$row['pro_id']?>">Delete</a></td>
<td class="table-light"><a class="btn btn-success" href="hire.php?id=<?=$row['pro_id']?>">hire</a></td>
<td class="table-light"><a class="btn btn-secondary" href="showhire.php?id=<?=$row['pro_id']?>">show hire</a></td>
</tr>

<?php
}
mysqli_close($conn);
?>

</table>
</div>
</body>
</html>