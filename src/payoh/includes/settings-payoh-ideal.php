<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for Payoh IDeal Gateway.
 */
return array(
	'payment_configuration' => array(
			'title'       => __( 'Payment Configuration', PAYOH_IDEAL_TEXT_DOMAIN ),
			'type'        => 'title',
			'description' => '',
	),
	WC_Gateway_Payoh_Ideal::ENABLED => array(
		'title'   => __( 'Enable/Disable', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Payoh IDeal payment', PAYOH_IDEAL_TEXT_DOMAIN ),
		'default' => 'no'
	),
	WC_Gateway_Payoh_Ideal::TITLE => array(
		'title'       => __( 'Title', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'IDeal', PAYOH_IDEAL_TEXT_DOMAIN ),
		'desc_tip'    => true,
	),
	WC_Gateway_Payoh_Ideal::DESCRIPTION => array(
		'title'       => __( 'Description', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'You will be redirect to payment page after you submit order.', PAYOH_IDEAL_TEXT_DOMAIN )
	),
	WC_Gateway_Payoh_Ideal::DEBUG => array(
		'title'       => __( 'Debug Log', 'woocommerce' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable logging', 'woocommerce' ),
		'default'     => 'no',
		'description' => sprintf( __( 'Log Payoh events, such as notification requests, inside <code>%s</code>', PAYOH_IDEAL_TEXT_DOMAIN ), wc_get_log_file_path( 'payoh' ) )
	)
);
