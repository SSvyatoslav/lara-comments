<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /*comments*/
            @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

            body {
                /*background-color: #D32F2F;*/
                font-family: 'Calibri', sans-serif !important
            }

            .mt-100 {
                margin-top: 100px
            }

            .mb-100 {
                margin-bottom: 100px
            }

            .card {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0px solid transparent;
                border-radius: 0px
            }

            .card-body {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1.25rem
            }

            .card .card-title {
                position: relative;
                font-weight: 600;
                margin-bottom: 10px
            }

            .comment-widgets {
                position: relative;
                margin-bottom: 10px
            }

            .comment-widgets .comment-row {
                border-bottom: 1px solid transparent;
                padding: 14px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin: 10px 0
            }

            .p-2 {
                padding: 0.5rem !important
            }

            .comment-text {
                padding-left: 15px
            }

            .w-100 {
                width: 100% !important
            }

            .m-b-15 {
                margin-bottom: 15px
            }

            .btn-sm {
                padding: 0.25rem 0.5rem;
                font-size: 0.76563rem;
                line-height: 1.5;
                border-radius: 1px
            }

            .btn-cyan {
                color: #fff;
                background-color: #27a9e3;
                border-color: #27a9e3
            }

            .btn-cyan:hover {
                color: #fff;
                background-color: #1a93ca;
                border-color: #198bbe
            }

            .comment-widgets .comment-row:hover {
                background: rgba(0, 0, 0, 0.05)
            }
        </style>
    </head>
    <body>
        <form action="{{ route('comments.update', ['comment'=> $id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Редактирование комментария</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment_body">{{ $body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </body>
</html>
