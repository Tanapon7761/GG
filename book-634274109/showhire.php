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
  แสดงชื่อการเช่า
</div>
<a class="btn btn-primary" href="showbook.php" role="button">กลับ</a><br><br>
    <table class="table  table-dark table-hover" >
<tr>
        <th>ชื่อ</th>
        <th>จองกี่วัน</th>
        <th>เบอร์โทร</th>
        
</tr>

<?php
$sql="SELECT * FROM hire ";
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
?>   
<tr>
<td class="table-light"><?=$row['hire_name']?></td>
<td class="table-light"><?=$row['days']?></td>
<td class="table-light"><?=$row['telephon']?></td>
</tr>

<?php
}
mysqli_close($conn);
?>

</table>
</div>
</body>
</html>