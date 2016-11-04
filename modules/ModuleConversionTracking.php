<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   EuF-Conversion-Tracking
 * @author    Dennis Erdmann
 * @license   LGPL
 * @copyright Erdmann & Freunde
 */


/**
 * Namespace
 */
namespace EuF_ConversionTracking;


/**
 * Class ModuleConversionTRacking
 */

class ModuleConversionTracking extends \Module
{
	/**
	 * Generate the module
	 */
	protected function compile()
	{

		// Script in <head> or before </body>
		switch ($this->conversion_tracking_placement) {
			case 'start':
				$GLOBALS['TL_HEAD'][] = $this->conversion_tracking_html;
				break;
			case 'end':
				$GLOBALS['TL_BODY'][] = $this->conversion_tracking_html;
				break;
		}
	}
   /**
	 * Do not show the module if no calendar has been selected
	 *
	 * @return string
	 */
	public function generate()
	{
       if (TL_MODE == 'BE')
		{
			/** @var \BackendTemplate|object $objTemplate */
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['tl_module']['conversion_tracking_html_legend']) . ' ###';
			$objTemplate->title = $this->name;
			$objTemplate->id = $this->id;
			$objTemplate->link = $GLOBALS['TL_LANG']['FMD']['euf_conversion_tracking'][0];
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

    return parent::generate();
	}
}
