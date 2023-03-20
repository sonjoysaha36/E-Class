<h1 class="ms-3">Dashboard</h1>
              </div>
              <div class="container">
                <div class="row my-2">
                    <div class="col-md-3">
                        <div class="card bg-primary">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total User</h5>
                                <p class="card-text text-light text-center fw-bold">200</p>
                                </div>
                            <div class="card-footer text-muted text-center">
                                <a href="" class="text-decoration-none text-light">More info <i class="fa-solid fa-arrow-right btn text-light"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning ">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Attendance</h5>
                                <p class="card-text text-light text-center fw-bold">200</p>
                                </div>
                            <div class="card-footer text-muted text-center">
                                <a href="" class="text-decoration-none text-light">More info <i class="fa-solid fa-arrow-right btn text-light"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total Course</h5>
                                <p class="card-text text-light text-center fw-bold">200</p>
                                
                                </div>
                            <div class="card-footer text-muted text-center">
                                <a href="" class="text-decoration-none text-light">More info <i class="fa-solid fa-arrow-right btn text-light"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Current Balance</h5>
                                <p class="card-text text-light text-center fw-bold">200</p>
                                </div>
                            <div class="card-footer text-muted text-center">
                                <a href="" class="text-decoration-none text-light">More info <i class="fa-solid fa-arrow-right btn text-light"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="ms-3 col-md-6 mt-3">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    
                    <script>
                    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
                    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
                    
                    new Chart("myChart", {
                      type: "line",
                      data: {
                        labels: xValues,
                        datasets: [{
                          fill: false,
                          lineTension: 0,
                          backgroundColor: "rgba(0,0,255,1.0)",
                          borderColor: "rgba(0,0,255,0.1)",
                          data: yValues
                        }]
                      },
                      options: {
                        legend: {display: false},
                        scales: {
                          yAxes: [{ticks: {min: 6, max:16}}],
                        }
                      }
                    });
                    </script>
                    <p class="ms-4 fw-semibold">Student Ratio</p>
                </div>
                <div class="col-md-4 mt-3">
                    <img class="img-fluid" src="chart.JPG" alt="">
                    <p class="ms-4 fw-semibold">Student Ratio</p>
                </div>