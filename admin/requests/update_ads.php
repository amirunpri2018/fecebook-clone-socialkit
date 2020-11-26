<?php
if (isset($_POST['update_ad_codes']) && isset($_POST['keep_blank']) && empty($_POST['keep_blank']) && $logged_in == true) {
    $saved = false;
    $ad_place_home = '';
    $ad_place_messages = '';
    $ad_place_timeline = '';
    $ad_place_search = '';
    $ad_place_hashtag = '';
    
    if (!empty($_POST['ad_place_home'])) {
        $ad_place_home = $_POST['ad_place_home'];
    }
    
    if (!empty($_POST['ad_place_messages'])) {
        $ad_place_messages = $_POST['ad_place_messages'];
    }
    
    if (!empty($_POST['ad_place_timeline'])) {
        $ad_place_timeline = $_POST['ad_place_timeline'];
    }
    
    if (!empty($_POST['ad_place_search'])) {
        $ad_place_search = $_POST['ad_place_search'];
    }
    
    if (!empty($_POST['ad_place_hashtag'])) {
        $ad_place_hashtag = $_POST['ad_place_hashtag'];
    }
    
    $query = "UPDATE " . DB_CONFIGURATIONS . " SET ad_place_home='$ad_place_home',ad_place_messages='$ad_place_messages',ad_place_timeline='$ad_place_timeline',ad_place_search='$ad_place_search',ad_place_hashtag='$ad_place_hashtag'";
    $sql_query = mysqli_query($dbConnect, $query);
    
    if ($sql_query) {
        $saved = true;
    }
    
    if ($saved == true) {
        $post_message = '<div class="post-success">Ad codes updated!</div>';
    } else {
        $post_message = '<div class="post-failure">Failed to save changes. Please try again!</div>';
    }
}
