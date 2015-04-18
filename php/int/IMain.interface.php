<?php
/**
 * All have to be public in interface!!!
 */
interface IMain{
	
	public function __construct($get, $locale);
	
	/** Get template to render */
	public function getTemplate();
	
	/** Get array of values to echo in rendered page*/
	public function getRenderArray();
}