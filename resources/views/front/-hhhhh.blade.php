@extends('layouts.front.master')
@section('title', 'About')
@section('content')
    <section class="site-section pt-5">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <div class="row">
                        <div class="col-md-12">
                            @foreach($authors as $author)
                                <h1 class="mb-4">Hi There! I'm {{$author->name}}</h1>
                                <p class="mb-5"><img src="{{asset($author->image)}}" alt="Image placeholder" class="img-fluid"></p>
                                <h3 style="line-height: 30px;text-align: justify;">
                                    {{$author->about}}
                                </h3>
                                <div class="row mb-5 mt-5">
                                    <div class="col-md-12 mb-5">
                                        <h2>My Latest Posts</h2>
                                    </div>

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        @foreach($latest_posts as $post)
                                            <div class="post-entry-horzontal ">
                                                <a href="{{route('post.details', $post->id)}}">
                                                    <div class="image" style="background-image: url('{{asset($post->image)}}');"></div>
                                                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset($author->image)}} " alt="Colorlib"> {{$author->name}}</span>&bullet;
                        <span class="mr-2">{{date('M d, Y', strtotime($post->published_at))}}</span> &bullet;
                        <span class="ml-2"><span class="fa"></span>{{$post->category->name}}</span>
                      </div>
                      <h2>{{$post->title}}</h2>
                    </span>
                                                </a></div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 text-center">
                                        <nav aria-label="Page navigation" class="text-center">
                                            <ul class="pagination">
                                                {{$latest_posts->render()}}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    @include('front._right_side')
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
@endsection
