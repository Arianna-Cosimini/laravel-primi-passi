<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body data-bs-theme="dark">



    <div id="hero" class="py-5">
        <nav class="navbar navbar-dark bg-dark px-5">

            <ul class="d-flex gap-4 list-unstyled ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('description') }}">Description</a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>

        </nav>
        <div class="container py-5 d-flex justify-content-between">
            <div class="description-text w-50 p-5">

                <p>
                    Laravel è un framework web open-source per lo sviluppo di applicazioni PHP, creato da Taylor Otwell
                    nel
                    2011. È noto per la sua sintassi chiara ed espressiva, oltre che per la sua ricca serie di
                    funzionalità
                    che semplificano lo sviluppo di applicazioni web complesse.

                    Ecco alcuni punti chiave di Laravel:

                    Routing: Laravel offre un sistema di routing semplice ed intuitivo che consente di definire
                    facilmente
                    le rotte delle applicazioni web.

                    Middleware: Per filtrare le richieste HTTP in arrivo, Laravel utilizza i middleware, che consentono
                    di
                    eseguire azioni prima o dopo che una richiesta raggiunga una route.

                    Eloquent ORM: Eloquent è il sistema ORM (Object-Relational Mapping) incluso in Laravel. Con
                    Eloquent, è
                    possibile interagire con il database utilizzando oggetti PHP, rendendo le operazioni di query molto
                    più
                    intuitive e leggibili.

                    Blade Templating Engine: Blade è il motore di templating di Laravel che consente di creare
                    facilmente
                    layout e view. È molto potente e permette di includere componenti, definire layout di base, e
                    gestire
                    dati in modo efficiente.

                    Migrations e Seeder: Laravel offre strumenti per gestire facilmente la struttura del database
                    attraverso
                    le migrazioni, che consentono di versionare lo schema del database. Inoltre, è possibile popolare il
                    database con dati di prova utilizzando i seeder.

                    Authentication e Authorization: Laravel semplifica l'implementazione di sistemi di autenticazione e
                    autorizzazione, fornendo un'API semplice per gestire l'accesso degli utenti alle risorse
                    dell'applicazione.

                    Task Scheduling: Laravel include uno scheduler integrato che consente di definire facilmente compiti
                    da
                    eseguire periodicamente, come l'invio di e-mail programmate o l'esecuzione di task di manutenzione.

                    Testing: Il framework offre supporto per i test automatici, permettendo agli sviluppatori di
                    scrivere
                    facilmente test unitari e di integrazione per garantire il corretto funzionamento dell'applicazione.

                    Laravel Mix: Laravel Mix è un wrapper per Webpack che semplifica la gestione delle risorse
                    front-end,
                    come CSS, JavaScript e immagini. Consente di compilare, concatenare e minificare le risorse in modo
                    semplice e intuitivo.

                    In sintesi, Laravel è un framework potente e flessibile che semplifica lo sviluppo di applicazioni
                    web
                    moderne, offrendo una vasta gamma di funzionalità e una sintassi chiara e intuitiva.
                </p>
            </div>

            <div class="description-img w-50 p-5">

                <img style="width: 100%"
                    src="https://www.curotec.com/wp-content/uploads/2022/07/laravel-development-services.jpg"
                    alt="">
            </div>
        </div>

    </div>




    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
