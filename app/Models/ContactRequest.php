<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $table = 'contact_requests';

    // Allow quick demo seeding by mass assigning all visible columns.
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'message',
        'created_at',
        'updated_at',
    ];
}
