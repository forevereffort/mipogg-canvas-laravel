@extends('fr.layouts.app')

@section('title', sprintf('%s — %s', config('app.name'), __('canvas::blog.title')))

@section('content')
    <div id="blog-list" class="blog-list" data-current-page="1" data-last-page="{{ $data['posts']['last_page'] }}">
        <div class="container">
                @if(count($data['posts']) > 0)
                    @foreach($data['posts']['data'] as $post)
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                @if( !empty($post['featured_image']) )
                                {{-- <img id="sthumbnail-{{ $post['id'] }}" src="{{ $post['sthumbnail'] }}" alt="{{ $post['featured_image_caption'] }}" /> --}}
                                {{-- <img id="thumbnail-{{ $post['id'] }}" src="{{ $post['thumbnail'] }}" alt="{{ $post['featured_image_caption'] }}" class="hide"/> --}}
                                <img src="{{ $post['thumbnail'] }}" alt="{{ $post['featured_image_caption'] }}"/>
                                @endif
                            </div>
                            <div class="blog-info">
                                <div class="blog-info-inner blog-info-extract">
                                    <h2 class="blog-post-title">{{ $post['title'] }}</h2>
                                    <div id="blog-info-extract-{{ $post['id'] }}"> 
                                        <p>{{ str_limit(strip_tags($post['body']), env('BLOG_EXCERPT_LETTERS', false)) }} &raquo;</p>
                                    </div>
                                    <div id="blog-info-{{ $post['id'] }}" clss="hide">
                                    </div>
                                </div>
                                <div class="blog-info-link">
                                    <a href="{{ route('fr.blog.post', $post['slug']) }}" id="blog-read-more-btn-{{ $post['id'] }}" data-post-id="{{ $post['id'] }}" class="blog-read-more-btn" data-status="no">Voir plus</a>
                                    {{-- <a href="#" id="blog-info-cancel-{{ $post['id'] }}" data-post-id="{{ $post['id'] }}" class="blog-info-cancel hide">Done!</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- {{ $data['posts']->links() }} --}}
                @endif
            </div>
        </div>
    </div>
@endsection
