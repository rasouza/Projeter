<?php

require app_path().'/models/Target.php';
require app_path().'/models/Mailing.php';

class ImportCSV
{
	public function fire($job, $data) 
	{	

		$file = Config::get('projeter.upload_path') . $data['file'];
		Log::info("Starting to add {$data['target']} to database (File: $file)");

		$target = new Target();
		$target->name = $data['target'];
		$target->save();

		$reader = new \EasyCSV\Reader($file);

		Log::info("Reading {$file} (file_exists: " . file_exists($file) . ")";

		// There must be a Email field in CSV file
		/*if(!in_array('Email', $reader->getHeaders() ))
			throw new Exception("Email field not found", 1);*/
		
		while ($row = $reader->getRow())
		{
			Log::info("Adding {$row['Email']} to the target {$data['target']}");
			$mailing = new Mailing();
			$mailing->target()->associate($target);
			$mailing->email = $row['Email'];
			$mailing->save();
		}

		Log::info("Mailing list {$target->name} added to database");

		$job->delete();
	}
}