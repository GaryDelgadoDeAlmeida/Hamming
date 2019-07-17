	<form class="resutlForm">
		<div class="form-group">
			<label for="dna_1">DNA n°1 : </label>
			<input id="dna_1" class="form-control" type="text" placeholder="<?php echo $dna_1; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="dna_2">DNA n°2 : </label>
			<input id="dna_2" class="form-control" type="text" placeholder="<?php echo $dna_2; ?>" readonly>
		</div>

		<div class="form-group">
			<label for="diffLenght">Différence de longeur : </label>
			<input id="diffLenght" class="form-control" type="text" placeholder="<?php echo $diffLen; ?>" readonly>
		</div>

		<div class="form-group">
			<label for="lenghtString">Longeur de la chaîne de caractère : </label>
			<input id="lenghtString" class="form-control" type="text" placeholder="<?php echo $leng; ?>" readonly>
		</div>

		<div class="form-group">
			<label for="nbrDiff">Nombre de différences : </label>
			<input id="nbrDiff" class="form-control" type="text" placeholder="<?php echo $countDiff; ?>" readonly>
		</div>

		<a href="index.php"><button class="btn btn-primary width-120">Retour</button></a>
	</form>