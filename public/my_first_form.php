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
        		<input id="password" name="password" type="	password" placeholder="Enter your password">
        		<!-- id type password - you can't see text
        		id type text - you can see text
        		id type comments - lets you create a text box -->
    		</p>
   			<p>
        		<button type="submit">Login</button>
    		</p>
		</form>
	<h2>Compose an Email<h2>
		<form method="POST">
			<p>
				<label for="To:">To:</label>
        		<input id="To:" name="To:" type="text	" placeholder="Enter email">
			</p>
			<p>
				<label for="From:">From:</label>
        		<input id="From:" name="From:" type="text	" placeholder="Enter email">
			</p>
			<p>
				<label for="Subject">Subject</label>
        		<input id="Subject" name="Subject" type="text	" placeholder="Please enter subject">
			</p>
			<p>
				<label for="Body">Body</label>
        		<textarea id="Body" name="Body" rows="5" cols="40">Enter Message Here</textarea>
			</p>
			<p>
        		<button type="submit">Send</button>
    		</p>
		</form>
</body>

</html>




