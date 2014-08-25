<?php
var_dump($_POST);
var_dump($_GET);
?>
<html>
<head>
	<title>My First Form</title>
</head>

<body>
	<h2>User Login</h2>
		<form method="POST">
    		<p>
        		<label for="username">Username</label>
        		<input id="username" name="username" type="text	" placeholder="Enter your username">
    			<!-- the key value is taken from the name 	attribute -->
    		</p>
    		<p>
        		<label for="password">Password</label>
        		<input id="password" name="password" type="password" placeholder="Enter your password">
        		<!-- id type password - you can't see text
        		id type text - you can see text
        		id type comments - lets you create a text box -->
    		</p>
   			<p>
        		<button type="submit">Login</button>
    		</p>
		</form>
	<h2>Compose an Email</h2>
		<form method="POST">
			<p>
				<label for="To:"></label>
        		<input id="To:" name="To:" type="email" placeholder="Who are you emailing?">
			</p>
			<p>
				<label for="From:"></label>
        		<input id="From:" name="From:" type="email" placeholder="Who is the email from?">
			</p>
			<p>
				<label for="Subject"></label>
        		<input id="Subject" name="Subject" type="email" placeholder="Please enter subject">
			</p>
			<p>
				<label for="Body"></label>
        		<textarea id="Body" name="Body" placeholder="Type Message Here"></textarea>
			</p>
				<label><input type="checkbox" id="subject" name="subject" value="yes" checked>Do you want to save a copy to sent folder?</label>
			
        		<button type="submit">Send</button>
		</form>
	<h2>Multiple Choice Test</h2>
		<form method="post">
			<p>1.Which came first?</p>
				<label><input type="radio" name="Which first" value="Chicken">Chicken</label>
				
				<label><input type="radio" name="Which first" value="Egg">Egg</label>
				
				<label><input type="radio" name="Which first" value="Humans">Humans</label>
			<p>2.How do you get an elephant across the freeway?</p>
				<label><input type="radio" name="elephant cross" value="nuts">Nuts?</label>
				<label><input type="radio" name="elephant cross" value="freeway">Take the f out of free and the f out of way</label>
			<p>3.What are your favorite colors?</p>
				<label><input type="checkbox" name="color[]" value="red">Red</label>
				<label><input type="checkbox" name="color[]" value="blue">Blue</label>
				<label><input type="checkbox" name="color[]" value="Green">Green</label>
				<label><input type="checkbox" name="color[]" value="Yellow">Yellow</label>
				<p><label for="foods">4. What foods would you like to eat?</label></p>
				<select id="foods" name="foods[]" multiple>
					<option value="0">--Pick One--</option>
					<option>Pizza</option>
					<option>Sushi</option>
					<option>Hamburgers</option>
					<option>Bantha Milk</option>
				</select>
				<button type="submit">Submit</button>
		</form>
	<h2>Select Testing</h2>
		<form method="post">
			<label for="hunger" >1. Are you hungry?</label>
			<select id="hunger" name="hunger">
				<option value="0">--Pick One--</option>
				<option value="1">yes</option>
				<option value="2">no</option>

			<input type="submit" value="Submit" />

		</form>
</body>

</html>




