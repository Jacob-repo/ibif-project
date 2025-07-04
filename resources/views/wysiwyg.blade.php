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
            <div id="editor">{!! $content !!}</div>
        </div>
        <button id="saveBtn" class="mt-4 rounded-xl bg-blue-500 px-6 py-2 text-white shadow">
            Zapisz
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
    let quill;

    function mountQuill() {
        quill = new Quill('#editor', { theme: 'snow' });

        document.getElementById('saveBtn').addEventListener('click', function () {
            const html = quill.root.innerHTML;

            fetch('/wysiwyg/save', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ content: html })
            }).then(res => res.json())
              .then(data => {
                if (data.success) {
                    alert('Zapisano!');
                }
            });
        });
    }

    document.addEventListener('livewire:navigated', () => {
        setTimeout(mountQuill, 50);
    });
</script>


</x-layouts.app>

