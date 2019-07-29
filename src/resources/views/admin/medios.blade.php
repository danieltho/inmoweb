
@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    MEDIOS
@stop
@section('button_create')

@stop

@section('card_title')
    Medios
@stop
@section('javascript')
    <script src="{{url('vendor/inmoweb')}}/app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js"
            type="text/javascript"></script>
@stop
@section('grid')
    <div class="masonry-grid my-gallery mx-1" itemscope itemtype="http://schema.org/ImageGallery">
        <!-- width of .grid-sizer used for columnWidth -->
        <div class="grid-sizer"></div>
        @foreach ($data as $v)
            <div class="grid-item">
                <figure class="card" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="{{ Storage::url($v->url) }}" itemprop="contentUrl"
                       data-size="600x{{ rand(440,900) }}">
                        <img class="img-thumbnail" src="{{ Storage::url($v->url) }}"
                             itemprop="thumbnail" alt="Image description" />
                    </a>
                </figure>
            </div>
        @endforeach
    </div>
@stop
