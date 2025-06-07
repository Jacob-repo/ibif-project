<div class="shadow-lg rounded-2xl p-8 space-y-6">
  <form wire:submit="send" class="space-y-4">
    <flux:input
      label="Title"
      wire:model="title"
      placeholder="Your title"
      maxlenght="64"
      required
    /><br>

    <flux:input
      label="Email"
      type="email"
      wire:model="email"
      placeholder="Recipient's email"
      maxlenght="64"
      required
    /><br>

    <flux:textarea
      label="Message"
      wire:model="message"
      placeholder="Type your message..."
      maxlenght="256"
      rows="5"
      required
    /><br>

    <flux:button variant="primary" type="submit">Send Message</flux:button>

  </form>

    @session('success')
        <flux:text class="text-green-600 mt-3 text-sm">
            {{ $value }}
        </flux:text>
    @endsession

    @session('error')
        <flux:text class="text-red-600 mt-3 text-sm">
            {{ $value }}
        </flux:text>
    @endsession
</div>

