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
                <form method="post" action="/submit">
                    {{ csrf_field() }}
                    <textarea id="mytextarea" name="content">Hello, World!</textarea>
                    <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    <script>
        var editor_config = {
          selector: '#mytextarea',
          path_absolute : "{{ URL::to('/') }}/",
          relative_urls : false,

          theme: 'modern',
          width: 600,
          height: 300,
          plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
          ],
          content_css: 'css/content.css',
          toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'

        };
        tinymce.init(editor_config);
    </script>
    </body>
</html>
