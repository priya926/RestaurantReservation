<table class="table">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Restro Name</th>
        <th scope="col">ID</th>
    </tr>
</thead>
<tbody>
    @foreach ($restrodetails as $res)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$res->name}}</td>
        <td>{{$res->restro_id}}</td>
    </tr>
    @endforeach
</tbody>
</table>