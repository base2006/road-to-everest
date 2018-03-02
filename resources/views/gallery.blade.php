@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="grid">
            <div class="grid-sizer col-sm-4 col-md-3"></div>

            <div class="grid-item col-sm-8 col-md-6">
                <div class="grid-item-content">
                    <img src="https://placeimg.com/750/563/any" class="img-fluid" alt="">
                </div>
            </div>
            <div class="grid-item col-sm-4 col-md-3">
                <div class="grid-item-content">
                    <img src="https://placeimg.com/750/563/any" class="img-fluid" alt="">
                </div>
            </div>
            <div class="grid-item col-sm-4 col-md-3">
                <div class="grid-item-content">
                    <img src="https://placeimg.com/750/563/any" class="img-fluid" alt="">
                </div>
            </div>
            <div class="grid-item col-sm-4 col-md-3">
                <div class="grid-item-content">
                    <img src="https://placeimg.com/750/563/any" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.grid').masonry({
                itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
                columnWidth: '.grid-sizer',
                percentPosition: true
            });
        });
    </script>
@endpush