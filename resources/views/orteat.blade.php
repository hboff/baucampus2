<table>
    <thead>
        <tr>
            <th>Ort</th>
            <th>Ort URL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orteats as $orteat)
        <tr>
            <td>{{ $orteat->ort }}</td>
            <td>{{ $orteat->ort_url }}</td>
        </tr>
        @endforeach
    </tbody>
</table>