<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('settingsLang.Appearance')" :subheading=" __('settingsLang.UpdateAppearanceSettings')">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun">{{ __('settingsLang.Light') }}</flux:radio>
            <flux:radio value="dark" icon="moon">{{ __('settingsLang.Dark') }}</flux:radio>
            <flux:radio value="system" icon="computer-desktop">{{ __('settingsLang.System') }}</flux:radio>
        </flux:radio.group>
    </x-settings.layout>
</section>
