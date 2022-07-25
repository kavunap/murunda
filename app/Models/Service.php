<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\User;

/**
 * Class Service
 *
 * @property $id
 * @property $days
 * @property $start_date
 * @property $request_type
 * @property $purpose
 * @property $results
 * @property $destination
 * @property $return_date
 * @property $m_transport
 * @property $daily_amount
 * @property $total_amount
 * @property $successor
 * @property $status
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Service extends Model
{
    
    static $rules = [
		'days' => 'required|integer',
		'start_date' => 'required|date',
		'request_type' => 'required',
		// 'purpose' => 'required',
		// 'results' => 'required',
		// 'destination' => 'required',
		// 'return_date' => 'required',
		// 'm_transport' => 'required',
		// 'daily_amount' => 'required',
		// 'total_amount' => 'required',
		'successor' => 'required',
		// 'status' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['days','start_date','request_type','purpose','results','destination','return_date','m_transport','daily_amount','total_amount','successor','status','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    } 

}
