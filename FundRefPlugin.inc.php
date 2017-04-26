<?php

/**
 * @file fundRefPlugin.inc.php
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class fundRefPlugin
 * @ingroup plugins_generic_fundRef
 * @brief fundRef plugin class
 *
 *
 */

import('lib.pkp.classes.plugins.GenericPlugin');
class fundRefPlugin extends GenericPlugin {

   function getName() {
        return 'fundRefPlugin';
    }

    function getDisplayName() {
        return "fundRef";
    }

    function getDescription() {
        return "Plugin for searching and saving funder name, funder id, and grant number";
    }
	
    function register($category, $path) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {
			
			import('plugins.generic.fundRef.classes.FunderDAO');
			$funderDao = new FunderDAO();
			DAORegistry::registerDAO('FunderDAO', $funderDao);			
			

			HookRegistry::register('Templates::Submission::SubmissionMetadataForm::AdditionalMetadata', array($this, 'metadataFieldEdit'));
			
			HookRegistry::register('LoadComponentHandler', array($this, 'setupGridHandler'));
				
        }
		return $success;
	}
	
	
	/**
	 * Permit requests to the Funder grid handler
	 * @param $hookName string The name of the hook being invoked
	 * @param $args array The parameters to the invoked hook
	 */
	function setupGridHandler($hookName, $params) {
		$component =& $params[0];
		if ($component == 'plugins.generic.fundRef.controllers.grid.FunderGridHandler') {
			import($component);
			FunderGridHandler::setPlugin($this);
			return true;
		}
		return false;
	}	
	
	
	/**
	 * Insert funder panel
	 */
	function metadataFieldEdit($hookName, $params) {
		$smarty =& $params[1];
		$output =& $params[2];
		
		$output .= $smarty->fetch($this->getTemplatePath() . 'metadataForm.tpl');
		return false;
	}	
	

	/**
	 * @copydoc Plugin::getTemplatePath()
	 */
	function getTemplatePath($inCore = false) {
		return parent::getTemplatePath($inCore) . 'templates/';
	}
	
   
}
?>