@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-sky-400 dark:focus:border-sky-400 focus:ring-sky-400 dark:focus:ring-sky-400 rounded-md shadow-sm']) !!}>
