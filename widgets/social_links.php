<?php

class social_share_widget extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'social_share_widget',
            'description' => 'Simply Used For Sidebar Only !!',
        );
        parent::__construct('social_share_widget', 'Social Links', $widget_ops);
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

        if ($instance['social_title']) {
          ?>
          <h5 class="social-share-title"><?php echo $instance['social_title']; ?></h5><hr>
          <?php
        }

        if ($instance['facebook_link'] != null) {
          ?>
          <a href="<?php echo $instance['facebook_link']; ?>" target="_blank" class="icon-link round-corner facebook fill"><i class="fa fa-facebook"></i></a>
          <?php
        }

        if ($instance['twitter_link'] != null) {
          ?><a href="<?php echo $instance['twitter_link']; ?>" target="_blank" class="icon-link round-corner twitter fill"><i class="fa fa-twitter"></i></a>
          <?php
        }

        if ($instance['youtube_link'] != null) {
          ?><a href="<?php echo $instance['youtube_link']; ?>" target="_blank" class="icon-link round-corner youtube fill"><i class="fa fa-youtube"></i></a>
          <?php
        }

        if ($instance['instragam_link'] != null) {
          ?><a href="<?php echo $instance['instragam_link']; ?>" target="_blank" class="icon-link round-corner instagram fill"><i class="fa fa-instagram"></i></a>
          <?php
        }

        if ($instance['linkedin_link'] != null) {
          ?><a href="<?php echo $instance['linkedin_link']; ?>" target="_blank" class="icon-link round-corner linkedin fill"><i class="fa fa-linkedin"></i></a>
          <?php
        }

        if ($instance['gmail_link'] != null) {
          ?><a href="<?php echo 'mailto:'.$instance['gmail_link']; ?>" class="icon-link round-corner envelope fill"><i class="fa fa-envelope"></i></a>
          <?php
        }

        if ($instance['behance_link'] != null) {
          ?><a href="<?php echo $instance['behance_link']; ?>" target="_blank" class="icon-link round-corner behance fill"><i class="fa fa-behance"></i></a>
          <?php
        }

        if ($instance['dribbble_link'] != null) {
          ?><a href="<?php echo $instance['dribbble_link']; ?>" target="_blank" class="icon-link round-corner dribbble fill"><i class="fa fa-dribbble"></i></a>
          <?php
        }

        if ($instance['github_link'] != null) {
          ?><a href="<?php echo $instance['github_link']; ?>" target="_blank" class="icon-link round-corner github fill"><i class="fa fa-github"></i></a>
          <?php
        }

        if ($instance['googleplus_link'] != null) {
          ?><a href="<?php echo $instance['googleplus_link']; ?>" target="_blank" class="icon-link round-corner google-plus fill"><i class="fa fa-google-plus"></i></a>
          <?php
        }

        if ($instance['reddit_link'] != null) {
          ?><a href="<?php echo $instance['reddit_link']; ?>" target="_blank" class="icon-link round-corner reddit fill"><i class="fa fa-reddit"></i></a>
          <?php
        }

        if ($instance['pinterest_link'] != null) {
          ?><a href="<?php echo $instance['pinterest_link']; ?>" target="_blank" class="icon-link round-corner pinterest fill"><i class="fa fa-pinterest"></i></a>
          <?php
        }

        if ($instance['tumblr_link'] != null) {
          ?><a href="<?php echo $instance['tumblr_link']; ?>" target="_blank" class="icon-link round-corner tumblr fill"><i class="fa fa-tumblr"></i></a>
          <?php
        }

        if ($instance['soundcloud_link'] != null) {
          ?><a href="<?php echo $instance['soundcloud_link']; ?>" target="_blank" class="icon-link round-corner soundcloud fill"><i class="fa fa-soundcloud"></i></a>
          <?php
        }

        if ($instance['codepen_link'] != null) {
          ?><a href="<?php echo $instance['codepen_link']; ?>" target="_blank" class="icon-link round-corner codepen fill"><i class="fa fa-codepen"></i></a>
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
        $title = !empty($instance['social_title']) ? $instance['social_title'] : esc_html__('Follow Us', 'socialsharewidget');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('social_title')); ?>"><?php esc_attr_e('Title : ', 'socialsharewidget'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('social_title')); ?>" name="<?php echo esc_attr($this->get_field_name('social_title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php

        $facebook = !empty($instance['facebook_link']) ? $instance['facebook_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('facebook_link')); ?>"><?php esc_attr_e('Facebook : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook_link')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook_link')); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
</p>
<?php

        $twitter = !empty($instance['twitter_link']) ? $instance['twitter_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('twitter_link')); ?>"><?php esc_attr_e('Twitter : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_link')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_link')); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
</p>
<?php

    $youtube = !empty($instance['youtube_link']) ? $instance['youtube_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('youtube_link')); ?>"><?php esc_attr_e('YouTube : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube_link')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube_link')); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
</p>
<?php

    $instragam = !empty($instance['instragam_link']) ? $instance['instragam_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('instragam_link')); ?>"><?php esc_attr_e('Instagram : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('instragam_link')); ?>" name="<?php echo esc_attr($this->get_field_name('instragam_link')); ?>" type="text" value="<?php echo esc_attr($instragam); ?>">
</p>
<?php

    $linkedin = !empty($instance['linkedin_link']) ? $instance['linkedin_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('linkedin_link')); ?>"><?php esc_attr_e('LinkedIn : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin_link')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin_link')); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
</p>
<?php

    $gmail = !empty($instance['gmail_link']) ? $instance['gmail_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('gmail_link')); ?>"><?php esc_attr_e('Gmail : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('gmail_link')); ?>" name="<?php echo esc_attr($this->get_field_name('gmail_link')); ?>" type="text" value="<?php echo esc_attr($gmail); ?>">
</p>
<?php

    $behance = !empty($instance['behance_link']) ? $instance['behance_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('behance_link')); ?>"><?php esc_attr_e('Behance : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('behance_link')); ?>" name="<?php echo esc_attr($this->get_field_name('behance_link')); ?>" type="text" value="<?php echo esc_attr($behance); ?>">
</p>
<?php

    $dribbble = !empty($instance['dribbble_link']) ? $instance['dribbble_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('dribbble_link')); ?>"><?php esc_attr_e('Dribbble : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbble_link')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbble_link')); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>">
</p>
<?php

  $github = !empty($instance['github_link']) ? $instance['github_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('github_link')); ?>"><?php esc_attr_e('GitHub : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('github_link')); ?>" name="<?php echo esc_attr($this->get_field_name('github_link')); ?>" type="text" value="<?php echo esc_attr($github); ?>">
</p>
<?php

  $googleplus = !empty($instance['googleplus_link']) ? $instance['googleplus_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('googleplus_link')); ?>"><?php esc_attr_e('Google Plus : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('googleplus_link')); ?>" name="<?php echo esc_attr($this->get_field_name('googleplus_link')); ?>" type="text" value="<?php echo esc_attr($googleplus); ?>">
</p>
<?php

  $reddit = !empty($instance['reddit_link']) ? $instance['reddit_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('reddit_link')); ?>"><?php esc_attr_e('Reddit : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('reddit_link')); ?>" name="<?php echo esc_attr($this->get_field_name('reddit_link')); ?>" type="text" value="<?php echo esc_attr($reddit); ?>">
</p>
<?php

  $pinterest = !empty($instance['pinterest_link']) ? $instance['pinterest_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('pinterest_link')); ?>"><?php esc_attr_e('pinterest : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest_link')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest_link')); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
</p>
<?php

  $tumblr = !empty($instance['tumblr_link']) ? $instance['tumblr_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('tumblr_link')); ?>"><?php esc_attr_e('tumblr : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr_link')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr_link')); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
</p>
<?php

  $soundcloud = !empty($instance['soundcloud_link']) ? $instance['soundcloud_link'] : esc_html__('', 'socialsharewidget');
?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('soundcloud_link')); ?>"><?php esc_attr_e('soundcloud : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('soundcloud_link')); ?>" name="<?php echo esc_attr($this->get_field_name('soundcloud_link')); ?>" type="text" value="<?php echo esc_attr($soundcloud); ?>">
</p>
<?php

        $codepen = !empty($instance['codepen_link']) ? $instance['codepen_link'] : esc_html__('', 'socialsharewidget');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('codepen_link')); ?>"><?php esc_attr_e('CodePen : ', 'socialsharewidget'); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('codepen_link')); ?>" name="<?php echo esc_attr($this->get_field_name('codepen_link')); ?>" type="text" value="<?php echo esc_attr($codepen); ?>">
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
        $instance['social_title'] = strip_tags($new_instance['social_title']);
        $instance['facebook_link'] = strip_tags($new_instance['facebook_link']);
        $instance['twitter_link'] = strip_tags($new_instance['twitter_link']);
        $instance['youtube_link'] = strip_tags($new_instance['youtube_link']);
        $instance['instragam_link'] = strip_tags($new_instance['instragam_link']);
        $instance['linkedin_link'] = strip_tags($new_instance['linkedin_link']);
        $instance['gmail_link'] = strip_tags($new_instance['gmail_link']);
        $instance['behance_link'] = strip_tags($new_instance['behance_link']);
        $instance['dribbble_link'] = strip_tags($new_instance['dribbble_link']);
        $instance['github_link'] = strip_tags($new_instance['github_link']);
        $instance['googleplus_link'] = strip_tags($new_instance['googleplus_link']);
        $instance['reddit_link'] = strip_tags($new_instance['reddit_link']);
        $instance['pinterest_link'] = strip_tags($new_instance['pinterest_link']);
        $instance['tumblr_link'] = strip_tags($new_instance['tumblr_link']);
        $instance['github_link'] = strip_tags($new_instance['github_link']);
        $instance['soundcloud_link'] = strip_tags($new_instance['soundcloud_link']);
        $instance['codepen_link'] = strip_tags($new_instance['codepen_link']);
        return $instance;
    }
}
