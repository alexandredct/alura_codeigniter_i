<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Produtos</h1>
		<table class="table">
		<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?= $produto["nome"]?>
				<td><?= $produto["preco"]?>
			</tr>
		<?php endforeach;?>
		</table>
	</div>
</body>
</html>