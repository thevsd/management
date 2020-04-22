<html>
    <head>
        <title>Test</title>

		<!-- W3 CSS-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style type="text/css">
            body{
				background: url(wallpaper.jpg);
				background-size: cover;
                margin: 0;
                padding: 0;
				font-family: 'Playfair Display', serif;
				background-repeat: no-repeat;
            }

            .Header{
                width: 100vw;
                background-color: #62D1C7;
                color: white;
                padding: 5px;
            }

            .main{
                border-radius: 10px;
                width: 800px;
                background-color: #FFE061;
                margin-left: auto;
                margin-right: auto;
            }

            #listHeader{
                font-size: 180%;
                margin-left: 20vw;
            }

            #cusList{
                
            }
        </style>
    </head>

    <body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Customer Managent</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="text-primary nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </div>
        </nav>

        <p class="main">
            <span id="listHeader">List of customers:</span>
            <table  class="w3-table w3-striped w3-bordered" id="cusList">
            <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>

				<?php
					$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "b3b904e2b6a5bd", "c89c04f9", "heroku_5abb989acb9536e");
					if($conn-> connect_error) {
						die("Connection failed:". $conn-> connect_error);
					}

					$sql = "SELECT customerID, fullName, dateOfBirth, address from customers";
					$result = $conn-> query($sql);
					if($result-> num_rows > 0) {
						while($row = $result-> fetch_assoc()) {
							echo "<tr><td>". $row["customerID"] ."</td><td>". $row["fullName"] ."</td><td>". $row["dateOfBirth"] ."</td><td>". $row["address"]. "</td></tr>";
						}
						echo "</table>";
					} else {
						echo "0 results";
					}

				?>
        	</table>
        </p>
    </body>
</html>