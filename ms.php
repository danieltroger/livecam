<?php
unlink("cam.png");
file_put_contents("cam.png",file_get_contents($_FILES['data']['tmp_name']));
$ret = $_FILES;
if(file_exists("cam.png"))
{
$ret['status']="success";
}
else
{
$ret['status']="Could not save.";
}
echo json_encode($ret);
