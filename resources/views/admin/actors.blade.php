<x-app-layout>
    @section('title')
        {{ 'شخصيات سينمائية' }}
    @endsection
    @section('content')
    <h1>
        الشخصيات السينمائية
    </h1>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">الاسم</th>
                    <th scope="col">النوع</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">تعديل</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($actors as $actor)
                <tr>
                    <td>{{$actor->name}}</td>
                    <td>{{$actor->type}}</td>
                    <td><img height="300" width="300" src="{{asset('imgs/actors/'.$actor->picture)}}" alt="image"></td>
                    <td>
                        <a href="{{route('actor.edit',$actor->id)}}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form method="post" action="{{route('actor.destroy',$actor->id)}}">
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
            <a href="{{route('actor.create')}}">
                <button type="button" class="btn btn-success">+ اضافة شخصية</button>
            </a>
        </div>
    @endsection

</x-app-layout>
