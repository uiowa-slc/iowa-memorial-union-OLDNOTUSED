<?php
/**
 * Defines the Minisite page type
 */
class StudentsHome extends TypeA {

   
   public static $db = array(
	
	);
	

 static $has_one = array(
   
      'EventImage' => 'Image',
	  
	  
	  );
	  

function getCMSFields() {
	$fields = parent::getCMSFields();

	$fields->addFieldToTab('Root.Content.MainFeature', new ImageField('EventImage', 'Main Feature Image - 422 x 351 pixels', null, null, null, $this->ClassName));
	
 
	$fields->removeByName('Content2'); 
	$fields->removeByName('Content3'); 
	$fields->removeByName('Content4');	return $fields;
	
   }}

class StudentsHome_Controller extends Page_Controller {

function init() {
		parent::init();
		Requirements::themedCSS("StudentsHome");
		Requirements::themedCSS("thickbox");
		//Requirements::customxsaxas("test");
		
		
	
	
	
	}
 
}
 
?>