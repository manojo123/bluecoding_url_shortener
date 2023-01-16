<!DOCTYPE html>
<html lang="en" class="h-full w-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Url Shortener - {{ $url->original_url }}</title>
</head>
<body class="bg-gray-800 text-gray-50 w-full">
    <div class="grid h-screen place-items-center">
            <div class="flex bg-gray-700 rounded p-2">
                <input name="original_url" readonly id="original_url" class="text-black p-2 flex-grow w-72" type="text" value="{{  $url->original_url }}">
                <input name="shortened_url" readonly id="original_url" class="text-black p-2 flex-grow w-72" type="text" value="{{  config('app.url') . "/" . $url->shortened_url }}">
            </div>
    </div>

</body>
</html>
