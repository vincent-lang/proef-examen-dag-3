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
    <div class="contact">
        <h3>Details Baannummer</h3>
        <form action="{{route('feature_02.update', [$persoon->id, $baan->id])}}" method="post">
            @csrf
            @method('put')
            <div class="label-form">
                <label for="Nummer">Baannummer:</label>
                <div class="form-wijzig">
                    <select name="baan_id">
                        <option value="">kies een baan...</option>
                        @foreach ($banen as $data)
                        @if($data->Nummer == $baan->Nummer)
                        <option value="{{$data->Nummer}}" disabled>{{$data->Nummer}}</option>
                        @else
                        <option value="{{$data->Nummer}}">{{$data->Nummer}}</option>
                        @endif
                        @endforeach
                    </select>
                    <input class="submit" type="submit" value="Wijzigen">
                </div>
            </div>
        </form>
    </div>
    <div class="contact">
        <h3 class="error-text">
            @if(session()->has('error'))
            {{session('error')}}
            @endif
        </h3>
    </div>
</body>

</html>