<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - BudakMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: white;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Thank You for Your Purchase!</h1>
    <p>Your redemption code is: <strong id="code"><?php echo htmlspecialchars($_GET['code']); ?></strong></p>
    <p>Use this code in Minecraft with the command <code>/redeem [code]</code> to receive your items!</p>

    <button onclick="window.location.href='checkout.html'">Exit</button>
</body>
</html>
