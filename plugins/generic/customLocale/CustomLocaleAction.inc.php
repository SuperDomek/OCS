<?php

/**
 * @file CustomLocaleAction.inc.php
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.customLocaleAction
 * @class CustomLocaleAction
 *
 * Perform various tasks related to customization of locale strings.
 *
 * $Id$
 */

class CustomLocaleAction {

	function getLocaleFiles($locale) {
		if (!AppLocale::isLocaleValid($locale)) return null;

		$localeFiles =& AppLocale::makeComponentMap($locale);
		$plugins =& PluginRegistry::loadAllPlugins();
		foreach (array_keys($plugins) as $key) {
			$plugin =& $plugins[$key];
			$localeFile = $plugin->getLocaleFilename($locale);
			if (!empty($localeFile)) $localeFiles[] = $localeFile;
			unset($plugin);
		}
		return $localeFiles;
	}

	function isLocaleFile($locale, $filename) {
		if (in_array($filename, CustomLocaleAction::getLocaleFiles($locale))) return true;
		return false;
	}

}
?>
