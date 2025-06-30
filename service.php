<!-- service.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サービス一覧 | 株式会社モックベル Inc.</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

  <div class="content-block">
  <main>
	<section class="page-title">
	  <h1>サービス一覧</h1>
	</section>

	<section class="service-list">
	  <div class="service-box">
		<img src="images/DEMO8.png" alt="サービス1">
		<h2>サービス1</h2>
		<p>サービス1の説明文をここに記載します。</p>
	  </div>

	  <div class="service-box">
		<img src="images/DEMO9.png" alt="サービス2">
		<h2>サービス2</h2>
		<p>サービス2の説明文をここに記載します。</p>
	  </div>

	  <div class="service-box">
		<img src="images/DEMO10.png" alt="サービス3">
		<h2>サービス3</h2>
		<p>サービス3の説明文をここに記載します。</p>
	  </div>
	</section>
  </main>
  </div>

  <?php include('footer.php'); ?>
<script src="script.js"></script>

</body>
</html>
