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
	function Funder() {
		parent::DataObject();
	}

	//
	// Get/set methods
	//
	
	function getId() {
		return $this->getData('id');
	}

	function setId($id) {
		return $this->setData('id', $id);
	}	
	
	function getFunderName() {
		return $this->getData('funderName');
	}

	function setFunderName($funderName) {
		return $this->setData('funderName', $funderName);
	}	

	
	function getFunderDoi() {
		return $this->getData('funderDoi');
	}

	function setFunderDoi($funderDoi) {
		return $this->setData('funderDoi', $funderDoi);
	}	
	
	
	function getFunderGrants() {
		return $this->getData('funderGrants');
	}

	function setFunderGrants($funderGrants) {
		return $this->setData('funderGrants', $funderGrants);
	}
	
	
}

?>
