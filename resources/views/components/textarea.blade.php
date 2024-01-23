<!-- resources/views/components/textarea.blade.php -->

<div
    class="mb-4"
>
    <label
        class="block mb-1 font-bold text-gray-700"
    for="{{ $name }}"
    >{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}"
        class="border border-gray-300 p-2 w-full rounded-md"
    >{{ $value }}</textarea>
</div>
