@extends('admin.layouts.app')

@section('content')
    @if (session('success'))
        <div id="dismiss-example"
            class="border bg-info/10 text-info border-info/20 rounded py-3 px-5 flex justify-between items-center">
            <p>
                <span class="font-bold">Success</span> {{ session('success') }}
            </p>
            <button class="text-xl/[0]" data-fc-dismiss="dismiss-example" type="button">
                <i class="mdi mdi-close text-xl text-gray-400"></i>
            </button>
        </div>
    @endif
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

    <div class="flex items-center justify-between my-8">
        <h3 class="card-title text-2xl">All Events</h3>
        <a href="{{ url('admin/event/create') }}" class="flex rounded-sm overflow-hidden">
            <button
                class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                    class="mdi mdi-plus"></i></button>
            <button class="btn bg-success text-white text-lg rounded-none">Add Event</button>
        </a>
    </div>
    <div class="grid xl:grid-cols-3 gap-6">

        @foreach ($getEvent as $item)
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-lg font-medium">{{$item->title}}</a>
                        @if ($item->status === "COMING SOON")
                        <div class="bg-info text-xs text-white rounded-md px-1 font-medium" role="alert">
                            <span>{{$item->status}}</span>
                        </div>

                        @elseif ($item->status === "ACTIVE")
                        <div class="bg-success text-xs text-white rounded-md px-1 font-medium" role="alert">
                            <span>{{$item->status}}</span>
                        </div>

                        @else
                        <div class="bg-danger text-xs text-white rounded-md px-1 font-medium" role="alert">
                            <span>{{$item->status}}</span>
                        </div>

                        @endif
                    </div>

                    <div class="flex flex-col">
                        <h5 class="my-3">
                            <a href="#" class="text-success uppercase font-semibold">{{$item->eventcategories->name}}</a>
                        </h5>
                        <p class="text-gray-400 text-xs/normal mb-5">{{Illuminate\Support\Str::limit($item->description, 150)}}
                        </p>

                        <div class="flex items-center gap-6">
                            <div>
                                <p class="text-gray-400">Date</p>
                                <h4 class="text-base">{{\Carbon\Carbon::parse($item->date)
                                    ->format('d, M Y')}}</h4>
                            </div>
                            <div>
                                <p class="text-gray-400">Clock</p>
                                <div class="flex">
                                    <h4 class="text-base">{{ Carbon\Carbon::createFromFormat('H:i:s', $item->start_time)->format('g:i A') }} to {{ Carbon\Carbon::createFromFormat('H:i:s', $item->finish_time)->format('g:i A') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div>
                                <p class="text-gray-400">Open Gate</p>
                                <div class="flex">
                                    <h4 class="text-base">{{ Carbon\Carbon::createFromFormat('H:i:s', $item->open_gate)->format('g:i A') }}</h4>
                                </div>
                            </div>
                            <div>
                                <p class="text-gray-400">Venue</p>
                                <h4 class="text-base">{{$item->venue}}</h4>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-8 mb-6">
                            <h2 class="text-base">Artists : </h2>
                            <div class="flex -space-x-2">
                                @foreach ($item->artists as $artist)
                                    <div>
                                        <img class="inline-block h-10 w-10 rounded-full border-2 border-white dark:border-gray-700"
                                            src="{{ asset($artist->img) }}" alt="Image Description"
                                            data-fc-type="tooltip" data-fc-placement="top">
                                        <div class="bg-black hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                                            role="tooltip">
                                            {{$artist->name}}
                                            <div data-fc-arrow class="bg-black w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center text-center justify-end space-x-3">
                            <a href="{{url('admin/event', $item->id )}}" class="border border-warning/20 btn bg-warning/20 text-warning hover:bg-warning hover:text-white"><i class="mdi mdi-eye text-base"></i> </a>
                            <a href="{{url('admin/event/'. $item->id. '/edit' )}}" class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white"><i class="mdi mdi-pencil text-base"></i> </a>
                            <form action="{{url('admin/event', $item->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border border-danger/20 btn bg-danger/20 text-danger hover:bg-danger hover:text-white"> <i class="mdi mdi-trash-can-outline text-base"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
