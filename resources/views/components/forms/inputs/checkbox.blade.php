<x-internal-input
    :name="$name"
    type="checkbox"
    :id="$id"
    {{ $attributes->merge(['checked' => $checked]) }}
/>
