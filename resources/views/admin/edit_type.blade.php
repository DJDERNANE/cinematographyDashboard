
<x-app-layout>
    @section('styling')
    <link rel="stylesheet" href="{{ asset('adminFiles/css/form.css') }}">
    @endsection
    @section('title')
        {{ 'اضافة فئة' }}
    @endsection
    @section('content')
        <form action="{{route('actorType.update',$actorType->id)}}" method="post" enctype="multipart/form-data" class="product-form">
            @csrf
            @method('PUT')
            <h1> اضافة فئة</h1>
            <div class="form-group">
                <label for="">اسم الفئة :</label>
                <input type="text" name="name" value="{{$actorType->name}}">
            </div>



            <button type="submit" class="form-button btn btn-primary">حفظ</button>
        </form>


@endsection
</x-app-layout>
