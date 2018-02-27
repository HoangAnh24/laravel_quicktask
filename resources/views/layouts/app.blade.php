    <html lang="en">
        <head>
            <title>{{ trans('msg.title') }}</title>
            <!-- CSS And JavaScript -->
            {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
        </head>
        <body>

            @yield('content')

            {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') !!}
            {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
            {!! Html::script(asset('js/my.js')) !!}
        </body>
    </html>
