<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(200)
            ->create();

        User::query()
            ->inRandomOrder()
            ->limit(10)
            ->get()
            ->each(
                function (User $user) {
                    $project = Project::factory()->create(['created_by' => $user->id]);

                    Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);
            });

        // Project::query()
        //     ->inRandomOrder()
        //     ->limit(5)
        //     ->get()
        //     ->each(
        //         fn (Project $project) => Proposal::factory()
        //             ->create(['project_id' => $project->id])
        //     );
    }
}
