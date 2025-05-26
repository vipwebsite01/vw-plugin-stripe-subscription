<?php
/**
 * Plugin Name: VW Stripe Subscription
 * Description: Stripe előfizetés kezelés WordPress-ben (Basic & Pro)
 * Version:     1.0.0
 * Author:      Your Name
 * License:     GPL2
 */

// Betöltjük a szükséges fájlokat
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
require_once plugin_dir_path( __FILE__ ) . 'src/Plugin.php';

// Aktiváláskor beállítjuk a plugin szükséges dolgait
register_activation_hook( __FILE__, 'vw_stripe_subscription_activate' );
function vw_stripe_subscription_activate() {
    // Itt helyezheted el a telepítési műveleteket, ha szükséges
}

// Deaktiváláskor törölhetjük a beállításokat
register_deactivation_hook( __FILE__, 'vw_stripe_subscription_deactivate' );
function vw_stripe_subscription_deactivate() {
    // Itt végezheted el a plugin deaktiválási műveleteit
}

// Beállítjuk a plugin működését
add_action( 'init', ['\VwStripeSubscription\Plugin', 'init'] );
