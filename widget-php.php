<?php
if (is_user_logged_in() && current_user_can('edit_posts')) {
    global $wp_query;
    $current_post_id = get_the_ID();
    if ($current_post_id) {
        $edit_post_url = get_edit_post_link($current_post_id);
        echo "<div style='text-align: left !important;'>
                <a href='{$edit_post_url}' style='
                    font-size: 16px !important;
                    border: 2px solid orange;
                    padding: 5px 10px;
                    background-color: #222222;
                    color: orange !important;
                    text-decoration: none;
                    display: inline-block;
                    border-radius: 5px;
                '>Edit This Post</a>
              </div>";
    }
}
?>
