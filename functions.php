<?php
	
//mijn eigen stylesheet functie
//de eerste string is zomaar een handle, het pad naar de stylesheet moet absoluut zijn, dus get directory van je hele wordpress installatie en concateneer die met het pad naar je stylesheet en een lege array omdat er geen dependancies in zitten - dan geef je een version number voor toekomstige devs en tot slot op welke media je site geprint mag worden - dat laatste is een boolean voor javascript omdat het beter is om die scripts in de footer aan te roepen 
function jolarti_script_enqueue() {
    // wp_enqueue_style( 'bootstrapstijl', get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'mijnstijl', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_script( 'mijnscript', get_template_directory_uri() . '/scripts/javascripts.js', array(), '1.0.0', true );
    }
//maak hier een hook door met een actie je functie an te roepen 
//gek genoeg moet je van het enque een string maken 
add_action( 'wp_enqueue_scripts', 'jolarti_script_enqueue');
//bovenstaande hook wordt uitgevoerd als je wp_head aanroept in je header
//geke genoeg werkt dit ook als je wp_footer aanroept in je footer


//om een menu te maken heb je support nodig - hiermee plaats je de optie menus in je dashboard > appearance > menus
function jolarti_theme_setup() {
	add_theme_support('menus');
	//deze regel werkt ook BUITEN een functie maar dit is good practice
}
//call deze functie aan NADAT de theme setup is getriggered of GEINITIALISEERD
add_action('init', 'jolarti_theme_setup');

?>