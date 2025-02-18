@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-500 dark:text-red-400 space-y-1 mt-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-red-500 animate-pulse" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.93 3a9 9 0 1112.84 0H5.07z"/>
                </svg>
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif
