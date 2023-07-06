<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo hotel</title>
    @include('bootstrap')
</head>

<body>
    <div class="container">

        <h1>Inserisci nuova recensione</h1>

        <form method="post" action="/create">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo recensione</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    placeholder="Inserisci il titolo della recensione" value="{{ old('title') }}" name="title">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">testo</label>
                <textarea name="content">{{old('content')}}</textarea>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stars" class="form-label">Stelle</label>
                <input type="text" class="form-control @error('stars') is-invalid @enderror" id="stars"
                    placeholder="Inserisci il voto" value="{{ old('stars') }}" name="stars">
                @error('stars')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    </div>

    <a href="/reviews" class="btn btn-secondary">Indietro</a>

    <button type="submit" class="btn btn-primary">Salva</button>

    </form>

    {{--
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        --}}
    </div>
</body>

</html>
