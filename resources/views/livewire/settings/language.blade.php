<?php

use Livewire\Volt\Component;

new class extends Component {
    public $language = "en";

    public function mount()
    {
        $this->language = session()->get("locale","en");
    }

    public function submit()
    {
        session()->put("locale", $this->language);
        
        return redirect()->route("settings.language")->with("set-language", __('settingsLang.LanguageChanged'));
    }
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('settingsLang.Language')" :subheading="__('settingsLang.ChangeLanguageInfo')">

        <flux:radio.group wire:model="language" :label="__('settingsLang.SelectLanguage')">
            <flux:radio value="en" :label="__('settingsLang.English')" />
            <flux:radio value="pl" :label="__('settingsLang.Polish')" />
        </flux:radio.group>

        <flux:button class="mt-3" wire:click="submit" variant="primary">
            {{ __('settingsLang.SaveLanguage') }}
        </flux:button>

        @session('set-language')
            <flux:text class="text-green-600 mt-3 text-sm">
                {{ $value }}
            </flux:text>
        @endsession

    </x-settings.layout>
</section>

