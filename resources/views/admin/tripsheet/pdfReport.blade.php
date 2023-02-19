<!DOCTYPE html>
<html>
<head>
    <title>Trips Report</title>
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
            <th>EMPLOYEE NAME</th><td>{{$user->name}}</td>
            <th>EMPLOYEE ID</th><td>C{{$user->id}}</td>
        </tr>
        <tr>
            <th>DEPARTMENT</th><td>ICT</td>
            <th>ADMITTED DATE</th><td>{{ Carbon\Carbon::parse ($user->created_at)->format('Y-m-d')}}</td>
        </tr>
        <tr>
            <th>EMAIL</th><td>{{$user->email}}</td>
            <td></td></td><td></td>
        </tr>
    </table>

    <h2 class="header" style="color:blue">TRIP REPORT</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TRUCK NO</th>
                <th>DRIVER</th>
                <th>TURNBOY</th>
                <th>START</th>
                <th>END</th>
                <th>FILLED BY</th>
                <th>DATE ADDED</th>
            </tr>
        </thead>
        <tbody>
            @if(count($trips) == 0)
                <tr>
                    <td colspan="8" class="text-center">No data found</td>
                </tr>
            @endif
            @foreach($trips as $trip)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$trip->truckno}}</td>
                    <td>{{$trip->driver}}</td>
                    <td>{{$trip->turnboy}}</td>
                    <td>{{$trip->startdate}}</td>
                    <td>{{$trip->enddate}}</td>
                    <td>{{$trip->user->name}}</td>
                    <td>{{$trip->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>