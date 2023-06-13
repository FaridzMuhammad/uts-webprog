@extends('layout.sidebar')

@section('content')
    <div container-fluid py-4>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Category</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    @foreach ($skill as $item2)
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <span class="mb-2 txet-sm"> Category </span><h5 class="mb-3 text-sm">{{ $item2->category->name }}</h5>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Skill</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    @foreach ($skill as $item)
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <span class="mb-2 txet-sm"> Category </span><h5 class="mb-3 text-sm">{{ $item->category->name }}</h5>
                                    <span class="mb-2 txet-sm"> Skill </span><h5 class="mb-3 text-sm">{{ $item->title }}</h5>
                                    <span class="mb-2 text-sm">Percentage<span
                                            class="ms-sm-2 text-dark font-weight-bold">{{ $item->percentage }}</span></span>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
