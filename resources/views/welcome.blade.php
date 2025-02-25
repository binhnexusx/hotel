<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <link rel="stylesheet" href="{{ asset('assets/Styles/formnhap.css') }}">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Quản lý phòng</h2>
        <div class="buttons">
            <button class="btn btn-red"><a href="{{ route('show') }}">Hiển Thị</a></button>
        </div>
    </div>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div>
            <label for="ten-phong">Tên phòng</label>
            <input type="text" id="ten-phong" name="ten-phong" placeholder="Tên phòng" required>
        </div>
        <div>
            <label for="mo-ta">Mô tả phòng</label>
            <input type="text" id="mo-ta" name="mo-ta" placeholder="Mô tả phòng" required>
        </div>
        <div>
            <label for="gia">Giá</label>
            <input type="text" id="gia" name="gia" placeholder="Giá phòng" required>
        </div>
        <div class="image-upload">
            <label for="hinh-anh">📷 Chọn hình ảnh</label>
            <input type="file" name="hinh-anh" id="hinh-anh">
        </div>
        <button class="btn btn-orange" type="submit">Thêm mới phòng 🗓</button>
    </form>
</div>
</body>
</html>
