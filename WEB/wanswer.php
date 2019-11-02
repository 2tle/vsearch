<!DOCTYPE html>
<html lang=ko>
  <head>
    <link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/wanswer.css">
		<link rel="stylesheet" href="./css/font.css">
		<link href="https://fonts.googleapis.com/css?family=Sunflower:300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<meta charset="utf-8">
		<title>V-Search :: 생김새로만 인물 찾기</title>
  </head>
  <body style="background-color :#E5F7FC;">
    <div class="wanswer-top" style="text-align:center; margin-top:7em;">
			<div class="wanswer-top-title">답변하기</div>
			<div class="wanswer-top-des" style="margin-bottom:3rem;">인물 질문 플랫폼, V-Search</div>
		</div>
    <?php
      $index=$_GET['idx'];
      $con=mysqli_connect("localhost","rootuser","ieelte","question_db");
      $result=mysqli_query($con,"SELECT * FROM question_table WHERE qnaIdx='$index'");
      $row = mysqli_fetch_array($result);
      echo "<div style='text-align:center;' class='qna-main'>";
      echo "<h1 style='font-size:2.5rem;' class='qna-main qna-main-title'>".$row['questionTitle']."</h1>";
      echo "<br>";
      echo "<p class='qna-main qna-main-auth'>작성자:".$row['questionName']."</p>";
      echo "<br>";
      echo "<p style='font-size:1.6rem; line-height:140%;' class='qna-main qna-main-text'>".$row['questionValue']."</p>";
      echo "</div>";
      echo "<hr style='margin-left :3rem; margin-right:3rem;' class='hs-kr'>";
      echo "<div class='wanswer-answer' style='text-align:center;'>";
      echo "<form action='./php/answertodb.php?idx=".$index."' method='post'>";
      echo "<div class='wanswer-answer-name'>";
		echo "<input style='width : 10rem; height : 2rem;' type='text' placeholder='이름을 입력해 주세요.' class='wanswer-nameInput' name='name' id='name'>";
      echo "</div>";
    	echo "<br><br>";
      echo "<div class='wanswer-answer-maintext'>";
    	echo "<textarea style=' width:80%; height:15rem; resize:none;'class='wanswer-maintext' name='naeyong' id='naeyong'>내용을 입력해 주세요.</textarea>";
    	echo "</div>";
      echo "<input type='submit' value='업로드' class='uploadButton'name='uploadButton' id='uploadButton'>";
      echo "</form>";
   		echo"</div>";
	?>
  </body>
</html>
