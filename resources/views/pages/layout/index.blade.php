<!DOCTYPE html>
<html>


@include('pages.partials.head')

<body>
@include('pages.partials.nav')

@yield('content')
@include('pages.partials.footer')
@include('pages.partials.script')

</body>

</html>
