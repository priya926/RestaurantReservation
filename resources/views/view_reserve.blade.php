@include('restaurant')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div style='width:1000px;margin:auto;'>
<br>
<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Person</th>
        </tr>
    </thead>
    @foreach($tdetails as $tdetail)
    <tbody>
        <tr>
            <td>{{$tdetail->id}}</td>
            <td>{{$tdetail->name}}</td>
            <td>{{$tdetail->email}}</td>
            <td>{{$tdetail->contact}}</td>
            <td>{{$tdetail->date}}</td>
            <td>{{$tdetail->time}}</td>
            <td>{{$tdetail->person}}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
    <br>
</body>
</html>
@include('restrofooter')