<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="background"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
    <div class="title">
        <div class="title-form">
            <h3>Overzicht reserveringen van {{$persoon->Voornaam}} {{$persoon->Tussenvoegsel}} {{$persoon->Achternaam}}</h3>
            <form action="{{route('feature_01.selectedIndex', [$persoon->id])}}" method="post">@csrf @method('post')
                <input type="date" name="date">
                <input class="submit" type="submit" value="Toon Reserveringen">
            </form>
        </div>
    </div>
    @if($reserveringen->IsNotEmpty())
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Datum</th>
                    <th>Aantal Uren</th>
                    <th>Begintijd</th>
                    <th>Eindtijd</th>
                    <th>Aantal Volwassenen</th>
                    <th>Aantal Kinderen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reserveringen as $reservering)
                <tr>
                    <td>{{$persoon->Voornaam}} {{$persoon->Tussenvoegsel}} {{$persoon->Achternaam}}</td>
                    <td>{{$reservering->Datum}}</td>
                    <td>{{$reservering->AantalUren}}</td>
                    <td>{{$reservering->BeginTijd}}</td>
                    <td>{{$reservering->EindTijd}}</td>
                    <td>{{$reservering->AantalVolwassenen}}</td>
                    <td>{{$reservering->AantalKinderen}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h3 class="error-text">
        Er is geen informatie over deze periode
    </h3>
    @endif
</body>

</html>