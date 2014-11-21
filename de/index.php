<?php include("../includes/header.inc.php"); ?>

<!-- Infotext -->
<section class="row surgeon">
	<div class="large-12 columns large-centered">
		<h1>Unsicher was Ihren ersten Befund angeht?</h1>
		<h2>opCheck hilft Ihnen bei der Suche nach einem Zweitmeinungsarzt</h2>
		<img src="/images/logos/surgeon-sw.png" alt="surgeon" />
	</div>
</section>
<hr>

<!-- Call to Action Button -->
<section class="row calltoaction">
	<div class="large-12 columns">
		<button onclick="window.location.href='zweitmeinung'">Zweitmeinung bestellen</button>
	</div>
</section>
<hr>

<!-- Vorteile -->
<section class="row vorteile">
	<div class="large-12 medium-12 small-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<h3>Ihre Vorteile</h3>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Neutrale und individuelle Betrachung Ihres Falles</p>
			</div>
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Beratung durch unabhängige und anerkannte Spezialisten mit FMH-Ausweis</p>
			</div>
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Keine Telemedizin - Sie sprechen direkt mit dem Spezialisten</p>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Ausführlicher und verständlicher Abschlussbericht</p>
			</div>
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Übernahme der Konsultationskosten durch die Krankenkasse</p>
			</div>
			<div class="large-4 columns">
				<img src="/images/icons/check.svg" alt="check"><p>Niedrige Schutzgebühr von CHF 25 bei durchgeführter Beratung </p>
			</div>
		</div>
	</div>
</section>
<hr>

<!-- Ablauf -->
<section class="row ablauf">
	<div class="large-12 medium-12 small-12 columns">
		<h3>Wie funktioniert opCheck?</h3>
		<div class="row" data-equalizer>
			<div class="large-5 columns panel" data-equalizer-watch>
				Der Patient übermittelt seine Befund-Daten an opCheck.
			</div>
			<div class="large-2 columns number" data-equalizer-watch>
				<div><span>1</span></div>
			</div>
			<div class="large-5 columns" data-equalizer-watch></div>
		</div>
		<div class="row">
			<div class="large-5 columns" data-equalizer-watch></div>
			<div class="large-2 large-offset-5 columns number" data-equalizer-watch>
				<div><span>2</span></div>
			</div>
			<div class="large-5 columns panel" data-equalizer-watch>
				Die Daten werden vom opCheck-Team auf Vollständigkeit geprüft. Anschliessend werden passende Spezialisten gesucht und dem Patienten vorgeschlagen.
			</div>
		</div>
		<div class="row">
			<div class="large-5 columns panel" data-equalizer-watch>
				Der Patient wählt einen Spezialisten aus und vereinbart einen Termin.
			</div>
			<div class="large-2 columns number" data-equalizer-watch>
				<div><span>3</span></div>
			</div>
			<div class="large-5 columns" data-equalizer-watch></div>
		</div>
		<div class="row">
			<div class="large-5 columns" data-equalizer-watch></div>
			<div class="large-2 large-offset-5 columns number" data-equalizer-watch>
				<div><span>4</span></div>
			</div>
			<div class="large-5 columns panel" data-equalizer-watch>
				Spezialist und Patient treffen sich persönlich zum ausführlichen Zweitmeinungsgespräch.
			</div>
			
		</div>
		<div class="row">
			<div class="large-5 columns panel" data-equalizer-watch>
				Abschliessend erhält der Patient einen ausführlichen schriftlichen Befund.	
			</div>
			<div class="large-2 columns number" data-equalizer-watch>
				<div><span>5</span></div>
			</div>
			<div class="large-5 columns" data-equalizer-watch></div>
		</div>
	</div>
	<span class="intro-link"></span>
</section>
<hr>
<!-- Wer ist opCheck -->
<section class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<h3>Wer ist opCheck?</h3>
				
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<h4>Lorem Ipsum</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="large-6 columns">
				<h4>Lorem Ipsum</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>

 <script>
$(document).ready(function () {
	$('.intro-link').on('click',function()
		{
		if ($('.ablauf').css('height') == '460px')
		$('.ablauf').animate({height: $('.ablauf')[0].scrollHeight}, 500,"swing",function(){
		$('.ablauf').css('padding-bottom','120px'),
		$('.intro-link').css('background-image','url(/images/icons/arrow-up.svg)')});
		else
			$('.ablauf').animate({height: "460px"}, 500,"swing",function(){
			$('.intro-link').css('background-image','url(/images/icons/arrow-down.svg)')});
		}
	);
});
</script>


<?php include("../includes/footer.inc.php"); ?>



