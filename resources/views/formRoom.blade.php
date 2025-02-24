<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }


        h2 {
            font-size: 24px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-red {
            background-color: red;
            color: white;
            border: 2px solid #1f3c68;
        }

        .btn-orange {
            background-color: orange;
            color: white;
            border: 2px solid #a2c0e8;
        }

        .btn-orange i {
            margin-left: 5px;
        }

        .form-container {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            padding: 15px;
            border-top: 3px solid orange;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            width: 24%;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .btn-upload i {
            margin-right: 5px;
        }

    </style>
</head>
<body>
<form action="{{ route('create') }}" method="post">
    @csrf
    <h2>Quản lý phòng</h2>
    <div class="buttons">
        <button type="button" class="btn btn-red" id="btn-show">Hiển Thị</button>
        <button type="submit" class="btn btn-orange" id="btn-submit">
            Thêm mới phòng <i class="fa-solid fa-calendar-plus"></i>
        </button>
    </div>
    <div class="form-container">
        <div class="form-group">
            <label for="ten-phong">Tên phòng</label>
            <input type="text" id="ten-phong" placeholder="Tên phòng" name="name">
        </div>
        <div class="form-group">
            <label for="mo-ta">Mô tả phòng</label>
            <input type="text" id="mo-ta" placeholder="Mô tả phòng" name="des">
        </div>
        <div class="form-group">
            <label for="gia">Giá</label>
            <input type="text" id="gia" placeholder="Giá phòng" name="price">
        </div>
        <div class="form-group">
            <label for="anh">Link ảnh</label>
            <input type="text" id="anh" placeholder="Link ảnh" name="image">
        </div>
    </div>
</form>
<div> @include('block.error')</div>

<script>
    document.getElementById('btn-show').addEventListener('click', function (){
        window.location.href = "{{ route('show_hotel') }}";
    });
</script>

</body>
</html>
