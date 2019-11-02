<?php
$name=$_POST['name'];
$value=$_POST['naeyong'];
$index=$_GET['idx'];

if($name==NULL || $value==NULL) {
  echo "<script>alert(\"빈칸이 있습니다. 다시 작성해주세요.\");</script>";
  echo "<script>location.href='../qlist.php';</script>";
  exit();
}

$mysqli=mysqli_connect("localhost","rootuser","ieelte","question_db");

$answer=mysqli_query($mysqli,"UPDATE question_table SET answerName='$name', answerValue='$value' WHERE qnaIdx='$index'");
if($answer) {
  echo "<script>alert(\"업로드가 정상적으로 완료되었습니다.\");</script>";
  echo "<script>location.href='../qlist.php';</script>";
  exit;
}
 ?>
