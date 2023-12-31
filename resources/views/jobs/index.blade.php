@extends('layouts.main')

@section('banner', $banner)

@section('content')
<div class="col-lg-8 post-list">
    @foreach($jobs as $job)
        <div class="single-post d-flex flex-row">
            <div class="thumb">
                @if($job->company->logo)
                    <img src="{{ $job->company->logo->getUrl() }}" alt="">
                @endif
            </div>
            <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <a href="{{ route('jobs.show', $job->id) }}"><h4>{{ $job->title }}</h4></a>
                        <h6>{{ $job->company->name }}</h6>					
                    </div>
                </div>
                <p>
                    {{ $job->short_description }}
                </p>
                <h5>Ажилын цаг: {{ $job->job_nature }}</h5>
                <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }}</p>
                <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
                <button type="submit" class="btn btn-info"onclick="location.href='{{ route('jobs.show', $job->id) }}' ">Дэлгэрэнгүй</button>
            </div>
        </div>
    @endforeach
    {{ $jobs->appends(request()->query())->links() }}
</div>	
@endsection