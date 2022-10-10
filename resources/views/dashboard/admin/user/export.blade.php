<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Name</th>
            <th>Email</th>
            <th>Class</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($users as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->nis }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->class }}</td>
            <td>{{ $user->role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
