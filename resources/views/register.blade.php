<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<title>Form Sign Up</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<form method="POST" action='/register'>
		@csrf
		<div>
			<label for='firstname'>First name :</label>
		</div>
		<div>
			<input type="text" name="firstname" id='firstname' required="">
		</div>
		<br>
		<div>
			<label for='lastname'>Last name :</label>
		</div>
		<div>
			<input type="text" name="lastname" id='lastname' required="">
		</div>
		<br>
		<div>
			<label for='gender'>Gender :</label>
		</div>
		<div>
			 <input type="radio" id="male" name="gender" value="male">
			 <label for="male">Male</label><br>
			 <input type="radio" id="female" name="gender" value="female">
			 <label for="female">Female</label><br>
			 <input type="radio" id="other" name="gender" value="other">
			 <label for="other">Other</label>
		</div>
		<br>
		<div>
			<label for='nationality'>Nationality :</label>
		</div>
		<div>
			 <select name='select_nationality'>
			 	<option name='pilih' value="">-- Pilih --</option>
			 	<option name='indonesian' value="indonesian">Indonesian</option>
			 	<option name='malaysian' value="malaysian">Malaysian</option>
			 	<option name='singapurian' value="singapurian">Singapurian</option>
			 </select>
		</div>
		<br>
		<div>
			<label for='language'>Language Spoken :</label>
		</div>
		<div>
			 <input type="checkbox" id="indonesia" name="indonesia" value="indonesia">
			  <label for="indonesia"> Bahasa Indonesia</label><br>
			  <input type="checkbox" id="english" name="english" value="english">
			  <label for="english"> English</label><br>
			  <input type="checkbox" id="others" name="others" value="others">
			  <label for="others"> Others</label>
		</div>
		<br>
		<div>
			<label for='bio'>Bio :</label>
		</div>
		<div>
			 <textarea name="bio" id='bio' rows='10'></textarea>
		</div>
		

		<input type="submit" name="btn_sign_up" value="Sign Up">
	</form>
</body>