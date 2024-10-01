<?php

namespace Tests\Unit;

use Tests\TestCase; // Change this to extend Laravel's TestCase
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JopTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     use RefreshDatabase;
    public function testJobBelongsToEmployer(): void
    {
        // AAA -> Arrange, Act, Assert
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);
        // ($job->employer)->assertTrue($employer);
        $this->assertTrue($job->employer->is($employer));
    }

    public function testJobHaveTags(){
        $job = Job::factory()->create();
        $job->tag('Frontend');

        $this->assertCount(1,$job->tags);
    }
}
