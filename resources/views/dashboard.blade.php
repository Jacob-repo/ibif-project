<x-layouts.app :title="__('sidebarLang.Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative mb-6 w-full">
                <flux:heading size="xl" level="1">{{ __('settingsLang.HelloUser') }}{{$name}}</flux:heading>
                <flux:subheading size="lg" class="mb-6">{{ __('settingsLang.HelloUserInfo') }}</flux:subheading>
                <flux:separator variant="subtle" class="mb-6"/>
                {!! $content !!}
            </div>
        </div>
    </div>

</x-layouts.app>

