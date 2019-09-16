
@if($error)
    {{$message}}
@endif

<form method="POST" action="register">
    {{csrf_field()}}
    <label>Name</label> <br />
    <input type="text" name="name"> <br />
    <label>Lastname</label> <br />
    <input type="text" name="lastname"> <br />
    <label>Email</label> <br />
    <input type="text" name="email"> <br />
    <label>Password</label> <br />
    <input type="password" name="password"> <br />

    <button type="submit"> Register </button>
</form>
<a href="/users">
    <button> Go to users </button>
</a>
