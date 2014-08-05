<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Beinfopage
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'beinfopage' => 'system/modules/be_infopage/beinfopage.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_infopage' => 'system/modules/be_infopage/templates',
));
