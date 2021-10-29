<!DOCTYPE html>
<html>
<head>
	<title>Become A Mentor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		.v1{
			border-left: 5px solid gold;
			padding-top: 200px;
			position: absolute;
			left: 11%;
		}

		.hr {
  			border: none;
  			border-top: 1px solid violet;
  			margin-top: 570px;

		}

		.logo {
  			position: absolute; /* Reposition logo from the natural layout */
  			left: 218px;
  			top: 1550px;
  			width: 1470px;
  			height: 220px;
  			border:1px solid #000;
  			z-index: 2;
  			background-color: gold;
  			border: 0;
		}

	</style>
</head>
<body>
	<div>
		<div class="panel panel-primary" style="border: 0;">
			<div class="panel-heading text-left" style="height: 420px; background-image: url(mentors.png); color: white;">
				<h1 style="font-family:calibri (body); font-size:450%; padding-top: 250px; padding-left: 40px;" class="v1"><b>BECOME A MENTOR</b></h1>
			</div>			
		</div>
	</div>
	<div class="container" style="font-size: 20px">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel-body" style="margin-bottom: 200px;">
				<form action="upload.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Lcation">Where Are Your From?</label>
						<input type="text" class="form-control" id="Location" name="Location" />
					</div>
					<div class="form-group">
						<label for="Industry">What is your area of Specialty?</label>
						<div>
							<label for="1" class="checkbox-inline"><input type="checkbox" name="area[]" value="Abortion Policy/Anti-Abortion" />Abortion Policy/Anti-Abortion</label>
						</div>
						<div>
							<label for="2" class="checkbox-inline"><input type="checkbox" name="area[]" value="Abortion Policy/Pro-Abortion Rights" />Abortion Policy/Pro-Abortion Rights</label>
						</div>
						<div>
							<label for="3" class="checkbox-inline"><input type="checkbox" name="area[]" value="Accountant" />Accountant</label>
						</div>
						<div>
							<label for="4" class="checkbox-inline"><input type="checkbox" name="area[]" value="Advertising/Public Relation" />Advertising/Public Relation</label>
						</div>
						<div>
							<label for="5" class="checkbox-inline"><input type="checkbox" name="area[]" value="Aerospace/Defense Contractors" />Aerospace/Defense Contractors</label>
						</div>
						<div>
							<label for="6" class="checkbox-inline"><input type="checkbox" name="area[]" value="Agribusiness" />Agribusiness</label>
						</div>
						<div>
							<label for="7" class="checkbox-inline"><input type="checkbox" name="area[]" value="Agricultural Services & Products" />Agricultural Services & Products</label>
						</div>
						<div>
							<label for="8" class="checkbox-inline"><input type="checkbox" name="area[]" value="Agriculture" />Agriculture</label>
						</div>
						<div>
							<label for="9" class="checkbox-inline"><input type="checkbox" name="area[]" value="Air Transport" />Air Transport</label>
						</div>
						<div>
							<label for="10" class="checkbox-inline"><input type="checkbox" name="area[]" value="Air Transport Unions" />Air Transport Unions</label>
						</div>
						<div>
							<label for="11" class="checkbox-inline"><input type="checkbox" name="area[]" value="Airlines" />Airlines</label>
						</div>
						<div>
							<label for="12" class="checkbox-inline"><input type="checkbox" name="area[]" value="12" />Alcoholic Beverages</label>
						</div>
						<div>
							<label for="13" class="checkbox-inline"><input type="checkbox" name="area[]" value="Alternative Energy Production & Services" />Alternative Energy Production & Service</label>
						</div>
						<div>
							<label for="14" class="checkbox-inline"><input type="checkbox" name="area[]" value="Architectural Services" />Architectural Services</label>
						</div>
						<div>
							<label for="15" class="checkbox-inline"><input type="checkbox" name="area[]" value="Attorney/Law Firms" />Attorney/Law Firms</label>
						</div>
						<div>
							<label for="16" class="checkbox-inline"><input type="checkbox" name="area[]" value="Auto Dealers" />Auto Dealers</label>
						</div>
						<div>
							<label for="17" class="checkbox-inline"><input type="checkbox" name="area[]"value="Auto Dealers, Japanese" />Auto Dealers, Japanese</label>
						</div>
						<div>
							<label for="18" class="checkbox-inline"><input type="checkbox" name="area[]" value="Auto Manufacturers" />Auto Manufacturers</label>
						</div>
						<div>
							<label for="19" class="checkbox-inline"><input type="checkbox" name="area[]" value="Automotives" />Automotives</label>
						</div>
						<div>
							<label for="20" class="checkbox-inline"><input type="checkbox" name="area[]" value="Banking, Mortgage" />Banking, Mortgage</label>
						</div>
						<div>
							<label for="21" class="checkbox-inline"><input type="checkbox" name="area[]" value="Banks, Commercial" />Banks, Commercial</label>
						</div>
						<div>
							<label for="22" class="checkbox-inline"><input type="checkbox" name="area[]" value="Banks, Savings & Loans" />Banks, Savings & Loans</label>
						</div>	
					</div>      
					<div class="form-group">
						<label for="image">Photo</label>
						<input type="file" class="form-control" name="image[]" multiple="multiple" />	
							
					</div>
					<div class="form-group">
						<label for="file">CV (Optional)</label>
						<input type="file" class="form-control" name="cv[]" multiple="multiple" />
					</div> 
					
						
					<button type="submit" name="submit" class="btn btn-primary">Register</button>       
				</form>
			</div>
		</div> 
	</div>

<div class="logo"></div>
<div class="panel-footer text-right" style="height: 680px; background-image: none; background-color: rgb(100,10,250);">

	
	<hr class="hr" style="color: red;">
	<h3 class="text-center" style="margin-top: 50px; color: gold;">I AM Limitless. <span style="color: white;">Powered By</span> FloodGates.</h3>
</div>




</body>
</html>