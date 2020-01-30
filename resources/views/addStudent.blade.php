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
                    <select type="text" name="class"  required>

                        <option selected hidden>--Välj Klass--</option>

                        <option name="FWD18" value="FWD18">FWD18</option>
                        <option name="FWD19" value="FWD19">FWD19</option>
                        <option name="IK19" value="IK19">IK19</option>

                    </select>
                    <table>
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="email" placeholder="Email">
                    </table>
               
                    <button type="submit">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>
            </div>
        </div>
@endsection