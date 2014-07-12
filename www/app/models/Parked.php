<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Parked extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parked';
	

	/**
	 * Get location.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function location()
	{
		return $this->belongsTo('Location');
	}

}
