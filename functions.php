
<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support("menus");

// .current_page_item

// function get_field2($key, $page_id = 0) {
//   $id = $page_id !== 0 ? $page_id : get_the_ID();
//   return get_post_meta($id, $key, true);
// }

// function the_field2($key, $page_id = 0) {
//   $id = get_page_by_title(''.$page_id.'')->ID;
//   if($page_id !== 0){
//     echo get_field2($key, $id);
//   } else {
//     echo get_field2($key, $page_id);
//   }
// }

// function the_file2($key, $att = 0) {
//   if($att !== 0) {
//     echo wp_get_attachment_image_src(get_field2(''.$key.''), ''.$att.'')[0];
//   } else {
//     echo wp_get_attachment_image_src(get_field2(''.$key.''), 'large')[0];
//   }
// }

// // $comida = get_page_by_title('Menu da Semana')->ID;
// // echo get_post_meta(get_the_ID(), 'comida', true);

// add_action('cmb2_admin_init', 'cmb2_fields_home');

// function cmb2_fields_home() {
//   $cmb = new_cmb2_box([
//     'id' => 'home_box',
//     'title' => 'Menu da Semana',
//     'object_types' => ['page'],
//     'show_on' => [
//       'key' => 'page-template',
//       'value' => 'page-home.php',
//     ],
//   ]);

//   $cmb->add_field([
//     'name' => 'Comida',
//     'id' => 'comida',
//     'type' => 'text',
//   ]);

//   $pratos = $cmb->add_field([
//     'name' => 'Pratos',
//     'id' => 'pratos',
//     'type' => 'group',
//     'repeatable' => true,
//     'options' => [
//       'group_title' => 'Prato {#}',
//       'add_button' => 'Adicionar Prato',
//       'remove_button' => 'Remover Prato',
//       'sortable' => true,
//     ]
//   ]);

//   $cmb->add_group_field($pratos, [
//     'name' => 'Nome',
//     'id' => 'nome',
//     'type' => 'text',
//   ]);

//   $cmb->add_group_field($pratos, [
//     'name' => 'Descrição',
//     'id' => 'descricao',
//     'type' => 'text',
//   ]);

//   $cmb->add_group_field($pratos, [
//     'name' => 'Preço',
//     'id' => 'preco',
//     'type' => 'text',
//   ]);

// }

?>

