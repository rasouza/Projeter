<?php
class Mailing extends Eloquent {
	
	protected $fillable = array('target_id', 'email');
	public $timestamps = false;

	public function target()
	{
		return $this->belongsTo('Target');
	}
}