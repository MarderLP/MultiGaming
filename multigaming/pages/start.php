<div id="content">
	<div id="left">
		<?php	echo '<form action="http://'.$_SERVER['SERVER_NAME'].$_SERVER[REQUEST_URI].'" method="get">';?>	
		<fieldset>
			<legend>Twitch</legend>
			
				<?php echo '<input type="search" size="30" onkeyup="showTwitchResult(this.value)" placeholder="'.$twitchSearch.'">' ;?>
					<div id="twitchSearch" style="width=50%">
					</div>						
				<?php echo '<textarea name="twitch" rows="5" cols="30" id="twitch" placeholder="'.$dnd.'"></textarea>' ;?>
			
		</fieldset>	
		<fieldset>
			<legend>Hitbox</legend>
			
				<?php echo '<input type="search" size="30" onkeyup="showHitboxResult(this.value)" placeholder="'.$hitboxSearch.'">' ;?>
				<div id="hitboxSearch" style="width=50%">
				</div>
				<?php echo '<textarea rows="5" cols="30" name="hitbox" id="hitbox" placeholder="'.$dnd.'"></textarea>' ;?>
			
		</fieldset>
		<fieldset>
			<?php echo '<legend>'.$settings.'</legend>';?>
			<p>	
				<?php echo '<label>'.$setLang.'</label>';?>
					<input list="lang" size="30" name="lang" value="English" required>
					<datalist id="lang">
					<option value="English">
					<option value="German">	
				</datalist>	
			</p>	
			<p>	
				<?php echo '<label>'.$home.'</label>';?>	
				<input list="tab" size="30" name="tab" value="Streams" required>
				<datalist id="tab">
					<?php echo '<option value="'.$home.'">';?>	
					<?php echo '<option value="MgN">';?>
					<?php echo '<option value="'.$streams.'">';?>
					<?php echo '<option value="'.$imprint.'">';?>
					<?php echo '<option value="'.$contact.'">';?>
					<?php echo '<option value="'.$help.'">';?>	
				<option value="Changelog">
				</datalist>	
			</p><p>	
				<?php echo '<label>'.$mgnStreams.'</label>';?>	
				<input type = "checkbox" name="team" id = "team"/>	
			</p><p>
				<?php echo '<label>'.$suggestedStreams.'</label>';?>	
				<input type = "checkbox" name="suggestions" id = "suggestions"/>
			</p>
		</fieldset>	
		<fieldset>
			<?php echo '<legend>'.$launch.'</legend>';?>
			<p>	
				<?php echo '<input type ="reset" value="'.$reset.'" />';?>
				<?php echo '<input type ="submit" value="'.$submit.'" />';?>
			</p> 
			</fieldset>
		</form>
	</div>
	<div id="center">
		<fieldset>			
			<?php echo '<legend>'.$qickHelp.'</legend>';?>
			<?php echo '<p>'.$qickHelpText.'</p>';?>
		</fieldset>	
		<fieldset>		
			<?php echo '<legend>'.$hitboxStatistics.'</legend>';
			$arr = getHitboxFeatured();
			echo "<p>".$arr[0].' Streams online playing '.$arr[1].' Games with '.$arr[2].' viewer.</p><p> The top 10 Games are: '.$arr[3]."</p>";			?>
		</fieldset>	
		<fieldset>		
			<?php echo '<legend>'.$twitchStatistics.'</legend>';		
			$arr = getTwitchFeatured();		
			echo "<p>".$arr[0].' Streams online.</p><p> The top 10 Games are: '.$arr[1]."</p>";			
			?>	
		</fieldset>		
	</div>	<div id="right">	
		<fieldset>		
			<legend>Social</legend>		
			<?php	include 'multigaming/pages/twitter.php';?>	
		</fieldset>
	</div>
</div>