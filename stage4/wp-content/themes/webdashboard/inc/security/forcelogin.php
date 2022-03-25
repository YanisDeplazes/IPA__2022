<?php
/* /////////////////////////////////////////////////////////////////////////////////
F O R C E L O G I N
///////////////////////////////////////////////////////////////////////////////// */
function v_getUrl()
{
    $url = isset($_SERVER["HTTPS"]) && "on" === $_SERVER["HTTPS"] ? "https" : "http";
    $url .= "://" . $_SERVER["SERVER_NAME"];
    $url .= in_array($_SERVER["SERVER_PORT"], ["80", "443"]) ? "" : ":" . $_SERVER["SERVER_PORT"];
    $url .= $_SERVER["REQUEST_URI"];
    return $url;
}
function v_forcelogin()
{
    if (!is_user_logged_in())
    {
        $url = v_getUrl();
        $whitelist = apply_filters("v_forcelogin_whitelist", []);
        $redirect_url = apply_filters("v_forcelogin_redirect", $url);
        if (preg_replace("/\?.*/", "", $url) != preg_replace("/\?.*/", "", wp_login_url()) && !in_array($url, $whitelist))
        {
            wp_safe_redirect(wp_login_url($redirect_url) , 302);
            exit();
        }
    }
}
add_action("init", "v_forcelogin");