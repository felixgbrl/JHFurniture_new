@extends('Layouts.admin')
@section('content')
  @if (Auth::user()->role == 'Admin')
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-4 mt-2">
            <main class="form-register">
              <form method="POST" action="/profile/{{Auth::user()->name}}/update">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Update Profile</h1>
        
                <div class="form-floating">
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name" autofocus required value="{{ old ('name', Auth()->user()->name)}}">
                  <label for="name">Full Name</label>
                  @error('name')
                      <div class="text-danger">{{ $message }} </div>  
                  @enderror
                </div>
        
                <div class="form-floating">
                  <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value="{{ old ('email', Auth()->user()->email)}}">
                  <label for="email">Email</label>
                  @error('email')
                      <div class="text-danger">{{ $message }} </div>
                  @enderror
                </div>
        
                <div class="form-floating">
                  <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
                  <label for="password">Password</label>
                  @error('password')
                      <div class="text-danger">{{ $message }} </div>
                  @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Update Profile</button>
              </form>
            </main>
          </div>
        </div>
      </div>
  @else
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mt-2">
          <main class="form-register">
            <form method="POST" action="/profile/{{Auth::user()->name}}/update">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Update Profile</h1>
      
              <div class="form-floating">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name" autofocus required value="{{ old ('name', Auth()->user()->name)}}">
                <label for="name">Full Name</label>
                @error('name')
                    <div class="text-danger">{{ $message }} </div>  
                @enderror
              </div>
      
              <div class="form-floating">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value="{{ old ('name', Auth()->user()->email)}}">
                <label for="email">Email</label>
                @error('email')
                    <div class="text-danger">{{ $message }} </div>
                @enderror
              </div>
      
              <div class="form-floating">
                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
                <label for="password">Password</label>
                @error('password')
                    <div class="text-danger">{{ $message }} </div>
                @enderror
              </div>
      
              <div class="form-floating">
                <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" placeholder="Address" name="address" autofocus required value="{{ old ('name', Auth()->user()->address)}}">
                <label for="address">Address</label>
                @error('address')
                    <div class="text-danger">{{ $message }} </div>
                @enderror
              </div>
      
              <div class="form-check mt-3">
                <div class="row">
                  <div class="col-6">
                    <div class="Gender fw-bold">
                        Gender
                    </div> 
                  </div>
                  @if (Auth()->user()->gender == 'M')
                    <div class="col-3">
                      <div class="form-group  @error('gender') is-invalid @enderror">
                        <label><input name="gender" type="radio" value="M" checked>M</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="radio">
                        <label><input name="gender" type="radio" value="F">F</label>
                      </div>
                    </div>  
                  @else    
                    <div class="col-3">
                      <div class="form-group  @error('gender') is-invalid @enderror">
                        <label><input name="gender" type="radio" value="M">M</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="radio">
                        <label><input name="gender" type="radio" value="F" checked>F</label>
                      </div>
                    </div>  
                  @endif
                        
                </div>
                @error('gender')
                  <div class="text-danger">{{ $message }} </div>
                @enderror
              </div>
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
            </form>
          </main>
        </div>
      </div>  
    </div>      
  @endif
@endsection