<?php if (post_password_required())
    return; ?>

<div class="col-12">
    <div class="blog-comments">
        <h2>All Comments</h2>
        <div class="comments-body">
            <?php if (have_comments()): ?>
                <?php
                // List Comments with the Custom Callback Function
                wp_list_comments(array(
                    'style' => 'div',
                    'short_ping' => true,
                    'avatar_size' => 50,
                    'callback' => 'custom_comment_format'
                ));
                ?>
            <?php else: ?>
                <p>No comments yet. Be the first to comment!</p>
            <?php endif; ?>
        </div>
    </div>


    <div class="col-12">
        <div class="comments-form">
            <h2>Leave a Comment</h2>
            <?php
            // Display the WordPress Comment Form
            comment_form(array(
                'class_form' => 'form',
                'label_submit' => 'Submit Comment',
                'title_reply' => '',
                'comment_field' => '
            <div class="form-group message">
                <i class="fa fa-pencil"></i>
                <textarea name="comment" rows="7" placeholder="Type Your Message Here" required></textarea>
            </div>',
                'fields' => array(
                    'author' => '
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="author" placeholder="First name" required>
                    </div>
                </div>',
                    'email' => '
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                </div>',
                ),
                'submit_button' => '
            <div class="col-12">
                <div class="form-group button">
                    <button type="submit" class="btn primary">
                    <i class="fa fa-send"></i>Submit Comment
                    </button>
                </div>
            </div>',
                'submit_field' => '%1$s %2$s'
            ));
            ?>
        </div>
    </div>
</div>