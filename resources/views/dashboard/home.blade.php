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
                            <h3>{{ $postCount }}</h3>
                        </div>
                        <div class="text-end">
                            <span>This month</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="widget_item">
                        <p>Total Post Likes</p>
                        <div class="d-flex align-items-center gap-3 my-3">
                            <i class="fa-regular fa-heart"></i>
                            <h3>{{ $likeCount }}</h3>
                        </div>
                        <div class="text-end">
                            <span>This month</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="widget_item">
                        <p>Most Liked Article</p>
                        @if ($mostLikedPost)
                            <h4>{{ $mostLikedPost->post_title }}</h4>
                        @else
                            <h4>No most liked post found</h4>
                        @endif
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