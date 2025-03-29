<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body{
                margin: 0;
                padding: 0;
                display: grid;
                grid-template-columns: 5% 1fr 5%;
                grid-template-rows: 10% 1fr 15%;
            }
            header{
                grid-column: span 3;
                grid-row: 1;
                background-color:  #4CAF50;;
            }
            header img{
                width: 80px;
                height: 80px;
            }
            article{
                grid-column: 2;
                grid-row: 2;
            }
            footer{
                grid-column: span 3;
                grid-row: 3;
                background-color:  #4CAF50;;
            }
        </style>
    </head>

    <body>
        <header>
            <title> 
                @yield('titulo')
            </title>
            <img src="https://upload.wikimedia.org/wikipedia/pt/b/bd/Leonardo-2003-cartoon.jpg">
        </header>