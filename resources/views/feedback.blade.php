<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="hcss/style2.css">
</head>
<body>
    <form action="feedbacks" method="POST">
    @csrf
    <div class="container">
        <h2>FEEDBACK</h2>
        <div class="skills">
            <h3 class="name">Website</h3>
            <div class="rating">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
                <input type="radio" name="website">
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="button" value="Submit">
        </div>
    </div>
    </form>
</body>
</html>