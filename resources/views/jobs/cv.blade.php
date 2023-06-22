@extends('layouts.main')
@section('banner')

@section('content')
<div class="col-lg-8 post-list">
    <h1>Мэдээлэл илгээх</h1>
    <div class="single-post d-flex flex-row">
        <div class="col-lg-10 form-cols">
            Овог:<input type="text" class="form-control col-lg-7" name="search">
            Нэр:<input type="text" class="form-control col-lg-7" name="search">
            Нас:<input type="text" class="form-control col-lg-2" name="search">
            Төгссөн сургууль:<input type="text" class="form-control col-lg-10" name="search">
            Мэргэжил:<input type="text" class="form-control col-lg-7" name="search">
            Холбоо барих утас:<input type="text" class="form-control col-lg-7" name="search">
            И-мэйл:<input type="text" class="form-control col-lg-7" name="search">
            Ажил эсвэл сургуулийн нэр:<input type="text" class="form-control col-lg-7" name="search">
            Хаяг:<input type="text" class="form-control col-lg-12" name="search">
        </div>
    </div>	
    <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}">Илгээх</a>        
											
</div>
@endsection