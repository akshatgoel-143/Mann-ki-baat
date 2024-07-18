<div class="sidebar">
    <h2>Our Users</h2>

    <div class="search-user">
        <form action="">
            <input type="text" id="fname" name="fname" onkeyup="searchinput(this.value)" placeholder="Search User" style="width: 100%;">
        </form>
        <div class="user-list" id="searchresult"></div>
    </div>

    <?php foreach ($all_user as $user) { ?>
        <a class="user-link" href="<?php echo base_url('profile/' . $user['id']); ?>">
            <div class="user">
                <img src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']) ?>" alt="Avatar" class="avatar">
                <div class="user-data">
                    <h3><?php echo $user['name']; ?><h3>
                            <small><?php echo $user['username']; ?></small>
                            <p class="post-count">
                                <?php
                                $post_count = 0;
                                foreach ($posts as $post) {
                                    if ($post['user_id'] == $user['id']) {
                                        $post_count++;
                                    }
                                }
                                echo $post_count . ' posts';
                                ?>
                            </p>
                </div>
            </div>
        </a>
    <?php  } ?>
    <p>End of Users</p>
    
</div>


<script>
    function searchinput(str) {
        if (str.length == 0) {
            document.getElementById("searchresult").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("searchresult").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "<?php echo base_url('post/search') ?>?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>