<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <form method="post">
                  <textarea id="mytextarea">Hello, World!</textarea>
                </form>
            </div>
        </div>
    <script>
        var editor_config = {
          selector: '#mytextarea',
          path_absolute : "{{ URL::to('/') }}/",
          relative_urls : false,
        };
        tinymce.init(editor_config);
    </script>
    </body>
</html>
