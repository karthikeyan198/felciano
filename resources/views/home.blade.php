@extends('layouts.app')
@include('layouts.header')
@section('content')
    {{-- banner section --}}
    <section class="banner-wrapper">
        <main class="main">
            <ul class="main__slider main__slider--countries">

                <li class="main__item">
                    <div class="main__image"
                        style="background-image: url('https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    </div>
                    <div class="overlay"></div>
                    <h1 class="main__title">Felciano</h1>
                    <span class="main__sub_title text-uppercase">Delicious Specialities</span>
                </li>

                <li class="main__item">
                    <div class="main__image"
                        style="background-image:url('https://images.unsplash.com/photo-1508500709478-37a0e8d6603c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80')">
                    </div>
                    <div class="overlay"></div>
                    <h1 class="main__title">Felciano</h1>
                    <span class="main__sub_title text-uppercase">Best Restaurant</span>
                </li>

                <li class="main__item">
                    <div class="main__image"
                        style="background-image:url('https://images.unsplash.com/photo-1544085311-11a028465b03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80')">
                    </div>
                    <div class="overlay"></div>
                    <h1 class="main__title">Felciano</h1>
                    <span class="main__sub_title text-uppercase">Nutritious & Tasty</span>
                </li>
            </ul>
        </main>
        <div class="container-fluid featured-menu-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="featured-menu">
                                    <div class="featured-menu-image"><img
                                            src="{{ Vite::asset('resources/images/banner/breakfast-1.jpg') }}"
                                            alt=""></div>
                                    <div class="text text-center featured-menu-text">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p>Meat,Potatoes,Rice,Tomatoe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mt-3">
                                <div class="featured-menu">
                                    <div class="featured-menu-image"><img
                                            src="{{ Vite::asset('resources/images/banner/breakfast-2.jpg') }}"
                                            alt=""></div>
                                    <div class="text text-center featured-menu-text">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p>Meat,Potatoes,Rice,Tomatoe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mt-3">
                                <div class="featured-menu">
                                    <div class="featured-menu-image"><img
                                            src="{{ Vite::asset('resources/images/banner/breakfast-3.jpg') }}"
                                            alt=""></div>
                                    <div class="text text-center featured-menu-text">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p>Meat,Potatoes,Rice,Tomatoe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mt-3">
                                <div class="featured-menu">
                                    <div class="featured-menu-image"><img
                                            src="{{ Vite::asset('resources/images/banner/breakfast-4.jpg') }}"
                                            alt=""></div>
                                    <div class="text text-center featured-menu-text">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p>Meat,Potatoes,Rice,Tomatoe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        @include('partials.about')
    </section>
@endsection
@push('scripts')
    @vite(['resources/js/main/home.js'])
@endpush
