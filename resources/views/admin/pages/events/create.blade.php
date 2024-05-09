@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col gap-6">
        @if (session('error'))
            <div id="dismiss-example-danger" class="border bg-danger/10 text-danger border-danger/20 rounded-md py-3 px-5 flex justify-between items-center">
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
                    <h3 class="card-title">Create Event</h3>
                    <a href="{{ url('admin/event') }}" class="flex rounded-sm overflow-hidden">
                        <button
                            class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                class="mdi mdi-arrow-left"></i></button>
                        <button class="btn bg-success text-white rounded-none">Back</button>
                    </a>
                </div>
                <form action="{{ url('admin/event') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid lg:grid-cols-2 gap-5">
                        <div>
                            <label for="title" class="block text-gray-600 mb-2">Event Name</label>
                            <input type="text" name="title" class="form-input" id="title" required>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="event_category_id">Event Category</label>
                            <select class="form-select" name="event_category_id" id="event_category_id" required>
                                <option selected disabled>Select Event Category</option>
                                @foreach ($getEventCategory as $item)
                                    <option value="{{$item->id}}" >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="example-date">Date</label>
                            <input class="form-input" id="example-date" type="date" name="date" required>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="example-time">Start Time</label>
                            <input class="form-input" id="example-time" type="time" name="start_time" required>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="example-time">Finish Time</label>
                            <input class="form-input" id="example-time" type="time" name="finish_time" required>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="example-time">Open Gate</label>
                            <input class="form-input" id="example-time" type="time" name="open_gate" required>
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-gray-600">Venue</label>
                            <input type="text" name="venue" class="form-input" id="name" required>
                        </div>
                        <div>
                            <label for="img" class="block mb-2 text-gray-600">Image</label>
                            <input type="file" name="img" class="form-input" id="img" required>
                            @error('img')
                                    <small class="text-red-600">{{ $message }}</small>
                            @enderror
                            @error('img.*')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="description">Description</label>
                            <textarea class="form-input" name="description" id="description" rows="5"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-600 mb-2" for="example-select">Status</label>
                            <select class="form-select" name="status" id="example-select" required>
                                <option selected disabled>Select Status</option>
                                <option value="active">ACTIVE</option>
                                <option value="coming soon">COMING SOON</option>
                                <option value="ended">ENDED</option>
                            </select>
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
