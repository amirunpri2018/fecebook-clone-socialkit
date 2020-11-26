<?php
function general_settings() {
global $config;
?>
<form class="content-container" method="post" action="?tab1=general_settings">
    <div class="content-header">Site Information</div>
    <div class="content-wrapper">
        <label>Website Settings</label>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Name</div>
        <div class="input float-left">
            <input type="text" name="site_name" value="<?php echo $config['site_name']; ?>">
            <div class="info">Name of your site</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Title</div>
        <div class="input float-left">
            <input type="text" name="site_title" value="<?php echo $config['site_title']; ?>">
            <div class="info">Site's title</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">E-mail</div>
        <div class="input float-left">
            <input type="text" name="site_email" value="<?php echo $config['email']; ?>">
            <div class="info">Site's email. All emails to your users will be send from this email.</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Email verification</div>
        <div class="input float-left">
            <select name="email_verification">
                <option value="1" <?php if ($config['email_verification'] == 1) echo 'selected'; ?>>On</option>
                <option value="0" <?php if ($config['email_verification'] == 0) echo 'selected'; ?>>Off</option>
            </select>
            <div class="info">Enable email verification
            </div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Chat</div>
        <div class="input float-left">
            <select name="chat">
                <option value="1" <?php if ($config['chat'] == 1) echo 'selected'; ?>>On</option>
                <option value="0" <?php if ($config['chat'] == 0) echo 'selected'; ?>>Off</option>
            </select>
            <div class="info">Enable chat system
            </div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Captcha</div>
        <div class="input float-left">
            <select name="captcha">
                <option value="1" <?php if ($config['captcha'] == 1) echo 'selected'; ?>>On</option>
                <option value="0" <?php if ($config['captcha'] == 0) echo 'selected'; ?>>Off</option>
            </select>
            <div class="info">Enable captcha on registration</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Language</div>
        <div class="input float-left">
            <select name="language">
                <?php
                $languages = glob('../assets/languages/*.php');
                    
                foreach($languages as $language) {
                    $language = str_replace('../assets/languages/', '', $language);
                    $language = preg_replace('/([A-Za-z]+)\.php/i', '$1', $language); ?>
                    <option value="<?php echo $language; ?>" <?php if ($language == $config['language']) echo 'selected'; ?>><?php echo ucfirst($language); ?></option>
                <?php } ?>
            </select>
            <div class="info">Default language</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Smooth Links</div>
        <div class="input float-left">
            <select name="smooth_links">
                <option value="0" <?php if ($config['smooth_links'] == 0) echo 'selected'; ?>>Off</option>
                <option value="1" <?php if ($config['smooth_links'] == 1) echo 'selected'; ?>>On</option>
            </select>
            <div class="info">Enable smooth links, e.g. <?php echo $config['site_url']; ?>/home. <br><br> <strong>Note:</strong> Modifications required. Contact me if you need help.</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="content-wrapper">
        <div class="label float-left">Censored words</div>
        <div class="input float-left">
            <input type="text" name="censored_words" value="<?php echo $config['censored_words']; ?>">
            <div class="info">Words to be censored, separated by a comma (,)</div>
        </div>
        <div class="float-clear"></div>
    </div>
    <div class="button-wrapper">
        <input type="submit" name="save_btn" value="Save Changes">
    </div>
    <input type="hidden" name="keep_blank" value="">
    <input type="hidden" name="update_site_settings" value="1">
</form>
<?php } ?>