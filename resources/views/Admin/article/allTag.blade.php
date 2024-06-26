@extends('Admin.layouts.master')
@section('Content')
    <div class="content-wrapper">
        <div class="row py-3 justify-content-between align-items-center">
            <h2 class="fw-bold col-lg-auto">Tags</h2>
            <div class="col-lg-auto">
                <!-- Search Bar start -->
                <div class="search-bar">
                    <form>
                        <div class="row g-1 justify-content-lg-end justify-content-start">
                            <div class="col-4 col-lg-5 form-floating">
                                <input type="text" class="form-control" id="title" name="tagName" value="{{old('tagName')}}">
                                <label for="title">Tag</label>
                            </div>
                            <button class="col-auto btn border-0 btn-md" type="submit">
                                <i class="icon-search fs-5"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Search Bar ends -->
            </div>

        </div>
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tags Table</h4>
                        <p class="card-description">List of all <code>Article tags</code></p>
                        <div class="table-responsive content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Tags</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <form action="{{ route('admin.tags.update', $tag->slug) }}" method="POST"
                                              id="editForm_{{$tag->id}}">
                                            @csrf
                                            @method('PUT')
                                            <td>
                                                <div class="position-relative input-parent d-inline-block"
                                                     onclick="edit(this)">
                                                    <input type="text" class="custom-input d-inline-block"
                                                           name="tagName"
                                                           form="editForm_{{$tag->id}}"
                                                           value="{{ $tag->tagName }}" disabled="">
                                                    @error('tagName')
                                                    {{$message}}
                                                    @enderror
                                                    <i class="mdi mdi-pencil position-absolute pen-icon btn end-50"></i>
                                                    <button type="submit" class="btn btn-primary btn-xs invisible"
                                                            form="editForm_{{$tag->id}}">
                                                        Submit
                                                    </button>

                                                    <button type="cancel" class="btn btn-light btn-xs invisible"
                                                            form="editForm_{{$tag->id}}">
                                                        Cancel
                                                    </button>
                                                </div>

                                            </td>
                                        </form>
                                        <td class="py-2">
                                            <form action="{{ route('admin.tags.destroy', $tag->slug)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs delete"
                                                        onclick="alert('Are you sure you want to delete?')">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
