

    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tiêu đề trang</title>
<link rel="stylesheet" href="đường_dẫn_tới_file_css" media="all">
@yield('css')
</head>
<body id="{{$idHeader}}">
    <header>
        Đây là nội dung header!
    </header>
@yield('content')
<script src="đường_dẫn_tới_file_js"></script>
@yield('js')
</body>
</html>