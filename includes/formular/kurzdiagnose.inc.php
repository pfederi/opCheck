<div class="row">
	<div class="large-12 columns">
<!-- 	  <h1>2- Kurzdiagnose</h1>
 -->
	  <form>
	      <div class="row">
              <div class="large-4 columns">         
                <label class="labelTitle">Fachbereich</label>    
                  <div data-tooltip aria-haspopup="true" class="tip-top" title="Wählen Sie zunächst das Fachgebiet.">
                  	<img src="images/icons/help.svg" alt="help">
                  </div>
                <select>
                  <option value="#">...</option>
                  <option value="herz-gefaess">Herz/Gefässerkrankungen</option>
                  <option value="orthopaedie">Orthopädie</option>
                  <option value="viszeral">Viszeralchirurgie</option>
                  <option value="allgemein">Allgemeinchirurgie</option>
                </select>

              </div>
              <div class="large-4 columns">                 
                <label class="labelTitle">Bereich</label>
                  <div data-tooltip aria-haspopup="true" class="tip-top" title="Welcher Bereich ist betroffen?">
                  	<img src="images/icons/help.svg" alt="help">
                  </div>
                <select>
                  <option value="#">...</option>
                  <option value="herz-gefaess">Knie</option>
                  <option value="ruecken">Rücken</option>
                  <option value="schulter">Schulter</option>
                  <option value="fuss">Fuss</option>
                  <option value="hand">Hand</option>
                  <option value="andere">andere</option>
                </select>

              </div>
              <div class="large-4 columns">    
                 <label class="labelTitle">Befund</label>
                  <div data-tooltip aria-haspopup="true" class="tip-top" title="Welche Diagnose hat Ihr Arzt gestellt?">
                  	<img src="images/icons/help.svg" alt="help">
                  </div>
                 <select>
                  <option value="#">...</option>
                  <option value="meniskuslaesion">Meniskusläsion</option>
                  <option value="kreuzbandriss">Kreuzbandriss</option>
                  <option value="kniegelenksentzuendung">Kniegelenksentzündung</option>
                  <option value="andere">andere</option>
                </select>
              </div>
          </div> 
	      <div class="row">
              <div class="large-12 columns">
                <label>Wurde Ihnen vom Spezialisten eine OP empfohlen?</label>
                <input type="radio" name="spezialist" value="Ja" id="op-ja">
                <label for="op-ja">Ja</label>
                <input type="radio" name="spezialist" value="Nein" id="op-nein">
                <label for="op-nein">Nein</label>
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

	  </form>
	</div>
</div>
