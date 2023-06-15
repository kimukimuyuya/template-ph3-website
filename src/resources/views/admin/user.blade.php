<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者画面</title>
    @vite('resources/css/app.css')
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザー一覧') }}
        </h2>
    </x-slot>
    
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
                                    ユーザーID</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ユーザー名</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    メールアドレス</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        登録日</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</x-app-layout>
