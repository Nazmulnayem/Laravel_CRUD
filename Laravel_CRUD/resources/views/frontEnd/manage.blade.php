<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <section>
        <div class="container">
            <div class="row">
                <a href="{{route('home')}}">home</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mail</th>
                        <th scope="col">phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">manage</th>
                    </tr>
                    </thead>
                    @foreach($userinfos as $userinfo)
                    <tbody>
                    <tr>
                        <th scope="row">{{$userinfo->id}}</th>
                        <td>{{$userinfo->name}}</td>
                        <td>{{$userinfo->email}}</td>
                        <td>{{$userinfo->phone}}</td>
                        <td>{{$userinfo->address}}</td>
                        <td><a href="{{url('/userinfo/edit/'.$userinfo->id)}}">Edit</a></td>
                        <td><a href="{{url('/userinfo/delete/'.$userinfo->id)}}">Delete</a></td>
                    </tr>
                    </tbody>
                        @endforeach
                </table>

            </div>

        </div>
    </section>


  </div>
</body>
</html>
