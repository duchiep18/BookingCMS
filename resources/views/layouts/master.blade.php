<!DOCTYPE html>
<html lang="en">


@include('layouts.head')

<body class="g-sidenav-show  bg-gray-200">
@include('layouts.sidenav')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.header')
        @yield('content')
    </main>

</body>

{{--<div class="modal fade" id="modalImage" tabindex="-1" aria-labelledby="modalImage" aria-hidden="true">--}}
{{--    <div class="modal-dialog" style="width:100%">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">Thư viện ảnh</h5>--}}
{{--                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <iframe--}}
{{--                    src="{{asset('/filemanager/dialog.php?type=2&editor=ckeditor&akey=&fldr=&field_id=image')}}"--}}
{{--                    style="width:100%; height:600px; "></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</html>

<!--   Core JS Files   -->
<script src="{{asset('backend/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/chartjs.min.js')}}"></script>

{{--<script>--}}
{{--    CKEDITOR.replace('ckeditor',{--}}
{{--        filebrowserBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserUploadUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserImageBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=1&editor=ckeditor&akey=&fldr=',--}}
{{--        allowedContent:true,--}}
{{--        shiftEnterMode: CKEDITOR.ENTER_P,--}}
{{--    });--}}
{{--    CKEDITOR.replace('ckeditor2',{--}}
{{--        filebrowserBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserUploadUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserImageBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=1&editor=ckeditor&akey=&fldr=',--}}
{{--        allowedContent:true,--}}
{{--        shiftEnterMode: CKEDITOR.ENTER_P,--}}
{{--    });--}}
{{--    CKEDITOR.replace('service',{--}}
{{--        filebrowserBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserUploadUrl : '{{asset("filemanager")}}/dialog.php?type=2&editor=ckeditor&akey=&fldr=',--}}
{{--        filebrowserImageBrowseUrl : '{{asset("filemanager")}}/dialog.php?type=1&editor=ckeditor&akey=&fldr=',--}}
{{--        allowedContent:true,--}}
{{--        shiftEnterMode: CKEDITOR.ENTER_P,--}}
{{--    });--}}
{{--</script>--}}

{{--<script>--}}
{{--    var modalImage = document.getElementById('modalImage')--}}
{{--    modalImage.addEventListener('hidden.bs.modal', function () {--}}
{{--        var img = $('input#image').val();--}}
{{--        if(img == ''){--}}
{{--            $('img#show_image').addClass('hidden');--}}
{{--        }else {--}}
{{--            $('img#show_image').attr('src', img);--}}
{{--        }--}}
{{--    });--}}

{{--    $('#modal-list-image').on('hide.bs.modal', function () {--}}
{{--        var _imgs = $('input#image_list').val();--}}
{{--        if(_imgs) {--}}
{{--            var img_list = $.parseJSON(_imgs);--}}
{{--            var _html='';--}}
{{--            for (let i = 0; i < img_list.length; i++) {--}}
{{--                _html += '<div class="thumbnail" style="margin-left: 10px">';--}}
{{--                _html += '<img src="'+img_list[i]+'" style="width: 150px;height: 150px" alt="">';--}}
{{--                _html += '</div>';--}}
{{--            }--}}
{{--            // if(img_list){--}}
{{--            //     $('#show_image_list').addClass('hidden');--}}
{{--            // }else {--}}
{{--            $('#show_image_list').html(_html);--}}
{{--            // }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
@stack('js')
<script src="{{asset('backend/js/material-dashboard.min.js?v=3.1.0')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
