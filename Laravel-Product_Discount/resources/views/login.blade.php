<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/login" method="POST">
    <p>@csrf</p>
    <p>
        Product Description:<input type="text"  size="30" name="PD" placeholder="PD" /><br/>
    </p>
    <p>
        List Price:<input type="text" size="30" name="List" placeholder="List" /><br/>
    </p>
    <p>
        Discount Percent:<input type="text" size="30" name="Discount" placeholder="Discount" />
    </p>
    <p>
        <button type="submit">Calculator</button>
    </p>
</form>
</body>
</html>