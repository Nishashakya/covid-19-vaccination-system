<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid-19 live updates in javascript</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid p-5 bg-light text-center my-3">
        <h1>covid-19 india live updates</h1>
        <h5 class="text-muted">
            tracking covid-19 cases in india
        </h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
            
            <div class="col-3 text-warning">
                <h5>confirmed</h5>
                <p id="confirmed"></p>
            </div>
            <div class="col-3 text-info">
                <h5>active</h5>
                <p id="active"></p>
            </div>
            <div class="col-3 text-success">
                <h5>recovered</h5>
                <p id="recovered"></p>
            </div>
            <div class="col-3 text-danger">
                <h5>deceased</h5>
                <p id="deaths"></p>
            </div>
        </div>
         <canvas id="myChart"></canvas>
    </div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="js/liveupdates.js"></script>
</html>