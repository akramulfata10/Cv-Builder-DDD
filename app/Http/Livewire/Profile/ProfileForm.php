<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use App\Models\User;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ProfileForm extends Component implements HasForms {

    use InteractsWithForms;

    public string $uuid;

    public string | null $bio = null;

    protected function getFormSchema(): array
    {
        return [
            MarkdownEditor::make('bio'),
        ];
    }

    public function mount(User $user): void {
        $this->uuid = $user->profile->uuid;
        $this->bio = $user->profile->bio;
    }

    public function submit(): void {
        $this->validate();
        Profile::query()->where('uuid', $this->uuid)->update(['bio' => $this->bio]);
    }

    protected function rules(): array{
        return [
            'bio' => [
                'nullable',
                'required',
            ],
        ];
    }

    public function render() {
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