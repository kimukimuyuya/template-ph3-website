<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者画面</title>
    <script src="../script/delete-confirm.js" defer></script>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/delete-confirm.js') }}"></script>

</head>

<body>
    <div class="container mx-auto py-10">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                        問題番号</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        質問文</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        編集</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        削除</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach ($questions as $question)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $question->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $question->content }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <button class="px-2 py-1 text-green-500 border border-green-500 font-semibold rounded hover:bg-green-100">
                                                <a href="#">編集</a>
                                            </button>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-center"><button class="px-2 py-1 text-blue-500 border border-blue-500 font-semibold rounded hover:bg-blue-100"><a href="#">詳細</a></button></td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <button class="px-2 py-1 text-red-500 border border-red-500 font-semibold rounded hover:bg-red-100">
                                                <a href="#" onclick="return confirmLink()">削除</a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full text-center z-10 mb-10">
        <button class="w-40 h-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <a href="{{ route('questions.create') }}">{{ __('新規作成') }}</a>
        </button>
    </div>
</body>

</html>
