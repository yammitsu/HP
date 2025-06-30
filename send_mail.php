<?php
// send_mail.php

// フォームからの入力データを取得し、HTMLタグを無効化してXSS攻撃を防ぎます
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

// メールの送信先
$to = 'info@株式会社モックベル.jp'; // ここに実際の問い合わせ受付用メールアドレスを設定

// メールの件名
$mail_subject = 'お問い合わせ: ' . $subject;

// メールの本文
$mail_body = "お名前: $name\n";
$mail_body .= "メールアドレス: $email\n\n";
$mail_body .= "お問い合わせ内容:\n$message\n";
$mail_body .= "\n";
$mail_body .= "お問い合わせありがとうございます。\n";
$mail_body .= "お問い合わせ内容を確認後ご連絡いたしますのでお待ちください。\n";
$mail_body .= "状況によりご連絡にお時間をいただく場合がございます、ご了承ください。\n";

// メールヘッダーの設定
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// メール送信を実行
if (mail($to, $mail_subject, $mail_body, $headers)) {
  // 送信成功時の処理
  header('Location: contact_thanks.php'); // 送信完了後のサンクスページへリダイレクト
  exit;
} else {
  // 送信失敗時の処理
  echo 'メールの送信に失敗しました。';
}
?>
