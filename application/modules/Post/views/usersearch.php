<?php 

$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : '';

$item = '';

// Generate list items based on search query
if ($q !== "") {
    $q = strtolower($q);
    foreach($all_user as $user) {
        if (stristr($user['name'], $q)) {
            $item .= '<a href="profile/' .$user['id'].'"><p><img src="assets/images/profile_pictures/' . $user['profile_photo'].'">   '.$user['name'].'</a></p>';
        }
    }
}

// Output list items
if ($item === '') {
    echo 'No such User';
} else {
    echo '<p>' . $item . '</p>';
}
?>