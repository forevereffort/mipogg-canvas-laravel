<?php
 
if (!function_exists('is_active_menu')) {

    function is_active_menu($path) {
        return Request::is($path . '*') ? ' active' :  '';
    }
}