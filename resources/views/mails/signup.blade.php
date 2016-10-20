<h2>Welkom bij choremanager</h2>

<p>Beste {{$user->name}},</p>

<p>Op <a href="{{route('/')}}">Choremanager </a> is er door een administrator een account voor u aangemaakt.</p>

<p>U kunt inloggen met de volgende gegevens:</p>

<ul>
    <li>Email adres: <strong>{{$user->email}}</strong></li>
    <li>Wachtwoord: "{{$password}}" </li>
</ul>

<p>Succes met je chores!</p>


