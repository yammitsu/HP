<!-- price.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>料金計算 | 株式会社モックベル Inc.</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

<main class="price-container">
  <section class="page-title">
	<h1>料金計算</h1>
  </section>

  <form id="priceForm">
	<!-- STEP 1 -->
	<section class="step step1">
	  <h2>STEP1. 車両情報の選択</h2>
	  <div class="form-group">
		<label>国産・輸入車</label>
		<label><input type="radio" name="car_origin" value="国産"> 国産車</label>
		<label><input type="radio" name="car_origin" value="輸入"> 輸入車</label>
	  </div>
	  <div class="form-group">
		<label>メーカー</label>
		<select id="manufacturer" disabled>
		  <option value="">メーカーを選択してください</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>車種</label>
		<select id="model" disabled>
		  <option value="">車種を選択してください</option>
		</select>
	  </div>
	</section>

	<!-- STEP 2 -->
	<section class="step step2">
	  <h2>STEP2 サービスの選択</h2>
	  <div class="form-group">
		<label><input type="checkbox" name="services" value="洗車" disabled> 洗車</label>
		<label><input type="checkbox" name="services" value="オイル交換" disabled> オイル交換</label>
		<label><input type="checkbox" name="services" value="タイヤ交換"> タイヤ交換</label>
	  </div>
	</section>

	<!-- STEP 3 -->
	<section class="step step3">
		<h2>STEP3 料金の確認</h2>
		<div class="price-calc-container">
			<button type="button" id="calculatePrice" disabled>料金を計算する</button>
			<input type="text" id="totalPrice" readonly placeholder="合計金額が表示されます">
		</div>
	</section>
  </form>
</main>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js"></script>

</body>
</html>
