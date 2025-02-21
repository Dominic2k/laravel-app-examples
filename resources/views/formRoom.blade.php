<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin-bottom: 30px;
        }

        .form-group {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
            flex: 1;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        a > button {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            display: block;
            width: 100%;
        }

        a > button:hover {
            background-color: #218838;
        }

        .upload-btn {
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .form-group {
                padding: 15px;
            }

            .btn-group {
                flex-direction: column;
            }

            button {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            input[type="text"],
            input[type="number"] {
                font-size: 16px;
            }
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
