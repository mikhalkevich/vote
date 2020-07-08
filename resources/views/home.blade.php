@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">


                        <form method="post" action="{{asset('candidat/add')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Имя Фамилия</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="catalog_id">Возраст</label>
                            </div>
                            <div class="form-group">
                                <label for="body">Вид деятельности</label>
                                <textarea class="form-control" id="who_is" name="who_is" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="body">Предвыборная программа</label>
                                <textarea class="form-control" id="how_is" name="how_id" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="picture1">Фото</label>
                                <input type="file" class="form-control-file" id="picture1" name="picture1">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
