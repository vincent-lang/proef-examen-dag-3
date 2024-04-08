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
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th class="text-left" colspan="8">Overzicht reserveringen</th>
                </tr>
                <tr>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Datum</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Baan</th>
                    <th>Wijzig</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reserveringen as $reservering)
                <tr>
                    <td>{{$persoon->Voornaam}}</td>
                    <td>{{$persoon->Tussenvoegsel}}</td>
                    <td>{{$persoon->Achternaam}}</td>
                    <td>{{$reservering->Datum}}</td>
                    <td>{{$reservering->AantalVolwassenen}}</td>
                    <td>{{$reservering->Aantalkinderen}}</td>
                    <td>{{$reservering->Baan->Nummer}}</td>
                    <td><a href="{{route('feature_02.edit', [$persoon->id, $reservering->Baan->id])}}">✏️</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="contact">
        <h3 class="succes-text">
            @if(session()->has('succes'))
            {{session('succes')}}
            @endif
        </h3>
    </div>
</body>

</html>