<script type="text/javascript"> 	document.write('<div id="content" style="height:' + (window.innerHeight-90) + 'px"> ');</script> 	<div id="streams">		<div id="stream_left">			<?php echo '<form action="http://marderlp.hol.es'.$_SERVER[REQUEST_URI].'" method="get">';?>			<fieldset>					<legend>Twitch</legend>						<p>							<input type="search" size="30" onkeyup="showTwitchResult(this.value)" placeholder="Twitch Suche">							<div id="twitchSearch" style="width=50%">														</div>							<input type="search" name="twitch" size="30" id="twitch" placeholder="Drag and Drop Streams hier hin"></p>						</p>			</fieldset>				<fieldset>					<legend>Hitbox</legend>						<p>								<input type="search" size="30" onkeyup="showHitboxResult(this.value)" placeholder="Hitbox Suche">							<div id="hitboxSearch" style="width=50%">														</div>							<input type="search" name="hitbox" size="30" id="hitbox" placeholder="Drag and Drop Streams hier hin"></p>						</p>			   </fieldset>				<fieldset>					<legend>Settings</legend>						<p>						<label>Startseite:</label>						<input list="tab" size="30" name="tab" value="Streams" required>						<datalist id="tab">							<option value="Start">							<option value="Streams">							<option value="Impressum">							<option value="Kontakt">							<option value="Hilfe">							<option value="Changelog">						</datalist>						</p><p>						<label>Keine MGN Streams anzeigen</label>						<input type = "checkbox" name="team" id = "team"/>						</p>				</fieldset>				<fieldset>				<legend>Launch</legend>				<p>				<input type = "reset" />				<input type = "submit" />				</p>       				</fieldset>   			</form>		</div>		<div id="stream_right">			<fieldset>				<legend>Schnelle Hilfe</legend>				<p>Geb durch Kommata getrennt die Streams an, die du sehen willst! Im Twitch Bereicht die Twitch Streams, im Hitbox Bereich die Hitbox Streams. Im Hitbox Bereich kannst du die Suche nutzen und die Ergebnisse per Drag and Drop in die Liste hinzuf&uuml;gen. Zum Schluss dr�cke Submit und dann viel Spa� beim schauen der Streams,..</p>			</fieldset>			<fieldset>				<legend>Hitbox Statistic</legend>				<?php 					$arr = getHitboxFeatured();					echo "<p>".$arr[0].' Streams online playing '.$arr[1].' Games with '.$arr[2].' viewer. The top 10 Games are: '.$arr[3]."</p>";				?>			</fieldset>			<fieldset>				<legend>Twitch Statistic</legend>				<?php 					$arr = getTwitchFeatured();					echo "<p>".$arr[0].' Streams online. The top 10 Games are: '.$arr[1]."</p>";				?>			</fieldset>								</div>	</div>	<script type="text/javascript"> 		document.write('<div id="chat" style="height:' + (window.innerHeight-125) + 'px"> ');	</script> 		<?php 			echo '<div class="tabbertab">';			echo '<h2>Twitter</h2>';			include 'multigaming/pages/twitter.php';			echo '</div>';		?>	</div></div>