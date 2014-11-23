<?php include("../includes/header.inc.php"); ?>

<div class="row margin-bottom-40">
	<div class="large-12 columns">
		<h1>Zweitmeinung bestellen</h1>
		<p>Bitte füllen Sie die untenstehenden Formulare vollständig aus.</p>
		<p>Lassen Sie sich Zeit. Sie haben jederzeit die Möglichkeit die eingegebenen Daten zu speichern. Sie können dann die Eingabe zu einem späteren Zeitpunkt wieder aufnehmen und komplettieren.</p>
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
							<p>Ihre Demographischen Daten werden zur Verwaltung des Falles benötigt.</p> 
							<p>Die Telefondaten dienen zur Kontaktaufnahme des Arztes mit Ihnen.</p> 
							<p>Die Angaben zu Geburtsdatum, Grösse und Gewicht sind wichtige Vorabinformationen für den Arzt.</p>						
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel2b" class="button firstAccordSave">Speichern & weiter…</a>
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
							<p>Hier ordnen Sie Ihren Fall dem richtigen Fachgebiet zu.</p> 
							<p>Die Grundangaben helfen opCheck dabei, den richtigen Spezialisten für Ihre Zweitmeinung zu finden.</p>						
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel3b" class="button secondAccordSave">Speichern & weiter…</a>
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
							<p>Alle Angaben zum Befund helfen Ihrem Zweitmeinungsarzt dabei, Ihren Fall besser einzuordnen.</p>
							<p>Besonders die Angaben zu allenfalls bestehenden Nebendiagnosen sowie zu Ihrer Krankengeschichte sind wichtig, da sie einen entscheidenden Einfluss auf die für sie richtige Massnahme haben können.</p>
							<p>Denken Sie auch daran, alle aktuell eingenommenen Medikamente anzugeben sowie allenfalls aktuelle Beschwerden zu listen.	</p>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel4b" class="button thirdAccordSave">Speichern & weiter…</a>
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
							<p>Sie können Ihre Befundbilder direkt hier auf die Plattform laden oder uns per Post zuschicken.</p>
							<p>Ebenso können Sie jederzeit weitere Befunde per Post schicken, auch wenn Sie bereits Dokumente hochgeladen haben.</p>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#goTopanel5b" class="button fourthAccordSave">Speichern & weiter…</a>
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
							<p>Bitte wählen Sie zunächst, wo sich Ihr Spezialist befinden soll.</p>
							<p> Nach der Zuweisung durch opCheck finden Sie hier die Kontaktdaten Ihres Spezialisten. Die Terminvereinbarung erfolgt ebenfalls direkt über diese Seite.</p>						
						</div>

					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<a href="#panel5b" class="button fifthAccordSave">Speichern & weiter…</a>
					</div>
				</div>				
				</div>
		  </dd>
		  <dd class="accordion-navigation contolsWrap hiddenObject">
		    <a id="goTopanel6b" href="#panel6b"><div class="left progress-counter"><span class="iconStep">6</div> Eingabe abschliessen</a>
		    <div id="panel6b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--6 Eingabe abschliessen -->
						<p>Mit diesem Schritt schliessen Sie ihre Dateneingabe ab. Die Schutzgebühr von CHF 50 wird damit fällig.</p>
						<p>Das Team von opCheck wird Ihnen in den kommenden Tagen einen Spezialisten zuweisen.</p>
						<p>Herzlichen Dank für die Nutzung von opCheck.</p>
						<div class="row">
							<div class="large-6 columns"><a href="#" class="button expand">Ja, Spezialisten anfordern</a></div>
							<div class="large-6 columns"><a href="#" class="button expand white">Abbrechen</a></div>
						</div>
					</div>
					<div class="large-3 columns"></div>
				</div>	
		    </div>			
		  </dd>
		</dl>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<div class="controls abschluss">
		</div>
	</div>
</div>









<?php include("../includes/footer.inc.php"); ?>