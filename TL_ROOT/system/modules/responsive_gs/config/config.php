<?php

/**
 * Contao Extension to add responsive gs css classes in the backend
 *
 * @copyright  RSM. kommunikations-marketing GmbH 2013
 * @author     Christian Duell <duell@rsm.de>
 * @see        http://www.rsm.de
 * @package    z_responsive_gs
 * @licence    LGPL
 * @filesource
 */

/* Hooks */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('ResponsiveGS', 'reparseContentElements'); 
$GLOBALS['TL_HOOKS']['generatePage'][] = array('LoadFramework', 'load');

/* Init new Content Elements */
$GLOBALS['TL_CTE']['includes']['responsive_gs_row'] = 'ContentResponsiveGSRow';


?>