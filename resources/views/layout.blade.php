<!DOCTYPE html>
<html ng-app="ceu" ng-controller="MainController">
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                Laravel 5
                <a ng-href="/inicio">Home</a>
                <a ng-href="/noticias">Noticias</a>
                <ng-view cache-view="false">
                </ng-view>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="/js/angular.js?v=1"></script>
    <script type="text/javascript" src="/js/controllers.js?v=1"></script>
</html> 
