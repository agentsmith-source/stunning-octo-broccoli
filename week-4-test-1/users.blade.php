<table>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Email</th>
<th>password</th>
</tr>
@foreach ($users as $user)

<tr>
<td>{{$user->ime}}</td>
<td>{{$user->prezime}}</td>
<td>{{$user->email}}</td>
<td>{{$user->pasword}}</td>
</tr>
@endforeach
</table>
<br>
<br>
<form action="/users">
<input type="submit" value="Kreiraj novog korisnika">
</form>
<div class="w3-container">
  <h2>Buttons (w3-btn)</h2>
  <input type="button" class="w3-btn w3-black" value="Input Button">
  <button href="/register"class="w3-btn w3-black"><a href="/register" class="w3-btn w3-black">Link Button</a></button>
  <a href="/register" class="w3-btn w3-black">Link Button</a>
</div>