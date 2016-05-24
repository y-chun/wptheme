<?php add_action('admin_init', 'register_theme_settings');
function register_theme_settings() {
    register_setting("theme_mods_freshblog","theme_mods_freshblog");
}
//添加admin外观菜单
add_action('admin_menu', 'add_theme_options_menu');
function add_theme_options_menu() {
    add_theme_page('Freshblog Theme Options','Freshblog Theme Options','edit_theme_options','theme-options', 'theme_settings_admin');
}
function theme_settings_admin() {
    //这里写选项页面内容
}?>