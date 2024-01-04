<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link href="{{ asset('css/adminkit.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="antialiased">
    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <div class="flex flex-wrap">
                <div class="w-full md:w-2/2 xl:w-3/3 p-3">
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Senhas:</h5>
                                {{-- <form action="{{ route('gerar') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="tipo" value="1">
                                    <button class="col form-control" type="submit">Convencional</button>
                                </form>
                                <form action="{{ route('gerar') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="tipo" value="0">
                                    <button class="col form-control" type="submit">Prioridade</button>
                                </form> --}}

                                <a role="button" class="btn btn-outline-primary me-2 btn-lg" onclick="enviar('1')">Convencional</a>
                                <a role="button" class="btn btn-outline-primary me-2 btn-lg" onclick="enviar('0')">Prioridade</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
  function enviar(senha) {
        window.axios.get('gerarsenha/' + senha);
        // alert('teste');

    }
    var channel = Echo.channel('messages');
    channel.listen('NewMessage', (e) => {
            console.log(e.message);
            // document.getElementById('latest_trade_user').innerText = e.message;
        });
</script>

</html>