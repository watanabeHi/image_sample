<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>画像アップロードサンプル</h4>
    <form action="/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image"><br>
        <input type="submit" value="送信">
    </form>

    @foreach (\App\Models\Shop::all() as $shop)
        <img src="{{ asset('/storage/' . $shop->img_path) }}" style="width: 100px">
    @endforeach
</body>

</html>
