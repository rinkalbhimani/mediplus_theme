<?php

// header first
register_nav_menus(
    array('primary-menu' => 'Top Menu')
);

// add customise
add_theme_support('custom-logo');

// enables support of featured image
add_theme_support('post-thumbnails');
// add_theme_support('post-thumbnails', array('post', 'portfolio'));

// header second menu
register_nav_menus(
    array(
        'secondary-menu' => 'Second Menu'
    )
);

// add show short description
// Enable excerpts for pages
add_post_type_support('page', 'excerpt');


function custom_comment_format($comment, $args, $depth)
{
    ?>
    <div class="single-comments" id="comment-<?php comment_ID(); ?>">
        <div class="main">
            <div class="head">
                <?php echo get_avatar($comment, 50); ?>
            </div>
            <div class="body">
                <h4><?php comment_author(); ?></h4>
                <div class="comment-meta">
                    <span class="meta">
                        <i class="fa fa-calendar"></i> <?php echo get_comment_date(); ?>
                    </span>
                    <span class="meta">
                        <i class="fa fa-clock-o"></i> <?php echo get_comment_time(); ?>
                    </span>
                </div>
                <p><?php comment_text(); ?></p>
                <?php
                comment_reply_link(array_merge($args, array(
                    'reply_text' => '<i class="fa fa-reply"></i> Reply',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                )));
                ?>
            </div>
        </div>
    </div>
    <?php
}

// add_action('init', function () {
//     if (isset($_POST['contact_form_submit'])) {
//         // Sanitize input
//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);
//         $message = sanitize_textarea_field($_POST['message']);

//         // Validation (optional)
//         if (!is_email($email)) {
//             wp_die('Invalid email address.');
//         }

//         // Send Email
//         $to = get_option('admin_email'); // Admin email or custom address
//         $subject = 'Contact Form Submission';
//         $body = "Name: $name\nEmail: $email\nMessage:\n$message";
//         $headers = ['Content-Type: text/plain; charset=UTF-8'];

//         wp_mail($to, $subject, $body, $headers);

//         // Redirect or show confirmation
//         wp_redirect(home_url('/thank-you/'));
//         exit;
//     }
// });


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class='submenu'>"; // Add submenu class if needed
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $class_names = join(' ', $item->classes);
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $icon = '<i class="fa fa-caret-right" aria-hidden="true"></i>'; // FontAwesome icon

        $output .= "<li$class_names>";
        $output .= '<a href="' . esc_url($item->url) . '">' . $icon . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>";
    }
}


?>