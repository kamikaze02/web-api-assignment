<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $name=$_REQUEST["fname"];
    $oname=$_REQUEST["oname"];
    $age=$_REQUEST["age"];
    $dob=$_REQUEST["dob"];
    $sex=$_REQUEST["sex"];
    $mstat=$_REQUEST["mstat"];
    $gnum=$_REQUEST["gnum"];

    echo "<p class='dis'>Surname: ".$name."
    </p><p class='dis'>Other names: ".$oname."</p><p class='dis'>Surname: ".$age."</p></p><p class='dis'>Sex: ".$sex."</p>
    <p class='dis'>Date of birth: ".$dob."</p><p class='dis'>Marriage Status: ".$mstat."</p>
    <p class='dis'>Ghana Card Number: ".$gnum."</p>";
?>
</body>
