<div>
    <form>
        <label for="">Poll title</label>
        <input type="text" wire:model.live="title" />

        Current title: {{ $title }}
    </form>
</div>
