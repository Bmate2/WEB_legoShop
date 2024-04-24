<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("layouts._bootstrap")
    <title>Add LEGO</title>
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
    </style>
</head>

<body>
    @include("layouts._header")
    <div class='col-md-8 col-lg-6 mx-auto'>
        <div class="box">
            <form action="{{ route('store_lego') }}" method="POST">
                @csrf
                <h2>Add New LEGO Set</h2>
                <div class="inputBox">
                    <input type="text" name="code" required>
                    <span>Code</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="text" name="name" required>
                    <span>Name</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="number" name="price" step="0.01" min="0" required>
                    <span>Price (Ft)</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="number" name="pieces" min="0" required>
                    <span>Pieces</span>
                    <i></i>
                </div>

                <div class="inputBox">

                    <select name="category" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <i></i>
                </div>
                <div class="inputBox">
                    <label for="image">Képfeltöltés</label>
                    <input type="file" name="image" accept="image/*" required>
                    <i></i>
                </div>

                <input type="submit" value="Add Set">
            </form>
        </div>
    </div>
    @include("layouts._footer")
</body>

</html>