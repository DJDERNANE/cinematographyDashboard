
<x-app-layout>
    @section('styling')
    <link rel="stylesheet" href="{{ asset('adminFiles/css/form.css') }}">
    @endsection
    @section('title')
        {{ 'اضافة شخصية' }}
    @endsection
    @section('content')
        <form action="{{route('actor.store')}}" method="post" enctype="multipart/form-data" class="product-form">
            @csrf
            <h1> اضافة شخصية</h1>
            <div class="form-group">
                <label for="">الاسم :</label>
                <input type="text" name="title">
            </div>


            <div class="form-group">
                <label for="">الصورة الرئيسية :</label>
                <input type="file" name="picture">
            </div>
            <div class="form-group">
                <label for=""> النوع :</label>
                <select  name="catid" id="">
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">الوصف :</label>
                <textarea name="desc" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="form-button btn btn-primary">حفظ</button>
        </form>


@endsection
</x-app-layout>
