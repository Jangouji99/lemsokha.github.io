<?php

namespace App\Http\Livewire\Lang;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class LangComponent extends Component
{
    public $selectedLanguage;

    protected $languages = ['en', 'km'];

    public function mount()
    {
        // dd($this->selectedLanguage);

        $this->selectedLanguage = app()->getLocale();
    }

    public function render()
    {
        return view('livewire.lang.lang-component');
    }

    public function switchLanguage()
    {
        if (in_array($this->selectedLanguage, $this->languages)) {
            app()->setLocale($this->selectedLanguage);
            session()->put('locale', $this->selectedLanguage);
        }
    }
}