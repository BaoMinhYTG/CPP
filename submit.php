﻿<?php //start: fix  Undefined indexif(!isset($_GET["CBHT"])){	$_GET["CBHT"]='';}//end: fix  Undefined index
$TIEUDE = "Nộp bài làm - Phần mềm themis web";include_once("dulieu/header.php");
?>	<div class='panel panel-primary'><div class='panel-heading'><h3 class='panel-title'>Nộp bài lên hệ thống</h3></div><div class='panel-body'>
<?php
if (isset($_SESSION['user_id'] ))
{	//check xem co duoc sub hay ko?	$sql_query = "SELECT * FROM caidat WHERE id='1'";	$caidat1 = $conn->query($sql_query); 	$caidat = $caidat1->fetch_assoc();	$chophepsub = "{$caidat['submiton']}";			$user_id = intval($_SESSION['user_id']);	$sql_query = "SELECT * FROM members WHERE id='{$user_id}'"; 	$member1 = $conn->query($sql_query); 	$member = $member1->fetch_assoc();		if ($member['admin'] == "0"){	if ($chophepsub == 0) 		{			echo "<font color='red'><b>Admin đã tắt chức năng submit, vui lòng liên hệ admin để được trợ giúp!</b>";			exit;		}	}
	if (isset($_GET['act']) && $_GET['act'] == "do" )	//fix  Undefined index
{
$tenfile = basename($_FILES["fileToUpload"]["name"]);
$tenfile= str_replace('.','].',$tenfile);
$namefile = "[{$member['username']}][" . $tenfile;
$target_dir = "nopbai/";
$target_file = $target_dir . $namefile;
$uploadOk = 1;
$ngonngubailam = strtoupper(pathinfo($target_file,PATHINFO_EXTENSION));
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "File của bạn có kích cỡ quá lớn.<br>";
    $uploadOk = 0;
}
if($ngonngubailam != "PAS" && $ngonngubailam != "PP" && $ngonngubailam != "CPP"
&& $ngonngubailam != "JAVA" && $ngonngubailam != "C") {
    echo "Hệ thống chỉ cho phép nộp các file *.pas, *.pp, *.cpp, *.java, *.c<br>";
    $uploadOk = 0;}// Check if $uploadOk is set to 0 by an errorif ($uploadOk == 0) {
    echo "<font color=red><b>Nộp bài không thành công</b></font><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<font color=green><b>Tài khoản {$member['username']} đã nộp bài ". basename( $_FILES["fileToUpload"]["name"]). " thành công.</b></font><br>";		echo "<SCRIPT LANGUAGE='JavaScript'>alert('Bạn đã nộp bài thành công');</script>";		print "<meta http-equiv='refresh' content='0; /?CBHT=rank'>";
    } else {
        echo "<font color=red><b>Xin lỗi, có lỗi phát sinh trong quá trình tải.</b></font><br>";    }}}
else
{
print <<<EOF
<form action="submit.php?act=do" method="post" enctype="multipart/form-data">
Chọn bài làm:
<input type="file" name="fileToUpload" id="fileToUpload"><br>
<input  class='btn btn-sm btn-primary' type="submit" value="Upload" name="submit">
</form></div></div>
EOF;
}			
}else{
	Echo "Bạn chưa đăng nhập, vui lòng đăng nhập để tiếp tục";
}
?>
<?php
	include_once("dulieu/footer.php");
?>