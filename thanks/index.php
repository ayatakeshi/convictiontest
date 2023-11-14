<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$phonetic = $_POST['phonetic'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$comments = $_POST['comments'];

	// 送信側
	$body01 .= "※このメールはシステムからの自動返信です。\n\n";
	$body01 .= "担当者よりご連絡いたしますので今しばらくお待ちくださいませ。\n\n";
	$body01 .= "□■□　お問い合わせ内容　□■□\n\n";
	$body01 .= "お名前: ".$name."\n\n";
	$body01 .= "お名前フリガナ: ".$phonetic."\n\n";
	$body01 .= "メールアドレス: ".$mail."\n\n";
	$body01 .= "電話番号: ".$phone."\n\n";
	$body01 .= "お問い合わせ内容: \n".$comments."\n\n";
	$body01 .= "———————————\n\n";
	$body01 .= "———————————\n\n";
	$body01 .= "【会社情報】\n";
	$body01 .= "株式会社CONVICTION\n";
	$body01 .= "住所：東京都渋谷区神南1-20-2 第一清水ビル4F\n";
	$body01 .= "TEL：03-6260-8700\n";
	$body01 .= "Mail：info@conviction-inc.com\n";

	// 受け取側
	$body02 .= "□■□　お問い合わせ内容　□■□\n\n";
	$body02 .= "お名前: ".$name."\n\n";
	$body02 .= "お名前フリガナ: ".$phonetic."\n\n";
	$body02 .= "メールアドレス: ".$mail."\n\n";
	$body02 .= "電話番号: ".$phone."\n\n";
	$body02 .= "お問い合わせ内容: \n".$comments."\n\n";
	$body02 .= "———————————\n\n";
	$body02 .= "———————————\n\n";
	$body02 .= "このメールはhttps://www.conviction-inc.comのお問い合わせフォームから送信されました。\n";

  $system = "info@conviction-inc.com"; //ここに送受信するメールアドレスをいれます


	//メールの送り先,メールの送り元,メールタイトル
	$flg = bSENDMAIL3($mail,$system,"この度は株式会社CONVICTIONへのお問い合わせありがとうございます。",$body01);
	$flg = bSENDMAIL3($system,$system,"お問い合わせを受け付けました。",$body02);
}

function bSENDMAIL3($to,$from,$sub,$body) {
	mb_language("uni");
	mb_internal_encoding("utf-8");//utf-8 or SJIS
	$Head="";
	$Head.="From: ".$from."\n";
	$Head.="Mime-Version: 1.0\n";
	$Head.="Reply-To: ".$from."\n";
	$Head.="X-Mailer: PHP/" . phpversion();
	$flg = mb_send_mail($to, $sub, $body,$Head);
	return $flg;
}
?>


<?php
  include('../include/head.php');
  include('../include/header.php');
?>
  <main class="l-main">
    <div class="c-pagetitle">
      <h2>
        <span>THANKS</span>
      </h2>
      <div id="pazzle-01"></div>
      <div id="pazzle-02"></div>
    </div>

    <div class="p-thanks">
      <div class="p-thnaks__container">
        <h2 class="p-thanks__heading">
          お問い合わせ<br class="is-sp">ありがとうございました。
        </h2>

        <p class="p-thanks__text">
          3営業日以内にinfo@conviction-inc.comよりご連絡いたします。<br />
          (迷惑メールフォルダに振り分けられる可能性がございますのでご確認ください)<br />
          数日たってもメールが届かない場合はお手数ですが、03-6260-8700までご連絡いただけますと幸いです。
        </p>

        <a href="/" class="c-button p-thanks__button">TOP</a>
      </div>
    </div>
  </main>

<?php
  include('../include/footer.php');
?>
