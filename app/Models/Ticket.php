<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = ['name', 'email', 'subject', 'message', 'type', 'status'];

    public function setConnectionByType($type)
    {
        $map = [
            'Technical Issues' => 'technical',
            'Account & Billing' => 'account',
            'Product & Service' => 'product',
            'General Inquiry' => 'general',
            'Feedback & Suggestions' => 'feedback',
        ];

        $this->setConnection($map[$type] ?? 'mysql');
    }
}
