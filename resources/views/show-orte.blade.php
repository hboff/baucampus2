<table>
    <thead>
        <tr>
            <th>Domain</th>
            <th>Laengengrad</th>
            <th>Breitengrad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ort as $domain => $coordinates)
            <tr>
                <td>{{ $domain }}</td>
                <td>{{ implode(', ', $coordinates['laengengrad']) }}</td>
                <td>{{ implode(', ', $coordinates['breitengrad']) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>