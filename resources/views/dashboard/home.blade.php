@extends('layout.app-2')

@section('title', 'Dashboard')

@section('content')
    <section>
        <div class="widget">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="widget_item">
                        <p>Total Post</p>
                        <div class="d-flex align-items-center gap-3 my-3">
                            <i class="fa-solid fa-pen"></i>
                            <h3>214</h3>
                        </div>
                        <div class="text-end">
                            <span>This month</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="widget_item">
                        <p>Total Views</p>
                        <div class="d-flex align-items-center gap-3 my-3">
                            <i class="fa-solid fa-eye"></i>
                            <h3>130K</h3>
                        </div>
                        <div class="text-end">
                            <span>This month</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="widget_item">
                        <p>Most Viewed Article</p>
                        <h4>The Most Awesome Article Man Has Ever Written</h4>
                        <div class="text-end">
                            <span>This month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart">
            <canvas id="myChart"></canvas>
        </div>

        
        <script>
            const ctx = document.getElementById('myChart');
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
                },
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>
    </section>

@endsection