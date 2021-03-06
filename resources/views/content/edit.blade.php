@extends('layouts.app')

@section('page_title', trans('general.edit'))

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form enctype="multipart/form-data" action="{{ route('content.update') }}" method="post">
                    <img src="{{ asset('uploads/images/') }}/{{ $post->image  }}">
                    <div class="form-group">
                        <label for="title">@lang('general.title')</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">@lang('general.content')</label>
                        <input type="text" class="form-control" id="content" name="content"
                               value="{{ $post->content }}">
                    </div>
                    <div class="form-group">
                        <label>Update image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tags[]"
                                       value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->name }}
                            </label>
                        </div>
                    @endforeach
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $postId }}">
                    <button type="submit" class="btn btn-primary">@lang('general.submit')</button>
                </form>
            </div>
        </div>
    </div>
@endsection