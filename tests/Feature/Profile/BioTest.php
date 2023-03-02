<?php

use App\Http\Livewire\Profile\ProfileForm;
use App\Models\Profile;
use function Pest\Laravel\get;
use JustSteveKing\StatusCode\Http;
use Livewire\Livewire;

it('loads the profile form', function () {
    $profile = Profile::factory()->create();

    auth()->loginUsingId($profile->owner->id);

    get(route('profilesbio:show'))
        ->assertStatus(Http::OK)
        ->assertSee('Bio')
        ->assertSee('Save');
})->group('profile');

it('allow the user to update their bio on their profile', function (string $string) {

    $profile = Profile::factory()->create();

    auth()->loginUsingId($profile->owner->id);

    expect(
        $profile->bio
    )->toBeString();

    Livewire::test(ProfileForm::class, ['user' => $profile->owner])
        ->set('bio', $string)
        ->call('submit')
        ->assertHasNoErrors();

    expect($profile->refresh())->bio->toEqual($string);

})->with('strings')->group('profile');