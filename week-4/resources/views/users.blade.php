@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

<table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="delete/{{$user->id}}">
                <button> Delete </button>
            </a></td>
            <td><a href="edit/{{$user->id}}">
                <button> Edit </button>
            </a></td>
        </tr>
    @endforeach
</table>

<a href="register">
    <button> Go to register </button>
</a>