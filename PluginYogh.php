<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:      https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Client_Customization
 */

// Se este arquivo for chamado diretamente, aborta.
if (!defined('ABSPATH')) {
  die('not allowed');
}

// Adiciona uma mensagem personalizada ao final do conteúdo de posts individuais.
add_filter('the_content', function ($content) {
  if (is_single()) {
    $blog_name = get_bloginfo('name');
    $blog_url = get_bloginfo('url');
    $message = '<p><b>This content is created by: ' . $blog_name . ' (' . $blog_url . ')</b></p>';

    return $content . $message;
  }

  return $content;
}, 10);
