<?php
require('./inc/include.php');
$result = callAPI('https://restcountries.eu/rest/v2/all');
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
	<?php include('./layout/head.php') ?>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></style>
</head>
<body class="d-flex flex-column h-100">
	<?php include('./layout/header.php') ?>
	<main role="main" class="flex-shrink-0">
		<div class="container">
			</br>
			<div class="card">
				<div class="card-header">
					<h2>Lista de Países</h2>
				</div>
				<div class="card-body">
					<?php if(!$result){ ?>
						<div class="alert alert-danger" role="alert">
							¡ERROR!
						</div>
					<?php } else { ?>
					<table id="myTable" class="table table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Capital</th>
								<th>Región/Continente</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($result as $resu){ ?>
							<tr>
								<td>
									<a
										href="pais.php?name=<?php echo $resu['name'] ?>"
										onclick="add('<?php echo $resu['numericCode'] ?>');"
									>
										<?php echo $resu['name'] ?>
									</a>
								</td>
								<td>
									<?php echo $resu['capital'] ? $resu['capital'] : '...' ?>
								</td>
								<td>
									<?php echo $resu['region'] ? $resu['region'] : '...' ?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } ?>
				</div>
			</div>
			</br>
		</div>
	</main>
	<?php include('./layout/footer.php') ?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="./assets/js/script.js"></script>
</body>
</html>