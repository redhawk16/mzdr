<?php require_once('./_parts/header.php'); ?>

<div class="content">
	<?php 
	if(isset($_GET['id'])) {
		$currentNews = $_GET['id'];
		$news = $connect->query("SELECT * FROM `mzdr` WHERE `id`='$currentNews'");
		$news = $news->fetch(PDO::FETCH_ASSOC);
		if($news) { ?>
			<div class="news-body">
				<div class="news-header">
					<img src="assets/img/news/<?=$news['img']; ?>" alt="" class="news-header__logo">
					<h3 class="news-header__title"><?=$news['title']; ?></h3>
				</div>
				<div class="news-content">
					<p class="news-content__desc"><?=$news['description']; ?></p>
					<p class="news-content__time"><?=$news['time']; ?></p>
				</div>
			</div>
		<?php }
	}
	?>
</div>

<?php require_once('./_parts/footer.php'); ?>