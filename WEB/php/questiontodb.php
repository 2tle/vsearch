<?php
$title = $_POST['title'];
$name = $_POST['name'];
$pw = $_POST['pw'];
$naeyong = $_POST['naeyong'];

 if($title == NULL||$name== NULL||$pw==NULL||$naeyong==NULL) {
   echo "<script>alert(\"빈칸이 있습니다. 다시 작성해주세요.\");</script>";
   echo "<script>location.href='../question.php';</script>";
   exit();
}


$mysqli=mysqli_connect("localhost","rootuser","","question_db");
$question=mysqli_query($mysqli,"INSERT INTO question_table (questionTitle,questionName,questionValue,questionPW) VALUES('$title','$name','$naeyong','$pw')");
if($question) {
  echo "<script>alert(\"업로드가 정상적으로 완료되었습니다.\");</script>";
  echo "<script>location.href='../qlist.php';</script>";
  exit;
}


?>
