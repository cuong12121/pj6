@extends('layouts.app')

@push('js')
<link rel="stylesheet" type="text/css" href="{{ asset('lined-textarea/jquery-linedtextarea.css') }}">
<script src="{{ asset('lined-textarea/jquery-linedtextarea.js') }}"></script>
@endpush

@section('content')
    <?php 
        $page = ['homecs.css', 'categorycs.css', 'detailscs.css'];
    ?>
    File {{ $page[$id] }}
    <form method="post" action="{{ route('saveCss') }}">
        @csrf
         <button type="submit">Lưu lại</button>

          <br>

        <input type="hidden" name="file" value="{{ $page[$id] }}">  

        <textarea class="lined" style="width: 800px; height: 1900px;" name="css">{{ $contents  }}</textarea>

         <br>
       
       
    </form>

    <script type="text/javascript">
        $(function() {
            $(".lined").linedtextarea();
        });
    </script>
    
@endsection

