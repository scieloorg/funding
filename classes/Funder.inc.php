<?php

/**
 * @file classes/Funder.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.fundRef
 * @class Funder
 * Data object representing a static page.
 */

class Funder extends DataObject {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	//
	// Get/set methods
	//
	
	/**
	 * Get context ID
	 * @return string
	 */
	function getContextId(){
		return $this->getData('contextId');
	}
	/**
	 * Set context ID
	 * @param $contextId int
	 */
	function setContextId($contextId) {
		return $this->setData('contextId', $contextId);
	}
	
	function getFunderName() {
		return $this->getData('funderName');
	}

	function setFunderName($funderName) {
		return $this->setData('funderName', $funderName);
	}	

	
	function getFunderId() {
		return $this->getData('funderId');
	}

	function setFunderId($funderId) {
		return $this->setData('funderId', $funderId);
	}	
	
	
	function getFunderGrants() {
		return $this->getData('funderGrants');
	}

	function setFunderGrants($funderGrants) {
		return $this->setData('funderGrants', $funderGrants);
	}
	
	
}

?>
