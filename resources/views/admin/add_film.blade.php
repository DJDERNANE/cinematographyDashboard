
<x-app-layout>
    @section('styling')
    <link rel="stylesheet" href="{{ asset('adminFiles/css/form.css') }}">
    @endsection
    @section('title')
        {{ 'اضافة فيلم' }}
    @endsection
    @section('content')
        <form action="{{route('film.store')}}" method="post" enctype="multipart/form-data" class="product-form">
            @csrf
            <h1> اضافة فيلم</h1>
            <div class="form-group">
                <label for="">العنوان :</label>
                <input type="text" name="title">
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
                <label for="">auther :</label>
                <input type="text" name="auther">
            </div>
            <div class="form-group">
                <label for="">senareo :</label>
                <input type="text" name="senareo">
            </div>
            <div class="form-group">
                <label for="">filmer :</label>
                <input type="text" name="filmer">
            </div>
            <div class="form-group">
                <label for="">product :</label>
                <input type="text" name="product">
            </div>
            <div class="form-group">
                <label for="">duree :</label>
                <input type="text" name="duree">
            </div>
            <div class="form-group">
                <label for="">prod :</label>
                <input type="text" name="prod">
            </div>
            <div class="form-group">
                <label for="">date :</label>
                <input type="text" name="date">
            </div>
            <div class="form-group">
                <label for="">size :</label>
                <input type="text" name="size">
            </div>
          

            <div class="form-group">
                <label for="">الوصف :</label>
                <textarea name="desc" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="form-button btn btn-primary">حفظ</button>
        </form>


@endsection
</x-app-layout>
