<?php 
require_once('dbhelp.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quan Ly San Pham</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quan Li Thong Tin San Pham
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Ten San Pham</th>
							<th>Anh San Pham</th>
							<th>Gia</th>
							<th>Xoa</th>
							<th>Sửa</th>
						</tr>
					</thead>
					<thead>
						<tbody>
				<?php 
				$sql = 'select * from product';
				$productList = executeResult($sql );

				$index = 1;
				foreach ($productList as $product) {
				    echo ' <tr>
				 	            <td>'.($index++).'</td>
				 	            <td>'.$product['fullname'].'</td>
				 	           <td><img height="100px" width="auto" src="'.$product['images'].'" alt=""> </td>
				 	            <td>'.$product['price'].'</td>
				 	           <td><button class="btn btn-warning" onclick=\'window.open("addproduct.php?id='.$product['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteStudent('.$product['id'].')">Delete</button></td>

				 </tr>';
				}
				 ?>			

						</tbody>
					</thead>
				</table>
				<a href="addproduct.php"><button class="btn btn-success">Add Product</button></a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Bạn có muốn xoá san pham này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('deleteproduct.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</body>
</html>