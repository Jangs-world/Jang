// 메인페이지 JS - main.js

///////////// html 로드구역 ////////////
///// html 태그요소 보다 위에 있는 JS를 요소로딩 후 실행구역 ////////
// load 이벤트 / DOMContentLoaded 이벤트 /////
window.addEventListener("load", ()=>{

  // 로딩완료확인
  console.log("로딩완료!");

  // [ 구현내용 ]
  // - 버튼 클릭시 배너를 다음/이전으로 이동함
  // - 이벤트 대상 : .abtn(이동버튼2개)
  let abtn = document.querySelectorAll(".abtn");
  console.log("버튼개수:" + abtn.le ngth);
  // - 변경대상: #slide
  let slide = document.querySelector("#slide");

  // 1. 호출확인
  console.log("오른쪽이양!");

  ////// 오른쪽 버튼

}); ///////////// load 구역 //////////////////
/////////////////////////////////////////////