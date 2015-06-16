<?php
	include('includes/header.inc.php');
?>
	<script>
		changeActivePage("jobs");
	</script>
    <br/><br/>
    <form action="mail.php" method="post"> <!-- will set this up later -->
		<center><h3>Last Stand Studio Job Application</h3></center>
		<div class="row">
			<div class="small-6 columns"><input type="text" name="fname" placeholder="First Name"/></div>
			<div class="small-6 columns"><input type="text" name="lname" placeholder="Last Name"/></div>
		</div>
		<div class="row">
			<div class="small-12 columns"><input type="text" name="contact" placeholder="Contact Email or Skype Username"/></div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>Choose your Department:
					<select>
						<option value="any-field">Any Field</option>
						<option value="artist">Artist</option>
						<option value="audio">Audio/Music</option>
						<option value="human-resources">Human Resources</option>
						<option value="level-designer">Level Designer</option>
						<option value="management">Management</option>
						<option value="programmer">Programmer</option>
						<option value="plot-engineer">Plot Engineer</option>
						<option value="public-relations">Public Relations</option>
						<option value="tester">Beta/Alpha Tester</option>
						<option value="sales">Sales</option>
						<option value="web-master">Web Master</option>
					</select>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					<textarea placeholder="Tell us about yourself."></textarea>
				</label>
			</div>
		</div>
		<div class="row">                
			<div class="large-12 columns">
				<div class="row collapse postfix-radius">
					<div class="small-9 columns">
						<input type="text" placeholder="Expected Pay">
					</div>
					<div class="small-3 columns">
						<span class="postfix">$USD</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<label>
					<textarea placeholder="Past Experience."></textarea>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<a href="#" type="submit" value="Send" class="button">Submit Application</a>
			</div>
		</div>
    </form>
<?php
	include('includes/footer.inc.php');
?>