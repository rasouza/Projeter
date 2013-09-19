<?php
class Target extends Eloquent {

	public function mailings()
	{
		return $this->hasMany('Mailing');
	}

	public function importCSV($name, $file)
	{
		$file->move(Config::get('projeter.upload_path'), $file->getClientOriginalName());
		Queue::push('ImportCSV', array(
				'file' => $file->getClientOriginalName(),
				'target' => $name
		));
	}

	public function test()
	{
		
	}
}