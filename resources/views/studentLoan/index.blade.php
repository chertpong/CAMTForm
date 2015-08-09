@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s information</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (isset($success))
                            <div class="alert alert-success">
                                <strong> Success!</strong> {{$success}}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/address/'.$student->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="panel-body">
                                <div ng-app="textEditor" ng-controller="EditPostController">
                                    <input type="text" class="form-control" id="title" placeholder="Title" ng-model="title">
                                    <br>
                                    <div text-angular name="htmlcontent" ng-model="htmlcontent"></div>
                                    <h3>Raw HTML in a text area</h3>
                                    <textarea class="form-control col-xs-12" rows="10" ng-model="htmlcontent"></textarea>
                                    <button class="btn btn-primary" ng-click="moreTag()">Add more tag</button>
                                    <div id="tags" class="row container-fluid">
                                        <div class="form-inline">
                                            <input type="text" class="form-control col-xs-6" placeholder="tag" ng-model="tags">
                                            <input type='text' class="form-control col-xs-6" placeholder="set tag score" ng-model="tagsScore">
                                            <br><br>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success pull-right" ng-click="save()">Post</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        angular.module("textEditor", ['textAngular'])
                .controller('EditPostController', function($scope,$http) {
                    $scope.title = '{{$post->title}}';
                    $scope.htmlcontent = '{!! $post->text !!}';
                    $scope.save = function () {
                        $http.post('',{title:$scope.title,content:$scope.htmlcontent}).success();
                        //TODO add url and success function
                    }
                    $scope.moreTag = function () {
                        $("<div class='form-inline'>"
                        +"<input type=\"text\" class=\"form-control col-xs-6\" placeholder=\"tag\" ng-model=\"tags\">"
                        +"<input type=\"text\" class=\"form-control col-xs-6\" placeholder=\"set tag score\" ng-model=\"tagsScore\">"
                        +"<br><br><\/div>")
                                .appendTo("#tags");
                        $("</div>").appendTo("#tags");
                    };
                });
    </script>
@endsection