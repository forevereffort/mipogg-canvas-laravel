@extends('layouts.app')

@section('title', $data['post']->title)

@push('meta')

    <meta name="description" content="{{ $data['meta']['meta_description'] }}">
    <meta property="og:type" content="article">
    <meta name="og:title" content="{{ $data['meta']['og_title'] }}">
    <meta name="og:description" content="{{ $data['meta']['og_description'] }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $data['meta']['twitter_title'] }}">
    <meta name="twitter:description" content="{{ $data['meta']['twitter_description'] }}">

    @isset($data['meta']['canonical_link'])
        <link rel="canonical" href="{{ $data['meta']['canonical_link'] }}" />
    @endisset
    
    @isset($data['post']->featured_image)
        <meta name="og:image" content="{{ url($data['post']->featured_image) }}">
        <meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
    @endisset
@endpush

@section('content')
    <div id="blog-list" class="blog-list">
        <div class="container">
            <div class="blog-item">
                <div class="blog-featured-image">
                    @if( !empty($data['post']->featured_image) )
                    <img src="{{ $data['post']->thumbnail }}" alt="{{ $data['post']->featured_image_caption }}"/>
                    @endif
                </div>
                <div class="blog-info">
                    <div class="blog-info-inner blog-info-extract">
                        <h2 class="blog-post-title">{{ $data['post']->title }}</h2>
                        <div id="blog-info-{{ $data['post']->id }}"> 
                            {!! $data['post']->body !!}
                        </div>
                    </div>
                    <div class="blog-info-link">
                        <a href="javascript:history.go(-1);" id="blog-close-btn" class="blog-info-cancel">Done!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
