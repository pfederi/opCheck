<?php include("../includes/header.inc.php"); ?>

<section class="row">
	<div class="large-6 columns large-centered">
		<h1>Verifizierung</h1>
		<p>Sie erhalten einen SMS-Code auf Ihr registriertes Mobiltelefon </p>
		
		<form action="" method="" accept-charset="utf-8" data-abide>
			<div class="email-field">
				<label>SMS-Code <small>Pflichtfeld</small></label>
				<input type="number" required>
				<small class="error">Um Ihnen Zugriff auf die Plattform zu gewähren, benötigen wir eine gültige Natel-Nummer</small>
			</div>
			<button type="submit" onclick="window.location.href='zweitmeinung'">Anmelden</button>
		</form>
	</div>

</section>
		
<?php include("../includes/footer.inc.php"); ?>