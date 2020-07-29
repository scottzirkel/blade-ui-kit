<x-internal-form :method="$method" :action="$action">
    <button type="submit" {{ $attributes }}>
        {{ $slot }}
    </button>
</x-internal-form>
