<x-layouts.app :title="__('Admin Dashboard')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Hello Admin') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Welcome to the admin panel!') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    @session('success')
        <flux:text class="text-green-600 mt-3 text-sm">
            {{ $value }}
        </flux:text>
    @endsession
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl mt-3">
        <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
            <div class="flex justify-between gap-4 p-4">
                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                    <h2 class="text-lg font-bold">Users</h2>
                    <p class="text-2xl font-semibold">{{ \App\Models\User::count() }}</p>
                </div>
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                    <h2 class="text-lg font-bold">Posts</h2>
                    <p class="text-2xl font-semibold">{{ \App\Models\Post::count() }}</p>
                </div>
                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px] opacity-50">
                    <h2 class="text-lg font-bold">Orders</h2>
                    <p class="text-2xl font-semibold">99+</p>
                </div>
                <div class="bg-red-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px] opacity-50">
                    <h2 class="text-lg font-bold">Sales</h2>
                    <p class="text-2xl font-semibold">99+</p>
                </div>
            </div>
        </div>  
    </div>
</x-layouts.app>
