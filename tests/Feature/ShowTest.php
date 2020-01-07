<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Show;
use App\Movie;

class ShowTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetShow()
    {
        
        $movie = factory(Movie::class)->create();
        $show = factory(Show::class)->create([
            'id_movie' => $movie->id
        ]);

        $response = $this->json('GET','/api/show');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'id', 'movie' => [
                        '*' => [
                            'id', 'name', 'description', 'genre', 'director'
                        ]
                    ],
                    'date_start', 'date_end', 'site', 'address', 'capacity'
                ]);

        $this->assertCount(1, $response->json()['movie']);
    }
}
