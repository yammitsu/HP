<?php
include('news_data.php');
$perPage = 10;
$total = count($newsData);
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $perPage;
$list = array_slice($newsData, $offset, $perPage);
$pageCount = ceil($total / $perPage);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ニュース一覧</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<?php include('loader.php'); ?>
<?php include('header.php'); ?>
<body>
<main>
  <div class="topics-container">
	<section class="page-title">
	  <h1>ニュース一覧</h1>
	</section>
    <!-- <h1 class="topics-title">ニュース一覧</h1> -->
    <ul class="topics-list">
      <?php foreach($list as $news): ?>
        <li>
          <a href="news_detail.php?id=<?= $news['id'] ?>">
            <img src="<?= htmlspecialchars($news['img']) ?>" alt="" class="topics-thumb">
            <span class="topics-date"><?= htmlspecialchars($news['date']) ?></span>
            <span class="topics-headline"><?= htmlspecialchars($news['title']) ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="topics-pagination">
      <?php for($i=1; $i<=$pageCount; $i++): ?>
        <a href="?page=<?= $i ?>"<?= $i===$page?' class="active"':'' ?>><?= $i ?></a>
      <?php endfor; ?>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>

<script src="script.js"></script>
</body>
</html>
