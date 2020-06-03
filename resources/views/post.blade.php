@extends('layouts.app')
<style>
img{
    object-fit:contain;
    max-height: 350px;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <!-- <div class="card-header">Dashboard</div> -->
                <div class="card-body">
                @if($post->image)
                    <img src="{{$post->get_image}}" alt="" class="card-img-top">
                @elseif($post->iframe)
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                {!! $post->iframe !!}
                </div>
                @endif
                   <div class="card-title"><strong>{{$post->title}}</strong></div>
                   <div class="card-text">{{$post->body}}</div>
                   <!-- <div class="card-text">{{$post->get_excerpt}} <a href="{{route('post',$post)}}">Leer más...</a></div> -->
                   <div class="text-muted mt-2"><em>&ndash; {{$post->user->name}},</em> {{$post->created_at->format('d M Y')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection