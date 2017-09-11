<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for Payoh Gateway.
 */
return array(
	'api_configuration' => array(
		'title'       => __( 'API Configuration', PAYOH_TEXT_DOMAIN ),
		'type'        => 'title',
		'description' => ''
	),
	WC_Gateway_Payoh::API_LOGIN => array(
		'title'       => __( 'Production Api login', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => '',
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::API_PASSWORD => array(
		'title'       => __( 'Production Api password', PAYOH_TEXT_DOMAIN),
		'type'        => 'password',
		'description' => '',
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::WALLET_MERCHANT_ID => array(
		'title'       => __( 'Your wallet Id', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => 'It\'s the wallet where your payments are credited.You must to create it in BO Payoh',
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::DIRECTKIT_URL => array(
		'title'       => __( 'Directkit url', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => 'JSON2 only! E.g: https://ws.payoh.fr/mb/xxx/yyy/directkitjson2/service.asmx',
		'default'     => '',
		'desc_tip'    => false,
		'placeholder' => ''
	),	
	WC_Gateway_Payoh::WEBKIT_URL => array(
		'title'       => __( 'Webkit url', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => 'E.g: https://m.payoh.fr/mb/xxx/yyy/',
		'default'     => '',
		'desc_tip'    => false,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::DIRECTKIT_URL_TEST => array(
		'title'       => __( 'Directkit url test', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => 'JSON2 only! E.g: https://ws.payoh.fr/mb/xxx/dev/directkitjson2/service.asmx',
		'default'     => '',
		'desc_tip'    => false,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::WEBKIT_URL_TEST => array(
		'title'       => __( 'Webkit url test', PAYOH_TEXT_DOMAIN),
		'type'        => 'text',
		'description' => 'E.g: https://m.payoh.fr/mb/xxx/dev/',
		'default'     => '',
		'desc_tip'    => false,
		'placeholder' => ''
	),
	WC_Gateway_Payoh::IS_TEST_MODE => array(
		'title'       => __( 'Enable test mode', PAYOH_TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable test mode', PAYOH_TEXT_DOMAIN ),
		'default'     => 'no',
		'description' =>  __( 'Call requests in test API Endpoint.', PAYOH_TEXT_DOMAIN)
	),
	'payment_configuration' => array(
		'title'       => __( 'Payment Configuration', PAYOH_TEXT_DOMAIN ),
		'type'        => 'title',
		'description' => ''
	),
	WC_Gateway_Payoh::ENABLED => array(
		'title'   => __( 'Enable/Disable', 'woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Payoh payment', PAYOH_TEXT_DOMAIN ),
		'default' => 'no'
	),
	WC_Gateway_Payoh::TITLE => array(
		'title'       => __( 'Title', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'Credit Card', PAYOH_TEXT_DOMAIN ),
		'desc_tip'    => true
	),
	WC_Gateway_Payoh::DESCRIPTION => array(
		'title'       => __( 'Description', 'woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce' ),
		'default'     => __( 'You will be redirect to payment page after you submit order.', PAYOH_TEXT_DOMAIN )
	),
	WC_Gateway_Payoh::CSS_URL => array(
		'title'       => __( 'Css url', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Optionally enter the url of the page style you wish to use.', PAYOH_TEXT_DOMAIN ),
		'default'     => 'https://www.payoh.fr/mercanet_lw.css',
		'desc_tip'    => true,
		'placeholder' => __( 'Optional', 'woocommerce' )
	),
	WC_Gateway_Payoh::ONECLIC_ENABLED => array(
		'title'       => __( 'Enable Oneclic', PAYOH_TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'Display checkbox for allow customer to save his credit card.', PAYOH_TEXT_DOMAIN ),
		'label'   	  => __( 'Enable Oneclic', PAYOH_TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'    => true
	),
	WC_Gateway_Payoh::DEBUG => array(
		'title'       => __( 'Debug Log', 'woocommerce' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable logging', 'woocommerce' ),
		'default'     => 'no',
		'description' => sprintf( __( 'Log Payoh events, such as notification requests, inside <code>%s</code>', PAYOH_TEXT_DOMAIN ), wc_get_log_file_path( 'payoh' ) )
	)
);
