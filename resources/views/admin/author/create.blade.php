@extends('layouts.admin.master')
@section('title', 'Create  new Author')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create New Author</h4>

                    <form class="forms-sample" action="{{route('author.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="User Name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="User Email">
                        </div>

                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" class="form-control" id="about" rows="6" placeholder="About"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2 btn-sm">Save</button>
                        <button class="btn btn-light btn-dark btn-sm">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
