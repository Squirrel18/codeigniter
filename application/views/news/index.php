<div class="row">
    <div class="col-xs-12 col-md-6">
        <?php foreach ($news as $news_item): ?>
            <h3><?php echo $news_item['title']; ?></h3>
            <div>
                <?php echo $news_item['text']; ?>
            </div>
            <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a>
            <a href="<?php echo site_url('news/edit/'.$news_item['slug']); ?>">Edit article</a>
        <?php endforeach; ?>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="well">
            <a href="<?php echo site_url('news/create') ?>">Create news</a>
        </div>
    </div>
</div>
