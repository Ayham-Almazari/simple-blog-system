<x-app-layout layout="simple" :assets="$assets ?? []">
    <span class="uisheet screen-darken"></span>
    <div class="header"
        style="background: url({{ asset('images/dashboard/top-image.jpg') }}); background-size: cover; background-repeat: no-repeat; height: 100vh;position: relative;">
        <div class="main-img">
            <div class="container">
                <svg width="150" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.423828" y="34.5762" width="50" height="7.14286" rx="3.57143"
                        transform="rotate(-45 -0.423828 34.5762)" fill="white" />
                    <rect x="14.7295" y="49.7266" width="50" height="7.14286" rx="3.57143"
                        transform="rotate(-45 14.7295 49.7266)" fill="white" />
                    <rect x="19.7432" y="29.4902" width="28.5714" height="7.14286" rx="3.57143"
                        transform="rotate(45 19.7432 29.4902)" fill="white" />
                    <rect x="19.7783" y="-0.779297" width="50" height="7.14286" rx="3.57143"
                        transform="rotate(45 19.7783 -0.779297)" fill="white" />
                </svg>
                <h1 class="my-4">
                    <span>{{ env('APP_NAME') }}</span>
                </h1>
                <h4 class="text-white mb-5">OK.</h4>
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <a class="bg-white btn btn-light d-flex" target="_blank" href="{{ route('dashboard') }}">
                            <svg width="22" height="22" class="me-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Dashboard</a>
                    </div>
                    <div class="ms-3">
                        <a class="bg-white btn btn-light d-flex" target="_blank"
                            href="https://github.com/iqonicdesignofficial/hope-ui-laravel-dashboard"><img
                                src="{{ asset('/images/brands/23.png') }}" width="24px" height="24px"><span
                                class="mx-2 text-danger fw-bold">STAR US</span> <span>ON GITHUB</span></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <nav class="nav navbar navbar-expand-lg navbar-light top-1 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand mx-2" href="#">
                        <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                        </svg>
                        <h5 class="logo-title">{{ env('APP_NAME') }}</h5>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-2" aria-controls="navbar-2" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-2">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-start">

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class=" bg-trasprent mt-n5">
                    <h1 class="mt-5 py-10">List of Blogs</h1>
                    <div class="row mt-3">
                        @foreach (\App\Models\Blog::all() as $blog)
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 400px;height: 200px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">{{ Str::substr($blog->description,0,100) }}</p>
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
        </div>
    </div>
    <div id="back-to-top" style="display: none;">
        <a class="btn btn-primary btn-xs p-0 position-fixed top" id="top" href="#top">
            <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
    <div class="middle" style="display: none;">
        <button data-trigger="left-side-bar" class="d-xl-none btn btn-xs mid-menu" type="button">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </button>
    </div>
</x-app-layout>
