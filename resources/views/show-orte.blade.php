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

This code assumes that you have a table named orteat in your database with columns ort and orturl. The first code snippet gets the data from the orteat table using the DB facade in Laravel and passes the data to the view file. The second code snippet is a blade template that displays the data in a table using a foreach loop.
