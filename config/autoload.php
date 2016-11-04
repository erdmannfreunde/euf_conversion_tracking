<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'EuF_ConversionTracking',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'EuF_ConversionTracking\ModuleConversionTracking' => 'system/modules/euf_conversion_tracking/modules/ModuleConversionTracking.php',
));
