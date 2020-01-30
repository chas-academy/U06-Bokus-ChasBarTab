@extends ('layout')

@section ('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Lägg till student
                </div>

                <form action="/submit" method="ADD">
                    <select type="text" name="class" required>

                        <option selected hidden disabled>--Välj Klass--</option>

                    @foreach ($eds as $ed)
                        <option name="{{$ed->name}}" value="{{$ed->name}}">{{$ed->name}}</option>
                    @endforeach

                    </select>
                    <table>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="email" placeholder="Email" required>
                    </table>
               
                    <button type="submit">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>
            </div>
        </div>
@endsection