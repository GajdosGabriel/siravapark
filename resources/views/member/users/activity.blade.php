@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - User activity')

@section('content')
    <div class="container-fluid xs-mt-20">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('member.partner.users.user', ['id' => $objUser->id]) }}">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="">Activity</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-12 col-lg-8 xs-pt-15 xs-pb-15 bg_secondary">
                <div class="row">
                    <div class="col-6">
                        <h3>User activity <span class="badge badge-secondary">{{ count($arrUserActivities) }} / {{ $arrUserActivities->total() }}</span></h3>
                    </div>

                    <div class="col-6">
                        <div class="pagination-right">
                            {{ $arrUserActivities->links() }}
                        </div>
                    </div>
                </div>

                <ul class="list-group users xs-mb-20">
                    @foreach($arrUserActivities as $objActivity)
                        @component('components/admin/userActivity', ['objActivity' => $objActivity])@endcomponent
                    @endforeach
                </ul>

                <div class="pagination-center">
                    {{ $arrUserActivities->links() }}
                </div>
            </div>

            <div class="col-12 col-lg-4 xs-pt-15 xs-pb-15">
                <h3 class="xs-mb-20">User's most visited pages <span class="badge badge-secondary">{{ count($arrChartData) }}</span></h3>

                <canvas id="mostVisitedPagesChart"></canvas>

                <table class="table table-sm table-striped table-bordered xs-mt-20">
                    <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th class="text-right">Visits</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($arrChartData as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td class="text-right">{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <script>
        var ctx = $("#mostVisitedPagesChart");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: {!! $arrChartData->values() !!},
                    backgroundColor: ['#C6B477', '#F2F0E8']
                }],
                labels: {!! $arrChartData->keys() !!}
            },
            options: {
                legend: false
            }
        });
    </script>
@endsection