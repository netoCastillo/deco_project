<form method="POST">

{!! csrf_field() !!}
 
  <div class="form-group">
    <label for="url">Url</label>
    <input type="url" class="form-control" id="url">
  </div>
  
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>