<!-- online.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>オンラインショップ | 株式会社モックベル Inc.</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

  <div class="content-block">
  <main>
	<section class="page-title">
	  <h1>オンラインショップ</h1>
	</section>

	<section class="online-shop">
	  <div class="shop-intro">
		<p>私たちのオンラインショップでは、厳選された商品を取り揃えております。ぜひご利用ください。</p>
	  </div>

	  <div class="product-list">
		<!-- 商品1 -->
		<div class="product-item">
		  <img src="images/DEMO5.png" alt="商品1">
		  <h2>商品名1</h2>
		  <p>商品の簡単な説明文をここに記載します。</p>
		  <a href="#" class="btn-buy">購入する</a>
		</div>

		<!-- 商品2 -->
		<div class="product-item">
		  <img src="images/DEMO6.png" alt="商品2">
		  <h2>商品名2</h2>
		  <p>商品の簡単な説明文をここに記載します。</p>
		  <a href="#" class="btn-buy">購入する</a>
		</div>

		<!-- 商品3 -->
		<div class="product-item">
		  <img src="images/DEMO8.png" alt="商品3">
		  <h2>商品名3</h2>
		  <p>商品の簡単な説明文をここに記載します。</p>
		  <a href="#" class="btn-buy">購入する</a>
		</div>

		<!-- 商品4 -->
		<div class="product-item">
		  <img src="images/DEMO9.png" alt="商品4">
		  <h2>商品名4</h2>
		  <p>商品の簡単な説明文をここに記載します。</p>
		  <a href="#" class="btn-buy">購入する</a>
		</div>
	  </div>
	</section>
  </main>
  </div>

  <?php include('footer.php'); ?>
<script src="script.js"></script>

</body>
</html>
