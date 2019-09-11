


   <h2>Register</h2>
   <form method="POST" action="/register">
       {{ csrf_field() }}
       <div class="form-group">
           <label for="ime">Ime:</label>
           <input type="text" class="form-control" id="ime" name="ime">
       </div>
       <div class="form-group">
           <label for="prezime">Prezime:</label>
           <input type="text" class="form-control" id="prezime" name="prezime">
       </div>
       <div class="form-group">
           <label for="email">Email:</label>
           <input type="email" class="form-control" id="email" name="email">
       </div>
       <div class="form-group">
           <label for="password">Password:</label>
           <input type="password" class="form-control" id="password" name="password">
       </div>
       <div class="form-group">
           <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
       </div>
   </form>
   <div class="w3-container">
  <h2>Buttons (w3-btn)</h2>
  <input href="/users"type="button" class="w3-btn w3-black" value="Input Button">
  <button href="/users"class="w3-btn w3-black"><a href="/users" class="w3-btn w3-black">Link Button</a></button>
  <a href="/users" class="w3-btn w3-black">Link Button</a>
</div>



