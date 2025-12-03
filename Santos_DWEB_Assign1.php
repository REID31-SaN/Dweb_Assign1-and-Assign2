<?php
declare(strict_types=1);
//I.1 Strict Type

// TITLES AND TAGLINE
$storeName = "That Headphone Shop";
$tagline = "For professionals, by professionals.";

// I3:Global variable
$tax = 12;

// PRODUCT LINE (I2: multidimensional array)
$headphoneLine = [
    "Sennheiser HD 600" => [22500.00, 6],
    "Sennheiser HD 660s" => [34500.00, 7],
    "Sennheiser HD 560s" => [14000.00, 8],

    "Audio Technica ATH-R70x" => [22000.00, 10],
    "Audio Technica ATH-M50" => [13000.00, 12],
    "Audio Technica ATH-R50x" => [9000.00, 10],

    "Sony MDR-7506" => [7200.00, 4],
    "Sony MDR-V6" => [11000.00, 10],
    "Sony MDR-CD900ST" => [12000.00, 10]
];

//I 4-5: get_recorder_message
function getReorderMessage (int $stock){
    return $stock < 10 ? "Yes" : "No";
}

//I 6-7: get_total_value
function getTotalValue($price, $quantity){
    return $price * $quantity;
}

//I 8-9: get_tax_due
function getTaxDue($price, $quantity, $taxRate = 0){
    $totalValue = $price * $quantity;
    return $totalValue * ($taxRate / 100);
}

include 'Santos_Header.php';
?>

<!-- Price list for Main Stream Headphones section -->
<table>
    <h2>Industry Standard Line</h2>
    <tr>
        <th>HEADPHONE MODEL</th>
        <th>(₱) PRICE</th>
        <th>STOCKS</th>
        <th>RE-ORDER</th>
        <th>(₱) TOTAL</th>
        <th>(₱) TAX DUE</th>
    </tr>
    <?php
    //I 10-16: foreach
    foreach($headphoneLine as $model => $data){
        $price = $data[0];
        $stock = $data[1];

        $reOrder = getReorderMessage($stock);
        $totalValue = getTotalValue($price, $stock);
        $taxDue = getTaxDue($price, $stock, $tax);

        //number_format is used within this section of the code to format them into two decimal places
        echo "<tr>";
        echo "<td>$model</td>";
        echo "<td>₱ " . number_format($price, 2) . "</td>";
        echo "<td>$stock</td>";
        echo "<td>$reOrder</td>";
        echo "<td>₱ " . number_format($totalValue, 2) . "</td>";
        echo "<td>₱ " . number_format($taxDue, 2) . "</td>";
        echo "</tr>"; 
    }
    ?>    
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
            <td>$ <?= number_format($price)?></td>
        </tr>
    <?php }?>
</table>

<?php include 'Santos_footer.php'; ?>
