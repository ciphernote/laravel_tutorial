<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <!-- navigation -->
        <nav class="navbar navbar-default" style="background-color: #FFFFFF;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="http://laraweb.sakura.ne.jp/article/img/logo.png" style="height: 20px;">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">menuA</a></li>
                    <li><a href="#">menuB</a></li>
                    <li><a href="#">menuC</a></li>
                </ul>
            </div>
        </nav>
        <!-- navigation -->
        <!-- container -->
        <div class="container">
            <!-- content -->
            <div class="row" id="content">
                <!-- left -->
                <div class="col-md-3">
                    <!-- パネルで囲む -->
                    <div class="panel panel-default" style="margin-bottom: 60px;">
                        <div class="panel-heading">
                            Menu
                        </div>
                        <!-- 敢えてbodyを作らないことで、メニューを詰める -->
                        <!-- <div class="panel-body"> -->
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu1</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu2</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu3</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu4</a></li>
                        </ul>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- main -->
                <div class="col-md-9">
                    <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
                        <h1><small>タイトル</small></h1>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>name</th>
                                <th>email</th>
                                <th>tel</th>
                                <th>opration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td><td>hoge foo</td><td>hoge@foo.com</td><td>06-1234-5678</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="" class="btn btn-primary btn-sm">編集</a>
                                    <a href="" class="btn btn-danger btn-sm">削除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td><td>hoge foo</td><td>hoge@foo.com</td><td>06-1234-5678</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="" class="btn btn-primary btn-sm">編集</a>
                                    <a href="" class="btn btn-danger btn-sm">削除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td><td>hoge foo</td><td>hoge@foo.com</td><td>06-1234-5678</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="" class="btn btn-primary btn-sm">編集</a>
                                    <a href="" class="btn btn-danger btn-sm">削除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td><td>hoge foo</td><td>hoge@foo.com</td><td>06-1234-5678</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="" class="btn btn-primary btn-sm">編集</a>
                                    <a href="" class="btn btn-danger btn-sm">削除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td><td>hoge foo</td><td>hoge@foo.com</td><td>06-1234-5678</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                                    <a href="" class="btn btn-primary btn-sm">編集</a>
                                    <a href="" class="btn btn-danger btn-sm">削除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
            </div>
        </footer>
        <!-- footer -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
