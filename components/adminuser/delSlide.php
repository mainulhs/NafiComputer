<?php 
    $id=$_GET['id'];
    $imgSql = "SELECT name FROM slide WHERE id ='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
    ?>
<?php
		$delete ="delete from slide where id='$id'";
        query($delete);
          $page = 'dashboard.php?page=addSlide&err=0&msg4=Success';
          header('Location: '.$page);
	}
?>