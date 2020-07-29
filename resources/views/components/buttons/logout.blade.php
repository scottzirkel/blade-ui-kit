<x-form-button :action="$action" {{ $attributes }}>
    {{ $slot->isEmpty() ? __('Sign Out') : $slot }}
</x-form-button>
