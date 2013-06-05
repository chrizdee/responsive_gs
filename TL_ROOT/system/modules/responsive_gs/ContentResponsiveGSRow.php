<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Extension to add responsive gs row content element
 *
 * @copyright  RSM. kommunikations-marketing GmbH 2013
 * @author     Christian Duell <duell@rsm.de>
 * @see        http://www.rsm.de
 * @package    responsive_gs
 * @licence    LGPL
 * @filesource
 */

class ContentResponsiveGSRow extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_responsive_gs_row';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### '.$GLOBALS['TL_LANG']['tl_content']['resgs_row'].': <strong>'.$this->responsiveGsRowType.'</strong> ###';
			
			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$this->Template->responsiveGsRowType = $this->responsiveGsRowType;
	}
}

?>