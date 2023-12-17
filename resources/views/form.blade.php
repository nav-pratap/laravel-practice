<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h4>
      @if(session()->has('user_name'))
          {{session()->get('user_name')}}
      @else
          Form
      @endif
  </h4>
  {{-- <pre>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
  </pre> --}}
  <form action="{{ route('create') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
      <span class="text-danger">
      @error('name')
        {{$message}}
      @enderror
      </span>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
      <span class="text-danger">
      @error('email')
        {{$message}}
      @enderror
      </span>
    </div>

    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
      <span class="text-danger">
      @error('password')
        {{$message}}
      @enderror
      </span>
    </div>

    <div class="mb-3 mt-3">
      <label for="age">Age:</label>
      <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age">
      <span class="text-danger">
      @error('age')
        {{$message}}
      @enderror
      </span>
    </div>

    <label>Gender:</label>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">
      <label class="form-check-label" for="radio1">Male</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
      <label class="form-check-label" for="radio2">Female</label>
    </div>
    <span class="text-danger">
      @error('gender')
        {{$message}}
      @enderror
      </span><br>

    <label>Hobby:</label>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="hobby[]" value="cricket">
      <label class="form-check-label" for="check1">Cricket</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="hobby[]" value="singing">
      <label class="form-check-label" for="check2">Singing</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check3" name="hobby[]" value="travel">
      <label class="form-check-label" for="check3">Travel</label>
    </div>
    <span class="text-danger">
      @error('hobby')
        {{$message}}
      @enderror
      </span><br>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
  </form>
</div>

</body>
</html>
