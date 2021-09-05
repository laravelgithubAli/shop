@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد برند </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <lable for="title">نام</lable>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <lable for="image">تصویر</lable>
                            <input type="file" name="image" id="image" class="form-control">
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
