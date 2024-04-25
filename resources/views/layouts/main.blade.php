<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>LEGO shop</title>
    <style>
    .card {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .btnRev {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 30px;
    }

    .btnBuy {
        background-color: #ff5722;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 8px 20px;
        font-size: 16px;
        cursor: pointer;
        position: absolute;
        bottom: 20px;
        right: 10px;
    }

    .btn-edit-narrow {
        width: 70px;
    }

    .checked {
        color: #ff5722;
    }

    
    </style>
</head>

<body>
    @include("layouts._header")
    <div class="container" style="min-height:42.5vh">
        @yield("content")
    </div>
    @include("layouts._footer")
</body>

</html>