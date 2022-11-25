@extends('backend.auth')

@section('content')
  <!-- /Logo -->
  

@if(Session::has('response'))
    {!!Session::get('response')['message']!!}
@endif

<form id="formAuthentication" class="mb-3" action="{{route('register.store')}}" method="POST">

@csrf
    <div class="mb-3">
        <label for="FullName" class="form-label">Full Name</label>
        <input type="text" class="form-control"  value="{{old('FullName')}}" name="FullName" placeholder="Enter your full name" autofocus/>
    </div>
    @if($errors->has('FullName'))
        <small class="d-block text-danger">
            {{$errors->first('FullName')}}
        </small>
    @endif


    <div class="mb-3">
        <label for="phone number" class="form-label">Phone Number</label>
        <input type="text" class="form-control"  value="{{old('PhoneNumber')}}" name="PhoneNumber" placeholder="Enter your phone number" autofocus/>
    </div>
    @if($errors->has('PhoneNumber'))
        <small class="d-block text-danger">
            {{$errors->first('PhoneNumber')}}
        </small>
    @endif


    <div class="mb-3">
        <label for="email address" class="form-label">Email Address</label>
        <input type="email" class="form-control"  value="{{old('EmailAddress')}}" name="EmailAddress" placeholder="Enter your Email" autofocus/>
    </div>
    @if($errors->has('EmailAddress'))
        <small class="d-block text-danger">
            {{$errors->first('EmailAddress')}}
        </small>
    @endif

    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @if($errors->has('password'))
            <small class="d-block text-danger">
                {{$errors->first('password')}}
            </small>
        @endif
    </div>


    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Confirm Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @if($errors->has('password_confirmation'))
            <small class="d-block text-danger">
                {{$errors->first('password_confirmation')}}
            </small>
        @endif
    </div>
    
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Log in</button>
    </div>
    </form>

    <p class="text-center">
        <span>Already have an account?</span>
        <a href="{{route('login')}}">
            <span>Login</span>
        </a>
    </p>
</div>
</div>
<!-- /Register -->

@endsection