<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách sạn</title>
    <link rel="stylesheet" href="{{ asset('assets/Styles/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="container">
    <h2>Danh sách phòng</h2>
    <p>Top nơi ở sang chảnh đón hè đã sẵn sàng trên Travelcon.</p>

    <div class="hotel-list">
        @if(isset($list) && count($list) > 0)
            @foreach($list as $u)
                <div class="hotel-card">
                    <img src="{{ asset($u['hinh-anh']) }}" alt="Hình ảnh phòng">
                    <div class="hotel-info">
                        <h3>{{ $u['ten-phong'] }}</h3>
                        <p>{{ $u['mo-ta'] }}</p>
                        <div class="price">
                            <p class="title">Giá tiền</p>
                            <p class="value">{{ number_format($u['gia']) }} đ</p>
                        </div>
                        <p class="availability">Còn 30 phòng • <span>120 đã đặt</span></p>
                        <button class="book-btn">Đặt Ngay <i class="fas fa-bolt"></i></button>
                    </div>
                </div>
            @endforeach
        @else
            <p>Chưa có dữ liệu nào.</p>
        @endif
    </div>
</div>
</body>
</html>
