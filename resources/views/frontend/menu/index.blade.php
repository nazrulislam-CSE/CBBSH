@extends('layouts.frontend.app', ['pageTitle' => $page->page_title])

@section('content')

<!-- Breadcrumb Banner Start -->
{{-- <section class="breadcrumb-banner" style="background-image: url('{{ asset('frontend/assets/img/breadcrumb-bg.jpg') }}'); padding: 100px 0; text-align: center; color: #fff;">
    <div class="container">
        <h1 class="page-title">{{ $page->page_title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}" style="color: #fff;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page->page_title }}</li>
            </ol>
        </nav>
    </div>
</section> --}}
<!-- Breadcrumb Banner End -->

<!-- Page Content -->
<section class="page-content pt-5 pb-5">
    <div class="container">
        <h3>{{ $page->page_title ?? 'No content available' }}</h3>
        <p>{!! $page->page_description ?? 'No content available' !!}</p>
    </div>
</section>
@endsection
