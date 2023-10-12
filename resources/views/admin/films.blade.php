<x-app-layout>
    @section('title')
        {{ ' الافلام' }}
    @endsection
    @section('content')
        <h1>
            الافلام
        </h1>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">العنوان</th>
                    <th scope="col">الفئة</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">تعديل</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($films as $film)
                    <tr>
                        <td>{{$film->title}}</td>
                        <td>{{$film->category}}</td>
                        <td><img height="200" width="200" src="{{asset('imgs/films/'.$film->picture)}}" alt="image"></td>
                        <td>
                            <a href="{{route('film.edit',$film->id)}}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                            <form method="post" action="{{route('film.destroy',$film->id)}}">
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
            <a href="{{ route('film.create') }}">
                <button type="button" class="btn btn-success">+ اضافة فبلم</button>
            </a>
        </div>
    @endsection

</x-app-layout>
