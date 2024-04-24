<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("layouts._bootstrap")
    <title>Categories</title>
    
    <style>
    .box {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .box h2 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }

    .inputBox {
        position: relative;
        margin-bottom: 30px;
    }

    .inputBox input,
    .inputBox select {
        width: 100%;
        padding: 10px 0;
        border: none;
        outline: none;
        border-bottom: 1px solid #ccc;
        font-size: 16px;
        color: #333;
        background: transparent;
    }

    .inputBox span {
        position: absolute;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #666;
        pointer-events: none;
        transition: 0.5s;
    }

    .inputBox input:focus~span,
    .inputBox input:valid~span,
    .inputBox select:focus~span,
    .inputBox select:valid~span {
        transform: translateY(-20px);
        font-size: 12px;
        color: #ff5722;
    }

    .inputBox input:focus,
    .inputBox input:valid,
    .inputBox select:focus,
    .inputBox select:valid {
        border-bottom: 2px solid #ff5722;
    }

    input[type="submit"] {
        background: #ff5722;
        border: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 18px;
        transition: background 0.3s;
    }

    input[type="submit"]:hover {
        background: #e04e21;
    }
    .btn{
        background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 16px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
    }
    </style>
</head>

<body>
    @include("layouts._header")
    <div class="container">
        <div class="box">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <h2>Add Category</h2>
                <div class="inputBox">
                    <input type="text" name="name" required>
                    <span>Name</span>
                    <i></i>
                </div>
                <input type="submit" value="Add Category">
            </form>

        </div>
        <h2>Existing Categories</h2>
        @foreach($categories as $category)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <form action="{{ route('categories.delete', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </div>
        </div>
        @endforeach

    </div>
    @include("layouts._footer")

</body>

</html>