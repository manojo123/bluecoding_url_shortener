<!DOCTYPE html>
<html lang="en" class="h-full w-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Url Shortener!</title>
</head>
<body class="bg-gray-800 text-gray-50 w-full">
    <div class="grid h-screen place-items-center">
            <div class="flex bg-gray-700 rounded p-2">
                <form action="/url" method="POST">
                        @csrf
                        <input name="original_url" id="original_url" class="text-black p-2 flex-grow w-72" type="text">
                        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700">Generate URL</button>
                </form>
            </div>
    </div>

</body>
</html>
