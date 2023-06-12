@extends('layout.sidebar')

@section('content')
    <a class="btn bg-gradient-dark mb-2.5" href="javascript:;" id="popUpButton"><i class="fas fa-plus"
            aria-hidden="true"></i>&nbsp;&nbsp;Add
        Skill</a>
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Skill Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
                @foreach ($skill as $item)
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <span class="mb-2 text-sm"> Category </span><h5 class="mb-3 text-sm">{{ $item['category_name'] }}</h5>
                                <span class="mb-2 txet-sm"> Skill </span><h5 class="mb-3 text-sm">{{ $item['title'] }}</h5>
                                <span class="mb-2 text-sm">Percentage<span
                                        class="ms-sm-2 text-dark font-weight-bold">{{ $item['percentage'] }}</span></span>
                            </div>
                            <div class="ms-auto text-end"
                                style="display: flex;
                            align-items: baseline;">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                    href="{{ route('skill.delete', $item['id']) }}"><i class="far fa-trash-alt me-2"
                                        aria-hidden="true"></i>Delete</a>
                                <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal"
                                    data-bs-target="#modal-form-edit-{{ $item['id'] }}">Edit
                                </button>
                                <div class="modal fade" id="modal-form-edit-{{ $item['id'] }}" tabindex="-1"
                                    role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card card-plain">
                                                    <div class="card-header pb-0 text-left">
                                                        <h3 class="text-left font-weight-bolder text-info text-gradient"
                                                            style="display: flex">
                                                            Edit Skill</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form role="form text-left" method="POST"
                                                            action="{{ route('skill.update', $item['id']) }}"
                                                            enctype="multipart/form-data">
                                                            <div
                                                                style="display: flex;
                                                            flex-direction: column;
                                                            align-items: flex-start;">
                                                                @csrf
                                                                <label>Title</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Title" aria-label="Title"
                                                                        aria-describedby="email-addon" name="title"
                                                                        value="{{ $item['title'] }}">
                                                                </div>
                                                                <label>Category</label>
                                                                <div class="input-group mb-3">
                                                                    <select class="form-control" name="category_id">
                                                                        @foreach ($category as $categorys)
                                                                            <option value="{{ $categorys['id'] }}">
                                                                                {{ $categorys['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <label>percentage</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Title" aria-label="Title"
                                                                        aria-describedby="email-addon" name="percentage"
                                                                        value="{{ $item['percentage'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit"
                                                                    class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    <!-- PopUp -->

    <div id="formExp" class="form-exp">
        <form action="{{ route('skill.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card" style="background-color: rgba(255, 255, 255,); ">
                <h5 style="color: black; padding-top: 15px; padding-left: 15px;"> Form Experience</h5>
                <div class="card-body z-index-2 py-3">
                    <div class="row" style="justify-content: center">
                        <div class="col-md-10 ">
                            <label for="title" class="form-control-label">Title</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-10 ">
                            <label for="title" class="form-control-label">Category</label>
                            <div class="input-group mb-3">
                                <select class="form-control" name="category_id" required>
                                    @foreach ($category as $categorys)
                                            <option value="{{ $categorys['id']}}" selected>
                                                {{ $categorys['name']}}
                                            </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10 ">
                            <label for="percentage" class="form-control-label">Percentage</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="percentage" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex ;justify-content: flex-end; padding-bottom: 15px">
                    <button type="button" class="btn btn-danger" style="margin-right: 20px"
                        onclick="closeForm()">Close</button>
                    <button type="submit" class="btn btn-success" style="margin-right: 20px">Submit</button>
                </div>
            </div>
        </form>
    </div>
    {{-- PopUp Edit --}}
@endsection
