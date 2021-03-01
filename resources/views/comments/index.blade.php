<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!--  <link href="/examples/vendors/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
            /*comments 3*/
            html {
                font-size: 16px;
            }

            .media-body .author {
                display: block;
                font-size: 1rem;
                color: #fff;
                font-weight: 700;
            }

            .media-body .metadata {
                display: block;
                color: #fff;
                font-size: .8125rem;
            }

            .title-comments {
                font-size: 1.4rem;
                font-weight: bold;
                line-height: 1.5rem;
                color: rgba(0, 0, 0, .87);
                margin-bottom: 1rem;
                padding-bottom: .25rem;
                border-bottom: 1px solid rgba(34, 36, 38, .15);
            }

            .media-left img {
                width: 50px;
            }

            .media {
                margin-top: 0px;
            }

        </style>
    </head>
    <body>
        <div class="row d-flex justify-content-center mt-100 mb-100">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title">Абстрактный пост </h1>
                    </div>
                    @if(count($comments) > 0)
                    <div class="comments">
                        <h3 class="title-comments">Комментарии</h3>
                        <ul class="media-list">
                            @foreach($comments as $k => $comment)

                                @if($k !== 0)
                                    @break
                                @endif

                                @include('comments.comment', ['items' => $comment])

                            @endforeach

                        </ul>
                    </div>
                    @else
                        <h2>Напишите первый комментарий</h2>

                    @endif

                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6 justify-content-center">
            @include('comments.form')
        </div>
        </div>
    </body>
</html>
