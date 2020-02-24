@extends('layouts.admin.master')
@section('title', 'Create Post')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Post</h4>

                <form class="forms-sample" action="{{route('post.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control" id="exampleSelectGender">
                            <option>News</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="exampleTextarea1" rows="6" placeholder="Content"></textarea>
                    </div>


                    <label>Status</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="status">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="status">
                                    Unpublished
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary mr-2 btn-sm">Save</button>
                    <button class="btn btn-light btn-dark btn-sm">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
