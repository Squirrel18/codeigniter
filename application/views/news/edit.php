<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/' . $news_item['slug'] . ''); ?>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="input" name="title" class="form-control"><br>
                <label for="text">Text</label>
                <textarea name="text" class="form-control"></textarea><br>
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Create news item">
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="well">
                <p><?php echo $news_item['title'] ?></p>
                <p><?php echo $news_item['text'] ?></p>
            </div>
        </div>
    </div>
</form>