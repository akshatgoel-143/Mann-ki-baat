<?php $this->load->view('header') ?>

<main class="main">

    <?php if (isset($error)) {
        echo '<p class="alert alert-warning">' . $error . '</p>';
    } ?>

    <form action="<?php echo base_url('post/update_post/' . $post['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="post"><b>Your Image</b></label><br>
            <img src="<?php echo base_url('assets/images/posts/' . $post['image']) ?>" alt="blank" width="600px" height="400px" id="post" class="img-thumbnail">

        </div>
        <div class="form-group">
            <label for="title"><b>TITLE</b></label>
            <input type="title" class="form-control" id="title" name="title" value="<?php echo $post['title'] ?>" placeholder="Enter title" required>

        </div>
        <div class="form-group">
            <label for="content"><b>CONTENT</b></label>
            <textarea class="form-control" name="content" id="content" rows="10 "><?php echo $post['content'] ?></textarea>
        </div>

        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-primary">Update Post</button><br>
            </div>
    </form>
</main>

<?php $this->load->view('footer') ?>