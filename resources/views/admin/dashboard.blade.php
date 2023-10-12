<x-app-layout>
    @section('title')
        {{ 'Dashboard' }}
    @endsection
    @section('content')
        <div class="welcome">
            <h1>
                المركز الجزائري للسينما
            </h1>
            <div style="display: flex; margin: 20px ; ">
                <img style="margin: 20px 40px" src="{{asset('public/imgs/logo.png')}}" alt="">
                <img  style="margin: 20px 40px" src="{{asset('public/imgs/logo2.png')}}" alt="">
            </div>
        </div>
    @endsection

</x-app-layout>
