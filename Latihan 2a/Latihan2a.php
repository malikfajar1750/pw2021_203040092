<!DOCTYPE html>
<html>
<head>
 <title>Latihan2a</title>
 <style type="text/css">
    .style1{
        border: 2px solid black;
        border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
 }

 .style2{
  font-size: 28px;
        font-family: Arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bolder;
 }
</style>

</head>
<body>
<?php 
function gantiStyle($tulisan,$style1,$style2) { 
 echo "<div class='$style1'>
    <p class='$style2'>$tulisan</p>
    </div>";
}
gantiStyle('Selamat datang di praktikum PW','style1','style2');

?>

</body>
</html>