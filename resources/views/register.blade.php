<!DOCTYPE html>
<html lang="en">
<head>
    <!--Important meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Website Title-->
    <title>Tricube</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon/Logo.jpg">
    <!--Custom Bootstrap CSS-->
    <link rel='stylesheet' href='css/bootstrap_css/bootstrap.css'>
    <!--Google fonts-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--jQuery Custom-->
    <script src='js/jquery-3.5.1.min.js'></script>
    <!--Fontawesome Icons-->
    <link rel='stylesheet' href='css/fontawesome_css/all.min.css'>
    <script src='js/fontawesome_js/all.min.js'></script>
    <!--CSS Custom-->
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
        <div align="center">
            <h2 align="center">Student Registration</h2>
        <button class="btn btn-primary" type="submit" name="std-reg" onclick="">Student List</button>
        </div>
        <form align="center" action="{{URL::to('/store')}}" method="get">
           @csrf
            Firstname :<br><input type="text" name="firstname"><br><br>
            Surname :<br><input type="text" name="surname"><br><br>
            Email:<br><input type="text" name="email"><br><br>
            Mobile:<br><input type="mobile" name="mobile"><br><br>
            <br><input type="submit" value="Register">
        </form>
</body>
</html>