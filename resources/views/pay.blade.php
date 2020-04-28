<!DOCTYPE html>
<html>
<head>
    <title></title>
    {{--    <link rel="stylesheet" type="text/css" href="public/css/payw.css">--}}
    <link rel="stylesheet" type="text/css" href="css/payment.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <div class="payment">
        <div class="payment-logo">
            <p>P</p>
        </div>
        <h2>Payment Gateway</h2>
        <div class="form">
            <div class="card space icon-relative">
                <label class="label">Card Holder:</label>
                <input type="text" class="input" name="card_holder" placeholder="Card Holder Name">
                <i class="fa fa-user"></i>
            </div>

            <div class="card space icon-relative">
                <label class="label">Card Number</label>
                <input type="text" class="input" name="card_Number" placeholder="Card Number" data-mask="0000 0000 0000 0000">
                <i class="fa fa-credit-card"></i>
            </div>

            <div class="card-grp space">
                <div class="card-item icon-relative">
                    <label class="label">Expiry date</label>
                    <input type="text" class="input" name="expiry_date" placeholder="00 / 00" data-mask="00/00">
                    <i class="fa fa-calendar"></i>

                </div>


                <div class="card-item icon-relative">
                    <label class="label">CVV</label>
                    <input type="text" class="input" name="cvv" placeholder="000" data-mask="000">
                    <i class="fa fa-lock"></i>


                </div>
            </div>
            <button class="btn">Pay</button>


        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


</body>
</html>
