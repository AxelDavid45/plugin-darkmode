<?php
//Plugin name: Modo Oscuro
//Description: Convierte el tema a un modo oscuro amigable para la lectura en las noches
//Version: 1.0
//Author: Axel Espinosa
//Author URI: www.github.com/AxelDavid45

function modo_oscuro() {

    //Assets url
    $cssUrl = plugin_dir_url(__FILE__);

    //Enqueue the asset
    wp_enqueue_style(
        'modo_oscuro',
        $cssUrl.'assets/css/estilos.css',
        '',
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'modo_oscuro');