<html>
    <head>
        <title>Test</title>

        <!-- W3 CSS-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel = "stylesheet" type="text/css" href="style/index.css">
    </head>

    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Customer Managent</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">Customers</a>
                        </li>
                        <li class="text-primary nav-item">
                            <a class="nav-link" href="order.php">Orders</a>
                        </li>
                        <li class="text-primary nav-item">
                            <a class="nav-link" href="product.php">Products</a>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="header">
            <h2>Add a customer?</h2>
        </div>

        <form method="post" action="customer.php">
            <div class="input-group">
                <lable>Customer's ID</label><br>
                <input type="text" name="customerID">
            </div>

            <div class="input-group">
                <lable>Full Name</label><br>
                <input type="text" name="fullName">
            </div>

            <div class="input-group">
                <lable>Birthday</label><br>
                <input type="text" name="birthday">
            </div>

            <div class="input-group">
                <lable>Address</label><br>
                <input type="text" name="address">
            </div>

            <div class="input-group">
                <button type="submit" name="add" class="btn">Add</button>
            </div>
        </form>

        <?php include('add.php'); ?>
        
        <!-- display errors if occur -->
        <?php include('errors.php');?>

        <p class="main">
            <span class="enlarge">List of customers:</span>
            <table  class="w3-table w3-striped w3-bordered" id="cusList">
            <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>

                <?php
                    include('db_connect.php');
                    
                    $sql = "SELECT customerID, fullName, dateOfBirth, address from customers";
                    $result = $db-> query($sql);
                    if($result-> num_rows > 0) {
                        while($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["customerID"] ."</td>";
                            echo "<td>". $row["fullName"] ."</td>";
                            echo "<td>". $row["dateOfBirth"] ."</td>";
                            echo "<td>". $row["address"]. "</td></tr>";
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