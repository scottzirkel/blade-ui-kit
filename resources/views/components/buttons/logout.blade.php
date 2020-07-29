<x-internal-form-button :action="$action" {{ $attributes }}>
    {{ $slot->isEmpty() ? __('Sign Out') : $slot }}
</x-internal-form-button>
