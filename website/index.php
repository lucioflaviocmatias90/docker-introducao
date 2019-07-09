<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Docker | Programador a Bordo</title>
</head>
<body>
	<?php 
		$obj1 = new \StdClass();
		$obj1->name = 'Curso 01';
		$obj1->price = '2300';

		$obj2 = new \StdClass();
		$obj2->name = 'Curso 02';
		$obj2->price = '1270';

		$result[] = $obj1;
		$result[] = $obj2;

		// $result = file_get_contents("http://node-container:9001/products");
		// $products = json_encode($result);
	?>

	<div class="container">
		<table class="table">
		<thead>
			<th>Produto</th>
			<th>Preço</th>
		</thead>
		<tbody>
			<?php foreach($result as $product): ?>
			<tr>
				<td><?php echo $product->name ?></td>
				<td><?php echo $product->price ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>