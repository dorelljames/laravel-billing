<?php namespace DorellJames\Billing\Gateways\Local\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Card extends Model
{
	use SoftDeletingTrait;
	protected $connection = 'billinglocal';
	protected $guarded = array('id');

	public function customer()
	{
		return $this->belongsTo('DorellJames\Billing\Gateways\Local\Models\Customer')->withTrashed();
	}
}
