<?php
// idに対応する詳細データをすべて用意
$galleryDetails = [
  1 => [
    'main' => 'DEMO1.png',
    'title' => 'ヘアスタイルA',
    'desc' => 'ナチュラルショート、さわやか仕上げ。',
    'images' => ['DEMO1.png', 'DEMO1 - コピー.png', 'DEMO1 - コピー (2).png']
  ],
  2 => [
    'main' => 'DEMO3.png',
    'title' => 'モードスタイルZ',
    'desc' => '大胆カットで個性派。',
    'images' => ['DEMO2.png', 'DEMO2 - コピー.png']
  ]
  // ...ここに必要な分だけ同じ形式で追加...
];

// id取得＆エラー防止（未登録idなら一覧へ戻す）
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
if (!isset($galleryDetails[$id])) {
  header("Location: gallery.php");
  exit;
}
$data = $galleryDetails[$id];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($data['title']); ?> | 詳細</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

<div class="content-block">
<main class="gallery-detail-main">
  <section class="page-title">
	  <h1>施工詳細ギャラリー</h1>
	</section>

  <div class="gallery-detail-top">
    <div class="gallery-detail-image">
      <img src="images/gallery/<?php echo $data['main']; ?>" alt="<?php echo htmlspecialchars($data['title']); ?>">
    </div>
    <div class="gallery-detail-info">
      <h1><?php echo htmlspecialchars($data['title']); ?></h1>
      <p><?php echo htmlspecialchars($data['desc']); ?></p>
    </div>
  </div>
  <div class="gallery-detail-others">
    <?php foreach($data['images'] as $img): ?>
      <img src="images/gallery/<?php echo $img; ?>" alt="">
    <?php endforeach; ?>
  </div>
</main>
</div>

<?php include('footer.php'); ?>
<script src="script.js"></script>
</body>
</html>
