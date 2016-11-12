<!DOCTYPE html>
<html>
    <head>
        <title>Workshop||TUHIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <body>
        <div class="container">
            <h2> Data Collection</h2>
            <?php 

            if(!empty($_GET['meg'])){

            	echo $_GET['meg'];
            }


             ?>


            <form class="form-horizontal" action="data.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-md-2" for="name">Name:</label>
                    <div class="col-md-6">
                        <input required name="name" type="text" placeholder="Enter your full Name" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="email">Email:</label>
                    <div class="col-md-6">
                        <input  required name="email" type="email" placeholder="Enter your email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="dept">Department:</label>
                    <div class="col-md-6">
                        <input  required name="dept" type="text" placeholder="Enter your Department" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="reg">Registration:</label>
                    <div class="col-md-6">
                        <input  required name="reg" type="text" placeholder="201331xxx" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </div>

                </div>

            </form>
        </div>
    </body>

</html>