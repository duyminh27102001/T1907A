<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelp.php');
	$sql = 'delete from product where id = '.$id;
	execute($sql);

	echo 'Xoá sinh San Pham Thanh Cong';
}