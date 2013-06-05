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

class ResponsiveGS extends Frontend
{
	public function reparseContentElements(Database_Result $objRow, $strBuffer) 
	{ 
    	$strClass = $this->findContentElement($objRow->type); 
        $objElement = new $strClass($objRow);
        $cssID = $objElement->cssID;
        $objElement->cssID = array($cssID[0], $cssID[1].' '.$objElement->gridClass);
        $strBuffer = $objElement->generate();
    	return $strBuffer; 
	} 
}

?>