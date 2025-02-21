<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 900px;
            margin: 20px auto;
            border: 2px solid navy;
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            margin-bottom: 15px;
            text-align: center;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;

        }
        .btn {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn.display {
            background-color: red;
            color: white;
        }
        .btn.add {
            background-color: orange;
            color: white;
        }
        .form-group {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        .upload-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid orange;
            padding: 10px;
            border-radius: 5px;
            color: orange;
            font-weight: bold;
            cursor: pointer;
        }

        hr{
            margin-bottom: 20px;
            color:orange;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Quản lý phòng</h1>

    <hr>
    <div class="form-group">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="Tên phòng" name="name">
            <input type="text" placeholder="Mô tả phòng" name="des">
            <input type="number" placeholder="Giá phòng" name="price">
            <input type="text" class="upload-btn" placeholder="Nhập link ảnh" name="image">
            <div class="btn-group">
                <a href="/laravel-app/public/room">
                    <button type="button">Hiển thị</button>
                </a><a href="{{ route('create') }}">
                    <button type="submit">Thêm mới phòng</button>
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
