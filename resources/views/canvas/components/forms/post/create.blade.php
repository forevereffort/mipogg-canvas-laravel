<form role="form" id="form-create" method="POST" action="{{ route('canvas.post.store') }}"
      enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group row my-3">
        <div class="col-lg-12">
            <textarea name="title" class="form-control-lg form-control border-0 pl-0 serif" rows="1"
                      placeholder="{{ __('canvas::posts.forms.editor.title') }}" style="font-size: 42px; resize: none;">{{ old('title') }}</textarea>
        </div>
    </div>

    <editor :unsplash="'{{ config('canvas.unsplash.access_key') }}'"
            :path="'{{ config('canvas.path') }}'">
    </editor>

    @include('canvas.components.modals.post.create.settings')
    @include('canvas::components.modals.post.create.publish')
    @include('canvas.components.modals.post.create.image')
    @include('canvas::components.modals.post.create.seo')
</form>