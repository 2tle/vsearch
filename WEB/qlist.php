<html>
	<head>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/qlist.css">
		<link rel="stylesheet" href="./css/font.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Sunflower:300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<meta charset="utf-8">
		<title>V-Search :: 생김새로만 인물 찾기</title>
	</head>
	<body style="background-color :#E5F7FC;">
		<div class="qlist-top">
			<div class="qlist-top-title">V-Search 질문목록</div>
			<div class="qlist-top-des">많은 질문들이 여러분의 답변을 기다리고 있습니다.</div>
		</div>
		<div class="container qlist-table">
			<?php
			$con =mysqli_connect("localhost","rootuser","","question_db");
			$result=mysqli_query($con,"SELECT * FROM question_table ORDER BY qnaIdx DESC");
			echo "<table class='table table-hover'>
			<thead>
			<tr>
			<th>이름</th>
			<th>제목</th>
			<th>답변확인</th>
			</tr>
			<thead>";
			echo "<tbody>";
			while($row=mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['questionName'] . "</td>";
				echo "<td>" . $row['questionTitle'] . "</td>";
				echo "<td><a style='color : black; text-decoration:none; ' href='./qna.php?idx=".$row['qnaIdx']."'>답변확인</a></td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			mysqli_close($con);
			?>
			<hr/>

			<span class="qlist-page">
				<button type="button" class="btn btn-outline-secondary questionbutton" onClick="location.href='question.php'">질문하기</button>
			</span>
		</div>

	</body>
</html>
