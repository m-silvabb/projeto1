<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            section{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            div{
                display: flex;
                background-color:lightgray;
                border-radius: 10px;
            }
        </style>
    </head>
    <section>
        <div>
            <form action='/contato' method='post'>
            {{ csrf_field() }}
                <label id='nome'> nome: </label><br>
                <input type='text' name='nome' value='' id='nomeinput' required><br><br>
                <label id='email'>email:</label><br>
                <input type='text' name='email' value='' id='emailinput' required><br><br>

                <input type='submit' value='ok' id='button'>
            </form>
        </div>
    </section>
</html>