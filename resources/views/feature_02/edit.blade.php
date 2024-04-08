<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    //* this is the animated background
    <div class="background"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
    <div class="contact">
        <h3>Details Baannummer</h3>
        <form action="{{route('feature_02.update', [$persoon->id, $baan->id])}}" method="post">
            //* this is the csrf token
            @csrf
            //* this is the method to update the baan
            @method('put')
            <div class="label-form">
                <label for="Nummer">Baannummer:</label>
                <div class="form-wijzig">
                    <select name="baan_id">
                        <option value="">kies een baan...</option>
                        //* this is the foreach loop to show all the banen
                        @foreach ($banen as $data)
                        //* this is the option to select the baan
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
            //* this is the error message
            @if(session()->has('error'))
            {{session('error')}}
            @endif
        </h3>
    </div>
</body>

</html>