@extends('admin.layouts.app')

@section('content')
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
<div class="flex flex-col gap-6">

    <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-11">
                    <h4 class="card-title">Total Revenue</h4>

                    <div class="z-10">
                        <button data-fc-target="dropdown-target1" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target1" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div dir="ltr">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 " data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    </div>

                    <div class="text-end">
                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 256 </h2>
                        <p class="text-gray-400 font-normal">Revenue today</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Sales Analytics</h4>

                    <div>
                        <button data-fc-target="dropdown-target2" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target2" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="bg-success text-white rounded-full text-xs px-2 py-0.5">32% <i class="mdi mdi-trending-up"></i></div>

                    <div class="text-end">
                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 8451 </h2>
                        <p class="text-gray-400 font-normal">Revenue today</p>
                    </div>

                </div>

                <div class="flex w-full h-[5px] bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 mt-6">
                    <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="flex flex-col justify-center overflow-hidden bg-success/10" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-11">
                    <h4 class="card-title">Statistics</h4>

                    <div class="z-10">
                        <button data-fc-target="dropdown-target3" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target3" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="widget-chart-box-1" dir="ltr">
                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a" data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    </div>

                    <div class="text-end">
                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 4569 </h2>
                        <p class="text-gray-400 font-normal">Revenue today</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Daily Sales</h4>

                    <div>
                        <button data-fc-target="dropdown-target4" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target4" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="bg-pink text-white rounded-full text-xs px-2 py-0.5">32% <i class="mdi mdi-trending-up"></i></div>

                    <div class="text-end">
                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 158 </h2>
                        <p class="text-gray-400 font-normal">Revenue today</p>
                    </div>

                </div>

                <div class="flex w-full h-[5px] bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 mt-6">
                    <div class="flex flex-col justify-center overflow-hidden bg-pink" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="flex flex-col justify-center overflow-hidden bg-pink/10" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div> <!-- card-end -->
    </div> <!-- grid-end -->

    <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Daily Sales</h4>

                    <div class="z-10">
                        <button data-fc-target="dropdown-target7" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target7" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-chart text-center">
                    <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                    <ul class="list-inline chart-detail-list mb-0">
                        <li class="list-inline-item">
                            <h5 style="color: #ff8acc;"><i class="fa fa-circle me-1"></i>Series A</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Statistics</h4>

                    <div class="z-10">
                        <button data-fc-target="dropdown-target8" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target8" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Total Revenue</h4>

                    <div class="z-10">
                        <button data-fc-target="dropdown-target9" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target9" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
            </div>
        </div> <!-- card-end -->
    </div> <!-- grid-end -->

    <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <div class="flex items-center gap-6">
                    <img src="{{asset('assets-admin/images/users/user-3.jpg')}}" class="rounded-full h-16" alt="user">

                    <div class="flex-grow overflow-hidden">
                        <h5 class="text-gray-800 dark:text-white mb-1">Chadengle</h5>
                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                        <p class="text-warning font-semibold text-sm">Admin</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center gap-6">
                    <img src="{{asset('assets-admin/images/users/user-2.jpg')}}" class="rounded-full h-16" alt="user">

                    <div class="flex-grow overflow-hidden">
                        <h5 class="text-gray-800 dark:text-white mb-1"> Michael Zenaty</h5>
                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                        <p class="text-pink font-semibold text-sm">Support Lead</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center gap-6">
                    <img src="{{asset('assets-admin/images/users/user-1.jpg')}}" class="rounded-full h-16" alt="user">

                    <div class="flex-grow overflow-hidden">
                        <h5 class="text-gray-800 dark:text-white mb-1">Still david</h5>
                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                        <p class="text-success font-semibold text-sm">Designer</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex items-center gap-6">
                    <img src="{{asset('assets-admin/images/users/user-10.jpg')}}" class="rounded-full h-16" alt="user">

                    <div class="flex-grow overflow-hidden">
                        <h5 class="text-gray-800 dark:text-white mb-1">Tomaslau</h5>
                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                        <p class="text-info font-semibold text-sm">Developer</p>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->
    </div> <!-- grid-end -->

    <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">

                <div class="flex items-center justify-between mb-6">
                    <h4 class="card-title">Inbox</h4>

                    <div>
                        <button data-fc-target="dropdown-target5" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                            <i class="mdi mdi-dots-vertical text-xl"></i>
                        </button>

                        <div id="dropdown-target5" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Another action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Something else
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <a href="#" class="flex justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <img src="{{asset('assets-admin/images/users/user-1.jpg')}}" class="rounded-full h-10" alt="">
                            <div>
                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Chadengle</h5>
                                <p class="text-xs text-gray-400">Hey! there I'm available...</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400">13:40 PM</p>
                    </a>

                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                    <a href="#" class="flex justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <img src="{{asset('assets-admin/images/users/user-2.jpg')}}" class="rounded-full h-10" alt="">
                            <div>
                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Tomaslau</h5>
                                <p class="text-xs text-gray-400">I've finished it! See you so...</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400">13:34 PM</p>
                    </a>

                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                    <a href="#" class="flex justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <img src="{{asset('assets-admin/images/users/user-3.jpg')}}" class="rounded-full h-10" alt="">
                            <div>
                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Still david</h5>
                                <p class="text-xs text-gray-400">This theme is awesome!</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400">13:17 PM</p>
                    </a>

                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                    <a href="#" class="flex justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <img src="{{asset('assets-admin/images/users/user-4.jpg')}}" class="rounded-full h-10" alt="">
                            <div>
                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Kurafire</h5>
                                <p class="text-xs text-gray-400">Nice to meet you</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400">12:20 PM</p>
                    </a>

                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                    <a href="#" class="flex justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <img src="{{asset('assets-admin/images/users/user-5.jpg')}}" class="rounded-full h-10" alt="">
                            <div>
                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Shahedk</h5>
                                <p class="text-xs text-gray-400">Hey! there I'm available...</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-400">10:15 AM</p>
                    </a>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="xl:col-span-2 col-span-1">
            <div class="card">
                <div class="p-6">

                    <div class="flex items-center justify-between mb-6">
                        <h3 class="card-title">Latest Projects</h3>

                        <div>
                            <button data-fc-target="dropdown-target6" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                <i class="mdi mdi-dots-vertical text-xl"></i>
                            </button>

                            <div id="dropdown-target6" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                    Another action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                    Something else
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                        <tr class="border-b-2 dark:border-gray-700">
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">#</th>
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Project Name</th>
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Start Date</th>
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Due Date</th>
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Status</th>
                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200"> Assign</th>
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">1</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">26/04/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-danger rounded-md px-1 py-0.5">Released</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                        </tr>

                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">2</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Frontend v1</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">26/04/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-success rounded-md px-1 py-0.5">Released</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto admin</td>
                                        </tr>

                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">3</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.1</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/05/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">10/05/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-pink rounded-md px-1 py-0.5">Pending</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                        </tr>

                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">4</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Frontend v1.1</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-purple rounded-md px-1 py-0.5">Work in Progress</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto admin</td>
                                        </tr>

                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">5</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.3</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-warning rounded-md px-1 py-0.5">Coming soon</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                        </tr>

                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">6</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.3</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">Coming soon</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400"> Adminto admin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->
    </div> <!-- grid-end -->

</div> <!-- flex-end -->
@endsection
