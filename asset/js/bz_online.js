function numberWithCommas(x) {
  if(x){
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
  else{
    return x;
  }

}

function CommasToNumber(str) {
    str = String(str);
    return str.replace(/[^\d]+/g, '');
}

// 클립보드에 글자를 복사한다.
function is_ie() {
  if(navigator.userAgent.toLowerCase().indexOf("chrome") != -1) return false;
  if(navigator.userAgent.toLowerCase().indexOf("msie") != -1) return true;
  if(navigator.userAgent.toLowerCase().indexOf("windows nt") != -1) return true;
  return false;
}

function copy_to_clipboard(domain, carrier) {
  if( is_ie() ) {

    window.clipboardData.setData("Text", domain + getURL(carrier));
    alert("복사되었습니다.");
    return;
  }
  console.log("domain : " + domain);
  console.log("carrier : " + carrier);
  prompt("Ctrl+C를 눌러 복사하세요.", domain + getURL(carrier));
}
