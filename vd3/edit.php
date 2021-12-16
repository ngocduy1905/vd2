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

$m = isset($_GET['masach'])?$_GET['masach']:'';
if ($m=='')
{
     header('location:index.php'); 
     exit;
}
    $sql ="select * from nhaxb manxb= ? ";
    $a=[$m];
    $objStatement=$objPDO->prepare($sql);//
    $objStatement->execute($a);
    $data1 = $objStatement->fetch(PDO::FETCH_OBJ);

    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        ma sach: <input type="text" name='manxb' value='<?php echo $data1->manxb ?>' readonly> <br>
        ten sach: <input type="text" name="tennxb" value='<?php echo $data1->tennxb ?>'> <br>
      
        <input type="submit" value="Update">
    </form>

?>