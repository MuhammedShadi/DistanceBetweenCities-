<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styling.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>


        <title>Distance btw cities App | Home</title>  
    </head>
    <body>
        <div class="jumbotron">
            <div class="conatiner-fluid">
                <h1>Distance between cities App.</h1>
                <p>Our app will help you calculate travelling distances.</p>
                <!--Form-->
                <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="from" class="col-xs-2 control-label">From:</label>
                        <div class="col-xs-10">
                            <input type="text"  id="from" placeholder="Origin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="to" class="col-sm-2 control-label">To:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="to" placeholder="Destination">
                        </div>
                    </div>
                </form>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
                    </div>
                </div>
                <!--Map-->
                <div class="container-fluid">
                    <div id="googleMap">

                    </div>
                    <div id="output">

                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q&libraries=places"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="javascript.js"></script>
    </body>
</html>