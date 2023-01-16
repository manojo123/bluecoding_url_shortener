<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UrlShortener extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($url) {
            if(!$url?->is_factory) {
                $url->setTitle();
                $url->setShortenedUrl();
            }
        });
    }

    protected function setTitle()
    {
        // get title from url
        $html = file_get_contents($this->original_url);
        // use regex to get title
        preg_match('/<title>(.+)<\/title>/', $html, $matches);

        $this->title = $matches[1];
    }

    protected function setShortenedUrl()
    {
        $this->shortened_url = Str::random(6);
        // self::getMinimalHash();
    }

    public function getMinimalHash($number = 1)
    {
        $this->shortened_url = Str::random($number);
        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // $charactersLength = strlen($characters);

        // if (pow($charactersLength, $number) >= UrlShortener::count()) {
        //     self::getMinimalHash($number + 1);
        // }

        // do {
        //     $this->shortened_url = '';
        //     for ($i = 0; $i < $length; $i++) {
        //         $this->shortened_url .= $characters[rand(0, $charactersLength - 1)];
        //     }
        // } while (!UrlSHortener::where('shortened_url', $this->shortened_url)->exists());

    }

}
