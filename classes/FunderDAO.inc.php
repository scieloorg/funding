<?php

/**
 * @file classes/FunderDAO.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.fundref
 * @class FunderDAO
 */

import('lib.pkp.classes.controlledVocab.ControlledVocabDAO');

define('CONTROLLED_VOCAB_FUNDER', 'submissionFunder');

class FunderDAO extends ControlledVocabDAO {
	
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * Build/fetch and return a controlled vocabulary for funders.
	 * @param $submissionId int
	 * @return ControlledVocab
	 */
	function build($submissionId) {
		return parent::build(CONTROLLED_VOCAB_FUNDER, ASSOC_TYPE_SUBMISSION, $submissionId);
	}
	
	/**
	 * Get funders for a submission.
	 * @param $submissionId int
	 * @return array
	 */
	function getById($submissionId) {
		$returner = array();		
		
		$funders = $this->build($submissionId);
		
		$funderEntryDao = DAORegistry::getDAO('FunderEntryDAO');
		$submissionFunders = $funderEntryDao->getByControlledVocabId($funders->getId());
		
		while ($funder = $submissionFunders->next()) {
			$returner[] = $funder;
		}
		
		return $returner;
	}	

	/**
	 * Get funders by id
	 * @param $funderId int
	 * @return array
	 */
	function getByFunderId($funderId, $submissionId) {
		$returner = array();
		
		$funders = $this->build($submissionId);
		
		$funderEntryDao = DAORegistry::getDAO('FunderEntryDAO');
		$submissionFunders = $funderEntryDao->getByControlledVocabId($funders->getId());
		
		$submissionFunders;
		
		
		while ($funder = $submissionFunders->next()) {
			
			
			$returner[] = $funder;
		}
		
		return $returner;
	}

	
}

?>
