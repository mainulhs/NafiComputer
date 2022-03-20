<?php 
    $id=$_GET['id'];
    $imgSql = "SELECT name FROM productimage WHERE id ='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
    ?>
<?php
		$delete ="delete from productimage where id='$id'";
        query($delete);
          $page = 'dashboard.php?page=addProductImage&err=0&msg4=Success';
          header('Location: '.$page);
	}
?>