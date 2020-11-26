<?php
function SK_verifyLogin() {
    global $dbConnect;
    
    $query_one = "SELECT * FROM " . DB_CONFIGURATIONS;
    $sql_query_one = mysqli_query($dbConnect, $query_one);
    $config = mysqli_fetch_assoc($sql_query_one);
    
    if (!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_password'])) {
        
        if ($_SESSION['admin_id'] == $config['admin_username'] && $_SESSION['admin_password'] == $config['admin_password']) {
            return true;
        }
    }
}
