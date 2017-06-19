<?php echo validation_errors(); ?>

<?php
    $attrib = array('onsubmit' => 'return sub_form_edit();');
    echo form_open('news/edit_ajax/' . $news_item['slug'] . '', $attrib); ?>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="input" name="title" class="form-control" placeholder="<?php echo $news_item['title'] ?>"><br>
                <label for="text">Text</label>
                <textarea name="text" class="form-control" placeholder="<?php echo $news_item['text'] ?>"></textarea><br>
                <input type=hidden name="update" value="<?php echo $news_item['slug']; ?>">
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Edit item">
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="well text-center">
                <h3>Title</h3>
                <p><em><?php echo $news_item['title'] ?></em></p>
                <h3>Text</h3>
                <p><em><?php echo $news_item['text'] ?></em></p>
            </div>
        </div>
    </div>
</form>