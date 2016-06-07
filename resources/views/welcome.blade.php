<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
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
                    <textarea id="mytextarea" name="content" >Hello, World!</textarea>
                    <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus"></i> Submit
                    </button>
                </form>

                <hr>

                <a class="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-danger">
                    Choose From File System
                </a>
                <input id="thumbnail" type="text" name="filepath">
                <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
        </div>
    <script>
        $('.lfm').filemanager('image');


        var editor_config = {
          selector: '#mytextarea',
          path_absolute : "{{ URL::to('/') }}/",//path_absolute : "/",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
    </script>
    </body>
</html>
