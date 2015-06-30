<?php
/*
Plugin Name: Ins Policy
Plugin URI: http://capitalplanning.co.nz
Description: Does Insurance Policy
Version: 1.0
Author: Yunnette
Author URI: http://capitalplanning.co.nz
License: CPCInsPol
*/
register_activation_hook(__FILE__,'create_pol_table');
register_deactivation_hook(__FILE__, 'drop_pol_table');
add_action( 'admin_menu', 'my_plugin_menu' );
add_action( 'admin_enqueue_scripts', 'add_script' );
add_action( 'admin_enqueue_scripts', 'add_style');
function example_dashboard_widget_function() {
	echo "<strong>Welcome To the Cloud!</strong> With no need for installations onto a desktop system, take the opportunity to access your business information from anywhere, at any time.<br />";
        echo "<br />";
        echo "<strong>Benefits</strong><br />";
        echo "<br />";
        echo "•	Capitalise on every sales opportunity through easy selection menus and filtering features<br />";
        echo "•	Access your computer database from any location<br />";
        echo "•	Use the excellent note taking features to keep you compliant<br />";
        echo "•	Keep in touch with your clients at important dates, such as birthdays and renewal dates<br />";
        echo "<br />";
        echo "<strong>Do You Want Greater Mobility?</strong> Use it from your PC, Tablet and even your 3G Mobile.<br />";
        echo "<br />";
        echo "<strong>Query or Comment?</strong> Use the Ticket System to receive hands on support<br />";
} 
function example_add_dashboard_widgets() {
	wp_add_dashboard_widget('example_dashboard_widget', 'Welcome to Target Marketing!','example_dashboard_widget_function');	
}
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );
function drop_pol_table(){
    $table_name = 'wp_policies';
    global $wpdb;
    //$wpdb->query("DROP TABLE IF EXISTS $table_name");
    global $wp_roles;
    $wp_roles->remove_cap( 'administrator', 'manage_policy' );
    $wp_roles->remove_role( 'policy' );
}
function create_pol_table() {
    global $wp_roles;
    $wp_roles->add_cap( 'administrator', 'manage_policy' );
    $wp_roles->add_role( 'policy', 'Policy User', array( 'manage_policy') );
    $wp_roles->add_cap('policy', 'read');
    $wp_roles->add_cap( 'policy', 'manage_policy' );
    
    $wp_roles->add_cap( 'policy', 'manage_wpsc_support_tickets' );
    //$wp_roles->add_cap('policy','WP-CRM: View Overview');
    //$wp_roles->add_cap('policy','WP-CRM: View Profiles');
    //$wp_roles->add_cap('policy','WP-CRM: Manage Settings');
    //$wp_roles->add_cap('policy','WP-CRM: Add User Messages');
    //$wp_roles->add_cap('policy','WP-CRM: Perform Advanced Functions');
    //$wp_roles->add_cap('policy','WP-CRM: Change Passwords');
    //$wp_roles->add_cap('policy','WP-CRM: Change Color Scheme');
    //$wp_roles->add_cap('policy','WP-CRM: View Messages');
    
    //$wp_roles->add_cap('policy','create_users');
    //$wp_roles->add_cap('policy','delete_users');
    //$wp_roles->add_cap('policy','edit_users');
    
    $table_name = 'wp_policies';
    $db_name = DB_NAME;
    global $wpdb;
        $sql = "CREATE  TABLE  `".$db_name."`.`".$table_name."` (  `company` varchar( 50  )  NOT  NULL ,
                    `type` varchar( 50  )  NOT  NULL ,
                    `policy_number` varchar( 50  )  NOT  NULL ,
                    `renewal` date NOT  NULL ,
                    `sum_insured` int( 11  )  NOT  NULL DEFAULT  '0',
                    `pay_freq` varchar( 20  )  NOT  NULL ,
                    `prem_install` int( 11  )  NOT  NULL DEFAULT  '0',
                    `user_id` int( 11  )  NOT  NULL ,
                    `owner` varchar( 50  )  NOT  NULL ,
                    `policy_id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
                    `assign_to` int( 11  )  NOT  NULL ,
                    `policy1` varchar( 50  )  NOT  NULL ,
                    `excess` int( 11  )  NOT  NULL ,
                    `loan_value` int( 11  )  NOT  NULL ,
                    `comment` varchar( 255  )  NOT  NULL ,
                    `entry_age` int( 11  )  NOT  NULL ,
                    `accept` varchar( 50  )  NOT  NULL ,
                    `smoker` varchar( 50  )  NOT  NULL ,
                    `policy_number2` varchar( 50  )  NOT  NULL ,
                    `sum_insured1` int( 11  )  NOT  NULL ,
                    `defer_period` int( 11  )  NOT  NULL ,
                    `benefit_paid` int( 11  )  NOT  NULL ,
                    `status` varchar( 50  )  NOT  NULL ,
                    `commence` date NOT  NULL ,
                    `scheme1` varchar( 50  )  NOT  NULL ,
                    `scheme2` varchar( 50  )  NOT  NULL ,
                    `policy_amount1` int( 11  )  NOT  NULL ,
                    `installment1` int( 11  )  NOT  NULL ,
                    `comm_1_yr` int( 11  )  NOT  NULL ,
                    `comm_2_yr` int( 11  )  NOT  NULL ,
                    `expire1` date NOT  NULL ,
                    `paid1` varchar( 10  )  NOT  NULL ,
                    `paid2` varchar( 10  )  NOT  NULL ,
                    `policy_fr1` varchar( 10  )  NOT  NULL ,
                    `benefits` VARCHAR(255) NOT NULL,
                    `review` DATE NOT NULL,
                    PRIMARY  KEY (  `policy_id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;";
        $wpdb->query($sql);
        $sql = "CREATE  TABLE  `".$db_name."`.`wp_clients` (  `user_id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
                    `first_name` varchar( 50  )  NOT  NULL ,
                    `last_name` varchar( 50  )  NOT  NULL ,
                    `DOB` date NOT  NULL ,
                    `age` int( 11  )  NOT  NULL ,
                    `area` int( 11  )  NOT  NULL ,
                    `tel_off` varchar( 30  )  NOT  NULL ,
                    `tel_res` varchar( 30  )  NOT  NULL ,
                    `fax` varchar( 30  )  NOT  NULL ,
                    `city` varchar( 50  )  NOT  NULL ,
                    `income` int( 11  )  NOT  NULL ,
                    `occupation` varchar( 50  )  NOT  NULL ,
                    `email` varchar( 50  )  NOT  NULL ,
                    `title` varchar( 20  )  NOT  NULL ,
                    `gender` varchar( 20  )  NOT  NULL ,
                    `known_as` varchar( 50  )  NOT  NULL ,
                    `partner` varchar( 50  )  NOT  NULL ,
                    `partner_dob` date NOT  NULL ,
                    `partner_age` int( 11  )  NOT  NULL ,
                    `marital_status` varchar( 20  )  NOT  NULL ,
                    `employment_status` varchar( 30  )  NOT  NULL ,
                    `work_place` varchar( 50  )  NOT  NULL ,
                    `last_call` date NOT  NULL ,
                    `last_reason` varchar( 255  )  NOT  NULL ,
                    `tel_mobile` varchar( 30  )  NOT  NULL ,
                    `postal_address` varchar( 50  )  NOT  NULL ,
                    `post_code` int( 11  )  NOT  NULL ,
                    `res_address` varchar( 50  )  NOT  NULL ,
                    `suburb` varchar( 50  )  NOT  NULL ,
                    `province` varchar( 50  )  NOT  NULL ,
                    `hobby_interest` varchar( 50  )  NOT  NULL ,
                    `next_call` date NOT  NULL ,
                    `next_reason` varchar( 255  )  NOT  NULL ,
                    `client_prospect` varchar( 20  )  NOT  NULL ,
                    `status` varchar( 20  )  NOT  NULL ,
                    `smoker` varchar( 20  )  NOT  NULL ,
                    `birthday` tinyint( 1  )  NOT  NULL ,
                    `newsletter` tinyint( 1  )  NOT  NULL ,
                    `xmas_card` tinyint( 1  )  NOT  NULL ,
                    `calendar` tinyint( 1  )  NOT  NULL ,
                    `im` varchar( 25  )  NOT  NULL ,
                    `website` varchar( 100  )  NOT  NULL ,
                    `original_advisor` VARCHAR(50) NOT NULL,  
                    `current_advisor` VARCHAR(50) NOT NULL,
                    `review_link` VARCHAR(255) NOT NULL
                    PRIMARY  KEY (  `user_id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;";
        $wpdb->query($sql);
        $sql = "ALTER TABLE  `".$db_name."`.`wp_users` ADD  `last_login` DATE NOT NULL";
        $wpdb->query($sql);
        $sql = "ALTER TABLE  `".$db_name."`.`wp_users` ADD `login_times` INT NOT NULL DEFAULT \'0\'";
        $wpdb->query($sql);
        $sql = "CREATE  TABLE  `".$db_name."`.`wp_target_notes` (  `id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
                    `user_id` int( 11  )  NOT  NULL ,
                    `notes` varchar( 255  )  NOT  NULL ,
                    `time_stamp` datetime NOT  NULL ,
                    PRIMARY  KEY (  `id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;";
        $wpdb->query($sql);
}
function add_script() {
        wp_enqueue_script('myscript', plugin_dir_url( __FILE__ ).'myscript.js');
        wp_enqueue_script('datepicker', plugin_dir_url( __FILE__ ).'datepicker.js');
}
function add_style(){
        wp_enqueue_style('mystyle', plugin_dir_url( __FILE__ ).'datepicker.css');
        wp_enqueue_style('polstyle', plugin_dir_url( __FILE__ ).'pol_style.css');
}
function my_plugin_menu() {
        
        add_menu_page( 'Policies', 'Activities', 'manage_policy', 'activities','activities_sub_menu');
        add_submenu_page( 'activities', 'Clients', 'Clients', 'manage_policy', 'view_clients','view_clients_sub_menu');
        add_submenu_page( null, 'Edit Client', 'Edit Client', 'manage_policy', 'edit_client','edit_client_sub_menu');
        add_submenu_page( 'activities', 'Add Client', 'Add Client', 'manage_policy', 'add_client','add_client_sub_menu');
        add_submenu_page( null, 'Delete Client', 'Delete Client', 'manage_policy', 'delete_client','delete_client_sub_menu');
        add_submenu_page( null, 'Print Client Page', 'Print Client Page', 'manage_policy', 'print_client_page','print_client_page_menu');
        add_submenu_page( null, 'Print Client List', 'Print Client List', 'manage_policy', 'print_client_list', 'print_client_list_menu');
        
        add_submenu_page( 'activities', 'Policies', 'Policies', 'manage_policy', 'my-policies', 'my_plugin_options' );
        add_submenu_page( null, 'Edit Policy', 'Edit Policy', 'manage_policy', 'edit-policies','edit_policy_sub_menu');
        add_submenu_page( null, 'Add Policy', 'Add Policy', 'manage_policy', 'add-policies','add_policy_sub_menu');
        add_submenu_page( null, 'Delete Policy', 'Delete Policy', 'manage_policy', 'delete-policies','delete_policy_sub_menu');
        add_submenu_page( null, 'Print Policy Page', 'Print Policy Page', 'manage_policy', 'print_policy_page','print_policy_page_menu');
        add_submenu_page( null, 'Print Policy List', 'Print Policy List', 'manage_policy', 'print_policy_list', 'print_policy_list_menu');
        
        add_submenu_page( null, 'Notes', 'Notes', 'manage_policy', 'view-notes', 'view_notes_function');
        add_submenu_page( null, 'Add Notes', 'Add Notes', 'manage_policy', 'add-notes', 'add_notes_function');
        add_submenu_page( null, 'Print Notes', 'Print Notes', 'manage_policy', 'print-notes', 'print_notes_function');
        
        add_submenu_page( 'activities', 'Cloud Storage', 'Cloud Storage', 'manage_policy', 'cloud_storage','cloud_storage_sub_menu');
        
        global $wpdb;
        $current_user = wp_get_current_user();
        
        $sql = "select * from wp_users where ID = ".$current_user->ID;
        $result  = $wpdb->get_results($sql);
        foreach($result as $row){
            $last_login = $row->last_login;
            $login_times = $row->login_times;
            break;
        }
        $login_times++;
        if($last_login == date('Y-m-d')){
        $login_times--;    
        }
        $update_data = array('last_login'=>date('Y-m-d'),'login_times'=>$login_times);
        $wpdb->update('wp_users',$update_data, array('ID'=>$current_user->ID));
}
function cloud_storage_sub_menu() {
                $current_user = wp_get_current_user();
                if($_REQUEST['message']){
                   echo $_GET['message']; 
                }
                if($_REQUEST['save_dropbox']){
                    global $wpdb;
                    $update_data = array('dropbox_user'=>$_POST['dropbox_user'],'dropbox_pass'=>$_POST['dropbox_pass']);
                    $wpdb->update('wp_users',$update_data, array('ID'=>$current_user->ID));
                    $message = "Dropbox Credentials Saved";
                    echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=cloud_storage&message=".$message."' />"; 
                }
                if($_REQUEST['save_skydrive']){
                    global $wpdb;
                    $update_data = array('skydrive_user'=>$_POST['skydrive_user'],'skydrive_pass'=>$_POST['skydrive_pass']);
                    $wpdb->update('wp_users',$update_data, array('ID'=>$current_user->ID));
                    $message = "SkyDrive Credentials Saved";
                    echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=cloud_storage&message=".$message."' />"; 
                }
                if ($_REQUEST['dest']) {
                    require 'DropboxUploader.php';
                    try {
                        // Rename uploaded file to reflect original name
                        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
                            throw new Exception('File was not successfully uploaded from your computer.');

                        $tmpDir = uniqid('C:\wamp\www\du'.'\tmp\DropboxUploader-');
                        if (!mkdir($tmpDir))
                            throw new Exception('Cannot create temporary directory!'.'<br />'.$tmpDir);
                        if ($_FILES['file']['name'] === "")
                            throw new Exception('File name not supplied by the browser.');

                        $tmpFile = $tmpDir.'/'.str_replace("/\0", '_', $_FILES['file']['name']);
                        if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
                            throw new Exception('Cannot rename uploaded file!');

                        // Enter your Dropbox account credentials here
                        $uploader = new DropboxUploader($current_user->dropbox_user, $current_user->dropbox_pass);
                        $uploader->upload($tmpFile, $_POST['dest']);

                        echo 'File successfully uploaded to my Dropbox!';
                    } catch(Exception $e) {
                        echo 'Error: ' . htmlspecialchars($e->getMessage());
                    }

                    // Clean up
                    if (isset($tmpFile) && file_exists($tmpFile))
                        unlink($tmpFile);

                    if (isset($tmpDir) && file_exists($tmpDir))
                        rmdir($tmpDir);
                }
         include "dropbox_form.php";
}
function print_notes_function(){
        $sql = "select wp_clients.first_name,wp_clients.last_name,wp_target_notes.* from wp_clients join wp_target_notes on wp_clients.user_id = wp_target_notes.user_id where wp_target_notes.user_id = ".$_GET['user_id']." order by wp_target_notes.time_stamp desc";
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $result  = $second_db->get_results($sql);
        print_list($result, 'print_notes.php', 'Notes List Page');    
}
function view_notes_function(){
        $sql = "select wp_clients.first_name,wp_clients.last_name,wp_target_notes.* from wp_clients join wp_target_notes on wp_clients.user_id = wp_target_notes.user_id where wp_target_notes.user_id = ".$_GET['user_id']." order by wp_target_notes.time_stamp desc";
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        if($_REQUEST['note_apply']){
        $sql = "select wp_clients.first_name,wp_clients.last_name,wp_target_notes.* from wp_clients join wp_target_notes on wp_clients.user_id = wp_target_notes.user_id where wp_target_notes.user_id = ".$_GET['user_id']." and wp_target_notes.time_stamp >= '".date("Y-m-d",strtotime($_POST['filter_from']))."' and wp_target_notes.time_stamp <= '".date("Y-m-d",strtotime($_POST['filter_to']))."' order by wp_target_notes.time_stamp desc";    
        //echo $sql;
        $from = $_POST['filter_from'];
        $to = $_POST['filter_to'];
        }
        if($_REQUEST['note_reset']){
           echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view-notes&user_id=".$_GET['user_id']."' />"; 
        }
        $result  = $second_db->get_results($sql);
        if($_REQUEST['add_notes_button']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=add-notes&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['print_notes_button']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=print-notes&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['exit']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=edit_client&user_id=".$_GET['user_id']."' />";
        }
        include "notes_list.php";
}
function add_notes_function(){
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $sql = "select * from wp_clients where user_id = ".$_GET['user_id'];
        $result  = $second_db->get_results($sql);
        if($_REQUEST['add_note_button']){
            $insert_data = array('user_id'=>$_GET['user_id'],
                                'notes'=>$_POST['textarea'],
                                'time_stamp'=>gmdate("Y-m-d H:i:s"));
          $second_db->insert('wp_target_notes',$insert_data); 
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view-notes&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['cancel']){
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view-notes&user_id=".$_GET['user_id']."' />"; 
        }
        include "add_note.php";
}
function check_license(){
        global $wpdb;
        $current_user = wp_get_current_user();
        $sql1 = "select * from wp_usermeta where meta_key = 'target_license' and user_id = ".$current_user->ID;
        $license  = $wpdb->get_results($sql1);
        foreach($license as $row){
            $license_date = $row->meta_value;
        }
        $today = strtotime(date("Y-m-d"));
        $expiration_date = strtotime($license_date);
        //echo $today." ";
        //echo $expiration_date;
        if ($today > $expiration_date)  {
		wp_die( __( 'Your license has expired' ) );
	}
}
function fetch_db() {
        global $wpdb;
        $target_db = null;
        $current_user = wp_get_current_user();
        $sql1 = "select * from wp_usermeta where meta_key = 'target_db' and user_id = ".$current_user->ID;
        $target_file  = $wpdb->get_results($sql1);
        foreach($target_file as $row){
            $target_db = $row->meta_value;
        }
        return $target_db;
}
function activities_sub_menu(){
        check_license();
        $sql = "SELECT next_call as mydate, 'Next Call' as event, wp_clients.* FROM `wp_clients`
                        where next_call >= '".date("Y-m-d")."' 
                        and next_call <= '".date("Y-m-d",strtotime("+30 days"))."'
                            order by next_call asc; ";
                     
        //$sql1 = "SELECT DOB as mydate, 'Birthday' as event, wp_clients.* FROM `wp_clients` 
        //                WHERE DATE_FORMAT(`DOB`, concat('%m%d',year(now())) >= DATE_FORMAT('".date("Y-m-d")."', '%m%d%y') 
        //                AND DATE_FORMAT(`DOB`, concat('%m%d',year(now())) <= DATE_FORMAT('".date("Y-m-d",strtotime("+30 days"))."', '%m%d%y') 
        //                ORDER BY DATE_FORMAT(`DOB`, '%m%d') ASC";
        
        $sql1 = "SELECT DOB as mydate, 'Birthday' as event, wp_clients.* FROM `wp_clients` WHERE DATE_FORMAT(`DOB`, concat(year(now()),'-%m-%d')) >= '".date("Y-m-d")."' AND DATE_FORMAT(`DOB`, concat(year(now()),'-%m-%d')) <= '".date("Y-m-d",strtotime("+30 days"))."'";
        $sql2 = "SELECt wp_policies.renewal as mydate, 'Renewals' as event, wp_policies.policy_id, wp_clients.* 
                        from wp_clients join wp_policies on wp_clients.user_id = wp_policies.user_id
                        where wp_policies.renewal >= '".date("Y-m-d")."' 
                        and wp_policies.renewal <= '".date("Y-m-d",strtotime("+30 days"))."'
                            order by wp_policies.renewal;";
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
                $result  = $second_db->get_results($sql);
                $result1  = $second_db->get_results($sql1);
                $result2  = $second_db->get_results($sql2);
        if($_REQUEST['button']){
            $result = null;
            $result1 = null;
            $result2 = null;
            $sort = $_POST['select'];
            $from = $_POST['textfield'];
            $to = $_POST['textfield2'];
            if($_POST['select']=='Next Call') {
                 $sql = "SELECT next_call as mydate, 'Next Call' as event, wp_clients.* FROM `wp_clients`
                        where next_call >= '".date("Y-m-d",strtotime($_POST['textfield']))."' 
                        and next_call <= '".date("Y-m-d",strtotime($_POST['textfield2']))."'
                            order by next_call asc; "; 
                 $result  = $second_db->get_results($sql);
            }
            if($_POST['select']=='Birthday') {
              //  $sql1 = "SELECT DOB as mydate, 'Birthday' as event, wp_clients.* FROM `wp_clients` 
              //          WHERE DATE_FORMAT(`DOB`, '%m%d') >= DATE_FORMAT('".date("Y-m-d",strtotime($_POST['textfield']))."', '%m%d') 
              //          AND DATE_FORMAT(`DOB`, '%m%d') <= DATE_FORMAT('".date("Y-m-d",strtotime($_POST['textfield2']))."', '%m%d') 
              //          ORDER BY DATE_FORMAT(`DOB`, '%m%d') ASC";
                $sql1 = "SELECT DOB as mydate, 'Birthday' as event, wp_clients.* FROM `wp_clients` WHERE DATE_FORMAT(`DOB`, concat(year(now()),'-%m-%d')) >= '".date("Y-m-d",strtotime($_POST['textfield']))."' AND DATE_FORMAT(`DOB`, concat(year(now()),'-%m-%d')) <= '".date("Y-m-d",strtotime($_POST['textfield2']))."'";
                $result1  = $second_db->get_results($sql1);
            }
            if($_POST['select']=='Renewals') {
                $sql2 = "SELECt wp_policies.renewal as mydate, 'Renewals' as event, wp_policies.policy_id, wp_clients.* 
                        from wp_clients join wp_policies on wp_clients.user_id = wp_policies.user_id
                        where wp_policies.renewal >= '".date("Y-m-d",strtotime($_POST['textfield']))."' 
                        and wp_policies.renewal <= '".date("Y-m-d",strtotime($_POST['textfield2']))."'
                            order by wp_policies.renewal;";
                $current_user = wp_get_current_user();
                //if(!is_admin()){
                // $sql2 .= " and wp_policies.current_advisor =".$current_user->user_login;   
                //}
               $result2  = $second_db->get_results($sql2); 
            }
            if($_POST['select']=='All') {
                $sql = "SELECT next_call as mydate, 'Next Call' as event, wp_clients.* FROM `wp_clients`
                        where next_call >= '".date("Y-m-d",strtotime($_POST['textfield']))."' 
                        and next_call <= '".date("Y-m-d",strtotime($_POST['textfield2']))."'
                            order by next_call asc; ";
                 $sql1 = "SELECT DOB as mydate, 'Birthday' as event, wp_clients.* FROM `wp_clients` 
                        WHERE DATE_FORMAT(`DOB`, '%m%d') >= DATE_FORMAT('".date("Y-m-d",strtotime($_POST['textfield']))."', '%m%d') 
                        AND DATE_FORMAT(`DOB`, '%m%d') <= DATE_FORMAT('".date("Y-m-d",strtotime($_POST['textfield2']))."', '%m%d') 
                        ORDER BY DATE_FORMAT(`DOB`, '%m%d') ASC";
                 $sql2 = "SELECt wp_policies.renewal as mydate, 'Renewals' as event, wp_policies.policy_id, wp_clients.* 
                        from wp_clients join wp_policies on wp_clients.user_id = wp_policies.user_id
                        where wp_policies.renewal >= '".date("Y-m-d",strtotime($_POST['textfield']))."' 
                        and wp_policies.renewal <= '".date("Y-m-d",strtotime($_POST['textfield2']))."'
                            order by wp_policies.renewal;";
                $result  = $second_db->get_results($sql);
                $result1  = $second_db->get_results($sql1);
                $result2  = $second_db->get_results($sql2);
            }
        } 
        
        if($_REQUEST['button2']){
           echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=activities' />"; 
           exit;
        }
        include "search_activities.php";
        include "activities.php";
}
function print_policy_page_menu(){
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        if(isset($_GET['policy_id']) && isset($_GET['user_id'])){
        $pol_id = $_GET['policy_id'];
        $user_id = $_GET['user_id'];
        $result = $second_db->get_results("select wp_clients.first_name, wp_clients.last_name, wp_policies.* from wp_policies join wp_clients on wp_clients.user_id = wp_policies.user_id where wp_policies.user_id = ".$user_id." and wp_policies.policy_id = ".$pol_id);
        if(isset($_GET['mode'])) {
        print_list($result, 'print_policy_details.php','Policy Page Report',null,'w');
        } else {
        print_list($result, 'print_policy_details.php','Policy Page Report');    
        }
        } else {
        $sql = "select wp_clients.first_name,wp_clients.last_name,wp_policies.* from wp_policies 
                                        JOIN wp_clients on
                                        wp_policies.user_id = wp_clients.user_id";
        $result = $second_db->get_results($sql);
        if(isset($_GET['mode'])) {
        print_list($result, 'print_policy_list.php', 'Policy List Page', null,'w');    
        } else {
        print_list($result, 'print_policy_list.php', 'Policy List Page', 'L');    
        }
        }
        
}
function print_client_page_menu(){
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        if(!isset($_GET['user_id'])){
        $sql = "select * from wp_clients order by last_name";
        $result = $second_db->get_results($sql);
        if(isset($_GET['mode'])) {
        print_list($result,'client_list_print.php','Client List Page Report',null,'w');
        } else {
         print_list($result,'client_list_print.php','Client List Page Report');  
        }
        } else {
        $sql = "select * from wp_clients where user_id = ".$_GET['user_id'];
        $result = $second_db->get_results($sql); 
        if(isset($_GET['mode'])) {
        print_list($result, 'Client print.php','Client Page Report',null,'w');
        } else {
        print_list($result, 'Client print.php','Client Page Report');    
        }
        }
}
require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');
class MYPDF extends TCPDF {
    
    public function Header() {
        $this->SetFont('helvetica', 'B', 20);
        $this->Cell(0, 15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $footer_content = date('d-m-Y');
        //$footer_content .= '                                                                          Powered by Target Marketing';
        //$footer_content .= '                                                                          Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages();
        //$this->Cell(0, 10, $footer_content, 'T', false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(1, 10, $footer_content, 'T', 0, 'L', 0, '', 0, false, 'T', 'M');
        $footer_content = 'Powered by Target Marketing';
        $this->Cell(0, 10, $footer_content, 'T', 0, 'C', 0, '', 0, false, 'T', 'M');
        $footer_content = 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages();
        $this->Cell(0, 10, $footer_content, 'T', 0, 'R', 0, '', 0, false, 'T', 'M');
        
    }
}
function pdf_settings($content, $filename, $orientation){
        require_once('tcpdf/config/lang/eng.php');
        require_once('tcpdf/tcpdf.php');
        if($orientation == 'L'){
        $pdf = new MYPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
        } else {
        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
        }
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capital Planning Corp. Ltd');
        $pdf->SetTitle('Target Web Report');
        $pdf->SetSubject('Target Web Report');
        $pdf->SetKeywords('Target, Web, Capital, Planning, report');
        //$pdf->setPrintHeader(true);
        //$pdf->setHeaderData('', 0, '', 'Capital Planning Corp');
        //$pdf->setPrintFooter(false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setLanguageArray($l);
        $pdf->SetFont('dejavusans', '', 8);
        $pdf->AddPage();
        $pdf->writeHTML($content, true, false, true, false, '');
        $pdf->lastPage();
        $pdf->Output($filename,'I');
}
function delete_client_sub_menu(){
        if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        echo "<font color='red'>Are you sure want to delete this client?</font>";
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $result = $second_db->get_results("select * from wp_clients where user_id = ".$_GET['user_id']);
        include 'delete_client_page.php';
        } else {
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";   
        }
        if($_REQUEST['button']){
            $second_db->query("DELETE FROM wp_clients WHERE user_id =".$user_id);
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />"; 
        }
        if($_REQUEST['button2']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
        }
}
function add_client_sub_menu() {
        check_license();
        include 'Add Client Details.php';
        if($_REQUEST['button2']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
        }
        if($_REQUEST['button']){
            $insert_data = array('first_name'=>$_POST['textfield4'],
                                'last_name'=>$_POST['textfield3'],
                                'DOB'=>date("Y-m-d",strtotime($_POST['textfield6'])),
                                'age'=>getAge($_POST['textfield6']),
                                'area'=>$_POST['textfield16'],
                                'tel_off'=>$_POST['textfield17'],
                                'tel_res'=>$_POST['textfield18'],
                                'fax'=>$_POST['textfield20'],
                                'city'=>$_POST['textfield26'],
                                'income'=>$_POST['textfield10'],
                                'occupation'=>$_POST['textfield9'],
                                'email'=>$_POST['textfield21'],
                                'title'=>$_POST['select7'],
                                'gender'=>$_POST['select3'],
                                'known_as'=>$_POST['textfield5'],
                                'partner'=>$_POST['textfield7'],
                                'partner_dob'=>date("Y-m-d",strtotime($_POST['textfield8'])),
                                'partner_age'=>getAge($_POST['textfield8']),
                                'marital_status'=>$_POST['select'],
                                'employment_status'=>$_POST['select2'],
                                'work_place'=>$_POST['textfield11'],
                                'last_call'=>date("Y-m-d",strtotime($_POST['textfield12'])),
                                'last_reason'=>$_POST['textarea'],
                                'tel_mobile'=>$_POST['textfield19'],
                                'postal_address'=>$_POST['textfield22'],
                                'post_code'=>$_POST['textfield23'],
                                'res_address'=>$_POST['textfield24'],
                                'suburb'=>$_POST['textfield25'],
                                'province'=>$_POST['textfield27'],
                                'hobby_interest'=>$_POST['textfield28'],
                                'next_call'=>date("Y-m-d",strtotime($_POST['textfield13'])),
                                'next_reason'=>$_POST['textarea2'],
                                'client_prospect'=>$_POST['select4'],
                                'status'=>$_POST['select5'],
                                'smoker'=>$_POST['select6'],
                                'birthday'=>$_POST['checkbox'],
                                'newsletter'=>$_POST['checkbox2'],
                                'xmas_card'=>$_POST['checkbox3'],
                                'calendar'=>$_POST['checkbox4'],
                                'im'=>$_POST['im'],
                                'website'=>$_POST['website']
                                );
          $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
          $second_db->insert('wp_clients',$insert_data); 
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
        }
}
function getAge($bday) {
        $ageTime = mktime(0, 0, 0, date("m",strtotime($bday)), date("d",strtotime($bday)), date("Y",strtotime($bday)));
        $t = time();
        $age = ($ageTime < 0) ? ( $t + ($ageTime * -1) ) : $t - $ageTime;
        $year = 60 * 60 * 24 * 365;
        $ageYears = $age / $year;
        return floor($ageYears);
}
function edit_client_sub_menu() {
        if(!isset($_GET['user_id'])){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
            exit;
        }
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $sql = "select * from wp_clients where user_id = ".$_GET['user_id'];
        $result = $second_db->get_results($sql);
        include 'Client Details.php';
        if($_REQUEST['button2']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
        }
        if($_REQUEST['button3']){
            print_list($result, 'Client print.php','Client Page Report');
        }
        if($_REQUEST['print_button_word']){
            print_list($result, 'Client print.php','Client Page Report',null,'w');
        }
        if($_REQUEST['button4']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=delete_client&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['display_policies_button']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['add_policy_button']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=add-policies&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['submit_ticket_button']){
            echo "<meta http-equiv='refresh' content='0;url=".home_url('/')."?page_id=2' />";
        }
        if($_REQUEST['view_notes_button']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view-notes&user_id=".$_GET['user_id']."' />";
        }
        if($_REQUEST['button']){
            $update_data = array('first_name'=>$_POST['textfield4'],
                                'last_name'=>$_POST['textfield3'],
                                'DOB'=>date("Y-m-d",strtotime($_POST['textfield6'])),
                                'age'=>getAge($_POST['textfield6']),
                                'area'=>$_POST['textfield16'],
                                'tel_off'=>$_POST['textfield17'],
                                'tel_res'=>$_POST['textfield18'],
                                'fax'=>$_POST['textfield20'],
                                'city'=>$_POST['textfield26'],
                                'income'=>$_POST['textfield10'],
                                'occupation'=>$_POST['textfield9'],
                                'email'=>$_POST['textfield21'],
                                'title'=>$_POST['select7'],
                                'gender'=>$_POST['select3'],
                                'known_as'=>$_POST['textfield5'],
                                'partner'=>$_POST['textfield7'],
                                'partner_dob'=>date("Y-m-d",strtotime($_POST['textfield8'])),
                                'partner_age'=>getAge($_POST['textfield8']),
                                'marital_status'=>$_POST['select'],
                                'employment_status'=>$_POST['select2'],
                                'work_place'=>$_POST['textfield11'],
                                'last_call'=>date("Y-m-d",strtotime($_POST['textfield12'])),
                                'last_reason'=>$_POST['textarea'],
                                'tel_mobile'=>$_POST['textfield19'],
                                'postal_address'=>$_POST['textfield22'],
                                'post_code'=>$_POST['textfield23'],
                                'res_address'=>$_POST['textfield24'],
                                'suburb'=>$_POST['textfield25'],
                                'province'=>$_POST['textfield27'],
                                'hobby_interest'=>$_POST['textfield28'],
                                'next_call'=>date("Y-m-d",strtotime($_POST['textfield13'])),
                                'next_reason'=>$_POST['textarea2'],
                                'client_prospect'=>$_POST['select4'],
                                'status'=>$_POST['select5'],
                                'smoker'=>$_POST['select6'],
                                'birthday'=>$_POST['checkbox'],
                                'newsletter'=>$_POST['checkbox2'],
                                'xmas_card'=>$_POST['checkbox3'],
                                'calendar'=>$_POST['checkbox4'],
                                'im'=>$_POST['im'],
                                'website'=>$_POST['website']
                                );
            $second_db->update('wp_clients',$update_data, array('user_id'=>$_POST['textfield'])); 
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=edit_client&user_id=".$_GET['user_id']."' />";
        }
}
function view_clients_sub_menu(){
        check_license();
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $sql = "select * from wp_clients order by last_name";
        if($_REQUEST['button2']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=view_clients' />";
        }
        if($_REQUEST['button']){
            $sql = "select * from wp_clients where last_name like '%".$_POST['textfield']."%'";
            if($_POST['textfield5'] >= 1 && $_POST['textfield5'] <= 12) {
            $sql .= " and month(DOB) = ".$_POST['textfield5'];
            }
            $sql .= " and age >= ".$_POST['textfield2']." and age <= ".$_POST['textfield6'];
            $sql .= " and income >= ".$_POST['textfield3']." and income <= ".$_POST['textfield7'];
            $sql .= " and city like '%".$_POST['textfield4']."%'";
            if($_POST['select'] == 'DOB') {
            $sql .= " order by month(DOB), day(DOB)";    
            } else {
            $sql .= " order by ".$_POST['select'];
            }
            $last_name = $_POST['textfield'];
            $month = $_POST['textfield5'];
            $age1 = $_POST['textfield2'];
            $age2 = $_POST['textfield6'];
            $income1 = $_POST['textfield3'];
            $income2 = $_POST['textfield7'];
            $city = $_POST['textfield4'];
            $sort = $_POST['select'];
        }
        $result = $second_db->get_results($sql);
        if($_REQUEST['print_search_button']){
            //print_list($result,'client_list_print.php','Client List Page Report');
            print_client_list_menu();
        }
        if($_REQUEST['print_search_button_word']){
            print_list($result,'client_list_print.php','Client List Page Report',null,'w');
        }
        include 'clientsearch.php';
        include 'wpclients.php';
}
function print_list($result,$file,$title,$orient,$word){
        //echo "<meta http-equiv='refresh' content='0;URL=javascript:window.open('?page=my-policies','_blank');";
        ob_clean();
        ob_start();
        require_once $file;
        $html = ob_get_contents();
        ob_clean();
        //var_dump($html);
        if(isset($word)) {
                header("Content-Type: application/vnd.ms-word");
                header("Expires: 0");
                header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
                header("Content-disposition: attachment; filename=\"".$title.".doc"."\"");
                echo $html;
            exit;
        }
        if(isset($orient)){
        pdf_settings($html,$title,$orient);    
        } else {
        pdf_settings($html,$title);
        }
        //echo php_info();
}
function delete_policy_sub_menu(){
        if(isset($_GET['policy_id']) && isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $policy_id = $_GET['policy_id'];
        echo "<font color='red'>Are you sure want to delete this policy?</font>";
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $sql =  $sql = "select wp_clients.first_name, wp_clients.last_name, wp_policies.* from wp_policies join wp_clients on wp_clients.user_id = wp_policies.user_id where wp_policies.user_id = ".$user_id." and wp_policies.policy_id = ".$policy_id;;
        $result = $second_db->get_results($sql);
        echo '<table class="widefat"> 
            <thead>
            <tr>
                <th>Name</th>
                <th>Product</th>
                <th>Company</th>
                <th>Type</th>
                <th>Policy Number</th>
                <th>Renewal</th>
                <th>Sum Insured</th>
                <th>Pay Freq</th>
                <th>Prem Instal</th>
           </tr>
           <tbody>';
            foreach($result as $row):
            echo '<tr>';
            echo '<td><a href="?page=edit_client&user_id='.$row->user_id.'">'.$row->last_name." ".$row->first_name.'</a></td>';
            echo '<td><a href="'.$_SERVER['PHP_SELF'].'?page=edit-policies&policy_id='.$row->policy_id.'&user_id='.$row->user_id.'">'.$row->type.'</a></td>';
            echo '<td>'.$row->company.'</td>';
            echo '<td>'.$row->type.'</td>';
            echo '<td>'.$row->policy_number.'</td>';
            echo '<td>'.date('d-m-Y',strtotime($row->renewal)).'</td>';
            echo '<td>'.$row->sum_insured.'</td>';
            echo '<td>'.$row->pay_freq.'</td>';
            echo '<td>'.$row->prem_install.'</td>';
            echo '</tr>';
            endforeach;
            echo '</tbody>
           </thead>
              </table>';
            echo '<form id="form1" name="form1" method="post" action="">';
            echo '<input type="submit" name="button" id="button" value="Delete" />';
            echo '<input type="submit" name="button2" id="button" value="Exit" />';
            echo '</form>';
        } else {
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
        }
        if($_REQUEST['button2']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
        }
        if($_REQUEST['button']){
            $second_db->query("DELETE FROM wp_policies WHERE policy_id = ".$policy_id." and user_id =".$user_id);
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
        }
}
function edit_policy_sub_menu() {
        if(isset($_GET['policy_id']) && isset($_GET['user_id'])){
        $pol_id = $_GET['policy_id'];
        $user_id = $_GET['user_id'];
        } else {
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
        }
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        $sql = "select wp_clients.first_name, wp_clients.last_name, wp_policies.* from wp_policies join wp_clients on wp_clients.user_id = wp_policies.user_id where wp_policies.user_id = ".$user_id." and wp_policies.policy_id = ".$pol_id;
        $result = $second_db->get_results($sql);
       //echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
       include 'Policy Details.php';
       if($_REQUEST['button2']){
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
       }
       if($_REQUEST['button3']){
           print_list($result, 'print_policy_details.php','Policy Page Report');
       }
       if($_REQUEST['print_button_word']){
           print_list($result, 'print_policy_details.php','Policy Page Report',null,'w');
       }
       if($_REQUEST['button4']){
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=delete-policies&policy_id=".$_GET['policy_id']."&user_id=".$_GET['user_id']."' />";
        }
       if($_REQUEST['button']){
          $update_data = array('company'=>$_POST['textfield6'],
                               'type'=>$_POST['select'],
                               'policy_number'=>$_POST['textfield7'],
                               'renewal'=>date("Y-m-d",strtotime($_POST['textfield30'])),
                               'sum_insured'=>$_POST['textfield12'],
                               'pay_freq'=>$_POST['select11'],
                               'prem_install'=>$_POST['textfield19'],
                               //'user_id'=>$_POST['user'],
                               'owner'=>$_POST['owner'],
                               'assign_to'=>$_POST['assignment'],
                               'policy1'=>$_POST['textfield9'],
                               'excess'=>$_POST['textfield13'],
                               'loan_value'=>$_POST['textfield14'],
                               'comment'=>$_POST['textfield31'],
                               'entry_age'=>$_POST['textfield28'],
                               'accept'=>$_POST['select9'],
                               'smoker'=>$_POST['select7'],
                               'policy_number2'=>$_POST['textfield8'],
                               'sum_insured'=>$_POST['textfield12'],
                               'defer_period'=>$_POST['textfield15'],
                               'benefit_paid'=>$_POST['textfield16'],
                               'status'=>$_POST['select10'],
                               'commence'=>date("Y-m-d",strtotime($_POST['textfield29'])),
                               'scheme1'=>$_POST['textfield32'],
                               'scheme2'=>$_POST['textfield33'],
                               'policy_amount1'=>$_POST['textfield19'],
                               'installment1'=>$_POST['textfield22'],
                               'comm_1_yr'=>$_POST['textfield17'],
                               'comm_2_yr'=>$_POST['textfield18'],
                               'expire1'=>date("Y-m-d",strtotime($_POST['textfield25'])),
                               'paid1'=>$_POST['select5'],
                               'paid2'=>$_POST['select6'],
                               'policy_fr1'=>$_POST['select2'],
                               'original_advisor'=>$_POST['textfield40'],
                               'current_advisor'=>$_POST['textfield41'],
                               'benefits'=>$_POST['textfield3'],
                               'review'=>date("Y-m-d",strtotime($_POST['textfield50'])),
                               'review_link'=>$_POST['review_link']
                            );
          //echo print_r($update_data);
          $second_db->update('wp_policies',$update_data, array('policy_id'=>$_GET['policy_id'],'user_id'=>$_GET['user_id']));
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=edit-policies&policy_id=".$_GET['policy_id']."&user_id=".$_GET['user_id']."' />";
          }
}
function add_policy_sub_menu() {
       $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
       if(isset($_GET['user_id'])){
            $sql = "select * from wp_clients where user_id =".$_GET['user_id'];
             $result = $second_db->get_results($sql);
             include 'Add Policy Details.php';
       } else {
            echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
       }
       if($_REQUEST['button2']){
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies' />";
       }
       if($_REQUEST['save_button']){
          $insert_data = array('company'=>$_POST['textfield6'],
                               'type'=>$_POST['select'],
                               'policy_number'=>$_POST['textfield7'],
                               'renewal'=>date("Y-m-d",strtotime($_POST['textfield30'])),
                               'sum_insured'=>$_POST['textfield12'],
                               'pay_freq'=>$_POST['select11'],
                               'prem_install'=>$_POST['textfield19'],
                               'user_id'=>$_GET['user_id'],
                               'owner'=>$_POST['owner'],
                               'assign_to'=>$_POST['assignment'],
                               'policy1'=>$_POST['textfield9'],
                               'excess'=>$_POST['textfield13'],
                               'loan_value'=>$_POST['textfield14'],
                               'comment'=>$_POST['textfield31'],
                               'entry_age'=>$_POST['textfield28'],
                               'accept'=>$_POST['select9'],
                               'smoker'=>$_POST['select7'],
                               'policy_number2'=>$_POST['textfield8'],
                               'sum_insured'=>$_POST['textfield12'],
                               'defer_period'=>$_POST['textfield15'],
                               'benefit_paid'=>$_POST['textfield16'],
                               'status'=>$_POST['select10'],
                               'commence'=>date("Y-m-d",strtotime($_POST['textfield29'])),
                               'scheme1'=>$_POST['textfield32'],
                               'scheme2'=>$_POST['textfield33'],
                               'policy_amount1'=>$_POST['textfield19'],
                               'installment1'=>$_POST['textfield22'],
                               'comm_1_yr'=>$_POST['textfield17'],
                               'comm_2_yr'=>$_POST['textfield18'],
                               'expire1'=>date("Y-m-d",strtotime($_POST['textfield25'])),
                               'paid1'=>$_POST['select5'],
                               'paid2'=>$_POST['select6'],
                               'policy_fr1'=>$_POST['select2'],
                               'original_advisor'=>$_POST['textfield40'],
                               'current_advisor'=>$_POST['textfield41'],
                               'benefits'=>$_POST['textfield3'],
                               'review'=>date("Y-m-d",strtotime($_POST['textfield50'])),
                               'review_link'=>$_POST['review_link']
                            );
          //echo $insert_data;
          $second_db->insert('wp_policies',$insert_data); 
          echo "<meta http-equiv='refresh' content='0;url=".$_SERVER['PHP_SELF']."?page=my-policies&user_id=".$_GET['user_id']."' />";
       }
}
function search_policy(){
      $sql = "select wp_clients.first_name,wp_clients.last_name,wp_policies.* from wp_policies 
                                        JOIN wp_clients on
                                        wp_policies.user_id = wp_clients.user_id
                                        where wp_policies.company like '%".$_POST['textfield']."%'
                                        and (wp_clients.first_name like '%".$_POST['textfield4']."%'
                                        or wp_clients.last_name like '%".$_POST['textfield4']."%')
                                        and month(wp_policies.renewal) >= ".$_POST['textfield2']." 
                                        and month(wp_policies.renewal) <= ".$_POST['textfield3'];
            if($_POST['select2'] != 'All') {
                $sql .= " and wp_policies.type = '".$_POST['select2']."'";
            }
            //if(!is_admin()) {
            //  $sql .= " and wp_policies.current_advisor = '".$current_user->user_login."'";
            //}
            if($_POST['select'] == 'type' || $_POST['select'] == 'renewal') {
                $sql .= " order by wp_policies.".$_POST['select'];
            } else {
                $sql .= " order by wp_clients.".$_POST['select'];    
            }
       return $sql;
}
function my_plugin_options() {
        check_license();
	if ( !current_user_can( 'manage_policy' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
        $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
        //echo fetch_db();
        $current_user = wp_get_current_user();
        
        if($_REQUEST['search']){
            $result = $second_db->get_results(search_policy());
            //wp_redirect('?page=my-policies&order_by='.$_POST['select'].'&name='.$_POST['textfield4'].'&company='.$_POST['textfield'].'&type='.$_POST['select2'].'&renewal1='.$_POST['textfield2'].'&renewal2='.$_POST['textfield3']);
            $sort = $_POST['select'];
            $name = $_POST['textfield4'];
            $company = $_POST['textfield'];
            $product_type = $_POST['select2'];
            $renewal1 = $_POST['textfield2'];
            $renewal2 = $_POST['textfield3'];
        } else {
            $sql = "select wp_clients.first_name,wp_clients.last_name,wp_policies.* from wp_policies 
                                        JOIN wp_clients on
                                        wp_policies.user_id = wp_clients.user_id";
            
           if(isset($_GET['user_id'])){
             $sql .= " and wp_policies.user_id = ".$_GET['user_id'];
            }
           //if(!is_admin()) {
            //  $sql .= " and wp_policies.current_advisor = '".$current_user->user_login."'";
            //}
            $sql .= " order by wp_clients.last_name";
            $result = $second_db->get_results($sql);
        }
        if($_REQUEST['reset']){
            echo "<meta http-equiv='refresh' content='0;url=?page=my-policies' />";
        }
        if($_REQUEST['print_search_button']){
            $result = $second_db->get_results(search_policy());
            print_list($result, 'print_policy_list.php', 'Policy List Page', 'L');
        }
        if($_REQUEST['print_search_button_word']){
            $result = $second_db->get_results(search_policy());
            print_list($result, 'print_policy_list.php', 'Policy List Page', null, 'w');
        }
        
        include 'policysearch.php';
        include 'policy_list.php';
}
function print_policy_list_menu(){
            $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
            $sql = "select wp_clients.first_name,wp_clients.last_name,wp_policies.* from wp_policies 
                                        JOIN wp_clients on
                                        wp_policies.user_id = wp_clients.user_id";
            //if(!is_admin()) {
            //  $sql .= " where wp_policies.current_advisor = '".$current_user->user_login."'";
            //}
            $result = $second_db->get_results($sql);
            print_list($result, 'print_policy_list.php', 'Policy List Page', 'L');
}
function print_client_list_menu(){
          $second_db = new wpdb(DB_USER, DB_PASSWORD, fetch_db(), DB_HOST);
           $sql = "select * from wp_clients order by last_name";
           $result = $second_db->get_results($sql);
           print_list($result,'client_list_print.php','Client List Page Report', 'L');
}
?>