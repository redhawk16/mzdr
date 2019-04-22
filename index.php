<?php require_once('./_parts/header.php'); ?>

    <div class="content">
      <div class="slider">

      </div>
      <!-- /.slider -->
      <div class="news">
        <h3 class="news-title">Новости</h3>

        <?php 
        $news = $connect->query('SELECT * FROM `mzdr` ORDER BY `time` DESC');
        if($news) foreach($news as $item):
        ?>
        <div class="news__item">
          <div class="news__item-logo"><img class="news__item-logo" src="assets/img/news/<?=$item['img']; ?>" alt=""></div>
          <!-- /.news__item-logo -->
          <div class="news__item-body">
            <div class="news__item-title"><a href="news.php?id=<?=$item['id']; ?>" class="news__item-title"><?=$item['title']; ?></a></div>
            <!-- /.news__item-title -->
            <div class="news__item-desc"><p class="news__item-desc"><?=mb_substr(strip_tags($item['description']), 0, 260) . '...'; ?></p></div>
            <!-- /.news__item-desc -->
            <div class="news__item-time"><p class="news__item-time"><?=$item['time']; ?></p></div>
            <!-- /.news__item-time -->
          </div>
          <!-- /.news__item-body -->
        </div>
        <?php endforeach; ?>

      </div>
      <!-- /.news -->
    </div>

    <?php require_once('./_parts/footer.php'); ?>