<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<div align="center">
            <h2 align="center">Student Registration</h2>
        <button class="btn btn-primary" type="submit" name="std-reg" onclick="/view-records">Student List</button>
        </div>
        
        <form align="center" action="submit" method="post">
            Firstname :<br><input type="text" name="firstname"><br>
            @error('firstname')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br><br>
            Surname :<br><input type="text" name="surname"><br>
            @error('surname')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br><br>
            Email:<br><input type="text" name="email"><br>
            @error('email')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br><br>
            Mobile:<br><input type="mobile" name="mobile"><br>
            @error('mobile')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br><br>
            {{@csrf_field()}}
            <br><input type="submit" value="Register">
        </form>
</body>
</html>