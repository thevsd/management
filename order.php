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

        <p class="main">
            <span id="listHeader">List of customers:</span>
            <table  class="w3-table w3-striped w3-bordered" id="cusList">
            <tr>
                <th>ID</th>
                <th>Customer's ID</th>
                <th>Product's ID</th>
                <th>Shipped Date</th>
                <th>Address</th>
            </tr>

                <?php
                    include('db_connect.php');
                    
                    $sql = "SELECT orderID, customerID, productID, shippedDate, shippedAddress from orders";
                    $result = $db-> query($sql);
                    if($result-> num_rows > 0) {
                        while($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["orderID"] ."</td>";
                            echo "<td>". $row["customerID"] ."</td>";
                            echo "<td>". $row["productID"] ."</td>";
                            echo "<td>". $row["shippedDate"] ."</td>";
                            echo "<td>". $row["shippedAddress"]. "</td></tr>";
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