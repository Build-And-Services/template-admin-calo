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
        <div class="xl:col-span-2">
            <div class="card mb-6">
                <div class="p-6">

                    <div class="flex items-center gap-5 mb-5">
                        <div>
                            <img src="{{ asset('assets-admin/images/event.jpg') }}" style="height: 150px;width:150px"
                                alt="" class="h-14 rounded-full">
                        </div>
                        <div>
                            <h5 class="text-lg text-gray-700 dark:text-white font-semibold mb-1">{{ $getEvent->title }}</h5>
                            @if ($getEvent->status == 'COMING SOON')
                                <span
                                    class="inline-flex items-center px-1 rounded text-xs font-medium bg-info text-white">{{ $getEvent->status }}
                                </span>
                            @elseif ($getEvent->status == 'ACTIVE')
                                <span
                                    class="inline-flex items-center px-1 rounded text-xs font-medium bg-success text-white">{{ $getEvent->status }}
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-1 rounded text-xs font-medium bg-danger text-white">{{ $getEvent->status }}
                                </span>
                            @endif
                        </div>

                    </div>

                    <h4 class="text-lg font-semibold mb-3 dark:text-white">{{ $getEvent->eventcategories->name }}</h4>
                    <p class="text-gray-400">{{ $getEvent->description }}</p>
                    <div class="my-7">
                        <div class="grid sm:grid-cols-4 grid-cols-4">
                            <div class="col-span-1">
                                <h5 class="text-base mb-2 dark:text-white">Venue</h5>
                                <p class="text-secondary">{{ $getEvent->venue }}</p>
                            </div>

                            <div class="col-span-1">
                                <h5 class="text-base mb-2 dark:text-white">Due Date</h5>
                                <p class="text-secondary">
                                    {{ \Carbon\Carbon::parse($getEvent->date)->format('d, M Y') }}
                                </p>
                            </div>

                            <div class="col-span-1">
                                <h5 class="text-base mb-2 dark:text-white">Clock</h5>
                                <p class="text-secondary">
                                    {{ Carbon\Carbon::createFromFormat('H:i:s', $getEvent->start_time)->format('g:i A') }}
                                    to
                                    {{ Carbon\Carbon::createFromFormat('H:i:s', $getEvent->finish_time)->format('g:i A') }}
                                </p>
                            </div>
                            <div class="col-span-1">
                                <h5 class="text-base mb-2 dark:text-white">Open Gate</h5>
                                <p class="text-secondary">
                                    {{ Carbon\Carbon::createFromFormat('H:i:s', $getEvent->open_gate)->format('g:i A') }}
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="mt-3">
                        <h5 class="text-base dark:text-white">Artist : </h5>
                        @if ($getEvent->artists->isEmpty())
                            <div class="flex items-center gap-3 mt-3">
                                <h5 class="text-warning dark:text-white">Artis Belum Ditambahkan</h5>
                                <a href="{{ url('admin/artist/') }}"
                                    class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white rounded-full w-7 h-7 "><i
                                        class="mdi mdi-pencil text-base"></i>
                                </a>
                            </div>
                        @else
                            <div class="flex items-center gap-3 mt-3">
                                @foreach ($getEvent->artists as $artist)
                                    <a href="{{ url('admin/artist') }}"> <img alt="Image Description"
                                            data-fc-type="tooltip" data-fc-placement="top" src="{{ asset($artist->img) }}"
                                            class="h-20 w-20 rounded-lg">
                                        <div class="bg-black hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                                            role="tooltip">
                                            {{ $artist->name }}
                                            <div data-fc-arrow class="bg-black w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]">
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <a href="{{ url('admin/event/' . $getEvent->id . '/edit') }}"
                                    class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white rounded-full w-7 h-7 "><i
                                        class="mdi mdi-pencil text-base"></i>
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <h5 class="text-base dark:text-white">Attached Files : </h5>
                        <div class="flex items-center gap-4 mt-3">
                            <div>
                                <a href=""><img src="{{ asset($getEvent->img) }}"
                                        class="rounded border-4 dark:border-gray-700" alt="attached-img"
                                        style="width: 300px;height:400px"></a>
                                <p class="mt-1"><small>Poster</small></p>
                            </div>
                            <a href="{{ url('admin/event/' . $getEvent->id . '/edit') }}"
                                class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white rounded-full w-7 h-7 "><i
                                    class="mdi mdi-pencil text-base"></i> </a>
                        </div>

                        <div class="flex gap-3 justify-end mt-3">
                            <a href="{{ url('admin/event/' . $getEvent->id . '/edit') }}"
                                class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white">Edit
                            </a>

                            <a href="{{ url('admin/event') }}" class="flex rounded-sm overflow-hidden">
                                <button
                                    class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                        class="mdi mdi-arrow-left"></i></button>
                                <button class="btn bg-success text-white rounded-none">Back</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
