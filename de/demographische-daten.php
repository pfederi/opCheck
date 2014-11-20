<?php include("../includes/header.inc.php"); ?>

<!--Section 1 -->

   <div class="row">
    <div class="large-12 columns">
      <h1>1- Kurzdiagnose</h1>
      <form>
          <div class="row">
              <div class="large-4 columns">         
                <label>Fachbereich</label>
                <select>
                  <option value="#">...</option>
                  <option value="herz-gefaess">Herz/Gefässerkrankungen</option>
                  <option value="orthopaedie">Orthopädie</option>
                  <option value="viszeral">Viszeralchirurgie</option>
                  <option value="allgemein">Allgemeinchirurgie</option>
                </select>
                </label>
              </div>
              <div class="large-4 columns">                 
                <label>Diagnose</label>
                <select>
                  <option value="#">...</option>
                  <option value="herz-gefaess">Knie</option>
                  <option value="ruecken">Rücken</option>
                  <option value="schulter">Schulter</option>
                  <option value="fuss">Fuss</option>
                  <option value="hand">Hand</option>
                  <option value="andere">andere</option>
                </select>
                </label>
              </div>
              <div class="large-4 columns">    
                 <label>Befund</label>
                 <select>
                  <option value="#">...</option>
                  <option value="meniskuslaesion">Meniskusläsion</option>
                  <option value="kreuzbandriss">Kreuzbandriss</option>
                  <option value="kniegelenksentzuendung">Kniegelenksentzündung</option>
                  <option value="andere">andere</option>
                </select>
                </label>
              </div>
          </div> 
          <div class="row">
              <div class="large-12 columns">
                <label>Wurde Ihnen vom Spezialisten eine OP empfohlen?</label>
                <input type="radio" name="op-ja" value="Ja" id="op-ja"><label for="op-ja">Ja</label>
                <input type="radio" name="op-nein" value="Nein" id="op-nein"><label for="op-nein">Nein</label>
              </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label>Gründe für eine Zweitmeinung</label>
              <input id="checkbox1" type="checkbox"><label for="checkbox1">Ich bin unsicher</label>
              <input id="checkbox2" type="checkbox"><label for="checkbox2">Ich möchte mich umfassender informieren</label>
            </div>
            <div class="large-6 columns">
              <label>Andere Gründe
                <textarea placeholder="..."></textarea>
              </label>
            </div>
          </div>
<!-- -->
          <div class="row">
              <div class="large-10 columns">
                
              </div>
              <div class="large-2 columns">
                <a href="#" class="button [tiny small large]">Speichern</a>
              </div>

<!-- -->

      </form>
    </div>
  </div>


<!--Section 2 -->

  <div class="row">
    <div class="large-12 columns">
    	<h1>2 - Demographische Daten</h1>
    	<form>				
  				<div class="row">
  				   	<div class="large-2 columns">        	
      					<label>Anrede</label>
        				<input type="text"/>
        			</div>
  				   	<div class="large-5 columns">            			
        				<label>Vorname</label>
        				<input type="text"/>
        			</div>
  				   	<div class="large-5 columns">    
        				 <label>Name</label>
        				<input type="text"/>
        			</div>
        	</div>	

          <div class="row">
              <div class="large-5 columns">         
                <label>Strasse</label>
                <input type="text"/>
              </div>
              <div class="large-1 columns">                 
                <label>Nr.</label>
                <input type="text"/>
              </div>
              <div class="large-2 columns">                 
                <label>PLZ</label>
                <input type="text"/>
              </div>
              <div class="large-4 columns">    
                 <label>Ort</label>
                <input type="text"/>
              </div>
          </div>  

          <div class="row">
              <div class="large-4 columns">         
                <label>Mobil</label>
                <input type="text"/>
              </div>
              <div class="large-4 columns">                 
                <label>Telefon</label>
                <input type="text"/>
              </div>
              <div class="large-4 columns">    
                 <label>E-Mail</label>
                <input type="text"/>
              </div>
          </div>              

          <div class="row">
              <div class="large-4 columns">         
                <label>Geburtsdatum</label>
                <input type="text"/>
              </div>
              <div class="large-4 columns">                 
                <label>Grösse</label>
                <input type="text"/>
              </div>
              <div class="large-4 columns">    
                 <label>Gewicht</label>
                <input type="text"/>
              </div>
            </div>  
          <div class="row">
              <div class="large-10 columns">
                
              </div>
              <div class="large-2 columns">
                <a href="#" class="button [tiny small large]">Speichern</a>
              </div>
          </div>
    	</form>

<!--Section 3 -->

   <div class="row">
    <div class="large-12 columns">
      <h1>3 - Befund</h1>
    </div>
  </div>


    </div>
  </div>



<?php include("../includes/footer.inc.php"); ?>



