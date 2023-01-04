<h1>Bonjour {{$name}}</h1>

<a href="{{route('about')}}">About Us</a>
<a href="{{route('contact', $name)}}">Contact Us</a>