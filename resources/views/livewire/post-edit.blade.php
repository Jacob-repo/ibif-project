<div>
    <flux:modal name="post-edit" variant="flyout">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Edit post</flux:heading>
                <flux:text class="mt-2">Edit details for the post.</flux:text>
            </div>

            <flux:input wire:model="title" label="Title" maxlength="32" placeholder="Your title" />

            <flux:textarea  wire:model="body" class="editor" label="Body" maxlength="64" rows="7" placeholder="Your body" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click="update">Edit</flux:button>
            </div>
        </div>
    </flux:modal>

</div>