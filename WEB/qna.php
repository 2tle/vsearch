<!DOCTYPE html>
<html lang="ko">
  <head>
    <link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/qna.css">
		<link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Sunflower:300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<meta charset="utf-8">
		<title>V-Search :: 생김새로만 인물 찾기</title>
  </head>
  <body style="background-color :#E5F7FC;">
    <div class="qna-top">
			<div class="qna-top-title">답변확인</div>
			<div class="qna-top-des">인물 질문 플랫폼, V-Search</div>
		</div>
	  <hr style='margin-left :3rem; margin-right:3rem;' class='hs-kr'>
    <?php
      $con=mysqli_connect("localhost","rootuser","","question_db");
      $index=$_GET['idx'];
      $result=mysqli_query($con,"SELECT * FROM question_table WHERE qnaIdx='$index'");
      $row = mysqli_fetch_array($result);
      echo "<div style='text-align:center;' class='qna-main'>";
      echo "<h1 style='font-size:2.5rem; margin:0 2rem;' class='qna-main qna-main-title'>제목 : ".$row['questionTitle']."</h1>";
      echo "<br>";
      echo "<p class='qna-main qna-main-auth'>작성자 : ".$row['questionName']."</p>";
      echo "<br>";
      echo "<p style='font-size:1.6rem; margin:0 1.5rem;' class='qna-main qna-main-text'>질문 내용 : ".$row['questionValue']."</p>";
      echo "</div>";
      echo "<hr style='margin-left :3rem; margin-right:3rem;' class='hs-kr'>";
      if($row['answerName']==NULL) {
        echo "<p style='text-align:center; margin:0 2rem;' class='qna-main-noanswer'>아직은 답변이 없습니다. 답변을 달아주세요.</p>";
		echo "<br>";
        echo "<p style='text-align:center;'><a style='text-decoration:none; text-align:center; color:black;' href='./wanswer.php?idx=".$index."'>답변하기</a></p>";

      }
      else {
        echo "<div class='qna-main-answer'>";
        echo "<p style='text-align:center;'>답변 작성자 : ".$row['answerName']."</p>";
        echo "<p style='text-align:center; font-size: 1.5rem; margin:0 2rem;'>답변 내용 : ".$row['answerValue']."</p>";
		echo "<br>";
		echo "<div class='gotomain' style='text-align:center; text-decoration:none;'><a href='index.php' style='color:black; text-decoration:none; text-align:center;'>홈 화면으로 돌아가기</a></div>";
      }
      mysqli_close($con);
    ?>



  </body>
</html>
