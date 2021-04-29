<?php
require('./inc/include.php');
$countryName = $_GET['name'];
if(!$countryName) header('Location: ./');
$result = callAPI('https://restcountries.eu/rest/v2/name/'.$countryName);
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
	<?php include('./layout/head.php') ?>
</head>
<body class="d-flex flex-column h-100">
	<?php include('./layout/header.php') ?>
	<main role="main" class="flex-shrink-0">
		<div class="container">
            <br/>
            <div class="card">
                <div class="card-header">
					<h4><?php echo $result[0]['name'] ?></h4>
				</div>
				<div class="card-body">
                    <b>Capital:</b> <?php echo $result[0]['capital'] ?>
                    <br/>
                    <b>Región:</b> <?php echo $result[0]['region'] ?>
                    <br/>
                    <b>Subregión:</b> <?php echo $result[0]['subregion'] ?>
                    <br/>
                    <b>Población:</b> <?php echo $result[0]['population'].' habitantes' ?>
                    <br/>
                    <b>Nombre Nativo:</b> <?php echo $result[0]['nativeName'] ?>
                    <br/>
                    <b>Bandera:</b> <img src="<?php echo $result[0]['flag'] ?>" width="60" height="40">
                    <br/>
                    <b>Lenguajes:</b>
                    <?php foreach($result[0]['languages'] as $lang){ ?>
                        <li>
                            <?php echo $lang['name'].' ['.$lang['nativeName'].']' ?>
                        </li>
                    <?php } ?>
                    <b>Monedas:</b>
                    <?php foreach($result[0]['currencies'] as $currency){ ?>
                        <li>
                            <?php echo $currency['name'].' ('.$currency['symbol'].')' ?>
                        </li>
                    <?php } ?>
                </div>
                <div class="card-footer text-muted">
                    <a href="./" class="btn btn-primary">Volver a la lista</a>
                </div>
            </div>
            <br/>
        </div>
	</main>
    <?php include('./layout/footer.php') ?>
</body>
</html>