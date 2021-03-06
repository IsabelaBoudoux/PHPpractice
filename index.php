<!DOCTYPE HTML>
<html>
	<head>
		<title> Manga Store</title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" href="style/main.css">
	</head>
	<body>
		<header>
			<img src="image/narutoIcon.jpg">
			<h2>All Mangas here</h2><br/>
			<p>Buy your maga here now</p>
		</header>
		<main>
			<form method="post" action="php/confirm.php" name="orderForm">
				<div id="mangaDiv"></div>
				<div id="err"></div>
				<div id="shipping">
					<table>
						<tbody>
							<th colspan="2">Shipping address</th>
							<tr>
								<td><label>Last Name</label> </td>
								<td><input type="text" name="lastname" id="lstnm"></input></td>
							</tr>
							<tr>
								<td><label>Fisrt Name</label></td>
								<td><input type="text" name="firstname" id="fstnm"></input>
								</td>
							</tr>
							<tr>
								<td><label>Address</label></td>
								<td><input type="text" name="address" id="add"></input></td>
							</tr>
							<tr>
								<td><label>City</label></td>
								<td><input type="text" name="city" id="ct"></input></td>
							</tr>
							<tr>
								<td><label>Province</label></td>
								<td>
									<select name="province" id="prv">
										<option value="Alberta" selected>Alberta</option>
										<option value="British Columbia">British Columbia</option>
										<option value="Manitoba">Manitoba</option>
										<option value="New Brunswick">New Brunswick</option>
										<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
										<option value="Nova Scotia">Nova Scotia</option>
										<option value="Ontario">Ontario</option>
										<option value="Prince Edward Island">Prince Edward Island</option>
										<option value="Quebec">Quebec</option>
										<option value="Saskatchewan">Saskatchewan</option>
										<option value="Northwest Territories">Northwest Territories</option>
										<option value="Nunavut">Nunavut</option>
										<option value="Yukon">Yukon</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Postal Code</label></td>
								<td><input type="text" name="postalcode" id="pstcode"></input></td>
							</tr>
							<tr>
								<td><label>Phone Number</label></td>
								<td><input type="text" name="phone" id="phn"></input><br/>
									<p>(eg. 222-222-2222, 2222222222)</p>
								</td>
							</tr>
							<tr>
								<td><label>Email Adress</label></td>
								<td><input type="text" name="email" id="mail"></input></td>
							</tr>
							<tr>
								<td colspan="2">
									<div id="btn">
										<button type="button" id="button" onclick="validate()">Order</button>
										<button type="reset">Cancel</button>
										<button type="button" onclick="autoFill()">test</button>
									</div>								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>	
		</main>
		<footer>
		<p>&copy; 2019 Isabela Boudoux</p>
		</footer>
	</body>


</html>