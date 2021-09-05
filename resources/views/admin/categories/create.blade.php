@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد دسته بندی</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <lable for="category_id">دسته والد</lable>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="" selected disabled>دسته والد را انتخاب کنید..</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <lable for="title">عنوان</lable>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-control btn  btn-primary mt-5" value="ارسال">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
