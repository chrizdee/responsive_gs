<?php

/**
 * Contao Extension to add responsive gs css classes in the backend
 *
 * @copyright  RSM. kommunikations-marketing GmbH 2013
 * @author     Christian Duell <duell@rsm.de>
 * @see        http://www.rsm.de
 * @package    responsive_gs
 * @licence    LGPL
 * @filesource
 */

class LoadFramework extends PageRegular
{
	public function load($objPage, $objLayout, $objPageRegular)
	{ 
    	$GLOBALS['TL_CSS'][] = 'system/modules/responsive_gs/html/reset.css';
    	$GLOBALS['TL_CSS'][] = 'system/modules/responsive_gs/html/responsive-gs-12col.css';
    	$GLOBALS['TL_CSS'][] = 'system/modules/responsive_gs/html/ie.css';
	} 
}

?>