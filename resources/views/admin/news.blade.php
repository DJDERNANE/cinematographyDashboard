<x-app-layout>
    @section('title')
        {{ ' آخر المستجدات' }}
    @endsection
    @section('content')
    <h1>
         آخر المستجدات
    </h1>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">العنوان</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">تعديل</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($news as $item)


                <tr>
                    <td>{{$item->title}}</td>
                    <td><img height="200" width="200" src="{{asset('imgs/news/'.$item->picture)}}" alt="image"></td>
                    <td>
                        <a href="{{route('news.edit',$item->id)}}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form method="post" action="{{route('news.destroy',$item->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="add_btn">
            <a href="{{route('news.create')}}">
                <button type="button" class="btn btn-success">+ اضافة حدث</button>
            </a>
        </div>
    @endsection

</x-app-layout>
