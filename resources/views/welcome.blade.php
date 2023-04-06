@if (Session::has('user'))
   {{Session::get('user')['email']}} 
    <a href="{{route('logout')}}">logout</a>   
  @else
  login   
@endif
