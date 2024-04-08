<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">

    <title>Laravel</title>
</head>

<body>
    //* this is the animated background
    <div class="background"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
    <div class="title">
        <h1>
            Homepage
        </h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    //* this is the title of the table
                    //* and spans over 2 columns
                    <th colspan="2">Reserveringen</th>
                </tr>
            </thead>
            <tbdoy>
                //* this is the foreach loop to show all the personen
                @foreach($personen as $persoon)
                <tr>
                    <td>{{$persoon->Voornaam}} {{$persoon->Tussenvoegsel}} {{$persoon->Achternaam}}</td>
                    <td>
                        //* this is the link to view the reserveringen
                        <a href="{{route('feature_01.index', [$persoon->id])}}">bekijken</a>
                    </td>
                    <td>
                        //* this is the link to edit the reserveringen
                        <a href="{{route('feature_02.index', [$persoon->id])}}">wijzigen</a>
                    </td>
                </tr>
                @endforeach
            </tbdoy>
        </table>
    </div>
</body>

</html>