<?php

//Functions laadt in VOORDAT je wordpress page inlaadt 
	
//mijn eigen stylesheet functie
//de eerste string is zomaar een handle, het pad naar de stylesheet moet absoluut zijn, dus get directory van je hele wordpress installatie en concateneer die met het pad naar je stylesheet en een lege array omdat er geen dependancies in zitten - dan geef je een version number voor toekomstige devs en tot slot op welke media je site geprint mag worden - dat laatste is een boolean voor javascript omdat het beter is om die scripts in de footer aan te roepen 
function jolarti_script_enqueue() {
    // wp_enqueue_style( 'bootstrapstijl', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_script( 'mijnscript', get_template_directory_uri() . '/scripts/jolarti.js', array(), '1.0.0', true );
    wp_enqueue_style( 'mijnstijl', get_template_directory_uri() . '/styles/jolarti.css', array(), '1.0.0', 'all' );
    }
//maak hier een hook door met een actie je functie an te roepen 
//gek genoeg moet je van het enque een string maken 
add_action( 'wp_enqueue_scripts', 'jolarti_script_enqueue');
//bovenstaande hook wordt uitgevoerd als je wp_head aanroept in je header
//geke genoeg werkt dit ook als je wp_footer aanroept in je footer


//om een menu te maken heb je support nodig - hiermee plaats je de optie menus in je dashboard > appearance > menus
//add_theme_support heeft heeeel erg veel features maar we gebruiken nu alleen de menu feature
function jolarti_theme_setup() {
	add_theme_support('menus');
	//deze regel werkt ook BUITEN een functie maar dit is good practice, voor als je later plugins wilt toevoegen

	register_nav_menu('hoofdmenu', 'Primary main jolarti header navigation');
	register_nav_menu('subversivemenu', 'Secondary jolarti footy navigation');
	//dit maakt op magische wijze verschillende menu in je dashboard aan
}
//call deze functie aan NADAT de theme setup is getriggered of GEINITIALISEERD
//een action is een haakje die ons de mogelijkheid geeft om te verbinden met wordpress execution process naar onze eigen gemaakte functies
//wordpress execution process is als wp iets doet, zoals een template creeren, een script embedden, iets genereren, elke keer als wp iets doet is er ook een haakje dat er naartoe connect
add_action('init', 'jolarti_theme_setup');
//je kunt i.p.v. init ook after_setup_theme gebruiken maar met init kun je meer toevoegen










add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {

	if ( empty($args->menu_item_start) )
		return $items;
	
	$parent_ids = wp_filter_object_list( $items, array( 'menu_item_parent' => 0 ), 'and', 'ID' );
	
	if( !empty( $parent_ids ) ){
	
		$menu_item_end = ( isset( $args->menu_item_end ) ) ? (int) $args->menu_item_end : count( $parent_ids );
		$total = ($menu_item_end) - ((int) $args->menu_item_start);
		$range_parent_ids = array_slice( (array) $parent_ids, ($args->menu_item_start)-1, $total+1, true );
		
		if( !empty( $range_parent_ids ) ) {
			$return_items = array();
			foreach ( $range_parent_ids as $parent_id ) {
				
				$return_items[] = $parent_id;
				$children = submenu_get_children_ids( $parent_id, $items );
				
				if( !empty($children) ) {
					$return_items = array_merge( $return_items, $children ); 
				}
				
			}
			
			foreach( $items as $key => $item ){
				if( !in_array( $item->ID, $return_items ) ){
					unset( $items[$key] );
				} 
			}
			
		} // if !empty($range_parent_ids)
	} // if !empty($parent_ids)
	
	return $items;
}

function submenu_get_children_ids( $id, $items ) {
	
	$ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
	foreach ( $ids as $id ) {
		$ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
	}
	
	return $ids;
}

?>