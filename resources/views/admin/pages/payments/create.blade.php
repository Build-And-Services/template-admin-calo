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
                    <h3 class="card-title">Create Payment Method</h3>
                    <a href="{{ url('admin/payment-method') }}" class="flex rounded-sm overflow-hidden">
                        <button
                            class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i
                                class="mdi mdi-arrow-left"></i></button>
                        <button class="btn bg-success text-white rounded-none">Back</button>
                    </a>
                </div>
                <form action="{{ url('admin/payment-method') }}" method="POST" enctype="multipart/form-data">
                <div class="grid lg:grid-cols-2 gap-5">
                        @csrf

                        <div>
                            <label for="platform" class="block mb-2">Platform</label>
                            <input type="text" name="platform" class="form-input" id="platform">
                            @error('platform')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-600 mb-2" for="type">Type</label>
                            <select class="form-select" name="type" id="type" required>
                                <option selected disabled>Select Type</option>
                                    <option value="no_rek">Nomor Rekening</option>
                                    <option value="no_hp">Nomor HP</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
