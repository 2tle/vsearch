<html>
	<head>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/question.css">
		<link rel="stylesheet" href="./css/font.css">
		<link href="https://fonts.googleapis.com/css?family=Sunflower:300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<meta charset="utf-8">
		<title>V-Search :: 생김새로만 인물 찾기</title>
	</head>
	<body style="background-color :#E5F7FC;">
		<div class="question-top">
			<div class="question-top-title">질문하기</div>
			<div class="question-top-des">인물 질문 플랫폼, V-Search</div>
		</div>
		<form action="./php/questiontodb.php" method="post">
			<div class="question-input">
				<div class="question-input-title">
					<input type="text" placeholder="제목을 입력해 주세요" class="Input titleInput" name="title" id="title" >
				</div>
				<br>
				<div class="question-personal">
					<input type="text" placeholder="이름" class="Input nameInput" name="name" id="name" style="width:10rem; height:2rem;">
					<input type="password" placeholder="비밀번호" class="Input pwInput" name="pw" id="pw" style="width:10rem; height:2rem;">
				</div>
				<hr class="qs-hr">
				<div class="question-input-maintext">
					<textarea class="question-maintext" name="naeyong" id="naeyong">내용을 입력해 주세요.</textarea>
				</div>
				<div class="question-buttons">
					<br>
					<input type="submit" value="업로드" class="uploadButton" name="uploadButton" id="uploadButton">
				</div>
			</div>
		</form>
		<br>
		<div class="gotomain" style="text-align:center;"><a href="index.php" style="text-align:center;">홈 화면으로 돌아가기</a></div>

	</body>

</html>
