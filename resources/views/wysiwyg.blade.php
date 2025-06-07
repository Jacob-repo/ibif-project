<x-layouts.app :title="__('WYSIWYG')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative mb-6 w-full">
                <flux:heading size="xl" level="1">{{ __('WYSIWYG') }}</flux:heading>
                <flux:subheading size="lg" class="mb-6">{{ __('settingsLang.WysiwygInfo') }}</flux:subheading>
                <flux:separator variant="subtle" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div id="editor">
                <p><br /></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        let quill;

        function mountQuill() {
            quill = new Quill('#editor', { theme: 'snow' });
            const STORAGE_KEY = 'quill-content';

            const saved = localStorage.getItem(STORAGE_KEY);
            if (saved) {
                quill.root.innerHTML = saved;
            }

            quill.on('text-change', () => {
                localStorage.setItem(STORAGE_KEY, quill.root.innerHTML);
            });
        }


        document.addEventListener('livewire:navigated', () => {
            setTimeout(mountQuill, 10);
            quill.root.innerHTML = saved;
        });

        document.addEventListener('livewire:load', () => {
            setTimeout(mountQuill, 10);
            quill.root.innerHTML = saved;
        });
        
    </script>

</x-layouts.app>

