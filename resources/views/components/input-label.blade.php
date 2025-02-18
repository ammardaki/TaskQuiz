@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bold text-gray-700 dark:text-gray-300 tracking-wide text-right rtl']) }}>
    {{ $value ?? $slot }}
</label>
