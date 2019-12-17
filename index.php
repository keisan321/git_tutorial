<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="index.css">
<title>PHPの基本</title>
</head>
<body>
  <div class="box">
    <div id="title">
      <h1>PHP自己学習反映部屋</h1>
    </div>
    <div class="practice">
      <h1 class="caption">出力結果</h1>
      <div class="output">
        <?php
          $to ='k.itoh@ks-japan.jp';
          $subject = '独習PHP';
          $body = "テスト";
          $headers = "FROM：user01@example.com\n";
          $headers = "Z-Mailer：PHP 7\n";
          if(mb_send_mail($to,$subject,$body,$headers)){
            print "メール送信に成功しました。";
          }else{
            print "メール送信に失敗しました。";
          }
        ?>
    </div>
  </div>
  </div>
</body>
</html>
