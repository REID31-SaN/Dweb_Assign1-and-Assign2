<!-- SANTOS JEORGE ANDREI BENEDICT M.    WD-201 -->
<?php
// TITLES AND TAGLINE
$storeName = "That Headphone Shop";
$tagline = "For professionals, by professionals.";

// PRODUCT LINE
$product1 = [
    "name" => "Sennheiser HD 600",
    "price" => 22800,
    "stock" => 10
];
$product2 = [
    "name" => "Audio Technica ATH-R70x",
    "price" => 22300,
    "stock" => 10
];
$product3 = [
    "name" => "Sony MDR-7506",
    "price" => 7200,
    "stock" => 10
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>That Headphone Shop</title>
    <!-- CSS across two php files -->
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            color:black;
            background-color: #e3e1e1ff;
            margin: 0;
            padding: 40px;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1{
            color: #FF6B35;
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        h2{
            color: black;
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: 400;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        th {
            background-color: #2f2f2fff;
            color: #FF6B35;
            padding: 12px;
            text-align: left;
            font-weight: bold;
        }

        tr{
            background-color: #ffffff;
            border-bottom: 1px solid #dddddd;
        }
        td {
            padding: 12px;
            text-align: left;
        }
        tr:hover{
            background-color: #2f2f2fff;
            color: #FF6B35;
        }

        footer {
            background-color: #2f2f2fff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            width: 100%;
            box-sizing: border-box;
        }

        footer p {
            margin: 0;
        }

        footer .orange {
            color: #FF6B35;
        }

    </style>
</head>

<body>
    <h1><?php echo $storeName ?></h1>
    <h2><?php echo $tagline ?></h2>
    
    <!-- Price list for Main Stream Headphones section -->
    <table>
        <h2>Industry Standard Line</h2>
        <tr>
            <th>Model</th>
            <th>Price</th>
            <th>In Stock</th>
        </tr>
        <tr>
            <td><?php echo $product1["name"]; ?></td>
            <td>₱ <?php echo $product1["price"]; ?></td>
            <td><?php echo $product1["stock"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $product2["name"]; ?></td>
            <td>₱ <?php echo $product2["price"]; ?></td>
            <td><?php echo $product2["stock"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $product3["name"]; ?></td>
            <td>₱ <?php echo $product3["price"]; ?></td>
            <td><?php echo $product3["stock"]; ?></td>
        </tr>
    </table>

    <!-- Price List for the premium headphone section -->
    <?php
    $products = [
        'Meze Elite' => 4000,
        'Sennheiser HE-1' => 60000,
        'Meze Empyrean' => 2999,
    ];
    ?>
    <h2>Premium Line (Request price upon ordering)</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) {?>
            <tr>
                <td><?= $item?></td>
                <td>$ <?= $price?></td>
            </tr>
        <?php }?>
    </table>

    <footer>
        <p>Created By: SANTOS JEORGE ANDREI BENEDICT M - WD-203 &copy; <span class="orange"><?php echo date('Y')?></span></p>
    </footer>
</body>
</html>
