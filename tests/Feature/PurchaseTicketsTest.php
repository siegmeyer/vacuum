<?php

namespace Tests\Feature;

use App\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigration;

class FormsTest extends \Tests\TestCase
{
	
	//use RefreshDatabase;

	/** @test */
	public function user_can_create_a_form()
	{

		// Arrange
		// Make a user
		$user = factory(\App\User::class)->create();

		// Act
		// Create a form
		$response = $this->actingAs($user)->post('/forms', [
			'user_id' => $user->id,
			'name' => 'the firsts form'
		]);

		//dd($user->forms);
		// Assert
		// Make sure we get the created response status code
		$response->assertStatus(201);

		// Make sure a form exists for this user
		$this->assertTrue($user->forms->contains(function($form){
			return $form->name == 'the firsts form';
		}));
	}
}