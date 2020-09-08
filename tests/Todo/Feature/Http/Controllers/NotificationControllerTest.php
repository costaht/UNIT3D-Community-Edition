<?php

namespace Tests\Todo\Feature\Http\Controllers;

use App\Models\User;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\NotificationController
 */
class NotificationControllerTest extends TestCase
{
    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $notification = Notification::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('notifications.destroy', ['id' => $notification->id]));

        $response->assertRedirect(withSuccess('Notification Deleted!'));
        $this->assertDeleted($notifications);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_all_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('notifications.destroyall'));

        $response->assertRedirect(withSuccess('All Notifications Deleted!'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function faceted_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('notifications.'));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('notifications.index'));

        $response->assertOk();
        $response->assertViewIs('notification.index');
        $response->assertViewHas('notifications');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $notification = Notification::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('notifications.show', ['id' => $notification->id]));

        $response->assertRedirect(withSuccess('Notification Marked As Read!'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $notification = Notification::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('notifications.update', ['id' => $notification->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors('Notification Does Not Exist!'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_all_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('notifications.updateall'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withSuccess('All Notifications Marked As Read!'));

        // TODO: perform additional assertions
    }

    // test cases...
}
