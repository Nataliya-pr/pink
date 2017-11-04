 <?php
 add_action( 'admin_menu', 'np_menu_pages' );
 
 function np_menu_pages() {
     add_menu_page(
         __('Theme Options', 'text_domain'), // $page_title
         __('Theme Options', 'text_domain'), // $menu_title
         'manage_options', // $capability, Admin user
         'np_my_settings', // $menu_slug
         'np_my_settings_render', // $function
         'dashicons-welcome-learn-more', // $icon_url
         40 // $position
     );
 
 }
 
 function np_my_settings_render() {
     ?>
 
     <!-- Стандартная разметка Wordpress -->
     <div class="wrap">
 
         <!-- Заголовок страницы настроек  -->
         <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
         <!-- Показывать сообщения админ-панели  -->
         <?php settings_errors(); ?>
 
         <form method="post" action="options.php">
             <?php
             // Добавить служебные поля Wordpress
             settings_fields('np_my_settings');
 
             // Отобразить зарегистрированные поля
             do_settings_sections('np_my_settings');
 
             // Добавить кнопку сохранения
             submit_button();
             ?>
         </form>
     </div>
 
     <?php
 }
 
 add_action( 'admin_init', 'np_register_settings' );
 
 function np_register_settings() {
     add_settings_section(
         'np_setting_section', // $id, поля настроек привязываются к этому $id
         __('Footer Options', 'text_domain'), // $title - заголовок секции
         // 'np_setting_section_render', // $function - функция, которая будет выводить секцию
         '', // $function - функция, которая будет выводить секцию
         'np_my_settings' // $menu_slug страницы настроек
     );
 
     add_settings_field(
         'np_footer_copy', // $name - имя поля в базе данных
         __('Copyright Text', 'text_domain'), // $title - заголовок секции
         'np_setting_field_function', // $function - функция, которая будет выводить поле
         'np_my_settings', // $menu_slug страницы настроек
         'np_setting_section', // $id секции
         ['name' => 'np_footer_copy']
     );
 
     add_settings_field(
         'np_footer_fb', // $name - имя поля в базе данных
         __('Facebook Link', 'text_domain'), // $title - заголовок секции
         'np_setting_field_function', // $function - функция, которая будет выводить поле
         'np_my_settings', // $menu_slug страницы настроек
         'np_setting_section', // $id секции
         ['name' => 'np_footer_fb']
     );
 
     add_settings_field(
         'np_footer_tw', // $name - имя поля в базе данных
         __('Twitter Link', 'text_domain'), // $title - заголовок секции
         'np_setting_field_function', // $function - функция, которая будет выводить поле
         'np_my_settings', // $menu_slug страницы настроек
         'np_setting_section', // $id секции
         ['name' => 'np_footer_tw']
     );
 
     add_settings_field(
         'np_footer_dribbble', // $name - имя поля в базе данных
         __('Dribbble Link', 'text_domain'), // $title - заголовок секции
         'np_setting_field_function', // $function - функция, которая будет выводить поле
         'np_my_settings', // $menu_slug страницы настроек
         'np_setting_section', // $id секции
         ['name' => 'np_footer_dribbble']
     );
 
     add_settings_field(
         'np_footer_social', // $name - имя поля в базе данных
         __('Social Link', 'text_domain'), // $title - заголовок секции
         'np_setting_field_function', // $function - функция, которая будет выводить поле
         'np_my_settings', // $menu_slug страницы настроек
         'np_setting_section', // $id секции
         ['name' => 'np_footer_social']
     );
 
     register_setting('np_my_settings', 'np_footer_copy');
     register_setting('np_my_settings', 'np_footer_fb');
     register_setting('np_my_settings', 'np_footer_tw');
     register_setting('np_my_settings', 'np_footer_dribbble');
     register_setting('np_my_settings', 'np_footer_social');
 }
 
 function np_setting_field_function($args) {
   $name = $args['name'];
     $value = get_option($name);
     $class = isset($args['class']) ? $args['class'] : '';
 
     ?>
 <input type="text" class="regular-text <?=$class?>" id="<?=$name?>" name="<?=$name?>" value="<?=$value?>">
     <?php
 }