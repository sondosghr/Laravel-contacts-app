<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
<body>
    <br><br>
   @foreach ($contacts as $contact)
    <form   class="row gy-2 gx-3 align-items-center" action="{{ route('contact.update', ['id' => $contact->id]) }}" method="POST">
     
    @csrf
    @method('PUT')
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" class="form-control" id="autoSizingInput" name="name" value="{{ $contact->name }}" required>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">phone</label>
    <input type="text" class="form-control" id="autoSizingInput" name="phone" value="{{ $contact->phone }}">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">email</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="email" class="form-control" id="autoSizingInputGroup" name="email" value="{{ old('email', $contact->email) }}" required>
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Category</label>
    <select class="form-select" id="autoSizingSelect" name="category">
      <option value="work" {{ $contact->category == 'work' ? 'selected' : '' }}>Work</option>
      <option value="general" {{ $contact->category == 'general' ? 'selected' : '' }}>General</option>
      <option value="family" {{ $contact->category == 'family' ? 'selected' : '' }}>Family</option>
      <option value="friends" {{ $contact->category == 'friends' ? 'selected' : '' }}>Friends</option>
    </select>
  </div>
 
    <button type="submit" class="btn btn-primary">Edit Contact</button>
     
  <a   class="btn btn-primary" href="{{ route('contact.delete', ['id' => $contact->id]) }}" > delete contact</a>
  </div>
   
</form>
 @endforeach
    </body>
    </html>