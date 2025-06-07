<x-layouts.app :title="__('Contact')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Contact') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Send an email to the specified address') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <livewire:contact-form />
</x-layouts.app>