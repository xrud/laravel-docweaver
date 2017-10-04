@extends('doc-weaver::layout')

@section('doc-weaver-content')
<div id="doc-weaver-product-showcase" class="products product-showcase">
    <h1 class="doc-weaver-h1">{{ $title }}</h1>
    @if(count($products))
    <div class="product-list row">
        @foreach($products as $productKey => $product)
        <div class="col-md-4">
            <div id="product-{{ $productKey }}" class="product">
                <a href="{!! route($routeConfig['names']['product_index'], $productKey) !!}">
                    <h4 class="product-title">{{ $product['name'] }}</h4>
                    <div class="product-info">
                        <ul class="info-list">
                            <li>Version: {{ $product['defaultVersion'] }}</li>
                            <li>Last updated: {{ $product['lastModified']->diffForHumans() }}</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="empty no-docs">
        <p>No documentation available. Please come back later.</p>
    </div>
    @endif
</div>
@endsection