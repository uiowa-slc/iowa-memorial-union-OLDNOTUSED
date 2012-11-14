<?php
 
class EventCategoryHolder extends Page {
 
   // create a Title database field for Category
   static $db = array(

   );

   
   
function getCMSFields() {
   $fields = parent::getCMSFields();
 	
	$fields->removeFieldFromTab("Root.Content","Main");
	$fields->removeFieldFromTab("Root.Content","Metadata");
 	$fields->addFieldToTab("Root.Content.ManageCategories", new TextField("Title", "Title"));
 
 	 
      // Setup a table field to allow editing of categories within the system
      $categoryTable = new TableField('EventCategory', 'EventCategory', EventCategory::$field_names, EventCategory::$field_types);
	
 
      // Set permissions of the table to add categories only. Deleting is disabled because
      // if you delete one currently in use, there is no functionality to ensure the related
      // data is deleted as well.
      //$categoryTable->setPermissions(array('add'));
 
      // Add the table field to the tab
      $fields->addFieldToTab('Root.Content.ManageCategories', $categoryTable);  
	  return $fields;
	
   }
   
}

class EventCategoryHolder_Controller extends Page_Controller {
	
	
}

 
?>