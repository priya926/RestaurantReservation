@include('restaurant')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .home-section{
            position: relative;
            /* background: #E4E9F7; */
            background-image: url(../images/rbg1.jpg);
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
            height: auto;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
        }
    </style>
</head>
<body>
<div style='width:1200px;margin:auto;'>
<form action="/restroupdate/{{$restrodetails->restro_id}}" method="POST" enctype="multipart/form-data">
    @csrf
        <table class="table table-dark table-hover">
            <tr>
                <td colspan=6><h5>RESTAURANT DETAILS</h5></td>
            </tr>
            <tr>
                <td>Restaurant Name</td>
                <td colspan=5><input type='text' name="name" value='{{$restrodetails->name}}' class='form-control' size=80 ></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td colspan=5><input type='text' name="contact" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" value='{{$restrodetails->contact}}' size=80 class='form-control' ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td colspan=5><input type="email"  name="email" value='{{$restrodetails->email}}' class='form-control' ></td>
            </tr>
            <tr>
                <td>Address</td>
                <td colspan=5><textarea rows=2 cols=30 name="address" required class='form-control'>{{$restrodetails->address}}</textarea></td>
            </tr>
            <tr>
                <td>Cost per two</td>
                <td colspan=5><input type="number" name="cost_per_two" value='{{$restrodetails->cost_per_two}}' class='form-control' size=80 placeholder='Enter the cost per two person' required></td>
            </tr>
            <tr>
                <td>Cuisine</td>
                <td colspan=5><textarea rows=2 cols=30 name="cuisine" required class='form-control'>{{$restrodetails->cuisine}}</textarea></td>
            </tr>
            <tr>
                <td colspan="2">Duration (Mon-Fri)</td>
                <td>Opening Time</td>
                <td><input type="time" name="otime" value='{{$restrodetails->otime}}' class='form-control' required></td>
                <td>Closing Time</td>
                <td><input type="time" name="ctime" value='{{$restrodetails->ctime}}' class='form-control' required></td>
            </tr>
            <tr>
                <td colspan="2">Weekend Duration</td>
                <td>Opening Time</td>
                <td><input type="time" name="wotime" value='{{$restrodetails->wotime}}' class='form-control' required></td>
                <td>Closing Time</td>
                <td><input type="time" name="wctime" value='{{$restrodetails->wctime}}' class='form-control' required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td colspan=5><textarea rows=2 cols=30 name="description" required class='form-control'>{{$restrodetails->description}}</textarea></td>
            </tr>
            <tr>
                <td>Must Try</td>
                <td colspan=5><textarea rows=2 cols=30 name="must_try" required class='form-control'>{{$restrodetails->must_try}}</textarea></td>
            </tr>
            <tr>
                <td>Select Veg or non-veg</td>
                <td colspan=5>
                    <select class='form-control' name="select">
                        <option>{{$restrodetails->select}}</option>
                        <option value='1'>Veg</option>
                        <option value='2'>Non-Veg</option>
                        <option value='2'>Both</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Offers</td>
                <td colspan=5><input type="text" name="offer" value='{{$restrodetails->offer}}' size=80 class='form-control' placeholder='Enter any offers you have' required></td>
            </tr>
            <tr>
                <th colspan=6>SELECT FEATURES & FACILITIES</th>
            </tr>
            <tr>
                <td colspan=6>
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Air Conditioned &nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Wifi &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Parking &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Smoking Area &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Serves Alcohol &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Full Bar Available &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Cards Accepted &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Wallet Accepted &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Live Performance &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Live Screening &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Outdoor Seating &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Rooftop Seating &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Wheel chair Access &nbsp&nbsp
                    <input type="checkbox" name="restro_facilities" value="{{$restrodetails->restro_facilities}}"> Safety Precautions
                </td>
            </tr>
            <tr>
                <th colspan="6">ADD IMAGES</th>
            </tr>
            <tr>
                <td>Table Images</td>
                <td><input type="file" name="tp" class='form-control' required>{{$restrodetails->tp}}</td>
                <td>Interior/Exterior Images</td>
                <td><input type="file" name="iep" class='form-control' required>{{$restrodetails->iep}}</td>
                <td>Menu Images</td>
                <td><input type="file" name="mp" class='form-control' required>{{$restrodetails->mp}}</td>
            </tr>
            <tr>
                <td colspan="6" align="center"><input type="submit" name="UPDATE" value="UPDATE" class='btn btn-secondary' onclick="a1()"></td>
            </tr>
        </table>
</form>
    </div>
    <br>
</body>
</html>
@include('restrofooter')