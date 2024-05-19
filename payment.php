<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 15px;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Information</h2>
    <form action="/submit-payment" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Billing Address</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" id="state" name="state" required>
        </div>
        <div class="form-group">
            <label for="zip">ZIP Code</label>
            <input type="text" id="zip" name="zip" required>
        </div>
        <div class="form-group">
            <label for="card-name">Name on Card</label>
            <input type="text" id="card-name" name="card-name" required>
        </div>
        <div class="form-group">
            <label for="card-number">Credit Card Number</label>
            <input type="text" id="card-number" name="card-number" required>
        </div>
        <div class="form-group">
            <label for="exp-month">Expiration Month</label>
            <input type="text" id="exp-month" name="exp-month" placeholder="MM" required>
        </div>
        <div class="form-group">
            <label for="exp-year">Expiration Year</label>
            <input type="text" id="exp-year" name="exp-year" placeholder="YYYY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit Payment">
        </div>
    </form>
</div>

</body>
</html>
