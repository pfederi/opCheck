<?php include("../includes/header.inc.php"); ?>

<h1>Anmelden</h1>

<form action="" method="" accept-charset="utf-8" data-abide>
	<div class="name-field">
		<label>Your name <small>required</small></label>
		<input type="text" required pattern="[a-zA-Z]+">
		<small class="error">Name is required and must be a string.</small>
	</div>
	<div class="email-field">
		<label>Email <small>required</small></label>
		<input type="email" required>
		<small class="error">An email address is required.</small>
	</div>
	<div class="email-field">
		<label>Password <small>required</small></label>
		<input type="password" id="password" required>
		<small class="error">A password is required.</small>
	</div>
	<div class="email-field">
		<label>Repeat Password <small>required</small></label>
		<input type="password" data-equalto="password" required>
		<small class="error">Passwords do not match.</small>
	</div>
	<button type="submit">Submit</button>
</form>
		
<?php include("../includes/footer.inc.php"); ?>