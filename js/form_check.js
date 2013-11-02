function check_mail(){
  var flag = 0;
  var radio1a = ($('#radio-1a').is(':checked') || $('#radio-1b').is(':checked') || $('#radio-1c').is(':checked') || $('#radio-1d').is(':checked') || $('#radio-1e').is(':checked'));
  var radio2a = ($('#radio-2a').is(':checked') || $('#radio-2b').is(':checked') || $('#radio-2c').is(':checked') || $('#radio-2d').is(':checked') || $('#radio-2e').is(':checked') || $('#radio-2f').is(':checked'));
  var radio3a = ($('#radio-3a').is(':checked') || $('#radio-3b').is(':checked') || $('#radio-3c').is(':checked') || $('#radio-3d').is(':checked') || $('#radio-3e').is(':checked') || $('#radio-3f').is(':checked') || $('#radio-3g').is(':checked'));

  if(!radio1a) flag = 1;
  else if(!radio2a) flag = 1;
  else if(!radio3a) flag = 1;
  else if(document.mail_form.room_no.value == "") flag = 1;

  if(flag){
    window.alert('授業名・詳細以外の項目は必須です'); // 入力漏れがあれば警告ダイアログを表示
    return false; // 送信を中止
  }
  else{
    return true; // 送信を実行
  }
}

function check_main(){
  var flag2 = 0;
  var radio1 = ($('#radio1a').is(':checked') || $('#radio1b').is(':checked') || $('#radio1c').is(':checked') || $('#radio1d').is(':checked') || $('#radio1e').is(':checked'));
  var radio2 = ($('#radio2a').is(':checked') || $('#radio2b').is(':checked') || $('#radio2c').is(':checked') || $('#radio2d').is(':checked') || $('#radio2e').is(':checked') || $('#radio2f').is(':checked'));
  var checkbox = ($('#checkboxa').is(':checked') || $('#checkboxb').is(':checked') || $('#checkboxc').is(':checked') || $('#checkboxd').is(':checked') || $('#checkboxf').is(':checked') || $('#checkboxg').is(':checked') || $('#checkboxh').is(':checked'));
  if(!radio1) flag2 = 1;
  else if(!radio2) flag2 = 1;
  else if(!checkbox) flag2 = 1;

  if(flag2){
    window.alert('チェックしていない項目があります。');
    return false; // 送信を中止
  }
  else{
    return true; // 送信を実行
  }
}

$(document).ready(function(){
  $('input[name="checkboxall"]').bind('change', function() {
    if($('#checkboxall').attr('checked')){
      $('#checkboxa').attr("checked",true);
      $('#checkboxa').checkboxradio("refresh");
      $('#checkboxb').attr("checked",true);
      $('#checkboxb').checkboxradio("refresh");
      $('#checkboxc').attr("checked",true);
      $('#checkboxc').checkboxradio("refresh");
      $('#checkboxd').attr("checked",true);
      $('#checkboxd').checkboxradio("refresh");
      $('#checkboxf').attr("checked",true);
      $('#checkboxf').checkboxradio("refresh");
      $('#checkboxg').attr("checked",true);
      $('#checkboxg').checkboxradio("refresh");
      $('#checkboxh').attr("checked",true);
      $('#checkboxh').checkboxradio("refresh");
      $("#map4 img").attr("src", "room_pic/b56.png");
      $("#map6 img").attr("src", "room_pic/b63.png");
      $("#map7 img").attr("src", "room_pic/b61.png");
      $("#map8 img").attr("src", "room_pic/b60.png");
      $("#map12 img").attr("src", "room_pic/b52.png");
      $("#map13 img").attr("src", "room_pic/b53.png");
      $("#map14 img").attr("src", "room_pic/b54.png");
    }else{
      $('#checkboxa').attr("checked",false);
      $('#checkboxa').checkboxradio("refresh");
      $('#checkboxb').attr("checked",false);
      $('#checkboxb').checkboxradio("refresh");
      $('#checkboxc').attr("checked",false);
      $('#checkboxc').checkboxradio("refresh");
      $('#checkboxd').attr("checked",false);
      $('#checkboxd').checkboxradio("refresh");
      $('#checkboxf').attr("checked",false);
      $('#checkboxf').checkboxradio("refresh");
      $('#checkboxg').attr("checked",false);
      $('#checkboxg').checkboxradio("refresh");
      $('#checkboxh').attr("checked",false);
      $('#checkboxh').checkboxradio("refresh");
      $("#map4 img").attr("src", "room_pic/w56.png");
      $("#map6 img").attr("src", "room_pic/w63.png");
      $("#map7 img").attr("src", "room_pic/w61.png");
      $("#map8 img").attr("src", "room_pic/w60.png");
      $("#map12 img").attr("src", "room_pic/w52.png");
      $("#map13 img").attr("src", "room_pic/w53.png");
      $("#map14 img").attr("src", "room_pic/w54.png");
    }
  });


  $("#map4").bind("tap", function(){
    console.log("map4-------->");
    if($("#map4 img").attr('src') == 'room_pic/w56.png'){
      $("#map4 img").attr("src", "room_pic/b56.png");
      $('#checkboxd').attr("checked",true);
    }
    else{
      $("#map4 img").attr("src", "room_pic/w56.png");
      $('#checkboxd').attr("checked",false);
    }
    $('#checkboxd').checkboxradio("refresh");
  });

  $("#map6").bind("tap", function(){
    console.log("map6-------->");
    if($("#map6 img").attr('src') == 'room_pic/w63.png'){
      $("#map6 img").attr("src", "room_pic/b63.png");
      $('#checkboxh').attr("checked",true);
    }
    else{
      $("#map6 img").attr("src", "room_pic/w63.png");
      $('#checkboxh').attr("checked",false);
    }
    $('#checkboxh').checkboxradio("refresh");
  });

  $("#map7").bind("tap", function(){
    console.log("map7-------->");
    if($("#map7 img").attr('src') == 'room_pic/w61.png'){
      $("#map7 img").attr("src", "room_pic/b61.png");
      $('#checkboxg').attr("checked",true);
    }
    else{
      $("#map7 img").attr("src", "room_pic/w61.png");
      $('#checkboxg').attr("checked",false);
    }
    $('#checkboxg').checkboxradio("refresh");
  });
  $("#map8").bind("tap", function(){
    console.log("map8-------->");
    if($("#map8 img").attr('src') == 'room_pic/w60.png'){
      $("#map8 img").attr("src", "room_pic/b60.png");
      $('#checkboxf').attr("checked",true);
    }
    else{
      $("#map8 img").attr("src", "room_pic/w60.png");
      $('#checkboxf').attr("checked",false);
    }
    $('#checkboxf').checkboxradio("refresh");
  });
  $("#map12").bind("tap", function(){
    console.log("map12-------->");
    if($("#map12 img").attr('src') == 'room_pic/w52.png'){
      $("#map12 img").attr("src", "room_pic/b52.png");
      $('#checkboxa').attr("checked",true);
    }
    else{
      $("#map12 img").attr("src", "room_pic/w52.png");
      $('#checkboxa').attr("checked",false);
    }
    $('#checkboxa').checkboxradio("refresh");
  });
  $("#map13").bind("tap", function(){
    console.log("map13-------->");
    if($("#map13 img").attr('src') == 'room_pic/w53.png'){
      $("#map13 img").attr("src", "room_pic/b53.png");
      $('#checkboxb').attr("checked",true);
    }
    else{
      $("#map13 img").attr("src", "room_pic/w53.png");
      $('#checkboxb').attr("checked",false);
    }
    $('#checkboxb').checkboxradio("refresh");
  });
  $("#map14").bind("tap", function(){
    console.log("map14-------->");
    if($("#map14 img").attr('src') == 'room_pic/w54.png'){
      $("#map14 img").attr("src", "room_pic/b54.png");
      $('#checkboxc').attr("checked",true);
    }
    else{
      $("#map14 img").attr("src", "room_pic/w54.png");
      $('#checkboxc').attr("checked",false);
    }
    $('#checkboxc').checkboxradio("refresh");
  });


  //チェックボックスから画像
  $('input[name="checkboxd"]').bind('change', function() {
    if($('#checkboxd').attr('checked')){
    $("#map4 img").attr("src", "room_pic/b56.png");
    }else{
    $("#map4 img").attr("src", "room_pic/w56.png");
    }
  });
  $('input[name="checkboxh"]').bind('change', function() {
    if($('#checkboxh').attr('checked')){
    $("#map6 img").attr("src", "room_pic/b63.png");
    }else{
    $("#map6 img").attr("src", "room_pic/w63.png");
    }
  });
  $('input[name="checkboxg"]').bind('change', function() {
    if($('#checkboxg').attr('checked')){
    $("#map7 img").attr("src", "room_pic/b61.png");
    }else{
    $("#map7 img").attr("src", "room_pic/w61.png");
    }
  });
  $('input[name="checkboxf"]').bind('change', function() {
    if($('#checkboxf').attr('checked')){
    $("#map8 img").attr("src", "room_pic/b60.png");
    }else{
    $("#map8 img").attr("src", "room_pic/w60.png");
    }
  });
  $('input[name="checkboxa"]').bind('change', function() {
    if($('#checkboxa').attr('checked')){
    $("#map12 img").attr("src", "room_pic/b52.png");
    }else{
    $("#map12 img").attr("src", "room_pic/w52.png");
    }
  });
  $('input[name="checkboxb"]').bind('change', function() {
    if($('#checkboxb').attr('checked')){
    $("#map13 img").attr("src", "room_pic/b53.png");
    }else{
    $("#map13 img").attr("src", "room_pic/w53.png");
    }
  });
  $('input[name="checkboxc"]').bind('change', function() {
    if($('#checkboxc').attr('checked')){
    $("#map14 img").attr("src", "room_pic/b54.png");
    }else{
    $("#map14 img").attr("src", "room_pic/w54.png");
    }
  });
});



