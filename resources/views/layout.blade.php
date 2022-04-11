<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title', 'A big weclome to you: Damilare Emmanuel')</title>
    
    @include('roots._css')

</head>
<body class="home blog">

    <!-- Preloader Gif -->
    <table class="doc-loader">
        <tbody>
            <tr>
                <td>
                    <img src="{{ asset('images/ajax-document-loader.gif') }}" alt="Loading...">
                </td>
            </tr>
        </tbody>
    </table>

    @include('partials.left_sidebar')
    
    @yield('content')

    @include('roots._javascript')
    
</body>
</html>