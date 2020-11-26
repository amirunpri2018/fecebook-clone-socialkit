<?php
if (isset($_POST['update_site_settings']) && isset($_POST['keep_blank']) && empty($_POST['keep_blank']) && $logged_in == true) {
    $saved = false;
    
    if (!empty($_POST['site_name']) && !empty($_POST['site_title']) && !empty($_POST['site_email']) && isset($_POST['email_verification']) && isset($_POST['chat']) && isset($_POST['captcha']) && isset($_POST['language']) && isset($_POST['smooth_links']) && isset($_POST['censored_words'])) {
        $site_name = SK_secureEncode($_POST['site_name']);
        $site_title = SK_secureEncode($_POST['site_title']);
        $email = SK_secureEncode($_POST['site_email']);
        $email_verification = SK_secureEncode($_POST['email_verification']);
        $chat = SK_secureEncode($_POST['chat']);
        $captcha = SK_secureEncode($_POST['captcha']);
        $language = SK_secureEncode($_POST['language']);
        $smooth_links = SK_secureEncode($_POST['smooth_links']);
        $censored_words = $_POST['censored_words'];
        
        $query = "UPDATE " . DB_CONFIGURATIONS . " SET site_name='$site_name',site_title='$site_title',email='$email',email_verification='$email_verification',chat='$chat',smooth_links='$smooth_links',captcha='$captcha',language='$language',censored_words='$censored_words'";
        $sql_query = mysqli_query($dbConnect, $query);
        
        if ($sql_query) {
            $saved = true;
        }
    }
    
    if ($saved == true) {
        $post_message = '<div class="post-success">Website settings updated!</div>';
    } else {
        $post_message = '<div class="post-failure">Failed to save changes. Please do not keep required fields empty.</div>';
    }
}
