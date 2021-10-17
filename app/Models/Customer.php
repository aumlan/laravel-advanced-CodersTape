<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * function to Format the Data for Display in UI
     */
    public function formatData()
    {
        return [
            'User ID: ' => $this->user_id,
            'Name: ' => $this->name,
            'Email: ' => $this->user->email,
            'Status: ' => $this->active,
            'Creation Time: ' => $this->created_at->diffForHumans(),
        ];
    }
}
