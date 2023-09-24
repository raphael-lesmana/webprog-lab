<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="margin-left: 300px; margin-right: 300px; margin-top: 100px; background-color: black; color: gold">
    <button class="btn btn-dark" style="width: 655px; color: gold; margin-bottom: 30px">查看 | Checkout</button>
    <p style="color: white">Billing Information</p>

    <div class="grid">
        <div class="row">
            <div class="col-6">
                <label>Full name</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Min 5 Characters">

                <label>Country</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Afghanistan">

                <label>Card Name</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Min 3 Characters">
            </div>

            <div class="col-6">
                <label>Phone Number</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Has to be 12 numbers">

                <label>City</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Min 5 Characters">

                <label>Card Number</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" placeholder="Must be numerical and have 16 characters">
            </div>
        </div>
    </div>
    <p style="color: white">Additional Information</p>
    <label>Address</label>
    <textarea type="text" style="width: 650px; margin-bottom: 10px" placeholder="Min 5 Characters"></textarea>
    <label>Zip/Postal Code</label>
    <input type="number" style="width: 650px" placeholder="Fill with number only">
    
</body>

</html>