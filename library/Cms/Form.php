<?php

class Cms_Form extends Zend_Form {
	
    protected static $INPUTELEMENTDECORATOR = array(                 
        'ViewHelper',
        'Errors',
        array('Label',       array('class' => 'form-label')),
        array('Description', array('tag' => 'p', 'class' => 'description',  'placement' => 'PREPEND')), 
        array('HtmlTag',     array('class' => 'form-element')),
                
    );
    
	public function init() {		
				
	}
    
    public function _addElementHash() {
        
        $element = new Zend_Form_Element_Hash('hash');
		$this->addElement($element);
        
    }
	
	
}