<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handles responses from Payoh Sofort Notification.
 */
class WC_Gateway_Payoh_Sofort_Notif_Handler extends WC_Gateway_Payoh_Notif_Handler {
	/**
	 * Constructor.
	 */
	public function __construct( $gateway ) {
		add_action( 'woocommerce_api_wc_gateway_payoh_sofort', array( $this, 'check_response' ) );
		add_action( 'valid-payoh-sofort-notif-request', array( $this, 'valid_response' ) );
		$this->gateway = $gateway;
	}

	/**
	 * Check for Notification IPN Response.
	 */
	public function check_response() {
		$orderId = $this->isGet() ? $_GET['response_wkToken'] : $_POST['response_wkToken'];
		$this->order = wc_get_order($orderId);
		if(!$this->order){
			wp_die( 'Payoh notification Request Failure. No Order Found!', 'Payoh Notification', array( 'response' => 500 ) );
		}
		WC_Gateway_Payoh_Sofort::log( 'Found order #' . $this->order->id );
		WC_Gateway_Payoh::log( 'GET: ' . print_r($_GET, true));
		WC_Gateway_Payoh::log( 'POST: ' . print_r($_POST, true));

		if($this->isGet()) {
			if ($_GET['response_code'] == "2002") {
				wp_redirect(esc_url_raw($this->order->get_cancel_order_url_raw() )) ;
				exit;
			} else {
				wp_redirect(esc_url_raw( $this->gateway->get_return_url( $this->order ))) ;
				exit;
			}
		}
		elseif ( ! empty( $_POST ) && $this->validate_notif( $_POST['response_code']) ) {
			do_action( 'valid-payoh-sofort-notif-request', $this->order );
			exit;
		}

		wp_die( 'Payoh notification Request Failure.', 'Payoh Notification', array( 'response' => 500 ) );
	}
}
