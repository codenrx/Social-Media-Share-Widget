<?php

function codenrx_social_share_shortcode($array, $content = null)
{
    $content .= '
    <br>
    <div class="social-share-container">
    <a class="facebook-share social-share-a" href="https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink() . '&title=' . get_the_title() . '" target="_blank"><i class="fa fa-facebook social-share-icon" ></i> Share</a>

<a class="twitter-share social-share-a" href="https://twitter.com/intent/tweet?status=' . get_the_title() . '+' . get_the_permalink() . '" target="_blank"><i class="fa fa-twitter social-share-icon"></i> Tweet</a>    

<a class="linkedin-share social-share-a" href="https://www.linkedin.com/shareArticle?url=' . get_the_permalink() . '&title=' . get_the_title() . '" target="_blank"><i class="fa fa-linkedin social-share-icon" ></i> Share</a>

<a class="pinterest-share social-share-a" href="https://pinterest.com/pin/create/bookmarklet/?url=' . get_the_permalink() . '&is_video=false&description=' . get_the_title() . '" target="_blank"><i class="fa fa-pinterest-p social-share-icon"></i> Pin</a>

<a class="reddit-share social-share-a" href="https://reddit.com/submit?url=' . get_the_permalink() . '&title=' . get_the_title() . '" target="_blank"><i class="fa fa-reddit social-share-icon"></i> Share</a>

<a class="instagram-share social-share-a" href="https://www.instagram.com/?url=' . get_the_permalink() . '" target="_blank"><i class="fa fa-instagram social-share-icon"></i> Share</a>

    </div>
    <br>
    ';
    return $content;
}
