@extends('layouts.index')

@section('slider')
    @include('components.slider')
@endsection

@section('content')
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>

                        <!--Category-->

                        <ul>
                            <li><a href="shops">All</a></li>
                           @foreach($categories as $items)
                            <li><a href="shops?cat_id={{$items->id}}">{{$items->Name}}</a></li>
                            @endforeach
                        </ul>

                    </div>
<!--                    SlideBar-Items  -->
                    @include('shops.slide-sale')

                </div>
            </div>
            <div class="col-lg-9 col-md-7">
<!--               Sale Products-->
                @include('shops.product-sale')



                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>12</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>


<!--                List Products-->

            @include('shops.products')
                {{$products->links()}}

            </div>
        </div>
    </div>
</section>
@endsection
