
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kalkulator - ile zapłacę za podróż</title>
    <meta name="description" content="Sprawdź, ile zapłacisz za paliwo podczas swoich wakacyjnych podróży">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
    
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  *
  {
   font-family: 'Quicksand', sans-serif;
  
  }
  
  form
  {
   background-color: lightgray;
  }
  
  .error
  {
   font-size: 0.7em;
   color:red;
  }
  
  </style>
  
  </head>
  
<body>



<div class="container">
<div class="row">
	<header>
	<div class="text-center mt-3">
		<h1 class="h3">Kalkulator kosztów dojazdu</h1>
		
		<p>Planujesz wakacje? A może czeka Cię podróż służbowa?
		Skorzystaj z kalkulatora! Sprawdź, jaki będzie koszt dojazdu do miejsca Twojej destynacji.</p>
		
	</div>
	</header>
</div>

<div class="row">

	<main>
<div class="mt-4 col-md-8 offset-md-2"> 

<p class="text-center"><strong>Pamiętaj, by podawać tylko liczby. Jeśli wpisujesz liczbę po przecinku, użyj kropki, np. 3.6</strong></p>

<form action="index.php" method="get" class="p-3 border border-dark rounded">

<div class="form-group pb-4 lh-1">
	<p>Wpisz długość trasy</p>
	<input type="text" class="form-control" name="distance" ariadescribedby="" placeholder="Długość trasy [km]" required value="<?= isset($distance) ? $distance : '' ?>">
	<span class="error"> <?= $errors['distance'] === false ? $err : '' ?></span>
</div>

<div class="form-group pb-4 lh-1">
	<p>Wpisz średnie spalanie auta na 100km</p>
	<input type="text" class="form-control" name="fuel" placeholder="Spalanie [l/100km]" ariadescribedby="" required value="<?= isset($fuel) ? $fuel : '' ?>">
	<span class="error"> <?= $errors['fuel'] === false ? $err : '';?></span>
</div>

<div class="form-group pb-4 lh-1">
	<p>Wpisz aktualną cenę paliwa </p>
	<input type="text" name="cost" class="form-control" ariadescribedby="" placeholder="Cena paliwa [zł]" required value="<?= isset($cost) ? $cost : '' ?>">
 	<span class="error"> <?= $errors['cost'] === false ? $err : '';?></span>
</div>

	<button type="submit" class="btn btn-dark">Wyślij</button>
</form>
</div>

	<div class="mt-3 text-center lh-1" style="font-weight:500; font-size:1.2em">
		<?php
			if(isset($neededFuel)&&isset($result)):
		?>
		<p> Ilość potrzebnego paliwa wynosi: <strong><?= $neededFuel ?> l</strong></p>
		<p> Całkowity koszt podróży wynosi: <strong><?= $result ?> zł</strong></p>
		
		<?php else: ?>
		<p> Uzupełnij formularz</p>
		<?php endif; ?>
		
	</div>
	</main>
	
	  
</div>

</div>
</body>
</html>

