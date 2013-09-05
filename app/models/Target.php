<?php
class Target extends Eloquent {

	public function mailings()
	{
		return $this->hasMany('Mailing');
	}

	public function importCSV($file)
	{
		
	}
}