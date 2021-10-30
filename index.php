<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>POPULAR CONNECTION</h1>
<form action="store.php" method="post">
    <div class="main">
        <label for="item">Item</label><br>
        <input type="text" name="item" id="item" required><br>

        <label for="supplier">Supplier</label><br>
        <input type="text" name="supplier" id="supplier" required><br>

        <label for="invoice">Invoice no.</label><br>
        <input type="number" name="invoice" id="invoice" required><br>

        <label for="unit">unit</label><br>
        <input type="text" name="unit" id="unit"><br>

        <label for="qunt">quantaty</label><br>
        <input type="number" name="qunt" id="qunt" required><br>


        <label for="rate">Rate</label><br>
        <input type="float" name="rate" id="rate" required><br><br>
        <input type="submit" value="Save">
    <!-- <p>
        <label for="vat">VAT</label>
        <input type="radio" name="vat" id=vat required>
        <label for="vat">allagable</label><br>
        <input type="radio" name="vat" id=vat required>
        <label for="vat">notallagable</label>
        <br>
    </p> -->
    </div>
</form>
<hr>
<!-- this part is for displaying the data from database -->
<table border="2px" id=t1>
    <tr>
        <th>Item</th>
        <th>Supplier</th>
        <th>Invoice no.</th>
        <th>Unit</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>action</th>
    </tr>

<?php 
include 'connect.php';
$sql = "SELECT * FROM purchase";


$view = mysqli_query($conn, $sql);

if($view){
    while($row = mysqli_fetch_assoc($view)){
        $id = $row['id'];
        $item = $row['item'];
        $supplier = $row['supplier'];
        $invoice = $row['invoice'];
        $unit = $row['unit'];
        $quant = $row['qunt'];
        $rate = $row['rate'];

?>

<tr>
    <td>
        <?php echo $item;?>
    </td>
    <td>
        <?php echo $supplier;?>
    </td>
    <td>
        <?php echo $invoice;?>
    </td>
    <td>
        <?php echo $unit;?>
    </td>
    <td>
        <?php echo $quant;?>
    </td>
    <td>
        <?php echo $rate;?>
    </td>
    <!-- <td>
        <?php echo $item;?>
    </td>
    <td>
        <?php echo $item;?>
    </td>
    <td>
        <?php echo $item;?>
    </td> -->
    <td>
        <a href="edit.php?id=<?php echo $id; ?>">edit</a> 
        <a href="delet.php?id=<?php echo $id; ?>">del</a> 
    </td>

</tr>

<?php


    }
}





 ?>

</table>





        
    </div>
    
</body>
</html>