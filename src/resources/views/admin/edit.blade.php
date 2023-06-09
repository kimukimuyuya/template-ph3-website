<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問題作成</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  <div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-6">問題編集</h1>
    <form action="{{route('questions.update, ['question=>$question->id']')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="content">質問文</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" type="text" placeholder="質問文" value="{{$question->content}}">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="image">画像</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" placeholder="画像" required>
        {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">画像</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="image" type="file" name="image" required> --}}
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="supplement">参照</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="supplement" name="supplement" type="text" placeholder="参照" value="{{$question->supplement}}">
      </div>

      <div class="w-full text-center z-10 mb-10">
        <button class="w-40 h-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit">更新する</button>
      </div>
    </form>
  </div>
</body>

</html>