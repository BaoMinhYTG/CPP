﻿<?php 
$TIEUDE = "Nộp bài làm - Phần mềm themis web";
?>
<?php
if (isset($_SESSION['user_id'] ))
{
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
    $uploadOk = 0;
    echo "<font color=red><b>Nộp bài không thành công</b></font><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<font color=green><b>Tài khoản {$member['username']} đã nộp bài ". basename( $_FILES["fileToUpload"]["name"]). " thành công.</b></font><br>";
    } else {
        echo "<font color=red><b>Xin lỗi, có lỗi phát sinh trong quá trình tải.</b></font><br>";
else
{
print <<<EOF
<form action="submit.php?act=do" method="post" enctype="multipart/form-data">
Chọn bài làm:
<input type="file" name="fileToUpload" id="fileToUpload"><br>
<input  class='btn btn-sm btn-primary' type="submit" value="Upload" name="submit">
</form>
EOF;
}			
}else{
	Echo "Bạn chưa đăng nhập, vui lòng đăng nhập để tiếp tục";
}
?>
<?php
	include_once("dulieu/footer.php");
?>