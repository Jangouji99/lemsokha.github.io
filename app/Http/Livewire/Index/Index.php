<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;

class Index extends Component
{

    public $selectedLanguage;

    protected $languages = ['en', 'km'];

    public function mount()
    {
        $this->selectedLanguage = app()->getLocale();
    }


    public function render()
    {
        return view('livewire.index.index');
    }

    public function switchLanguage()
    {
        if (in_array($this->selectedLanguage, $this->languages)) {
            app()->setLocale($this->selectedLanguage);
            session()->put('locale', $this->selectedLanguage);
        }
    }
}