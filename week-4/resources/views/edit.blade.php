
@isset($msg)
{{$msg}}
@endisset
<form method="POST" action="{{ route('user.update', $userData->id) }}">
    {{csrf_field()}}
    <label>Name</label> <br />
    <input type="text" name="name" value="{{$userData->name}}"> <br />
    <label>Lastname</label> <br />
    <input type="text" name="lastname" value="{{$userData->lastname}}"> <br />
    <label>Email</label> <br />
    <input type="text" name="email" value="{{$userData->email}}"> <br />
    <button type="submit"> Save </button>
</form>
<a href="/users">
    <button> Back </button>
</a>