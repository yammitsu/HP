<?php
include('news_data.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$news = null;
foreach($newsData as $item) {
    if ($item['id'] === $id) { $news = $item; break; }
}
if (!$news) {
    header('Location: news_list.php'); exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($news['title']) ?> | ニュース詳細</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>
<body>
<main>
  <div class="topics-detail-container">
    <div class="topics-detail-header">
      <h1 class="topics-detail-title"><?= htmlspecialchars($news['title']) ?></h1>
      <span class="topics-detail-date"><?= htmlspecialchars($news['date']) ?></span>
    </div>
    <?php if($news['img']): ?>
      <img src="<?= htmlspecialchars($news['img']) ?>" alt="" class="topics-detail-thumb">
    <?php endif; ?>
    <div class="topics-detail-content"><?= nl2br(htmlspecialchars($news['content'])) ?></div>
    <div class="topics-detail-back">
      <a href="news_list.php" class="topics-back-btn">一覧へ戻る</a>
    </div>
  </div>
</main>
<?php include('footer.php'); ?>

<script src="script.js"></script>
</body>
</html>
