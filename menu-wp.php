<?php

if( $menu_items = wp_get_nav_menu_items('menu') ) {
	$menu_list = '';
	$this_item = get_queried_object_id();
	foreach ( (array) $menu_items as $key => $menu_item ) {
		$title = $menu_item->title;
		$url = $menu_item->url;
		$activeclass = '';
		$id = $menu_item->object_id;
		if($id == $this_item){
            $activeclass = 'active';
        }
		
		$menu_list .= '<a class="'.  $activeclass  .'" href="' . $url . '">' . $title . '</a>';
	}
	echo $menu_list;
}

?>
