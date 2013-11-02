<!DOCTYPE html>
<html>
  <head>
  <title>あきべや</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="あきべや, voidroom, 早稲田, 理工, 空き教室">
  <meta name="description" content="あきべや, voidroom, 早稲田, 理工, 空き教室">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
  <link rel="stylesheet" href="css/ad.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/map.css" />
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

<!-- Start of second page -->
<div data-role="page" id="main">

  <div data-role="header">
    <h1>あきべや</h1>
    <a href="#popup1" data-rel="popup" data-icon="info" class="ui-btn-right" data-iconpos="">info</a>
    <div data-role="popup" id="popup1">
      <a href="mailform.php" data-role="button" data-icon="alert" data-mini="true" data-ajax="false">問い合わせ</a>
      <a href="about.php" data-role="button" data-icon="star" data-mini="true" data-ajax="false">サイトについて</a>
      <a href="http://www2.sci.waseda.ac.jp/tools/pcroom/sch.php" data-role="button" data-icon="forward" data-mini="true" data-ajax="false">PCルーム大学サイト</a>
    </div>
  </div><!-- /header -->

  <div data-role="content">
    <p style="display: inline;" >Select Building</p>
    <form action="result.php" method="post" name="periodplus" style="display: inline;">
      <?php 
        echo '<input type="hidden" name="checkboxa" value="52">';
        echo '<input type="hidden" name="checkboxb" value="53">';
        echo '<input type="hidden" name="checkboxc" value="54">';
        echo '<input type="hidden" name="checkboxd" value="56">';
        echo '<input type="hidden" name="checkboxf" value="60">';
        echo '<input type="hidden" name="checkboxg" value="61">';
        echo '<input type="hidden" name="checkboxh" value="63">';

        $weekday_flag = date("w");
        $period_flag = 1;
        // 0：日　1：月...
        $now = getdate();
        if($now['hours']<9) $period_flag = 1;
        else if($now['hours']<=9 || ($now['hours']<=10 && $now['minutes']<=30)) $period_flag = 1;
        else if($now['hours']<=11 || ($now['hours']<=12 && $now['minutes']<=10)) $period_flag = 2;
        else if($now['hours']<=13 || ($now['hours']<=14 && $now['minutes']<=30)) $period_flag = 3;
        else if($now['hours']<=15 || ($now['hours']<=16 && $now['minutes']<=15)) $period_flag = 4;
        else if($now['hours']<=17 || ($now['hours']<=18 && $now['minutes']<=00)) $period_flag = 5;
        else if($now['hours']<=18 || ($now['hours']<=19 && $now['minutes']<=45)) $period_flag = 6;
      ?>

        <input type="hidden" name="weekday" value=<?php echo '"'.$weekday_flag.'"'; ?>/>
        <input type="hidden" name="period" value=<?php echo '"'.$period_flag.'"'; ?>/>
        <div id="nowsearch"><input type="submit" value="現在時刻で検索" data-ajax="false" data-role="button" data-inline="true" data-theme="b" data-mini="true" ></div>
    </form>
    <br><br>

      <div id="maps">
        <div id="map1"><img src="room_pic/w62.png" alt="教室画像" ></div>
        <div id="map2"><img src="room_pic/w58.png" alt="教室画像" ></div>
        <div id="map3"><img src="room_pic/w57.png" alt="教室画像" ></div>
        <div id="map4"><img src="room_pic/w56.png" alt="教室画像" ></div>
        <div id="map5"><img src="room_pic/w65.png" alt="教室画像" ></div>
      <div class="clear"></div>  
        <div id="map6"><img src="room_pic/w63.png" alt="教室画像" ></div>
        <div id="map7"><img src="room_pic/w61.png" alt="教室画像" ></div>
        <div id="map8"><img src="room_pic/w60.png" alt="教室画像" ></div>
        <div id="map9"><img src="room_pic/w51.png" alt="教室画像" ></div>
        <div id="map10"><img src="room_pic/w55.png" alt="教室画像" ></div>
      <div class="clear"></div>  
        <div id="map11"><img src="room_pic/w59.png" alt="教室画像" ></div>
        <div id="map12"><img src="room_pic/w52.png" alt="教室画像" ></div>
        <div id="map13"><img src="room_pic/w53.png" alt="教室画像" ></div>
        <div id="map14"><img src="room_pic/w54.png" alt="教室画像" ></div>
        <div class="clear"></div>  
      </div>
    
    <form action="result.php" method="post" name="check_form">

      <div data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="checkbox" name="checkboxa" id="checkboxa" class="custom" data-mini="true" value="52"/>
              <label for="checkboxa">52</label>
            <input type="checkbox" name="checkboxb" id="checkboxb" class="custom" data-mini="true" value="53"/>
              <label for="checkboxb">53</label>
            <input type="checkbox" name="checkboxc" id="checkboxc" class="custom" data-mini="true" value="54"/>
              <label for="checkboxc">54</label>
            <input type="checkbox" name="checkboxd" id="checkboxd" class="custom" data-mini="true" value="56"/>
              <label for="checkboxd">56</label>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
            <input type="checkbox" name="checkboxf" id="checkboxf" class="custom" data-mini="true" value="60"/>
              <label for="checkboxf">60</label>
            <input type="checkbox" name="checkboxg" id="checkboxg" class="custom" data-mini="true" value="61"/>
              <label for="checkboxg">61</label>
            <input type="checkbox" name="checkboxh" id="checkboxh" class="custom" data-mini="true" value="63"/>
              <label for="checkboxh">63</label>
            <input type="checkbox" name="checkboxall" id="checkboxall" class="custom" data-mini="true" value="all"/>
              <label for="checkboxall">ALL</label>
        </fieldset>

        <br>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
          <legend>Select Weekday</legend>
            <input type="radio" name="weekday" id="radio1a" class="custom" data-mini="true" value="1"<?php if($weekday_flag == 1) echo " checked "; ?>/>
              <label for="radio1a">月</label>
            <input type="radio" name="weekday" id="radio1b" class="custom" data-mini="true" value="2"<?php if($weekday_flag == 2) echo " checked "; ?>/>
              <label for="radio1b">火</label>
            <input type="radio" name="weekday" id="radio1c" class="custom" data-mini="true" value="3"<?php if($weekday_flag == 3) echo " checked "; ?>/>
              <label for="radio1c">水</label>
            <input type="radio" name="weekday" id="radio1d" class="custom" data-mini="true" value="4"<?php if($weekday_flag == 4) echo " checked "; ?>/>
              <label for="radio1d">木</label>
            <input type="radio" name="weekday" id="radio1e" class="custom" data-mini="true" value="5"<?php if($weekday_flag == 5) echo " checked "; ?>/>
              <label for="radio1e">金</label>
        </fieldset>

        <br>
        <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
          <legend>Select Period</legend>
            <input type="radio" name="period" id="radio2a" class="custom" data-mini="true" value="1"<?php if($period_flag == 1) echo " checked "; ?>/>
              <label for="radio2a">1</label>
            <input type="radio" name="period" id="radio2b" class="custom" data-mini="true" value="2"<?php if($period_flag == 2) echo " checked "; ?>/>
              <label for="radio2b">2</label>
            <input type="radio" name="period" id="radio2c" class="custom" data-mini="true" value="3"<?php if($period_flag == 3) echo " checked "; ?>/>
              <label for="radio2c">3</label>
            <input type="radio" name="period" id="radio2d" class="custom" data-mini="true" value="4"<?php if($period_flag == 4) echo " checked "; ?>/>
              <label for="radio2d">4</label>
            <input type="radio" name="period" id="radio2e" class="custom" data-mini="true" value="5"<?php if($period_flag == 5) echo " checked "; ?>/>
              <label for="radio2e">5</label>
            <input type="radio" name="period" id="radio2f" class="custom" data-mini="true" value="6"<?php if($period_flag == 6) echo " checked "; ?>/>
              <label for="radio2f">6</label>
        </fieldset>

        <br>
      <label for="flip-a">View Type  ※実装中です</label>
        <select name="slider" id="flip-a" data-role="slider" data-mini="true" disabled="disabled">
          <option value="1">LIST</option>
          <option value="2">MAP</option>
        </select> 
      </div>

      <button type="submit" data-theme="b" name="submit" value="submit-value" class="custom" data-ajax="false" onClick="return check_main()">Submit</button>

    </form>

    <script type="text/javascript">
      var nend_params = {"media":10803,"site":48409,"spot":99046,"type":1,"oriented":5};
    </script>
    <script type="text/javascript" src="http://js1.nend.net/js/nendAdLoader.js"></script>                    

    <p><a href="https://twitter.com/share" class="twitter-share-button" data-url="tomboserver.ddo.jp/voidroom/voidroom.php" data-text="空き教室検索アプリ「あきべや」http://tomboserver.ddo.jp/voidroom/voidroom.php" data-lang="ja" data-hashtags="あきべや">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
  </div><!-- /content -->

  <div data-role="footer">
    <h4>VOID ROOM</h4>
  </div><!-- /footer -->
</div><!-- /page -->



</body>
</html>