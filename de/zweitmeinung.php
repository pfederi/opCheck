<?php include("../includes/header.inc.php"); ?>

<div class="row margin-bottom-40">
	<div class="large-12 columns">
		<dl class="accordion" data-accordion="">
		  <dd class="accordion-navigation">
		  	<a href="#panel1b"><div class="left progress-counter"><span class="iconStep">1</span></div> Demographische Daten</a> 
		    <div id="panel1b" class="content active">
				<div class="row">
					<div class="large-9 columns">
						<!--1 Demographische Daten -->
						<?php include("../includes/formular/demographische-daten.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>
								Ihre Demographischen Daten werden zur Verwaltung des Falles benötigt.</p> 
								<p>Die Telefondaten dienen zur Kontaktaufnahme des Arztes mit Ihnen.</p> 
								<p>Die Angaben zu Geburtsdatum, Grösse und Gewicht sind wichtige Vorabinformationen für den Arzt.
							</p>						
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel2b" class="button firstAccordSave">Speichern & weiter...</a>
					</div>
				</div>
		    </div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel2b" href="#panel2b"><div class="left progress-counter"><span class="iconStep">2</span></div> Kurzdiagnose</a>
		    <div id="panel2b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--2 Kurzdiagose -->
						<?php include("../includes/formular/kurzdiagnose.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>
								Hier ordnen Sie Ihren Fall dem richtigen Fachgebiet zu.</p> 
								<p>Die Grundangaben helfen opCheck dabei, den richtigen Spezialisten für Ihre Zweitmeinung zu finden.
							</p>						
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel3b" class="button secondAccordSave">Speichern & weiter...</a>
					</div>
				</div>	
			</div>		
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel3b" href="#panel3b"><div class="left progress-counter"><span class="iconStep">3</div> Befund</a>
		    <div id="panel3b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--3 Befund -->
						<?php include("../includes/formular/befund.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>
								Für die erste PT-Variante werden enge Richtlinien definiert. Foundation-Klassen werden in der Original-Version verwendet.
							</p>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel4b" class="button thirdAccordSave">Speichern & weiter...</a>
					</div>
				</div>				
			</div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel4b" href="#panel4b"><div class="left progress-counter"><span class="iconStep">4</div> Befundbilder</a>
		    <div id="panel4b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--4 Befundbilder -->
						<?php include("../includes/formular/befundbilder.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>
								Für die erste PT-Variante werden enge Richtlinien definiert. Foundation-Klassen werden in der Original-Version verwendet.
							</p>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel5b" class="button fourthAccordSave">Speichern & weiter...</a>
					</div>
				</div>
			</div>
		  </dd>			
		  <dd class="accordion-navigation">
		    <a id="goTopanel5b" href="#panel5b"><div class="left progress-counter"><span class="iconStep">5</div> Zweitmeinungsarzt</a>
		    <div id="panel5b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--5 zweitmeinungsarzt -->
						<?php include("../includes/formular/zweitmeinungsarzt.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>
								Für die erste PT-Variante werden enge Richtlinien definiert. Foundation-Klassen werden in der Original-Version verwendet.
							</p>						
						</div>

					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#panel5b" class="button lastAccordSave">Speichern</a>
					</div>
				</div>				
				</div>
		  </dd>
		</dl>
	</div>
</div>
<div class="row contolsWrap hiddenObject">
	<div class="large-12 columns">
		<div class="controls abschluss">
			<div class="row">
				<div class="large-6 columns"><a href="#" class="button expand">Formular absenden</a></div>
				<div class="large-6 columns"><a href="#" class="button expand white">Abbrechen</a></div>
			</div>
		</div>
	</div>
</div>









<?php include("../includes/footer.inc.php"); ?>