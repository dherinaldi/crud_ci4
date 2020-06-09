<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body> 
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($product->getResultArray() as $data) {?>
            <tr>
                <td><?php echo $data['product_name'];?></td>
                <td><?php echo $data['product_price'];?></td>
            </tr>
            <?php
        }
        ?>
        
    </tbody>
</table>
</body>
</html>