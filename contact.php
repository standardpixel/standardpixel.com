<?php
include('include/header.html');
?>
	<h1>Standard Pixel</h1>
	<h2>Contact Eric Gelinas</h2>

	<div id="feature">
		<form name="contact" action="#self">
			<fieldset>
				<legend>Your Information</legend>
				<label>Full Name</label>
				<input type="text" name="name">
				<label>Email Address</label>
				<input type="text" name="email">
			</fieldset>
			<fieldset>
				<legend>Comments</legend>
				<textarea name="comments"></textarea>
			</fieldset>
			<fieldset>
				<input type="submit" value="Submit">
				<input type="reset" value="Clear">
			</fieldset>
		</form>
	</div>
<?php
include('include/nav.html');
include('include/footer.html');
?>