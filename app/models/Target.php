<?php
class Target extends Eloquent {

	public $cont = 0;

	public function mailings()
	{
		return $this->hasMany('Mailing');
	}

	public function importCSV($file)
	{
		$destination = 'uploads/';
		$file->move($destination, $file->getClientOriginalName());
		$csv = new parseCSV();
		$csv->auto($destination . $file->getClientOriginalName());

		// There must be a Email field in CSV file
		if(!in_array('Email', $csv->titles))
			throw new Exception("Email field not found", 1);
		
		foreach($csv->data as $data)
		{
			$this->cont++;
			$mailing = new Mailing();
			$mailing->target()->associate($this);
			$mailing->email = $data['Email'];
			$mailing->save();
		}

		
	}
}