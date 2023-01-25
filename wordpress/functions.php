<?php

// Muda o texto do botão read more no slider de produtos do wordpress 
add_filter('gettext', 'change_woo_read_more_txt', 20, 3 );

function change_woo_read_more_txt( $translated_text, $text, $domain ) {
    if ( ! is_admin() && $domain === 'woocommerce' && $translated_text === 'Leia mais') {
    $translated_text = 'Ver Produto';
}
    return $translated_text;
}