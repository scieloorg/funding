<?php

/**
 * @file classes/FunderDAO.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.navigation
 * @class FunderDAO
 * Operations for retrieving and modifying navigation objects.
 */

import('lib.pkp.classes.db.DAO');
import('plugins.generic.fundRef.classes.Funder');

class FunderDAO extends DAO {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	
	function getById($funderItemId, $contextId = null) {
		$params = array((int) $funderItemId);
		
		$returner = "";
		
		return $returner;
	}
	


	
}

?>
