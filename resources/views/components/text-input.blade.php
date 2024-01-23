<!-- resources/views/components/text-input.blade.php -->

<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" 
    class="border border-gray-300 p-2 w-full rounded-md"
    >
</div>
