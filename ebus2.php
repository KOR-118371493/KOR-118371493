<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

/*
 *Create a session variable for the mobile number
 */
 $totalValue = $_POST['txtTotal'];
 $_SESSION['txtName'] = $fullNameValue;
 $_SESSION['txtTotal'] = $totalValue2;
 
 
 /**
  * Allocate the mobile number session variable to a text box
  */
  
  ?>
  
  <!DOCTYPE html>
  <html>
		<head>
			<title>eBusiness 2</title>
		</head>
		<body>
			<div class= "form">
				<form name="Details" method="post" action="eBusiness3.php">
					<center>
						<table cellspacing="10">
							<tr>
								<td><b></b></td>
								<td><b>Enter in your Details Below</b></td>
								</tr>
								<tr>
									<td>Name</td>
                                                                        <td><input type="text" id="txtName" name="txtName" value="" required="" /></td>
								</tr>
								<tr>
									<td>Phone Number</td>
                                                                        <td><input type="text" id="txtNum" name="txtNum" value="" required="" onkeypress="return isNumber(event)" /></td>
								</tr>
								<tr>
									<td>Password</td>
                                                                        <td><input type="text" id="txtPassword" name="txtPassword" value="" required="" onkeypress="return isNumber(event)" /></td>
								</tr>
								
								<tr>
									
									<td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
								</tr>
								
							</table>
						</center>
						
						
					<center>
							<input type="submit" id="btnContinue" name="btnContinue" onclick="" value="Continue" />
					</center>
					</div>
                    <script>
                    //the following code if from https://stackoverflow.com/questions/7295843/allow-only-numbers-to-be-typed-in-a-textbox
                    function isNumber(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                    }
                    return true;
}
                    </script>
					</form>
				</body>
			</html>