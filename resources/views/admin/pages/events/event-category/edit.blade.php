@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col gap-6">
        @if (session('error'))
            <div id="dismiss-example-danger"
                class="border bg-danger/10 text-danger border-danger/20 rounded-md py-3 px-5 flex justify-between items-center">
                <p>
                    <span class="font-bold">Error</span> {{ session('error') }}
                </p>
                <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
                    <i class="mdi mdi-close text-xl text-gray-400"></i>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="card-title">Edit Event Category</h3>
                    <a href="{{ url('admin/event-category') }}" class="flex rounded-sm overflow-hidden">
                        <button
                            class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                class="mdi mdi-arrow-left"></i></button>
                        <button class="btn bg-success text-white rounded-none">Back</button>
                    </a>
                </div>
                <form action="{{ url('admin/event-category', $getEventCategory->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="grid lg:grid-cols-2 gap-5">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name" class="block mb-2">Event Category Name</label>
                            <input type="text" name="name" class="form-input" value="{{$getEventCategory->name}}" id="name" required>
                        </div>

                        <div class="lg:col-span-2 mt-4">
                            <div class="flex rounded-sm overflow-hidden">
                                <button type="submit"
                                    class="btn bg-info text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                        class="mdi mdi-check-all"></i></button>
                                <button class="btn bg-info text-white rounded-none">Submit</button>
                            </div>

                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
