<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Traduttore</title>
</head>
<body>
    <header>
        <div>
            <h1>Traduttore automatico</h1>
        </div>
        <nav>
            <ul>
                <li></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h5>Scegli la lingua con cui tradurre:</h5>
            <ul>
                <li></li>
            </ul>
        </div>

        <div>
            <h2>Inserisci il testo da tradurre (ITALIANO)</h2>
            <form action="" method="POST">
                <textarea name="phrase" id="phrase"></textarea>
                <div class="button">
                    <a href="{{route('translate')}}"type="submit" >Traduci</a>
                </div>
            </form>
        </div>
            
        <div>
            <h2>Traduzione</h2>
            <div id="traduzione"></div>
        </div>

        @php
            $messages = [
                'messages.hello',
                'messages.goodbye',
                'messages.welcome',
                'messages.how are you?',
                'messages.i\'m fine thanks',
                'messages.how is going your day?',
            ];
        @endphp

        <div>
            @foreach($messages as $message)
                <small>{{__($message)}}</small> <br>
            @endforeach
        </div>
    </main>
</body>
</html>