<?php
/**
 * Charge les scripts et feuilles de style propres au thème.
 *
 * Utilisation : add_action('wp_enqueue_scripts', 'william_charger_css_js_web');
 *
 * @author William Morin
 *
 */
function examen2_2038596_charger_css_js_web() {
	// cette ligne est nécessaire seulement si le thème parent n'a pas correctement chargé le fichier style.css du thème enfant
	wp_enqueue_style( 'css-theme-enfant', get_stylesheet_uri() );
	// ...
}
add_action( 'wp_enqueue_scripts', 'examen2_2038596_charger_css_js_web' );
/**
 * Fonction de rappel du hook after_setup_theme, exécutée après que le thème ait été initialisé
 *
 * Utilisation : add_action( 'after_setup_theme', 'william_apres_initialisation_theme' );
 *
 * @author Christiane Lagacé
 *
 */
function examen2_2038596_apres_initialisation_theme() {
	// Retirer la balise <meta name="generator">
	remove_action( 'wp_head', 'wp_generator' );
}

add_action( 'after_setup_theme', 'examen2_2038596_apres_initialisation_theme' );

