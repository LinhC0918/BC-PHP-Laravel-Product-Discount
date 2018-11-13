<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<form  method="post">
    <p>@csrf</p>
    <h2>Product Discount Calculator</h2>
    <label>Product Description: </label>
    <span><?php echo $Product?></span><br/>
    <label>Price: </label>
    <span><?php echo $List_Price?></span><br/>
    <label>Discount Percent: </label>
    <span><?php echo $Discount?></span><br/>
    <label>Discount Amount: </label>
    <span><?php echo $Discount_Amount?></span><br/>
    <label>Discount Price: </label>
    <span><?php echo $Discount_Price?></span>

</form>
</body>
</html>