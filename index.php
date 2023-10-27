<!DOCTYPE html>
<html>
<body>

<?php
$dateTime = new DateTime();
$formattedDate = $dateTime->format("Y-m-d H:i:s");
echo $formattedDate;   
?> 

</body>
</html>
