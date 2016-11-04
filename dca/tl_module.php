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



 /*
  * Palettes
  */
 $GLOBALS['TL_DCA']['tl_module']['palettes']['euf_conversion_tracking'] = '
    {title_legend},name,type;
    {conversion_tracking_html_legend:hide},conversion_tracking_html;
    {conversion_tracking_settings_legend:hide},conversion_tracking_placement;
    ';


 /*
  * Fields
  */
$GLOBALS['TL_DCA']['tl_module']['fields']['conversion_tracking_html'] = array (
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['conversion_tracking_html'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('allowHtml'=>true,'preserveTags'=>true, 'decodeEntities'	=> false, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
    'explanation'             => 'insertTags',
    'sql'                     => "text NULL"
  );

$GLOBALS['TL_DCA']['tl_module']['fields']['conversion_tracking_placement'] = array (
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['conversion_tracking_placement'],
    'default'                 => 'onLeave',
    'exclude'                 => true,
    'inputType'               => 'radio',
    'options'                 => array('start', 'end'),
    'eval'                    => array(
								'tl_class'=>'long', 
								'mandatory'=>true), 
    'reference'               => &$GLOBALS['TL_LANG']['MSC'],
    'sql'                     => "varchar(10) NOT NULL default ''"
  );
