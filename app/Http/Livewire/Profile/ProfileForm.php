<?php

declare (strict_types = 1);

namespace App\Http\Livewire\Profile;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ProfileForm extends Component implements HasForms {

    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [
            MarkdownEditor::make('bio')->required(),
        ];
    }

    public function render(): string {
        return <<<'blade'
            <div>
                <form wire:submit.prevent="submit" class="mt-3">
                    {{ $this->form }}

                    coba implements form fillament

                    <button
                        type="submit"
                        class="mt-2 bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    >
                        Save
                    </button>
                </form>
            </div>
        blade;
    }
}