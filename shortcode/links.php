<?php

function codenrx_social_links_shortcode($array, $content = null)
{
    if (isset($array['fb'])) {
        $content .= '
        <a href="' . $array['fb'] . '" target="_blank" class="icon-link round-corner facebook fill"><i class="fa fa-facebook"></i></a>
        ';
    }

    if (isset($array['tw'])) {
        $content .= '
        <a href="' . $array['tw'] . '" target="_blank" class="icon-link round-corner twitter fill"><i class="fa fa-twitter"></i></a>
        ';
    }

    if (isset($array['yt'])) {
        $content .= '
        <a href="' . $array['yt'] . '" target="_blank" class="icon-link round-corner youtube fill"><i class="fa fa-youtube"></i></a>
        ';
    }

    if (isset($array['ins'])) {
        $content .= '
        <a href="' . $array['ins'] . '" target="_blank" class="icon-link round-corner instagram fill"><i class="fa fa-instagram"></i></a>
        ';
    }

    if (isset($array['lkin'])) {
        $content .= '
        <a href="' . $array['lkin'] . '" target="_blank" class="icon-link round-corner linkedin fill"><i class="fa fa-linkedin"></i></a>
        ';
    }

    if (isset($array['email'])) {
        $content .= '
        <a href="' . $array['email'] . '" target="_blank" class="icon-link round-corner envelope fill"><i class="fa fa-envelope"></i></a>
        ';
    }

    if (isset($array['be'])) {
        $content .= '
        <a href="' . $array['be'] . '" target="_blank" class="icon-link round-corner behance fill"><i class="fa fa-behance"></i></a>
        ';
    }

    if (isset($array['dr'])) {
        $content .= '
        <a href="' . $array['dr'] . '" target="_blank" class="icon-link round-corner dribbble fill"><i class="fa fa-dribbble"></i></a>
        ';
    }

    if (isset($array['gt'])) {
        $content .= '
        <a href="' . $array['gt'] . '" target="_blank" class="icon-link round-corner github fill"><i class="fa fa-github"></i></a>
        ';
    }

    if (isset($array['pin'])) {
        $content .= '
        <a href="' . $array['pin'] . '" target="_blank" class="icon-link round-corner pinterest fill"><i class="fa fa-pinterest"></i></a>
        ';
    }

    if (isset($array['tum'])) {
        $content .= '
        <a href="' . $array['tum'] . '" target="_blank" class="icon-link round-corner tumblr fill"><i class="fa fa-tumblr"></i></a>
        ';
    }

    if (isset($array['sound'])) {
        $content .= '
        <a href="' . $array['sound'] . '" target="_blank" class="icon-link round-corner soundcloud fill"><i class="fa fa-soundcloud"></i></a>
        ';
    }

    if (isset($array['cpen'])) {
        $content .= '
        <a href="' . $array['cpen'] . '" target="_blank" class="icon-link round-corner codepen fill"><i class="fa fa-codepen"></i></a>
        ';
    }

    return $content;
}
