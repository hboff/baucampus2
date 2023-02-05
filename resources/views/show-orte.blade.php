<table>
    <thead>
        <tr>
            <th>Ort</th>
            <th>Ort URL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orte as $ort)
        <tr>
            <td>{{ $ort->ort }}</td>
            <td>{{ $ort->ort_url }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
////////////
<ul>
    @foreach ($orte as $ort)
        <li><a href="{{ $ort->ort_url }}">{{ $ort->ort }}</a></li>
    @endforeach
</ul>
