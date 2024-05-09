@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col gap-6">
        @if (session('success'))
        <div id="dismiss-example" class="border bg-info/10 text-info border-info/20 rounded py-3 px-5 flex justify-between items-center">
            <p>
                <span class="font-bold">Success</span> {{ session('success') }}
            </p>
            <button class="text-xl/[0]" data-fc-dismiss="dismiss-example" type="button">
            <i class="mdi mdi-close text-xl text-gray-400"></i>
            </button>
        </div>
        @endif
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
                    <h3 class="card-title">All Orders</h3>
                    <a href="{{url('admin/event')}}" class="flex rounded-sm overflow-hidden">
                        <button class="btn bg-success text-white rounded-none px-3 relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"><i class="mdi mdi-plus"></i></button>
                        <button class="btn bg-success text-white rounded-none">Go To Event</button>
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Username Customer</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Ticket Type</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Quantity</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Payment Method</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <?php $no=1; ?>
                                    @foreach ($getOrders as $item)
                                        <tr class="bg-gray-50 dark:bg-gray-700/50">
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">{{$no++}}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">{{$item->user_id}}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">{{$item->quantity}}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">{{$item->ticket_id}}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">{{$item->payment_method_id}}</td>
                                            <td class="px-4 py-4">
                                                <div class="flex items-center text-center justify-start space-x-3">
                                                    <a href="{{url('admin/payment-method/'. $item->id .'/edit')}}" class="border border-info/20 btn bg-info/20 text-info hover:bg-info hover:text-white"><i class="mdi mdi-pencil text-base"></i> </a>
                                                    <form action="{{url('admin/payment-method',$item->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border border-danger/20 btn bg-danger/20 text-danger hover:bg-danger hover:text-white"> <i class="mdi mdi-trash-can-outline text-base"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
