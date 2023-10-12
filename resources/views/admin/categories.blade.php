<x-app-layout>
    @section('title')
        {{ 'فئات الافلام ' }}
    @endsection
    @section('content')
    <h1>
        فئات الافلام
    </h1>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">العنوان</th>

                    <th scope="col">تعديل</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $cat)



                <tr>
                    <td>
                        {{$cat->name}}
                    </td>


                    <td>
                        <a href="{{route('category.edit',$cat->id)}}">
                            <button type="button" class="btn btn-primary">تعديل</button>
                        </a>
                        <form method="post" action="{{route('category.destroy',$cat->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="حذف">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="add_btn">
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-success">+ اضافة فئة</button>
            </a>
        </div>
    @endsection

</x-app-layout>
