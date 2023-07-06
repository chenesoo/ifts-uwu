<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elenco libri</title>
    @include('bootstrap')
</head>

<body>
    <div class="container">

        <h1>Lista dei libri</h1>
        <a href="/books/create">Inserisci nuovo libro</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Sintesi</th>
                    <th>N pagine</th>
                    <th>Voto</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->abstract }}</td>
                        <td>{{ $book->pages }}</td>
                        <td>{{ $book->rating }}</td>
                        <td>
                            <a href="/books/edit/{{ $book->id }}">Modifica</a>
                            <a href="/books/delete/{{ $book->id }}">Elimina</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
