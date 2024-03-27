<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta di collaborazione</title>
    <style>
        /* Stili per il contenitore principale */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9; /* Aggiunto sfondo chiaro */
            justify-content: center;
            text-align: center;
        }

        /* Stili per il logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Stili per il contenuto */
        .content {
            font-family: Arial, sans-serif;
            color: #333; /* Colore del testo leggermente più scuro */
        }

        /* Stili per il pulsante */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Aggiunta transizione di colore */
        }

        .btn:hover {
            background-color: #0056b3; /* Cambia colore al passaggio del mouse */
        }

        /* Stili per l'elenco */
        ul {
            padding-left: 20px; /* Aggiunto un rientro per l'elenco */
            list-style-type: none;
        }

        /* Stili per gli elementi dell'elenco */
        li {
            margin-bottom: 5px; /* Aggiunto spazio tra gli elementi dell'elenco */
            
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo">
            <img src="{{asset('img/prestoit_logo.png')}}" alt="Logo Presto.it" width="150">
        </div>
        <div class="content">
            <p><strong>Richiesta di collaborazione</strong></p>
            <p>Un utente ha richiesto di lavorare con noi:</p>
            <ul>
                <li><strong>Nome:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
            </ul>
            <p><strong>Presentazione:</strong></p>
            <p>{{ $description }}</p>
            <p>Se desideri renderlo revisore, clicca qui:</p>
            <a class="btn" href="{{ route('revisor.make', compact('user')) }}">Rendi revisore</a>
        </div>
    </div>
</body>
</html>
