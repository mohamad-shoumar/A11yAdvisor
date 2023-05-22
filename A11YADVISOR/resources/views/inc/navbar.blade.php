<nav class="navbar">
    <div class="navLeft">
        <img class="logoImg" src="{{ asset('images/logoSmallsvg.svg') }}" alt="logo of the app, it has the AAARDVAK word and under it accessibility, next to them is the icon of the animal">
    </div>
    <div class="navRight">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/guide') }}">Guide</a></li>
            <li id="blueBG"><a href="{{ url('/form') }}">Test a Website</a></li>
        </ul>
    </div>
</nav>