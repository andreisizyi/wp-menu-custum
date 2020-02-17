<?php

if( $menu_items = wp_get_nav_menu_items('menu') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
	$menu_list = '';
	$this_item = get_queried_object_id();
	foreach ( (array) $menu_items as $key => $menu_item ) {
		$title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
		$url = $menu_item->url; // URL ссылки
		$id = $menu_item->object_id; // URL ссылки
		$activeclass = '';
		
		if($id == $this_item){
            $activeclass = 'active';
        }
		
		$menu_list .= '<a class="'.  $activeclass  .'" href="' . $url . '">' . $title . '</a>';
	}
	echo $menu_list;
}

?>