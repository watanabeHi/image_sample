<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>画像複数アップロードサンプル</h4>
    <form action="/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="text" value="あいうえお"><br>
        <input type="file" name="images[]" multiple><br>
        <input type="submit" value="送信">
    </form>

    @foreach (\App\Models\Shop::all() as $shop)
        {{ $shop->text }}
        <img src="{{ asset('/storage/' . $shop->img_path1) }}" style="width: 100px">
        @if ($shop->img_path2)
            <img src="{{ asset('/storage/' . $shop->img_path2) }}" style="width: 100px">
        @endif
        @if ($shop->img_path3)
            <img src="{{ asset('/storage/' . $shop->img_path3) }}" style="width: 100px">
        @endif
        <br>
    @endforeach
</body>

</html>
