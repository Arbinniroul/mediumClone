@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 border px-2 py-4 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    {{ $slot }}
</textarea>
