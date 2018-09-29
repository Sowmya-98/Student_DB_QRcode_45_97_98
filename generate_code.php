<?php 
if(isset($_POST['generate_text']))
{
include('Folder1/qrlib.php');
  include('config.php');
 $text=$_POST['qr_text'];
 $folder="images/";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 
 //To Display Code Without Storing
 QRcode::png($text);
}
?>
