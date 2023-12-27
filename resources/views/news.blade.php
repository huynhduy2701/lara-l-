{{-- @extends('templates.tpl_default')
@section('css')
<link rel="stylesheet" href="đường_dẫn_tới_file_news.css" media="all">
@endsection
@section('content')
<div class="news">
<h3>Tin trong ngày</h3>
<p>Nội dung cho tin tức!</p>
</div>
@endsection
@section('js')
<script src="đường_dẫn_tới_file_news.js"></script>
@endsection --}}
<!-- resources/views/news.blade.php -->
{{-- @extends('templates.tpl_default')
@section('css')
<link rel="stylesheet" href="đường_dẫn_tới_file_news.css" media="all">
@endsection
@section('content')
<div class="news">
<h3>Tin trong ngày</h3>
<p>Nội dung cho tin tức!</p>
</div>
@endsection
@section('js')
<script src="đường_dẫn_tới_file_news.js"></script>
@endsection --}}

@extends('templates.tpl_default', ['pageId' => 'news'])
@section('css')
<link rel="stylesheet" href="đường_dẫn_tới_file_news.css" media="all">
@endsection
@section('content')
<div class="news">
<h3>Tin trong ngày</h3>
<p>Nội dung cho tin tức!</p>
</div>
@endsection
@section('js')
<script src="đường_dẫn_tới_file_news.js"></script>
@endsection