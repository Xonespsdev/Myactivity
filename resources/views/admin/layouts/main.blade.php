<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')
<body id="body">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@yield('content')
@include('admin.layouts.footer')
</body>
</html>