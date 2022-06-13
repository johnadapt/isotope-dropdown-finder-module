<?php

/**
 * Bright Cloud Studio's Contao Package Basics
 *
 * Copyright (C) 2021 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/contao-package-basics
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/


/* Register Classes */
ClassLoader::addClasses(array
(
  //register classes here
  'IsoDropdownFilter\AddDropdownOptions' 		=> 'system/modules/isotope-dropdown-finder-module/library/IsoDropdownFilter/AddDropdownOptions.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_iso_attributedropdown'     => 'system/modules/isotope-dropdown-finder-module/templates/modules'
));