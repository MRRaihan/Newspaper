@extends('layouts.admin.master')
@section('title', 'List Of Posts')
@section('content')
<div class="row">


        <div class="col-12 col-md-10 ">
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Title</h3>
                        <p class="card-subtitle">
                           News, <i>Published</i><br>
                            31 Jan 2020
                        </p>
                        <p>
                            RoyalUI Admin is a responsive HTML template that is based on the CSS framework Bootstrap 4 and it is built with Sass. Sass compiler makes it easier to code and customize. If you are unfamiliar with Bootstrap or Sass, visit their
                            website and read through the documentation. All of Bootstrap components have been modified to fit the style of RoyalUI Admin and provide a consistent look throughout the template
                        </p>
                        <div class="text-right">
                            <a href="{{route('post.index')}}" class="btn-sm btn btn-dribbble">Back</a>
                        </div>


                    </div>
                </div>
            </div>

        </div>

</div>
@endsection
