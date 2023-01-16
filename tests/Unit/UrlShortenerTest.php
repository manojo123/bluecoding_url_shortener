<?php

namespace Tests\Unit;

use App\Models\UrlShortener;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;

class UrlShortenerTest extends TestCase
{
    Use RefreshDatabase;
    /** @test */
    public function it_can_make_fake_url()
    {
        $url = UrlShortener::factory()->create();

        $this->assertNotEquals($url->original_url, $url->shortened_url);
    }

    /** @test */
    public function it_can_get_titles_from_url()
    {
        $url = UrlShortener::factory()->create([
            'original_url' => 'https://www.google.com'
        ]);

        $this->assertEquals('Google', $url->title);

    }
}
