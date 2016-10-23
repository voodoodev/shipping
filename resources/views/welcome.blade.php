<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shipping Tracking</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Angular JS version 1.5.7-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </head>
    <body ng-app="trackingApp" ng-controller="trackingCtrl">
        <div class="container">
            <h1>Shipping Tracking</h1>

            <div class="row">
                <div class="col-md-5">
                    <form>
                        <div class="form-group">
                            <label for="shipping-code">Enter shipping code</label>
                            <input type="text" name="shipping-code" id="shipping-code" ng-model="search"
                                class="form-control" placeholder="type in your code here..." required>
                        </div>
                        <button type="submit" class="btn btn-default" ng-click="searchReq()">Search</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Delivery date</th>
                                <th>Tracking code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in items">
                                <td><-item.product-></td>
                                <td><-item.delivery_date-></td>
                                <td><-item.tracking_code-></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
