<x-app-layout>
    @php( $count = $members->count() )
    @pushOnce('linkx')
    <link href="{{ asset('public/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
    @endPushOnce

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">@lang('locale.total_men')</h4>

                    <div class="widget-chart-1">
                        <div class="widget-detail-1 text-end">
                            <span class="badge text-success text-lg rounded-pill float-start mt-3"><i class="mdi mdi-human-female" style="font-size: 52px"></i> </span>
                            <h2 class="fw-normal mb-1"> {{ $members->where('gender', 'homme')->count() }} </h2>
                            <p class="text-muted mb-4">@lang('locale.men')</p>
                        </div>
                        <div class="progress progress-bar-alt-success progress-sm">
                            <div class="progress-bar bg-success" role="progressbar"
                                    aria-valuenow="{{ ($members->where('gender', 'homme')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: {{ ($members->where('gender', 'homme')->count()/$count)*100 }}%;">
                                <span class="visually-hidden">{{ ($members->where('gender', 'homme')->count()/$count)*100 }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">@lang('locale.total_women')</h4>

                    <div class="widget-chart-1">
                        <div class="widget-detail-1 text-end">
                            <span class="badge text-pink rounded-pill float-start mt-3"><i class="mdi mdi-human-male" style="font-size: 52px"></i> </span>
                            <h2 class="fw-normal mb-1"> {{ $members->where('gender', 'femme')->count() }} </h2>
                            <p class="text-muted mb-4">@lang('locale.women')</p>
                        </div>
                        <div class="progress progress-bar-alt-pink progress-sm">
                            <div class="progress-bar bg-pink" role="progressbar"
                                    aria-valuenow="{{ ($members->where('gender', 'femme')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: {{ ($members->where('gender', 'femme')->count()/$count)*100 }}%;">
                                <span class="visually-hidden">{{ ($members->where('gender', 'femme')->count()/$count)*100 }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0">CEP <span class="text-primary float-end">{{ round(($members->where('study', 'CEP')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-primary progress-sm mt-0 mb-3">
                        <div class="progress-bar bg-primary progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'CEP')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'CEP')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>

                    <h5 class="mt-0">BEPC <span class="text-pink float-end">{{ round(($members->where('study', 'BEPC')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-pink progress-sm mt-0 mb-3">
                        <div class="progress-bar bg-pink progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'BEPC')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'BEPC')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>

                    <h5 class="mt-0">BACCALAUREAT UNIQUE <span class="text-info float-end">{{ round(($members->where('study', 'BACCALAUREAT UNIQUE')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-info progress-sm mt-0">
                        <div class="progress-bar bg-info progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'BACCALAUREAT UNIQUE')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'BACCALAUREAT UNIQUE')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0">LICENCE <span class="text-warning float-end">{{ round(($members->where('study', 'LICENCE')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-warning progress-sm mt-0 mb-3">
                        <div class="progress-bar bg-warning progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'LICENCE')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'LICENCE')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>

                    <h5 class="mt-0">MASTER <span class="text-danger float-end">{{ round(($members->where('study', 'MASTER')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-danger progress-sm mt-0 mb-3">
                        <div class="progress-bar bg-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'MASTER')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'MASTER')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>

                    <h5 class="mt-0">PROFESSORAT <span class="text-success float-end">{{ round(($members->where('study', 'PROFESSORAT')->count()/$count)*100, 1) }}%</span></h5>
                    <div class="progress progress-bar-alt-success progress-sm mt-0">
                        <div class="progress-bar bg-success progress-animated wow animated animated" role="progressbar" aria-valuenow="{{ ($members->where('study', 'PROFESSORAT')->count()/$count)*100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($members->where('study', 'PROFESSORAT')->count()/$count)*100 }}%; visibility: visible; animation-name: animationProgress;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-priority="1">@lang('locale.name')</th>
                                            <th data-priority="3">@lang('locale.firstname')</th>
                                            <th data-priority="1">@lang('locale.phone')</th>
                                            <th data-priority="3">@lang('locale.email')</th>
                                            <th data-priority="3">@lang('locale.study')</th>
                                            <th data-priority="6">@lang('locale.gender')</th>
                                            <th data-priority="6">@lang('locale.action', ['suffix'=>'s'])</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->firstname }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->study }}</td>
                                            <td class="">{{ strtoupper($item->gender) }}</td>
                                            <td> - </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> 
                            <!-- end .table-responsive -->
                        </div> 
                        <!-- end .table-rep-plugin-->
                    </div> 
                    <!-- end .responsive-table-plugin-->
                </div>
            </div> 
            <!-- end card -->
        </div> 
        <!-- end col -->
    </div>

    @pushOnce('scriptx')
    <script src="{{ asset('public/libs/admin-resources/rwd-table/rwd-table.min.js') }}"></script>
    <script src="{{ asset('public/js/pages/responsive-table.init.js') }}"></script>
    @endPushOnce
</x-app-layout>
