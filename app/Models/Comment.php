<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'announcement_id',
        'user_id',
        'body',

        // commento
        'status', // Aggiunta della colonna 'status'
    ];

    
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
// commento
    public function markAsPending()
    {
        $this->status = 'pending';
        $this->save();
    }

    public function markAsAccepted()
    {
        $this->status = 'accepted';
        $this->save();
    }

    public function markAsRejected()
    {
        $this->status = 'rejected';
        $this->save();
    }
// commento
}
