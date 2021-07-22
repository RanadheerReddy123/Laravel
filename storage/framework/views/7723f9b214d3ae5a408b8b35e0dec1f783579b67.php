<?php
$connect=mysqli_connect("localhost","root","12345678","laravel");
$filename="B3.json";
$data=file_get_contents($filename);
$array=json_decode($data,true);
foreach($array as $row){
    $sql="INSERT INTO employeedata(data,created_at,updated_at) VALUES('".$row["name"]."','".$row["mobile"]."','".$row["email"]."','".$row["address"]."','".$row["comment"]."')";
    mysqli_query($connect,$sql);   
}
echo "Employee data inserted";
?><?php /**PATH C:\inetpub\wwwroot\laravel\resources\views/json-mysql.blade.php ENDPATH**/ ?>