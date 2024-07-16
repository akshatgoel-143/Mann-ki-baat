<?php $this->load->view('header') ?>

<main class="main">
    <?php if (isset($error)) {
        echo '<p class="alert alert-warning">' . $error . '</p>';
    } ?>

    <form action="<?php echo base_url('user/update_user') ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo ($user['name']); ?>" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="email"><b>e-mail Id</b></label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo ($user['email']); ?>" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="mob_no"><b>Mobile No.</b></label>
            <input type="mob_no" class="form-control" id="mob_no" name="mob_no" value="<?php echo ($user['mob_no']); ?>" placeholder="Enter Mobile No" required>
        </div>
        <div class="form-group">
            <label for="city"><b>City</b></label>
            <input type="city" class="form-control" id="city" name="city" value="<?php echo ($user['city']); ?>" placeholder="Enter City" required>
        </div>
        <div class="form-group">
            <label for="state"><b>State</b></label>
            <input type="state" class="form-control" id="state" name="state" value="<?php echo ($user['state']); ?>" placeholder="Enter State" required>
        </div>
        <div class="form-group">
            <label for="profile_photo"><b>Profile Photo</b></label><br>
            <?php if (!empty($user['profile_photo'])) : ?>
                <img id="preview" src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']); ?>" alt="Profile Photo" style="max-width: 100px;"><br>
            <?php endif;  ?><br>
            <input type="file" class="form-control" id="profile_photo" name="u_photo" onchange="previewImage(event)">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button><br>
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