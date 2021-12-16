<?php 
include './pdo.php';
$m = isset($_GET['manxb'])?$_GET['manxb']:'';//lấy trong dbo
if ($m !='')//khác rỗng tức là tồn tại
{
    $sql="delete from nhaxb where manxb= ? ";
    $a =[$m];
    $objStatement= $objPDO->prepare($sql);//return B
    $objStatement->execute($a);//ket qua truy van
    //$n = $objStatement->rowCount();
}
header('location:index.php');