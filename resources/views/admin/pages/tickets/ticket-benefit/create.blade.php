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
                    <h3 class="card-title">Create Ticket Benefit</h3>
                    <a href="{{ url('admin/ticket-benefit') }}" class="flex rounded-sm overflow-hidden">
                        <button
                            class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                class="mdi mdi-arrow-left"></i></button>
                        <button class="btn bg-success text-white rounded-none">Back</button>
                    </a>
                </div>
                <form action="{{ url('admin/ticket-benefit') }}" method="POST" enctype="multipart/form-data">
                <div class="grid lg:grid-cols-2 gap-5">
                        @csrf
                        <div>
                            <label class="block text-gray-600 mb-2" for="ticket_category_id">Ticket Category</label>
                            <select class="form-select" name="ticket_category_id" id="ticket_category_id" required>
                                <option selected disabled>Select Ticket Category</option>
                                @foreach ($getTicketCategory as $item)
                                    <option value="{{$item->id}}" >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="benefits" class="block mb-2">Ticket Benefit</label>
                            <textarea type="text" name="benefits" class="form-input" id="benefits" required></textarea>
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
