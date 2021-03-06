<!DOCTYPE html>
<html lang="ko">
<head>
<link rel="stylesheet" href="./loading.css" />
<link rel="stylesheet" href="./main.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.css" />
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.js"></script>
<script src="./admin.js"></script>
</head>
<body>
<div id="wrap" class="wrap">
  <div class="header">
    <h2 style="margin-left:10px;">휘핑크림 유저 휴면/지각 관리</h2>
  </div>
  <div class="tablist">
    <h4 style="margin-left:10px;">관리자: 잠탱이다</h4>
  </div>
  <div class="content">
    <div class="aside">
        <div class="menu" id="menu1">유저 관리</div>
        <div class="menu" id="menu2">업데이트</div>
        <div class="menu" id="menu3">휴면 유저 찾기</div>
        <div class="menu" id="menu4">지각자 리스트</div>
    </div>
    <div class="main" style="display: flex; flex-direction:row; justify-content: center; align-items: center;">
        
        <div class="container" style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin:40px; margin-bottom:10px;">
            
            <h1 id="total">가져오는 중</h1>
        
            <br><br><br>
        
            <h1 style="display:flex;">신규 유저 등록</h1>
            <input id="newName" type="text" placeholder="신규로 등록할 유저 닉네임" required>
            <button id="register" style="width:300px;">신규 등록하기</button>
            
            <br><br><br>

            <h1 style="display:flex;">닉네임 변경</h1>
            <input id="beforeName" type="text" placeholder="변경 전 닉네임" required>
            <input id="afterName" type="text" placeholder="변경 후 닉네임" required>
            <button id="change" style="width:300px;">닉네임 변경하기</button>
        </div>
        
        <div class="container">
            <div class="scrollbar leaderboardWrapper" id="style-6">
                <div class="loading-container">
                 <div class="loading"></div>
                 <div id="loading-text">휘핑유저 로드 중</div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>