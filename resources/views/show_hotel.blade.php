<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách sạn</title>
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            text-align: center;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .product-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .product {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 220px;
        }

        .product img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        p {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .price {
            font-size: 16px;
            color: #e74c3c;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #ff6f00;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        .btn:hover {
            background-color: #e65c00;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Book đi nào. Mãi bên nhau bạn nhé!</h2>
    <p>Top nơi ở sang chảnh đón hè đã sẵn sàng trên Travelcon. Book đi ngay nè.</p>

    <div class="product-list">
        @if(isset($rooms) && count($rooms) > 0)
            @foreach($rooms as $each)
                <div class="product">
                    <img src="{{$each['image']}}" alt="Luxstay Villa">
                    <h3>{{$each['name']}}</h3>
                    <p>{{$each['des']}}</p>
                    <span class="price">{{$each['price']}}</span>
                    <button class="btn">Đặt Ngay ⚡</button>
                </div>
            @endforeach
        @endif
    </div>
</div>
</body>
</html>
