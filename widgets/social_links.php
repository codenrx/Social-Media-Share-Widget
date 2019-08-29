<?php

class codenrx_social_share_widget extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'codenrx_social_share_widget',
            'description' => 'A widget for display social icons !!',
        );
        parent::__construct('codenrx_social_share_widget', 'Codenrx Social Links', $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        echo '<div class="social-icon-container">';

        if ($instance['codenrx_social_title']) {
          ?>
          <h5 class="social-share-title"><?php echo $instance['codenrx_social_title']; ?></h5><hr>
          <?php
        }

        if ($instance['codenrx_facebook_link'] != null) {
          ?>
          <a href="<?php echo $instance['codenrx_facebook_link']; ?>" target="_blank" class="icon-link round-corner facebook fill"><i class="fa fa-facebook"></i></a>
          <?php
        }

        if ($instance['codenrx_twitter_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_twitter_link']; ?>" target="_blank" class="icon-link round-corner twitter fill"><i class="fa fa-twitter"></i></a>
          <?php
        }

        if ($instance['codenrx_youtube_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_youtube_link']; ?>" target="_blank" class="icon-link round-corner youtube fill"><i class="fa fa-youtube"></i></a>
          <?php
        }

        if ($instance['codenrx_instragam_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_instragam_link']; ?>" target="_blank" class="icon-link round-corner instagram fill"><i class="fa fa-instagram"></i></a>
          <?php
        }

        if ($instance['codenrx_linkedin_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_linkedin_link']; ?>" target="_blank" class="icon-link round-corner linkedin fill"><i class="fa fa-linkedin"></i></a>
          <?php
        }

        if ($instance['codenrx_gmail_link'] != null) {
          ?><a href="<?php echo 'mailto:'.$instance['codenrx_gmail_link']; ?>" class="icon-link round-corner envelope fill"><i class="fa fa-envelope"></i></a>
          <?php
        }

        if ($instance['codenrx_behance_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_behance_link']; ?>" target="_blank" class="icon-link round-corner behance fill"><i class="fa fa-behance"></i></a>
          <?php
        }

        if ($instance['codenrx_dribbble_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_dribbble_link']; ?>" target="_blank" class="icon-link round-corner dribbble fill"><i class="fa fa-dribbble"></i></a>
          <?php
        }

        if ($instance['codenrx_github_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_github_link']; ?>" target="_blank" class="icon-link round-corner github fill"><i class="fa fa-github"></i></a>
          <?php
        }

        if ($instance['codenrx_googleplus_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_googleplus_link']; ?>" target="_blank" class="icon-link round-corner google-plus fill"><i class="fa fa-google-plus"></i></a>
          <?php
        }

        if ($instance['codenrx_reddit_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_reddit_link']; ?>" target="_blank" class="icon-link round-corner reddit fill"><i class="fa fa-reddit"></i></a>
          <?php
        }

        if ($instance['codenrx_pinterest_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_pinterest_link']; ?>" target="_blank" class="icon-link round-corner pinterest fill"><i class="fa fa-pinterest"></i></a>
          <?php
        }

        if ($instance['codenrx_tumblr_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_tumblr_link']; ?>" target="_blank" class="icon-link round-corner tumblr fill"><i class="fa fa-tumblr"></i></a>
          <?php
        }

        if ($instance['codenrx_soundcloud_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_soundcloud_link']; ?>" target="_blank" class="icon-link round-corner soundcloud fill"><i class="fa fa-soundcloud"></i></a>
          <?php
        }

        if ($instance['codenrx_codepen_link'] != null) {
          ?><a href="<?php echo $instance['codenrx_codepen_link']; ?>" target="_blank" class="icon-link round-corner codepen fill"><i class="fa fa-codepen"></i></a>
          <?php
        }
        echo '</div>';
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
        $title = !empty($instance['codenrx_social_title']) ? $instance['codenrx_social_title'] : esc_html__('Follow Us', 'socialsharewidget');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('codenrx_social_title')); ?>"><?php esc_attr_e('Title : ', 'socialsharewidget'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_social_title')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_social_title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php

        $facebook = !empty($instance['codenrx_facebook_link']) ? $instance['codenrx_facebook_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_facebook_link')); ?>"><?php esc_attr_e('Facebook : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_facebook_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_facebook_link')); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
</p>
<?php

        $twitter = !empty($instance['codenrx_twitter_link']) ? $instance['codenrx_twitter_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_twitter_link')); ?>"><?php esc_attr_e('Twitter : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_twitter_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_twitter_link')); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
</p>
<?php

    $youtube = !empty($instance['codenrx_youtube_link']) ? $instance['codenrx_youtube_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_youtube_link')); ?>"><?php esc_attr_e('YouTube : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_youtube_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_youtube_link')); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
</p>
<?php

    $instragam = !empty($instance['codenrx_instragam_link']) ? $instance['codenrx_instragam_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_instragam_link')); ?>"><?php esc_attr_e('Instagram : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_instragam_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_instragam_link')); ?>" type="text" value="<?php echo esc_attr($instragam); ?>">
</p>
<?php

    $linkedin = !empty($instance['codenrx_linkedin_link']) ? $instance['codenrx_linkedin_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_linkedin_link')); ?>"><?php esc_attr_e('LinkedIn : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_linkedin_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_linkedin_link')); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
</p>
<?php

    $gmail = !empty($instance['codenrx_gmail_link']) ? $instance['codenrx_gmail_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_gmail_link')); ?>"><?php esc_attr_e('Gmail : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_gmail_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_gmail_link')); ?>" type="text" value="<?php echo esc_attr($gmail); ?>">
</p>
<?php

    $behance = !empty($instance['codenrx_behance_link']) ? $instance['codenrx_behance_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_behance_link')); ?>"><?php esc_attr_e('Behance : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_behance_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_behance_link')); ?>" type="text" value="<?php echo esc_attr($behance); ?>">
</p>
<?php

    $dribbble = !empty($instance['codenrx_dribbble_link']) ? $instance['codenrx_dribbble_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_dribbble_link')); ?>"><?php esc_attr_e('Dribbble : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_dribbble_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_dribbble_link')); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>">
</p>
<?php

  $github = !empty($instance['codenrx_github_link']) ? $instance['codenrx_github_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_github_link')); ?>"><?php esc_attr_e('GitHub : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_github_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_github_link')); ?>" type="text" value="<?php echo esc_attr($github); ?>">
</p>
<?php

  $googleplus = !empty($instance['codenrx_googleplus_link']) ? $instance['codenrx_googleplus_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_googleplus_link')); ?>"><?php esc_attr_e('Google Plus : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_googleplus_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_googleplus_link')); ?>" type="text" value="<?php echo esc_attr($googleplus); ?>">
</p>
<?php

  $reddit = !empty($instance['codenrx_reddit_link']) ? $instance['codenrx_reddit_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_reddit_link')); ?>"><?php esc_attr_e('Reddit : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_reddit_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_reddit_link')); ?>" type="text" value="<?php echo esc_attr($reddit); ?>">
</p>
<?php

  $pinterest = !empty($instance['codenrx_pinterest_link']) ? $instance['codenrx_pinterest_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_pinterest_link')); ?>"><?php esc_attr_e('pinterest : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_pinterest_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_pinterest_link')); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
</p>
<?php

  $tumblr = !empty($instance['codenrx_tumblr_link']) ? $instance['codenrx_tumblr_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_tumblr_link')); ?>"><?php esc_attr_e('tumblr : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_tumblr_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_tumblr_link')); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
</p>
<?php

  $soundcloud = !empty($instance['codenrx_soundcloud_link']) ? $instance['codenrx_soundcloud_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_soundcloud_link')); ?>"><?php esc_attr_e('soundcloud : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_soundcloud_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_soundcloud_link')); ?>" type="text" value="<?php echo esc_attr($soundcloud); ?>">
</p>
<?php

        $codepen = !empty($instance['codenrx_codepen_link']) ? $instance['codenrx_codepen_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codenrx_codepen_link')); ?>"><?php esc_attr_e('CodePen : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codenrx_codepen_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codenrx_codepen_link')); ?>" type="text" value="<?php echo esc_attr($codepen); ?>">
</p>
<?php

    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance = [];
        $instance['codenrx_social_title'] = strip_tags($new_instance['codenrx_social_title']);
        $instance['codenrx_facebook_link'] = strip_tags($new_instance['codenrx_facebook_link']);
        $instance['codenrx_twitter_link'] = strip_tags($new_instance['codenrx_twitter_link']);
        $instance['codenrx_youtube_link'] = strip_tags($new_instance['codenrx_youtube_link']);
        $instance['codenrx_instragam_link'] = strip_tags($new_instance['codenrx_instragam_link']);
        $instance['codenrx_linkedin_link'] = strip_tags($new_instance['codenrx_linkedin_link']);
        $instance['codenrx_gmail_link'] = strip_tags($new_instance['codenrx_gmail_link']);
        $instance['codenrx_behance_link'] = strip_tags($new_instance['codenrx_behance_link']);
        $instance['codenrx_dribbble_link'] = strip_tags($new_instance['codenrx_dribbble_link']);
        $instance['codenrx_github_link'] = strip_tags($new_instance['codenrx_github_link']);
        $instance['codenrx_googleplus_link'] = strip_tags($new_instance['codenrx_googleplus_link']);
        $instance['codenrx_reddit_link'] = strip_tags($new_instance['codenrx_reddit_link']);
        $instance['codenrx_pinterest_link'] = strip_tags($new_instance['codenrx_pinterest_link']);
        $instance['codenrx_tumblr_link'] = strip_tags($new_instance['codenrx_tumblr_link']);
        $instance['codenrx_github_link'] = strip_tags($new_instance['codenrx_github_link']);
        $instance['codenrx_soundcloud_link'] = strip_tags($new_instance['codenrx_soundcloud_link']);
        $instance['codenrx_codepen_link'] = strip_tags($new_instance['codenrx_codepen_link']);
        return $instance;
    }
}
