@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Add A New Blog Post</h1>
                        <small class="text-muted"><span class="oi oi-clipboard"></span> Draft Saved - A Few Minutes Ago</small>
                        <hr>
                        <form action="{{ route('posts.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Post Title" v-model="title">
                            </div>
                            <div class="form-group">
                                <p>
                                    <slug-widget url="{{ url('/') }}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>
                                </p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="10" placeholder="Post Content"></textarea>
                            </div>
                            <button class="btn btn-outline-primary">Save Draft</button>
                            <button class="btn btn-primary">Publish Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const app = new Vue({
            el: '#app',
            data: function () {
                return {
                    title: '',
                    slug: ''
                }
            },
            methods: {
                updateSlug: function(val) {
                    this.slug = val;
                }
            }
        });
    </script>
@endpush