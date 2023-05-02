<?php
echo $num="<script>document.write(localStorage.getItem('number-value'));</script>";
echo gettype($num);
$num = (int)$num;
$amount = $num * 2;
echo $amount;
?>