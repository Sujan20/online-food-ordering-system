<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		include 'header.php';
	?>
	<link rel="stylesheet" href="./css/home.css" rel="stylesheet"/>
    <title>EMU Bank Austrlalia</title>
</head>
<body>
	<?php
//if session variable is true i.e. user is logged in
		if(isset($_SESSION['loggedin']))
		{
//fetch user first and last name
			while($row = mysqli_fetch_assoc($result))
			{
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
			}
	?>
<!--display Welcome message for logged in customer-->
			<h2> Welcome <?php echo $firstname, " ", $lastname;?> </h2><br>	
	<?php
//if customer has an account no then display the account number and current balance
			if (isset($accountno))
			{
				?>
				<h3> Current Balance </h3><br>
				<table>
						<tr>
							<th>BSB</th>
							<th>ACCOUNT NUMBER</th>
							<th>ACCOUNT BALANCE</th>
						</tr>
						<tr>
							<td><?php echo $bsbno;?></td>
							<td><?php echo $accountno;?></td>
							<td><?php echo "$ ", $balance;?></td>
						</tr>
				</table>
			<?php
			}
//if customer doesn't have an account no then display the message.
			else
			{
				echo "<h4 align='center'>Your account has not been created yet. Please contact Bank Admin</h4>";
			}
		}
	?>
    <main>

<!--Display the following in index at all times irrespective of user login status-->
        <section class="presentation">
            <div class="introduction">
                <div class="info-text">
                    <h1>Have your dream home</h1>
                    <p>Apply for a Emu Home Loan today to get our low interest rate and low-fee home loans.</p>
                </div>
                <div class="cta">
                    <button class="apply-inquire"> Inquire now</button>
                </div>
            </div>
            <div class="cover">
                <img src="./Images/loan.jpg" alt="homeloan">
            </div>

        </section>
        <section class="presentation1">
            <div class="cover1">
                <img src="./Images/credit.jpg" alt="credit">
            </div>
            <div class="introduction1">
                <div class="info-text1">
                    <h1>Credit cards</h1>
                    <p>Choose from our range of low rate, low fee and awards cards.</p>
                </div>
                <div class="cta1">
                    <button class="apply-inquire1"> Apply now</button>
                </div>
            </div>
			</section>
</main>
<?php
	include 'footer.php';
?>
</body>
</html>
