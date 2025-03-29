@extends ('layout.site')

@section('titulo','contatos')

@section('conteudo')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table {
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                padding: 12px 15px;
                text-align: left;
            }

            th {
                background-color: #4CAF50;
                color: white;
                font-weight: bold;
            }

            td {
                border-bottom: 1px solid #ddd;
            }
            table, th, td {
                border: 2px solid #4CAF50;
            }
        </style>
    </head>
    <body>
    <html>
        <article>
            <h3>Visão Contatos</h3>

            <table >
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contatos as $contato)
                        <tr>
                            <td>{{$contato['nome']}}</td>
                            <td>{{$contato['email']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/pagina1">pagina1</a><br>
            <a href="/pagina2">pagina2</a><br>
            <a href="/pagina3">pagina3</a><br>
        </article>
@endsection

