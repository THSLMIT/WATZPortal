<div id = "page-wrapper" style = "padding: 10px">
	<style>
		input{
			width: 100%;
			border-radius: 5px;
			padding: 5px;
		}
		label{
			padding: 5px;
		}
		
	</style>
	
	<div class = "row">
		<h2 class = "col-lg-12">Account Settings</h2>
	</div><br />
	
	<div class = "row">
		<div class = "col-md-8">
			<div class = "panel panel-default">
				<div class = "panel-heading">Account Info <i class = "fa fa-info-circle"></i></div>
				<div class = "panel-body">
					<div class = "row">
						<div class = "col-md-4">
							<label for = "firstName"> First Name: </label><br />
							<label for = "lastName"> Last Name: </label> <br />
							<label for = "email"> Email: </label> <br />
							<label for = "homeNumber"> Home Number: </label><br />
							<label for = "cellNumber"> Cell Number: </label><br />
							<label for = "address1"> Primary Address: </label><br />
							<label for = "address2"> Secondary Address: </label><br />
							<label for = "city"> City:  </label><br />
							<label for = "state">State: </label> <br />
							<label for = "zip"> Zip Code: </label><br />
							<label for = "country"> Country: </label><br />
						</div>
						<form method = "post" action = "">
						<div class = "col-md-8">
							 <input type = "text" name = "firstName" value = "John"> <br />
							<input type = "text" name = "lastName" value = "Doe"> <br />
							<input type = "text" name = "email" value = "johnDoe@gmail.com"> <br />
					 		<input type = "text" name = "homeNumber" > <br />
							<input type = "text" name = "cellNumber"> <br />
							<input type = "text" name = "address1"> <br />
							<input type = "text" name = "address2"> <br />
							<input type = "text" name = "city"> <br />
							<input type = "text" name = "state"> <br />
							<input type="text" name="zip" /> <br />
							<input type = "text" name = "country" /><br />
						</div>
					</div><br />
					<center>
						<input type = "submit" class = "form-control" name = "submit" style = "width: 50%;" value = "Change Info">
						</form>
					</center>
					
				</div>
			</div>
		</div>
	</div>
	
</div>
