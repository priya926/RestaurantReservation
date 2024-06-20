<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="/restrodash.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script>
        function a1()
      {
          alert("Updated successfully!!");
      }
      </script>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bx-restaurant'></i>
      <span class="logo_name">CUM'IN GO<sub style="font-size: 15px;"> Restro</sub> </span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/restrodash"> 
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/restrodash">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="/restro_details">
        <i class='bx bxs-book-reader'></i>
          <span class="link_name">RESTRO Details</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/restro_details">RESTRO Details</a></li>
        </ul>
      </li>
      <li>
        <a href="/restroupdate/{{Auth::user()->id}}">
        <i class='bx bx-edit'></i>
          <span class="link_name">Update Restro-Details</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/restroupdate/{{Auth::user()->id}}">Update Restro-Details</a></li>
        </ul>
      </li>
      <li>
        <a href="/view_reserve">
        <i class='bx bxs-user-check'></i>
          <span class="link_name">View Reservation</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/view_reserve">View Reservation</a></li>
        </ul>
      </li>
      <!-- <li>
        <a href="restroupdate">
        <i class='bx bx-edit'></i>
          <span class="link_name">Update</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="restroupdate">Update </a></li>
        </ul>
      </li> -->
      <li>
        <a href="/logout">
          <i class='bx bx-log-out-circle' ></i>
          <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/logout">Log Out</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
  <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Welcome to CUM'IN GO</span>
  </div>