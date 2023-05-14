<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Infrastructure\Profile\Actions\UpdateProfileBioContract;
use Livewire\Component;

class ProfileForm extends Component implements HasForms
{

    use InteractsWithForms;

    public Model $profile;

    public string $uuid;

    public string|null $bio = null;

    protected function getFormSchema(): array
    {
        return [
            MarkdownEditor::make('bio'),
        ];
    }

    public function mount(Profile $profile): void
    {
        $this->profile = $profile;
        $this->uuid = $profile->uuid;
        $this->bio = $profile->bio;
    }

    public function submit(UpdateProfileBioContract $action): void
    {
        $this->validate();

        $action->handle(
            profile:$this->profile,
            bio:$this->bio,
        );
        // auth()->user()->profile()->update(['bio' => $this->bio]);
    }

    protected function rules(): array
    {
        return [
            'bio' => [
                'required',
                'nullable',
            ],
        ];
    }

    public function render()
    {
        return <<<'blade'
            <form class="space-y-8 divide-y divide-y-blue-gray-200" wire:submit.prevent="submit">
                {{ $this->form }}
                <div class="mt-4 text-start">
                    <button
                        type="submit"
                        class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    >
                        Save
                    </button>
                </div>
            </form>
        blade;
        // return view('livewire.profile.profile-form');
    }
}