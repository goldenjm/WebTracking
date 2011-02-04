<?php
$rv = exec("./git pull",$output);
echo ("Return Value: $rv <br>");
echo ("Output: <br> $output");
?>