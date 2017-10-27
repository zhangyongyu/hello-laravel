<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link media="all" type="text/css" rel="stylesheet" href="https://publib.qinco.net/humancss/0.14/css.min.css">

    </head>
    <body>
      <div class='alert alert-thick bg-white'>
       <div class='container  px1em  pt1em pb1em'>
          <div class='table mb1em' id='dropZoneId{{$qfield}}'>
            <div class='flex-left' style='min-width: 140px'>
                <h4 id='uploadImg' class='mb0'><img src='/' width='120' height='auto'  /></h4>
            </div>
            <div class='flex-right'>
                <div class='box '
                  id='upBox{{$qfield}}'
                  data-queue-container='upQueue{{$qfield}}'
                  data-error-container='upError{{$qfield}}'
                  data-drop-container='dropZoneId{{$qfield}}'
                  data-browse-btn='upBrowse{{$qfield}}'>
                     <h5 class='lh-120 mt0'>
                       <a href='javascript:;' id='upBrowse{{$qfield}}' class='c-dark text-underline'>上传图片</a>
                     </h5>
                </div>

                <div class='box mt1em none' id='upError{{$qfield}}'></div>
                <div class='box mt1em none' id="upQueue{{$qfield}}"></div>

            </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>

      <script src="https://publib.qinco.net/plupload-2.1.8/js/plupload.full.min.js"></script>

      <script src="https://publib.qinco.net/qiniu-direct-upload/dist/qiniu.min.js?v=2"></script>

      <script src="https://pro.beerepublic.me/s/brpro/qiniupack.full.3.js"></script>

      <script>

        var uploader = new qiniuPack({
            up_container_id: 'upBox{{$qfield}}',
            up_saved_callback: function(res) {
                if(typeof res === "object" )
                    $('#uploadImg').html("<img src='"+res.up_thumbimg+"' width='120' height='auto'  />");
            },
            up_path_prefix: "/",
            up_allow_multi: false,
            up_max_size: '2mb',
            up_file_ext: 'jpeg,jpg,png,gif',
            up_domain: 'ovqr0c4sv.bkt.clouddn.com',
            up_token: '{{$up_token}}',

        });

        uploader.start();

       </script>

    </body>
</html>
