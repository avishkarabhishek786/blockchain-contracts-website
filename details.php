<?php include "top.php";?>

<main role="main" class="main">
    <section class="jumbotron text-left">
        <div class="container-fluid container-body">
            <div class="row">
                <div class="col-md-12">
                    <h3>Ranchi Mall Incorporation Blockchain Contract</h3>
                    <address>5 Feb, 2018</address>
                </div>
            </div>

            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-12 col-md-4 boxes"><p class="lead">Administrator:</p> John </div>
                <div class="col-12 col-md-8 boxes">
                    <p class="lead">Objective: </p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda autem beatae eaque earum eveniet iure iusto nisi nostrum, omnis possimus quidem sapiente? Atque facilis provident quos rerum velit veniam?
                </div>
            </div>

            <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
            <div class="row">
                <div class="col-6 col-md-4 boxes"><p class="lead">Initial Valuation:</p> 2.5 RMT / 25k USD</div>
                <div class="col-6 col-md-4 boxes"><p class="lead">Running Valuation:</p> 7.5 RMT / 75k USD</div>
                <div class="col-md-4 chart-container">
                    <canvas id="myChart" ></canvas>
                </div>
            </div>

            <!-- Columns are always 50% wide, on mobile and desktop -->
            <div class="row">
                <div class="col-12 boxes">
                    <p class="lead">Description:</p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                </div>
            </div>

        </div>
    </section>
</main>

<?php include "bottom.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var options = {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                stacked: true,
                gridLines: {
                    display: true,
                    color: "rgba(255,99,132,0.2)"
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false
                }
            }]
        }
    };

    var myChart = new Chart(ctx, {
        type: 'line',
        options: options,
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [{
                label: 'RMT',
                data: [12, 19, 3, 17, 6, 3, 7],
                backgroundColor: "rgba(153,255,51,0.4)"
            }, {
                label: 'USD',
                data: [2, 29, 5, 5, 2, 3, 10],
                backgroundColor: "rgba(255,153,0,0.4)"
            }]
        }
    });

</script>