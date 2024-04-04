
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="cart.css">
    </head>
    <body>
        <header>
            <h1>Shopping Cart</h1>
        </header>
        <?php
        $con = mysqli_connect("localhost","root","","shop_db");
        $result = mysqli_query($con,"SELECT * FROM food");
        $data = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        
        <table border="1">
          <tr>
            <th>Cake</th>
            <th>Weight</th>
            <th>Price</th>
          </tr>
          <?php foreach($data as $row): ?>
          <tr>
            <td><?= htmlspecialchars($row['cake']) ?></td>
            <td><?= htmlspecialchars($row['weight']) ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
        
          </tr>
          <?php endforeach?>
          </table>
        <div class="pay-section">
            <?php
            $con = mysqli_connect("localhost","root","","shop_db");
            $result = mysqli_query($con,"SELECT SUM(price) AS sp FROM food");
            $data = $result->fetch_all(MYSQLI_ASSOC);
            $total = $data[0]['sp'];
            echo "<p>Total: $total</p>";
            ?>
            
            <form action="payment.html" method="post">
                <input type="submit" value="Pay">
            </form></body>
            </html>