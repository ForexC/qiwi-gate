<?php

namespace FintechFab\QiwiGate\Models;

use Eloquent;

/**
 * @property integer $id
 * @property string  $username
 * @property string  $password
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $callback_url
 * @property string  $email
 * @property string  $key
 *
 * @method static Merchant find()
 */
class Merchant extends Eloquent
{
	protected $fillable = array('username', 'password', 'callback_url', 'email', 'key');
	protected $table = 'merchants';
	protected $connection = 'ff-qiwi-gate';

	public function bill()
	{
		return $this->hasMany('FintechFab\QiwiGate\Models\Bill');
	}
}