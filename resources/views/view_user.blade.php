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
    @if(Session::has('user_delete'))
    <span>{{Session1::get('user_delete')}}</span>
    @endif
<div style='width:1000px;margin:auto;'>
<br>
<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <!-- <th scope="col">Status</th> -->
        <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach($udetails as $udetail)
    <tbody>
        <tr>
            <td>{{$udetail->id}}</td>
            <td>{{$udetail->name}}</td>
            <td>{{$udetail->contact}}</td>
            <td>{{$udetail->email}}</td>
            <td style="padding: 15px 5px 5px 30px;"><a href="/delete-user/{{$udetail->id}}"><i class='bx bxs-trash'></i></a></td>
        </tr>
    </tbody>
    @endforeach
    </table>
</div>
    <br>
</body>
</html>
@include('restrofooter')