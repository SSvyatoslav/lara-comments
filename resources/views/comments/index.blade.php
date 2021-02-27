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
        <div class="row d-flex justify-content-center mt-100 mb-100">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Абстрактный пост </h4>
                    </div>
                    <div class="comment-widgets">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">James Thomas</h6> <span class="m-b-15 d-block">This is awesome website. I would love to comeback again. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2019</span>
                                    <a href="{{ route('comments.edit', ['comment' => 2]) }}" type="button" class="btn btn-cyan btn-sm">Редактировать</a>

                                    <form action="{{ route('comments.destroy', ['comment' => 2]) }}" class="d-inline" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                    </form>

                                    <button type="button" class="btn btn-success btn-sm">Комментировать</button>
                                </div>
                            </div>

                        </div>

                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Hussey</h6> <span class="m-b-15 d-block">Thanks bbbootstrap.com for providing such useful snippets. </span>
                                <div class="comment-footer"> <span class="text-muted float-right">May 10, 2019</span> <button type="button" class="btn btn-cyan btn-sm">Edit</button> <button type="button" class="btn btn-success btn-sm">Publish</button> <button type="button" class="btn btn-danger btn-sm">Delete</button> </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Johnathan Doeting</h6> <span class="m-b-15 d-block">Great industry leaders are not the real heroes of stock market. </span>
                                <div class="comment-footer"> <span class="text-muted float-right">August 1, 2019</span> <button type="button" class="btn btn-cyan btn-sm">Edit</button> <button type="button" class="btn btn-success btn-sm">Publish</button> <button type="button" class="btn btn-danger btn-sm">Delete</button> </div>
                            </div>
                        </div>
                    </div> <!-- Card -->
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-100 mb-100">
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>
