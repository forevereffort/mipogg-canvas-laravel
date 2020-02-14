@extends('canvas::layouts.app')

@section('context', __('canvas::nav.context.draft'))

@section('actions')
    <a href="#" class="btn btn-sm btn-outline-primary my-auto" data-toggle="modal" data-target="#modal-publish">
        {{ __('canvas::buttons.posts.save') }}
    </a>

    <div class="dropdown">
        <a id="navbarDropdown" class="nav-link px-3 text-secondary" href="#" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fas fa-sliders-h fa-fw fa-rotate-270"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-settings">
                {{ __('canvas::nav.controls.settings') }}
            </a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-image">
                {{ __('canvas::nav.controls.image') }}
            </a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-seo">
                {{ __('canvas::nav.controls.seo') }}
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('canvas.components.forms.post.create')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if ($errors->has('slug'))
        @include('canvas::components.modals.post.scripts.slug')
    @endif
@endpush
