<?php $this->load->view('header') ?>

<main class="main">

    <?php if (isset($error)) {
        echo '<p class="alert alert-warning">' . $error . '</p>';
    } ?>

    <form action="<?php echo base_url('post/create_post') ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title"><b>TITLE</b></label>
            <input type="title" class="form-control" id="title" name="title"  placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="content"><b>CONTENT</b></label>
            <textarea class="form-control" name="content" id="content" rows="3  "></textarea>
        </div>
        <div class="form-group">
            <label for="post"><b>Upload Image</b><small>(Optional)</small></label>
            <input type="file" class="form-control" id="post" name="post" onchange="previewImage(event)"><br>
        <img id="preview" class="img-thumbnail" src="#" alt="New Profile Photo" width="600px" height="400px" style="display: none;">

        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-primary">Post</button><br>
            </div>
    </form>

    <script>
        function previewImage(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
</main>

<?php $this->load->view('footer') ?>