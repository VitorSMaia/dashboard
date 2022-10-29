@props([
    'icon',
    'type' => "muted"
])

<div class="m-5">
    <button {{ $attributes }} class="btn-action-{{ $type }}">
        <span class="material-symbols-rounded">
            {{ $icon }}
        </span>
    </button>
</div>
