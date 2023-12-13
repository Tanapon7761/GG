<?php
include 'condb.php';
$idp = $_GET['id'];
$sqli = "SELECT * FROM product WHERE pro_id='$idp'";
$result = mysqli_query($conn,$sqli);
$rs = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
  <div class="alert alert-info h4 text-center" role="alert">
  แก้ไขข้อมูลสินค้า
</div>
<form name="form1" method="post" action="update.php" enctype="multipart/form-data">
<label>รหัสหนังสือ:</label>
 <input type="text" name="gname" class="form-control" readonly value=<?=$rs['pro_id']?> > <br>
<label>ชื่อหนังสือ:</label>
 <input type="text" name="pname" class="form-control" value=<?=$rs['pro_name']?> > <br>
<label>ราคา: </label>
<input type="number" name="price" class="form-control" value=<?=$rs['price']?> ><br>
<label>จำนวน: </label>
<input type="number" name="num" class="form-control" value=<?=$rs['amount']?>><br>
<label>รูปภาพสินค้า: </label> <br>
<img src="img/<?=$rs['image']?>" width="250"> <br> <br>
<input type="file" name="fileA" > <br> <br>
<input type="hidden" name="txtimg" class="form-control" value=<?=$rs['image']?>>

<button type="submit" class="btn btn-success">Update</button>
<a class="btn btn-primary" href="showbook.php" role="button">ยกเลิก</a>

</form>
            </div>
        </div>

    </div>   
</body>
</html>