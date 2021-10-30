<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | 보그 코리아(Vogue Korea)</title>
  <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/login.css">

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/linksys.js"></script>
  <!-- <script src="js/common.js"></script> -->
  <script src="js/login.js"></script>
</head>

<body>
  <!-- 1. 상단영역 -->
  <div id="top">
    <?php include "inc/top.inc" ?>
  </div>

  </div>
  <!-- 2. 메인영역 -->
  <div class="bgc">
    <main class="cont ibx">

      <!-- 1. 타이틀 -->
      <h2 class="stit">Log in</h2>

      <!-- 2. 로그인컨텐츠박스 -->
      <section class="scont">
        <div id="login">
          <form action="process.php" method="POST" class="logF">
            <!-- 아이디박스 -->
            <div class="minput">
              <label for="mid">아이디</label>
              <input type="text" name="mid" id="mid" maxlength="10" placeholder="아이디를 입력해 주세요">
            </div>
            <!-- 비밀번호박스 -->
            <div class="minput mi2">
              <label for="mpw">비밀번호</label>
              <input type="password" name="mpw" id="mpw" maxlength="10" placeholder="비밀번호를 입력해 주세요">
            </div>
            <!-- 버튼영역 -->
            <div class="btnbx">
              <input type="submit" id="sbtn" value="LOGIN">
            </div>

            <!-- 기타체크링크 -->
            <div class="addbx">
              <span>
                <input type="checkbox" id="chkbx" name="chkbx">
                <label for="chkbx">아이디저장</label>
              </span>
              <a href="#">아이디찾기</a> |
              <a href="#">비밀번호찾기</a> |
              <a href="#">회원가입</a>
            </div>
          </form>
        </div>
      </section>
    </main>
  </div>


  <!-- 
      [ form요소 ]
      - 입력된 데이터를 묶어서 서버로 전송하는 역할
      - action 속성 : 서버전송 페이지 주소
      - method 속성 : 전송방식 선택(get/post)
          -> get방식은 url로 데이터를 전달하는 방식
          -> post방식은 페이지로 숨겨서 데이터를 전달하는 방식
          (보안성은 post방식이 좋다!)
      
      [ input 요소 ]
      - 사용자가 입력할 수 있도록 입력양식을 제공하는 요소
      - type 속성: 여러가지 입력양식을 선택함
        1) text - 글자입력
        2) password - 비밀번호입력(입력시 글자숨김)
          -> 비밀번호는 영역복사도 안됨!
        3) radio - 라디오버튼(보통 단일 선택시 사용)
        4) checkbox - 체크박스버튼(보통 다중 선택시 사용)
        5) button - 버튼형식의 입력폼
        6) submit - form요소의 입력값을 전송하는 기능
          (form요소의 action속성값에 셋팅된 페이지로 감!)
        7) 기타 html5에서 새로이등장한 type들

          - search : 검색, tel : 전화번호, email : 이메일주소
          -> 기존에 text 하나만 있었으나 데이터 유효성검사를 
             브라우저 자체 내장 유효성 검사를 할 수 있게 제공함!
             
          - 특이한 것들:
              color : 컬러피커가 뜸(색상정보)
              date : 달력이 뜸(날짜입력)
              file : 파일선택창 뜸(파일경로정보)
              number : 입력숫자범위 지정
              range : 지정된 범위값을 버튼 드래그로 설정
              time : 시간선택창 뜸(시간입력)
              week : 주단위선택창 뜸(주단위입력)

          -> 참고 페이지
            https://www.w3schools.com/html/html_form_input_types.asp

      [ input의 공통속성 ]
      1. maxlength 속성 : 최대입력 글자수 지정
      2. placeholder 속성 : 입력창에 안내문구를 출력 (입력순간 글자는 사라짐!)
      3. value 속성 : 미리 입력하고자 하는 텍스트를 넣음 (버튼일 경우 버튼 글자로 출력됨!)
      4. disabled 속성 : 값없이 바로 속성명만 사용해서 입력금지상태로 만든다!

      [ input 요소에 name속성을 쓰는 이유는? ]
      -> action에 지정된 서버전송 페이지에서 입력값을 읽을때 
         name으로 지정된 입력양식 요소의 값을 읽어간다.
         따라서 name속성을 꼭 지정할 것 !
         (아이디명과 동일해도 상관없음!)

      [ label 요소 ]
      - input 요소의 설명을 표시함
      - 라벨요소는 웹접근성의 필수 요소임! 반드시 표시할 것!
      - for속성 : input 요소의 id명과 같아서 라벨클릭시 입력요소로
                  포커스가 자동으로 들어간다!


   -->




  <!-- 3. 하단영역 -->
  <div class="bgc">
    <?php include "inc/info.inc" ?>
  </div>

  
</body>

</html>