<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $table = 'magazines';
    protected $fillable = [
        'issue_no', 'emag_slug', 'cover_pic', 'pdf_url', 'issue_summary'
    ];
}
