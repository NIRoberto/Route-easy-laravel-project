<!-- resources/views/components/select-dropdown.blade.php -->

<div
    class="mb-4"
>
    <label for="{{ $name }}"
        class="block mb-1 font-bold text-gray-700"
    >{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}"
        class="border border-gray-300 p-2 w-full rounded-md"
    >
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ $selected == $option['value'] ? 'selected' : '' }}
               
            >
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
</div>

