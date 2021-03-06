<?php

class Iban{

	/**
     * ID as defined by Payoh
     * @var string
     */
    public $ID;
	
	/**
     * STATUS {0,5,6,8,9}
     * @var string
     */
    public $STATUS;
    
    /**
     * STATUS {0,5,6,8,9}
     * @var string
     */
    public $S;
	
	/**
     * IBAN number
     * @var string
     */
    public $IBAN;
	
	/**
     * BIC or swift code
     * @var string
     */
    public $BIC;
	
	/**
     * DOM1 address line 1
     * @var string
     */
    public $DOM1;
    
	/**
     * DOM2 address line 2
     * @var string
     */
    public $DOM2;
    
    /**
     * HOLDER of account
     * @var string
     */
    public $HOLDER;
	
	function __construct($node) {
		$this->ID = $node->ID;
		if (isset($node->STATUS))
			$this->STATUS = $node->STATUS;
		if (isset($node->S))
			$this->STATUS = $node->S;
		if (isset($node->DATA))
			$this->IBAN = $node->DATA;
		if (isset($node->SWIFT))
			$this->BIC = $node->SWIFT;
		if (isset($node->HOLDER))
			$this->HOLDER = $node->HOLDER;
	}
	
}

?>