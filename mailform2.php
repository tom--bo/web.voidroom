<!DOCTYPE html>
<html>
  <head>
  <title>あきべや</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
  <link rel="stylesheet" type="text/css" href="css/map.css">
  <link rel="stylesheet" href="css/ad.css" type="text/css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
  <script type="text/javascript" src="js/form_check.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-44364744-1', 'ddo.jp');
    ga('send', 'pageview');
  </script>
</head>
<body>

<div data-role="page" id="mail">

  <div data-role="header">
    <a href="main.php" data-icon="arrow-l" data-ajax="false">Home</a>
    <h1>問い合わせ</h1>
    <a href="#popup1" data-rel="popup" data-icon="info" class="ui-btn-right" data-iconpos="">info</a>
    <div data-role="popup" id="popup1">
      <a href="#" data-role="button" data-icon="alert" data-mini="true" data-ajax="false">問い合わせ</a>
      <a href="about.php" data-role="button" data-icon="star" data-mini="true" data-ajax="false">サイトについて</a>
      <a href="http://www2.sci.waseda.ac.jp/tools/pcroom/sch.php" data-role="button" data-icon="forward" data-mini="true" data-ajax="false">PCルーム大学サイト</a>
    </div>
  </div><!-- /header -->

  <div data-role="content">
    <p>行ったら授業やってるじゃないか！という場合はこのフォームを埋めて送信して下さい</p>
    <p>twitter->@rikoh_voidroomも御覧ください</p>

    <form action="mail.php" method="post" name="mail_form">
      <div data-role="fieldcontain">
        <p>Select Building</p>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="radio" name="radio3a" id="radio-3a" class="custom" data-mini="true" value="52"/>
              <label for="radio-3a">52</label>
            <input type="radio" name="radio3a" id="radio-3b" class="custom" data-mini="true" value="53"/>
              <label for="radio-3b">53</label>
            <input type="radio" name="radio3a" id="radio-3c" class="custom" data-mini="true" value="54"/>
              <label for="radio-3c">54</label>
            <input type="radio" name="radio3a" id="radio-3d" class="custom" data-mini="true" value="56"/>
              <label for="radio-3d">56</label>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="radio" name="radio3a" id="radio-3f" class="custom" data-mini="true" value="60"/>
              <label for="radio-3f">60</label>
            <input type="radio" name="radio3a" id="radio-3g" class="custom" data-mini="true" value="61"/>
              <label for="radio-3g">61</label>
            <input type="radio" name="radio3a" id="radio-3h" class="custom" data-mini="true" value="63"/>
              <label for="radio-3h">63</label>
        </fieldset>

        <p>Select Weekday</p>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="radio" name="radio4a" id="radio-1a" class="custom" data-mini="true" value="1"/>
              <label for="radio-1a">月</label>
            <input type="radio" name="radio4a" id="radio-1b" class="custom" data-mini="true" value="2"/>
              <label for="radio-1b">火</label>
            <input type="radio" name="radio4a" id="radio-1c" class="custom" data-mini="true" value="3"/>
              <label for="radio-1c">水</label>
            <input type="radio" name="radio4a" id="radio-1d" class="custom" data-mini="true" value="4"/>
              <label for="radio-1d">木</label>
            <input type="radio" name="radio4a" id="radio-1e" class="custom" data-mini="true" value="5"/>
              <label for="radio-1e">金</label>
        </fieldset>

        <p>Select Period</p>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="radio" name="radio5a" id="radio-2a" class="custom" data-mini="true" value="1"/>
              <label for="radio-2a">1</label>
            <input type="radio" name="radio5a" id="radio-2b" class="custom" data-mini="true" value="2"/>
              <label for="radio-2b">2</label>
            <input type="radio" name="radio5a" id="radio-2c" class="custom" data-mini="true" value="3"/>
              <label for="radio-2c">3</label>
            <input type="radio" name="radio5a" id="radio-2d" class="custom" data-mini="true" value="4"/>
              <label for="radio-2d">4</label>
            <input type="radio" name="radio5a" id="radio-2e" class="custom" data-mini="true" value="5"/>
              <label for="radio-2e">5</label>
            <input type="radio" name="radio5a" id="radio-2f" class="custom" data-mini="true" value="6"/>
              <label for="radio-2f">6</label>
        </fieldset>

        <p>Type room number</p>
        <input type="text" name="room_no" id="room_no" value="" data-mini="true"/>
        <p>Type class name</p>
        <input type="text" name="class_name" id="classs_name" value="(授業名)" data-mini="true"/>
        <p>Type Detail</p>
        <textarea name="textarea" id="textarea-a">他情報があれば入力して下さい
Twitterアカウントを記入者にはフィードバックを送ります</textarea>

      </div>
      <button type="submit" data-theme="b" name="submit" class="custom" data-mini="true" data-ajax="false" onClick="return check_mail()">送信</button>
    </form>
    <br>

    <script type="text/javascript">
      var nend_params = {"media":10803,"site":48409,"spot":99046,"type":1,"oriented":5};
    </script>
    <script type="text/javascript" src="http://js1.nend.net/js/nendAdLoader.js"></script>                    
  </div><!-- /content -->

  <div data-role="footer">
    <h4>あきべや</h4>
  </div><!-- /footer -->
</div><!-- /page -->

</head>
</body>
