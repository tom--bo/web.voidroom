<!DOCTYPE html>
<html>
  <head>
  <title>あきべや</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
  <link rel="stylesheet" href="css/ad.css" type="text/css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
  <?php
    require("PHPMailer/class.phpmailer.php");
  ?>  
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
    <h1>問い合わせ結果</h1>
    <a href="#popup1" data-rel="popup" data-icon="info" class="ui-btn-right" data-iconpos="">info</a>
    <div data-role="popup" id="popup1">
      <a href="mailform.php" data-role="button" data-icon="alert" data-mini="true" data-ajax="false">問い合わせ</a>
      <a href="about.php" data-role="button" data-icon="star" data-mini="true" data-ajax="false">サイトについて</a>
      <a href="http://www2.sci.waseda.ac.jp/tools/pcroom/sch.php" data-role="button" data-icon="forward" data-mini="true" data-ajax="false">PCルーム大学サイト</a>
    </div>
  </div>


  <div data-role="content">
    <?php
    if(!$_POST){
      echo "失敗しました";
      exit;
    }
    /*
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
    */

      //言語設定、内部エンコーディングを指定する
      mb_language("japanese");
      mb_internal_encoding("EUC-JP");
       
      $mailer = new PHPMailer();
      $mailer->IsSMTP();
      // $mail->CharSet = "iso-2022-jp";
     // $mail->Encoding = "7bit";

      try{
        $mailer->SMTPAuth   = true;
        $mailer->SMTPSecure = "tls";
        $mailer->Host       = "smtp.gmail.com";
        $mailer->Port       = 587;
        $mailer->Username   = "rikoh.voidroom@gmail.com";
        $mailer->Password   = "akikyousitu";
        $mailer->Subject    = "title";
        $mailer->Body       = $_POST['radio3a']."号館 ".$_POST['radio4a']."(曜日) ".$_POST['radio5a']."限 ".$_POST['room_no']."教室 \n".$_POST['class_room']."\n".$_POST['textarea']."\n";
        $mailer->AddAddress("rikoh.voidroom@gmail.com","");
    //$mailer->AddCC("cc@example.com","彼誰様");
        $mailer->SetFrom("rikoh.voidroom@gmail.com","");
        // $mailer->Subject = mb_convert_encoding($subject,"JIS","utf-8");
        // $mailer->Body  = mb_convert_encoding($body,"JIS","utf-8");

    //$mailer->AddAttachment($file);
        if($mailer->Send()) echo 'Mailの送信に成功しました。課題がなければ対応します。';
        else echo 'mailの送信に失敗しました。申し訳ありません。@rikoh_voidroomでも対応しています。';
      }catch(phpmailerException $e){
        echo $e->errorMessage();
      }catch(Exception $e){
        echo $e->getMessage();
      }
      error_reporting(E_ALL);

      ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  </div><!-- /content -->

  <div class="meerkat">
    <div class="ad">

      <?php 
        require_once 'ads.php';
        $r = rand(3,20);
        echo $ads[$r];
      ?>

    </div>
  </div>

  <div data-role="footer">
    <h4>VOID ROOM</h4>
  </div>
</div>


</body>
</html>