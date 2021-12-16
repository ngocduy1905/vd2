<?php 
include './pdo.php';
$sql='select * from nhaxb';
$objStatement=$objPDO->prepare($sql);
$objStatement->execute();
$dataNxb =$objStatement->fetchAll(PDO::FETCH_OBJ);

$sql='select * from loai';
$objStatement=$objPDO->prepare($sql);
$objStatement->execute();
$dataLoai =$objStatement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{width: 60px;}
    </style>
</head>
<body>
    <h1>Data table Nhaxb:   php  <-> PDO (Php Data Object)  <->  mysql </h1>
    <form action="store.php" method="post" enctype="multipart/form-data">
        ma nhaxb: <input type="text" name="manxb"> <br>
        ten nhaxb: <input type="text" name="tennxb"> <br>
        <input type="submit" value="Insert">
    </form>

    <?php 
    
    $sql="select * from nhaxb";
    $objStatement= $objPDO->prepare($sql);//return B
    $objStatement->execute();//ket qua truy van
    $n = $objStatement->rowCount();
    echo "Co $n ket qua";
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ );
   // var_dump($data);
   echo '<table  border=1>';
    foreach($data as $r)
    {
        ?>
        <tr>
            <td><?php echo $r->manxb ?></td>
            <td><?php echo $r->tennxb ?></td>
            <td>
                <a href="delete.php?manxb=<?php echo $r->manxb ?>">Xoa</a>
            </td>
            <td>
                <a href="edit.php?manxb=<?php echo $r->manxb ?>">Sua</a>
            </td>
        </tr>
        <?php 
    }
    ?>
</body>
</html>