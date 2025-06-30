<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ギャラリー | YourGallery</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>

<div class="content-block">
<main class="gallery-main">
	<section class="page-title">
	  <h1>施工ギャラリー</h1>
	</section>
  <div class="gallery-grid">
    <?php
    // 画像・タイトル・説明を配列で管理
    $gallery = [
      [
        'file' => 'DEMO1.png',
        'title' => 'ヘアスタイルA',
        'desc' => 'ナチュラルショート、さわやか仕上げ。'
      ],
      [
        'file' => 'DEMO3.png',
        'title' => 'モードスタイルZ',
        'desc' => '大胆カットで個性派。'
      ],
      // ...ここに他の画像も同じように追加...
    ];

    // ページネーション
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perPage = 24;
    $total = count($gallery);
    $totalPages = ceil($total / $perPage);
    $start = ($page - 1) * $perPage;
    $items = array_slice($gallery, $start, $perPage);

    foreach($items as $i => $item):
      $globalIndex = $start + $i + 1; // idとして渡す通し番号
    ?>
      <div class="gallery-item fadein">
        <a href="gallery_detail.php?id=<?php echo $globalIndex; ?>">
          <img src="images/gallery/<?php echo $item['file']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
          <div class="gallery-hover">
            <h2><?php echo htmlspecialchars($item['title']); ?></h2>
            <p><?php echo htmlspecialchars($item['desc']); ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- ページネーション -->
  <div class="pagination">
    <?php for($i = 1; $i <= $totalPages; $i++): ?>
      <a href="?page=<?php echo $i; ?>" class="<?php if($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
  </div>
</main>
</div>

<?php include('footer.php'); ?>
<script src="script.js"></script>
</body>
</html>
