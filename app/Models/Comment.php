<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property $id
 * @property $user_id
 * @property $parent_id
 * @property $comment
 * @property $commentable_id
 * @property $commentable_type
 * @property $comment_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comment extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'parent_id' => 'required',
		'commentable_id' => 'required',
		'commentable_type' => 'required',
		'comment_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','parent_id','comment','commentable_id','commentable_type','comment_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
