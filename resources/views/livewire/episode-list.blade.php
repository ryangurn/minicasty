<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <table class="table-fixed border-separate border border-black w-full">
        <thead>
        <tr>
            <th class="w-2/3">podcast</th>
            <th class="w-1/6">author</th>
            <th class="w-1/6">actions</th>
        </tr>
        </thead>
        <tbody>
        @if(!$episodes->isEmpty())
            @foreach($episodes as $episode)
        <tr>
            <td>{{ $episode->title }}</td>
            <td>{{ $episode->author }}</td>
            <td></td>
        </tr>
            @endforeach
        @else
        <tr>
            <td class="text-center" colspan="3"><u><b>no episodes yet.</b></u></td>
        </tr>
        @endif
        </tbody>
    </table>
</div>