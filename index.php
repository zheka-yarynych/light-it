<?php 
include '/application.php';
?>

<!DOCTYPE html>
<html>
<head>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" href="desing/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="desing/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="desing/style.css">
	<link rel="shortcut icon" href="desing/img/favicon.ico" type="image/x-icon">
	<title><?=$title?></title>
</head>
<body>
	<div class="bg">
		<div class="title"><?=$title?></div>

		<?php if (isset($weather)) { ?>
			<div class="container weather">
				<div class="row">
					<div class="col-sm-6">
						<span class="numbers"><?=$weather['min_t_c']?></span>
						<span class="celsiy">
							&deg;C
						</span>
						<span class="numbers">- <?=$weather['max_t_c']?></span>
						<span class="celsiy">
							&deg;C
						</span>
						<br>
						<b><?=$weather['cond']?></b>
						<br>
						<b>Рассвет</b>: <?=$weather['sunrise']?> (утра)
						<br> 
						<b>Закат</b>: <?=$weather['sunset']?> (вечера)
						<br>
						<b>Ветер</b>: <?=$weather['wind']?>км/час
					</div>
					<div class="col-sm-6 rght">
						<?=$weather['date']?> <br> <br> <br>
						<?=$weather['city']?>
					</div>
				</div>
			</div>
		<?php } ?>

		<form method="post" action="?" class="container frm-view">
			<div class="form-group row">
				<label for="city" class="col-sm-2 col-form-label">Введите город</label>
				<div class="col-sm-10">
					<input type="text" name="city" class="form-control" id="city" value="<?=$city?>" >
				</div>
			</div>
			<div class="form-group row">
				<label for="date" class="col-sm-2 col-form-label">Выберите дату</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" id="date" >
				</div>
			</div>
			<script src="js/calendar.js"></script>
			<div class="row">
				<div class="col-sm-12" style="text-align: right;">
					<button type="submit" class="btn btn-primary mb-2" style="padding: 0.5rem;font-size: 18px">Узнать!</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>