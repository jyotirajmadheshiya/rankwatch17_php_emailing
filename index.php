<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Mail Information! </title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  	<h1>Send Email: </h1>
</div>
  
<div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<form action="send_email.php" method="post">
  				<div class="form-group">
    				<label for="emailaddress">Email address:</label>
					<input type="email" class="form-control" placeholder="Enter emial-address" name="emailaddress">
				</div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" placeholder="Enter subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" class="form-control" placeholder="Enter message" name="message">
                </div>
				<div class="text-center">
					<button type="submit" class="btn btn-default">Send</button>
				</div>	 
			</form>
		</div>
	</div>
</div>  	
</body>
</html>