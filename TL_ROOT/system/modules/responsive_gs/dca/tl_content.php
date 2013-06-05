<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

// Modify palette
$GLOBALS['TL_DCA']['tl_content']['palettes']['responsive_gs_row'] = '{type_legend},type,responsiveGsRowType;{expert_legend:hide},cssID';

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $palette => $value)
{
  if ($palette !== 'responsive_gs_row')
  {
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$palette] = str_replace(
  		'{type_legend},type', 
  		'{type_legend},gridClass,type', 
  		$value
  	);
  }
}

// Add field configuration
$GLOBALS['TL_DCA']['tl_content']['fields']['gridClass'] = array(
   'label'      => &$GLOBALS['TL_LANG']['tl_content']['resgs_grid'],
   'exclude'   	=> true,
   'inputType'  => 'select',
   'options'	=> array(  ''=>'keine '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_1'=>'1 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
   							          'col span_2'=>'2 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_3'=>'3 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_4'=>'4 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_5'=>'5 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_6'=>'6 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_7'=>'7 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_8'=>'8 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_9'=>'9 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_10'=>'10 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_11'=>'11 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col'],
                          'col span_12'=>'12 '.$GLOBALS['TL_LANG']['tl_content']['rspgs_col']),
   'eval'   	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['responsiveGsRowType'] = array(
   'label'      => &$GLOBALS['TL_LANG']['tl_content']['rsgs_type'],
   'exclude'    => true,
   'inputType'  => 'select',
   'options'  => array( 'start'=>'Start',
                        'end'=>'Ende'),
   'eval'     => array('tl_class'=>'w50')
);




?>