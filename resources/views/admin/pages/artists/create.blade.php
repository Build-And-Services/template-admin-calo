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
                    <h3 class="card-title">Create Artist</h3>
                    <a href="{{ url('admin/artist') }}" class="flex rounded-sm overflow-hidden">
                        <button
                            class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                class="mdi mdi-arrow-left"></i></button>
                        <button class="btn bg-success text-white rounded-none">Back</button>
                    </a>
                </div>
                <form action="{{ url('admin/artist') }}" method="POST" enctype="multipart/form-data">
                <div class="grid lg:grid-cols-2 gap-5">

                        @csrf
                        <div>
                            <label for="name" class="block mb-2">Artist Name</label>
                            <input type="text" name="name" class="form-input" id="name" required>
                        </div>
                        <div>
                            <label for="instagram" class="block mb-2">Instagram</label>
                            <div class="flex items-center">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-e-none dark:border-gray-600 dark:bg-gray-600"
                                    id="inputGroupPrepend2">@</span>
                                <input type="text" class="form-input border-s-0 rounded-s-none" id="instagram"
                                    name="instagram" placeholder="https://instagram.com/username" required>
                            </div>
                        </div>
                        <div>
                            <label for="twitter" class="block mb-2">Twitter</label>
                            <div class="flex items-center">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-e-none dark:border-gray-600 dark:bg-gray-600"
                                    id="inputGroupPrepend2">@</span>
                                <input type="text" class="form-input border-s-0 rounded-s-none" id="twitter"
                                    name="twitter" aria-describedby="inputGroupPrepend2"
                                    placeholder="https://twitter.com/username" required>
                            </div>
                        </div>
                        <div>
                            <label for="tiktok" class="block mb-2">Tiktok</label>
                            <div class="flex items-center">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-e-none dark:border-gray-600 dark:bg-gray-600"
                                    id="inputGroupPrepend2">@</span>
                                <input type="text" class="form-input border-s-0 rounded-s-none" id="tiktok"
                                    name="tiktok" aria-describedby="inputGroupPrepend2"
                                    placeholder="https://tiktok.com/username" required>
                            </div>
                        </div>
                        <div>
                            <label for="profession" class="block mb-2">Profesion</label>
                            <input type="text" name="profession" class="form-input" id="profession" required>
                        </div>
                        <div>
                            <label for="event_id" class="block mb-2">Event</label>
                            <select class="form-select" name="event_id" id="event_id" required>
                                <option selected disabled>Choose...</option>
                                @foreach ($getEvent as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="image" class="block mb-2">Image</label>
                            <input type="file" name="image" class="form-input" id="image" required>
                            @error('image')
                                    <small class="text-red-600">{{ $message }}</small>
                            @enderror
                            @error('image.*')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
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
