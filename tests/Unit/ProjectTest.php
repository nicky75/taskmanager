<?php

namespace Tests\Unit;

use App\Http\Controllers\ProjectController;
use Tests\TestCase;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProject()
    {

        $response = $this->post('/register', ['name' => 'Test User', 'email' => 'admin@admin.com', 'password' => '12345678', 'password_confirmation' => '12345678']);
        $response->assertStatus(302);

        $response = $this->post('/login', ['email' => 'admin@admin.com', 'password' => '12345678']);
        $response->assertStatus(302);

        if (Auth::check()) {
            $user = Auth::user();
            echo $user->id;
            $response = $this->post('/deleteUser',['id' => $user->id]);
            $response->assertStatus(302);

            $response = $this->post('/project', ['name' => 'Test Project']);
            $response->assertStatus(302);
    
            $project = Project::orderBy('id')
                ->first();
    
            $response = $this->post('/task', ['name' => 'Test Task', 'project_id' => $project->id, 'status' => 0]);
            $response->assertStatus(302);
            
            $response = $this->delete('/project/' . $project->id);
            $response->assertStatus(302);
        } else {
            // do nothing
        }



    }
}
