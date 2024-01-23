<!-- resources/views/components/data-table.blade.php -->

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                @foreach($headers as $header)
                    <th class="py-2 px-4 border-b">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse($data as $row)
                <tr>
                    @foreach($row as $value)
                        <td class="py-2 px-4 border-b">{{ $value }}</td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($headers) }}" class="py-2 px-4 text-center">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
