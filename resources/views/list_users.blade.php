<h1>List Users</h1>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
         @endforeach
    </tbody>
</table>