<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $fillable = [
        'logo',
        'site_title',
        'email',
        'address',
        'contact_no',
        'mobile_no',
        'facebook_link',
        'facebook_group_link',
        'x_link',
        'instagram_link',
        'whatsapp_link',
        'linkedin_link',
        'youtube_link',
        'behance_link',
        'dribbble_link',
        'flickr_link',
    ];
}
