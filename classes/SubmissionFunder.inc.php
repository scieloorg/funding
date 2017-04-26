<?php

/**
 * @file classes/SubmissionFunder.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SubmissionFunder
 * @ingroup submission
 * @see FunderEntryDAO
 *
 * @brief Basic class describing a Submission Funder
 */

import('lib.pkp.classes.controlledVocab.ControlledVocabEntry');

class SubmissionFunder extends ControlledVocabEntry {
	//
	// Get/set methods
	//

	/**
	 * Get the funder name
	 * @return string
	 */
	function getFunderName() {
		return $this->getData('submissionFunderName');
	}

	/**
	 * Set the funder name
	 * @param funder name string
	 */
	function setFunderName($funderName) {
		$this->setData('submissionFunderName', $funderName);
	}
	
	/**
	 * Get the funder id
	 * @return string
	 */
	function getFunderIdentifier() {
		return $this->getData('submissionFunderIdentifier');
	}

	/**
	 * Set the funder id
	 * @param funder id string
	 */
	function setFunderIdentifier($funderIdentifier) {
		$this->setData('submissionFunderIdentifier', $funderIdentifier);
	}

	/**
	 * Get the funder grant
	 * @return string
	 */
	function getFunderGrants() {
		return $this->getData('submissionFunderGrants');
	}

	/**
	 * Set the funder grant
	 * @param funder grant string
	 */
	function setFunderGrants($funderGrants) {
		$this->setData('submissionFunderGrants', $funderGrants);
	}	
	
}
?>
