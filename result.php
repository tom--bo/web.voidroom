<?php
// DBの設定
$link = mysql_connect('localhost', 'root', 'tomoakip');
if (!$link) {
  die('接続失敗です。'.mysql_error());
}
mysql_set_charset('utf8');

$db_selected = mysql_select_db('zenki_room', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}

if(!intval($_POST['weekday'])) die('Error loading page!');
if(!intval($_POST['period'])) die('Error loading page!');

$building_count = 0;
$building_str = '';

$buildings = array(
  52 => array(
    "101" => 0,
    "102" => 0,
    "103" => 0,
    "104" => 0,
    "201" => 0,
    "202" => 0,
    "203" => 0,
    "204" => 0,
    "301" => 0,
    "302" => 0,
  ),
  53 => array(
    "B01" => 0,
    "B03" => 0,
    "B04" => 0,
    "101" => 0,
    "103" => 0,
    "104" => 0,
    "201" => 0,
    "203" => 0,
    "204" => 0,
    "301" => 0,
    "303" => 0,
    "304" => 0,
    "401" => 0,
    "403" => 0,
    "404" => 0,
  ),
  54 => array(
    "B01" => 0,
    "B02" => 0,
    "B03" => 0,
    "B04" => 0,
    "101" => 0,
    "102" => 0,
    "103" => 0,
    "104" => 0,
    "201" => 0,
    "202" => 0,
    "203" => 0,
    "204" => 0,
    "301" => 0,
    "302" => 0,
    "303" => 0,
    "304" => 0,
    "401" => 0,
    "402" => 0,
    "403" => 0,
    "404" => 0,
  ),
  56 => array(
    "101" => 0,
    "102" => 0,
    "103" => 0,
    "104" => 0,
  ),
  60 => array(
    "102" => 0,
    "202" => 0,
  ),
  61 => array(
    "102" => 0,
    "104" => 0,
    "202" => 0,
    "206" => 0,
    "210" => 0,
    "214" => 0,
    "302" => 0,
    "306" => 0,
    "310" => 0,
    "314" => 0,
    "401" => 0,
    "405" => 0,
    "409" => 0,
    "413" => 0,
  ),
  63 => array(
    "201" => 0,
    "202" => 0,
  )
);

$flag_52 = 0;
$flag_53 = 0;
$flag_54 = 0;
$flag_56 = 0;
$flag_60 = 0;
$flag_61 = 0;
$flag_63 = 0;

$plug_level = array(
  //52
  'A', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C',
  //53
  'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 
  //54
  'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 
  //56
  'D', 'D', 'A', 'D',
  //60
  'B', 'B', 
  //61
  'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 
  //63
  'C', 'C'
  );


if(isset($_POST['checkboxa'])){
  $building_str .= 'and (building_no="'.$_POST['checkboxa'].'"';
  $building_count +=1;
  $flag_52 = 1;
}
if(isset($_POST['checkboxb'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxb'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxb'].'"';
  $building_count +=1;
  $flag_53 = 1;
}
if(isset($_POST['checkboxc'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxc'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxc'].'"';
  $building_count +=1;
  $flag_54 = 1;
}
if(isset($_POST['checkboxd'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxd'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxd'].'"';
  $building_count +=1;
  $flag_56 = 1;
}
if(isset($_POST['checkboxf'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxf'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxf'].'"';
  $building_count +=1;
  $flag_60 = 1;
}
if(isset($_POST['checkboxg'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxg'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxg'].'"';
  $building_count +=1;
  $flag_61 = 1;
}
if(isset($_POST['checkboxh'])){
  if($building_count==0) $building_str .= 'and (building_no="'.$_POST['checkboxh'].'"';
  else $building_str .= ' or building_no="'.$_POST['checkboxh'].'"';
  $building_count +=1;
  $flag_63 = 1;
}
$building_str .= ')';



$result = mysql_query('SELECT subject,week_day,period,building_no,room_no FROM rooms WHERE week_day = "'.$_POST['weekday'].'" and period="'.$_POST['period'].'" '.$building_str);
if(mysql_num_rows($result)) echo mysql_num_rows($result); 
if (!$result) {
  die('クエリーが失敗しました。'.mysql_error());
}
?>



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
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
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

<div data-role="page" id="result">
  <div data-role="header">
    <form action="result.php" method="post" name="periodminus" style="display: inline;">
      <?php 
        if(isset($_POST['checkboxa'])) echo '<input type="hidden" name="checkboxa" value="52">';
        if(isset($_POST['checkboxb'])) echo '<input type="hidden" name="checkboxb" value="53">';
        if(isset($_POST['checkboxc'])) echo '<input type="hidden" name="checkboxc" value="54">';
        if(isset($_POST['checkboxd'])) echo '<input type="hidden" name="checkboxd" value="56">';
        if(isset($_POST['checkboxf'])) echo '<input type="hidden" name="checkboxf" value="60">';
        if(isset($_POST['checkboxg'])) echo '<input type="hidden" name="checkboxg" value="61">';
        if(isset($_POST['checkboxh'])) echo '<input type="hidden" name="checkboxh" value="63">';
      ?>

        <input type="hidden" name="weekday" value=<?php echo '"'.$_POST['weekday'].'"'; ?>>
        <input type="hidden" name="period" value=<?php echo '"'.($_POST['period']-1).'"'; ?>>
        <input type="submit" value="前" data-ajax="false" data-role="button" data-inline="true" data-icon="arrow-l" style="text-align: left;" >
    </form>


    <p style="display: inline;" align="center">
    <?php
      $arr_week_day = array('月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日');
      echo $arr_week_day[$_POST['weekday']-1];
      echo $_POST['period']."限 の検索結果";
    ?>
    </p>
    <form action="result.php" method="post" name="periodplus" style="display: inline;">
      <?php 
        if(isset($_POST['checkboxa'])) echo '<input type="hidden" name="checkboxa" value="52">';
        if(isset($_POST['checkboxb'])) echo '<input type="hidden" name="checkboxb" value="53">';
        if(isset($_POST['checkboxc'])) echo '<input type="hidden" name="checkboxc" value="54">';
        if(isset($_POST['checkboxd'])) echo '<input type="hidden" name="checkboxd" value="56">';
        if(isset($_POST['checkboxf'])) echo '<input type="hidden" name="checkboxf" value="60">';
        if(isset($_POST['checkboxg'])) echo '<input type="hidden" name="checkboxg" value="61">';
        if(isset($_POST['checkboxh'])) echo '<input type="hidden" name="checkboxh" value="63">';
      ?>

        <input type="hidden" name="weekday" value=<?php echo '"'.$_POST['weekday'].'"'; ?>>
        <input type="hidden" name="period" value=<?php echo '"'.($_POST['period']+1).'"'; ?>>
        <input type="submit" value="次" data-ajax="false" data-role="button" data-inline="true" data-icon="arrow-r" style="text-align: right;" >
    </form>

    <!-- <a href="#main" data-icon="arrow-r" data-iconpos="notext" onclick="check_form"></a> -->
  </div><!-- /header -->

  <div data-role="content">

<?php
  echo '
  <a href="main.php" data-role="button" data-icon="home" data-mini="true" data-inline="true" data-ajax="false">Topへ</a>
  <a href="mailform.php" data-role="button" data-icon="alert" data-mini="true" data-inline="true" data-ajax="false">間違いを通知</a>
  ';
  if($_POST['period']<=0 || $_POST['period']>6){
    comment($_POST['period']);
  }

  while ($row = mysql_fetch_assoc($result)) {
    if(isset($buildings[$row['building_no']][$row['room_no']])){
      $buildings[$row['building_no']][$row['room_no']] = 1;
    }
  }
  $count = 0;
  echo '<h6>※電源情報　コンセントの数をA→Dで評価しています。</h6>';
  if($flag_52){
    echo "<p>52号館</p>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[52] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'52-'.$key.''.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.')'.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_53){
    echo "<h4>53号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[53] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'53-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.')'.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_54){
    echo "<h4>54号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[54] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'54-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.') '.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_56){
    echo "<h4>56号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[56] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'56-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.') '.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_60){
    echo "<h4>60号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[60] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'60-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.') '.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_61){
    echo "<h4>61号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[61] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'61-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.') '.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
  if($flag_63){
    echo "<h4>63号館</h4>";
    echo '<div class="ui-grid-a">';
    foreach($buildings[63] as $key => $ele){
      if(!$ele){
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-e" style="height:20px">'.'63-'.$key.' '.$plug_level[$count].'</div></div>';
      }
      else{
        echo '<div class="ui-block-c"><div class="ui-bar ui-bar-c" style="height:20px">Close('.$key.')  '.$plug_level[$count].'</div></div>';
      }
      $count++;
    }
    echo "</div>";
  }
?>
    <br>
    <script type="text/javascript">
      var nend_params = {"media":10803,"site":48409,"spot":99046,"type":1,"oriented":5};
    </script>
    <script type="text/javascript" src="http://js1.nend.net/js/nendAdLoader.js"></script>                    
    <br>

    <a href="main.php" data-role="button" data-icon="home" data-mini="true" data-inline="true" data-ajax="false">Topへ</a>
    <a href="mailform.php" data-role="button" data-icon="alert" data-mini="true" data-inline="true" data-ajax="false">間違いを通知</a>
    <br>
  </div><!-- /content -->

  <div data-role="footer">
    <h4>VOID ROOM</h4>
  </div><!-- /footer -->
</div><!-- /page -->

</body>
</html>