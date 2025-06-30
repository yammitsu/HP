<!-- contact.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ | 株式会社モックベル Inc.</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

<main class="contact-container">
  <section class="page-title">
	<h1>お問い合わせ</h1>
  </section>

  <form action="send_mail.php" method="post" id="contactForm" class="contact-form">
	<div class="form-group">
	  <label for="name">お名前<span class="required">必須</span></label>
	  <input type="text" id="name" name="name" required>
	</div>

	<div class="form-group">
	  <label for="email">メールアドレス<span class="required">必須</span></label>
	  <input type="email" id="email" name="email" required>
	</div>

	<div class="form-group">
	  <label for="subject">件名<span class="required">必須</span></label>
	  <input type="text" id="subject" name="subject" required>
	</div>

	<div class="form-group">
	  <label for="message">お問い合わせ内容<span class="required">必須</span></label>
	  <textarea id="message" name="message" rows="6" required></textarea>
	</div>

	<div class="form-group submit-btn">
	  <button type="submit">送信する</button>
	</div>
  </form>
</main>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js"></script>

</body>
</html>
