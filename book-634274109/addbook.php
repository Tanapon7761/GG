<?php
include 'condb.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>

    <body class=" bg-dark-subtle alert alert-info " role="alert">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">              
  <div class="alert alert-primary h4 text-center text-dark" role="alert">
  เพิ่มหนังสือ
</div>
<form name="form1" method="post" action="insertbook.php" enctype="multipart/form-data">
 <label class="text-dark">ชื่อหนังสือ:</label>
 <input type="text" name="pname" class="form-control" placeholder="ชื่อหนังสือ..." required > <br>
<label class="text-dark">ราคา: </label>
<input type="number" name="price" class="form-control" placeholder="ราคา..." required ><br>
<label class="text-dark">จำนวน: </label>
<input type="number" name="num" class="form-control" placeholder="จำนวน..." required ><br>
<label class="text-dark">รูปภาพสินค้า: </label>
<input type="file" name="fileA" required class="text-emphasis-light"> <br> <br>

<button type="submit" class="btn btn-success">ตกลง</button>
<a class="btn btn-primary" href="showbook.php" role="button">ยกเลิก</a>

</form>
            </div>
        </div>

    </div>
  
</body>
</html>