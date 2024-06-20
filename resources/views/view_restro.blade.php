@include('admin')
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
@if(Session::has('restro_delete'))
    <span>{{Session1::get('restro_delete')}}</span>
@endif
<div style='width:1000px;margin:auto;'>
<br>
<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Restaurant Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <!-- <th scope="col">Status</th> -->
        <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach($rdetails as $rdetail)
    <tbody>
        <tr>
            <td>{{$rdetail->id}}</td>
            <td>{{$rdetail->name}}</td>
            <td>{{$rdetail->contact}}</td>
            <td>{{$rdetail->email}}</td>
            <td style="padding: 15px 5px 5px 30px;"><a href="/delete-restro/{{$rdetail->id}}"><i class='bx bxs-trash'></i></a></td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
    <br>
</body>
</html>
@include('restrofooter')