<?php 

if(isset($_POST['convert'])){
	$value = $_POST['value'];
	$amount = $_POST['amount'];
	$currency = $_POST['currency'];

	if($value=="EURO" && $currency=="GBP"){
			$converted = $amount *0.86 ;
			echo $converted;
	}
	if($value=="EURO" && $currency=="USD"){
			$converted = $amount * 1.04;
			echo $converted;

		
	}
	 if($value=="EURO" && $currency=="CHF"){
			$converted = $amount * 1;
			echo $converted;
	}
	 if($value=="EURO" && $currency=="AUD"){
			$converted = $amount *1.53;
			echo $converted;
	}
	 if($value=="EURO" && $currency=="CAD"){
			$converted = $amount*1.53;
			echo $converted;
	}
	 if($value=="EURO" && $currency=="MXN"){
			$converted = $amount*21.07;
		
	}
	if($value=="EURO" && $currency=="SEK"){
			$converted = $amount*10.74;
			echo $converted;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Dream</title>
</head>
<style>
body {
	background-image: url("/asset/pexels-michael-steinberg-342943.jpg");
	background-position: center;
	background-position-y: center;
	background-repeat: no-repeat;
	margin: auto;
}

h2 {
	text-align: center;
	color: #362419;
	font-family: 'Courier New', Courier, monospace;
}

form {
	margin: auto;
	width: 810px;
	margin-top: 250px;
	height: 400px;
	border: 2px solid green;
	background-color: aliceblue;
	-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
	box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
	backdrop-filter: blur(16px) saturate(180%);
	-webkit-backdrop-filter: blur(16px) saturate(180%);
	background-color: rgba(255, 255, 255, 0.75);
	border-radius: 12px;
	border: 1px solid rgba(209, 213, 219, 0.3);

}

.first {
	margin: auto;
	margin-left: 90px;
}

.second {
	margin-left: 70px;
	padding: 10px;
}

select {
	margin: auto;
	color: #362419;
	font-family: 'Courier New', Courier, monospace;
}

label {
	font-family: 'Courier New', Courier, monospace;
	text-align: center;
	margin-left: 80px;
	color: #362419;


}

::placeholder {
	font-family: 'Courier New', Courier, monospace;
	font-size: 12px;
}

button {
	width: 100px;
	height: 20px;
	font-family: 'Courier New', Courier, monospace;
	color: #362419;
}
</style>

<body>
	<form method="POST">
		<h2>Currency Converter
		</h2>
		<div class="first">
			<select name="value">
				<option valueue="EURO">EURO</option>
			</select>
			<input type="number" min="0" name="amount" placeholder="amount to be converted.." />
		</div>
		<div class="second">
			<select name=" currency" required="required">
				<option valueue="">
					<p>Select Currency</P>
				</option>
				<option valueue="USD">USD</option>
				<option valueue="GBP">GBP</option>
				<option valueue="CHF">CHF</option>
				<option valueue="AUD">AUD</option>
				<option valueue="NOK">NOK</option>
				<option valueue="MKN">MXN</option>
				<option valueue="CAD">CAD</option>
				<option valueue="SEK">SEK</option>
			</select>
			<button type="submit" name="convert">
				Convert
			</button> <br>
			<br>
			<label>Amount</label>
			<?php 
					echo $converted;
					?>
		</div>
		</div>
	</form>
</body>

</html>