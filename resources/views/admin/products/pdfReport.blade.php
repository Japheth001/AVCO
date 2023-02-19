<!DOCTYPE html>
<html>
<head>
    <title>Stock Report</title>
    <style>
        th, td {
            border: 1px solid;
            text-align: left;
        }
        .header {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto,
        }
    </style>
</head>
<body>
    <div class="header"><img src="{{public_path('/awoza/images/logo7.jpg')}}" alt="logo" width="100" height="100"></div>
    <h2 class="header" style="color:red">AVCO LIMITED</h2>
    <p class="header">P.O. BOX 00200-4533 NAIROBI, KENYA</p>
    <p class="header">+254 715 200200</p>
    <p class="header">Email: test@example.com ~ https://example.com</p>

    <table style="width:85%; font-size:0.8rem; margin:auto">
        <tr>
            <th>EMPLOYEE NAME</th><td>Christian E</td>
            <th>EMPLOYEE ID</th><td>C001</td>
        </tr>
        <tr>
            <th>DEPARTMENT</th><td>ICT</td>
            <th>ADMITTED DATE</th><td>222-07-07</td>
        </tr>
        <tr>
            <th>EMAIL</th><td>christian@gmail.com</td>
            <td></td></td><td></td>
        </tr>
    </table>

    <h2 class="header" style="color:blue">STOCK REPORT</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>DATE ADDED</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->original_price}}</td>
                    <td>{{$product->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>