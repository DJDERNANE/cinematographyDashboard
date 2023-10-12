
<x-app-layout>
    @section('styling')
    <link rel="stylesheet" href="{{ asset('adminFiles/css/form.css') }}">
    @endsection
    @section('title')
        {{ 'اضافة فيلم' }}
    @endsection
    @section('content')
        <form action="{{route('film.update',$film->id)}}" method="post" enctype="multipart/form-data" class="product-form">
            @csrf
            @method('PUT')
            <h1> اضافة فيلم</h1>
            <div class="form-group">
                <label for="">العنوان :</label>
                <input type="text" name="title" value="{{$film->title}}">
            </div>


            <div class="form-group">
                <label for="">الصورة الرئيسية :</label>
                <input type="file" name="picture">
            </div>
            <div class="form-group">
                <label for=""> الفئة :</label>
                <select  name="catid" id="">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">الوصف :</label>
                <textarea name="desc" id="" cols="30" rows="10">{{$film->desc}}</textarea>
            </div>
            <button type="submit" class="form-button btn btn-primary">حفظ</button>
        </form>


@endsection
</x-app-layout>
