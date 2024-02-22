@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <iframe
            src="{{asset('/filemanager/dialog.php?type=2&editor=ckeditor&akey=&fldr=')}}"
            frameborder="18" style="width:100%; height:900px; ">
        </iframe>
    </div>
@endsection
