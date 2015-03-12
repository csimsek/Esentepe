<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 12/03/15
 * Time: 13:40
 */
?>
<html>
  <head>
    <title>Esentepe</title>
      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- JQuery End -->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <!-- BootStrap End -->

      <!-- Global Css -->
      <style type="text/css">
    #content{
    width:960px;
              margin:0 auto;
          }

          #categoryAddForm{
              float:right;
          }

          #productAddForm{
              float:right;
          }
      </style>
      <!-- Global Css End -->
  </head>
  <body>
        <!-- Top Menu -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Esentepe</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Sipariş Alım Ekranı <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Raporlar<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Günlük Satışlar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ürünler<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Ürünler</a></li>
                                <li><a href="#">Fiyat Tarifeleri</a></li>
                                <li><a href="#">Kategoriler</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hasan İslamoğlu <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Hesabım</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Çıkış Yap</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- Top Menu End -->

        <!-- Content -->
        <div id="content">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kategoriler</h3>
                </div>
                <div class="panel-body">
                    <form id="categoryAddForm" class="form-inline">
                        <input type="text" class="form-control" placeholder="Izgaralar, içecekler vb.."/>
                        <input class="btn btn-success" type="submit" value="Kayıt Et" />
                    </form>

                    <table class="table table-hover table-striped table-bordered">
                        <tr>
                            <th>Kategoriler</th>
                            <th style="width:30px;">İşlem</th>
                        </tr>
                        <tr>
                            <td>Izgaralar</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                        <tr>
                            <td>İçecekler</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Ürünler</h3>
                </div>
                <div class="panel-body">
                    <form id="productAddForm" class="form-inline">
                        <input type="text" class="form-control" placeholder="Köfte, kola vb.."/>
                        <select class="form-control">
                            <option value="Adet">Adet</option>
                            <option value="Porsiyon">Porsiyon</option>
                            <option value="Gram">Gram</option>
                        </select>
                        <select class="form-control">
                            <option value="Izgaralar">Izgaralar</option>
                            <option value="İçecekler">İçecekler</option>
                        </select>
                        <input class="btn btn-success" type="submit" value="Kayıt Et" />
                    </form>

                    <table class="table table-hover table-striped table-bordered">
                        <tr>
                            <th>Ürünler</th>
                            <th style="width:30px;">İşlem</th>
                        </tr>
                        <tr>
                            <td>Köfte (Porsiyon)</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kola (Adet)</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tarifeler</h3>
                </div>
                <div class="panel-body">
                    <form id="tariffAddForm" class="form-inline">
                        <input type="text" class="form-control" placeholder="Köfte, kola vb.."/>
                        <select class="form-control">
                            <option value="Adet">Adet</option>
                            <option value="Porsiyon">Porsiyon</option>
                            <option value="Gram">Gram</option>
                        </select>
                        <select class="form-control">
                            <option value="Izgaralar">Izgaralar</option>
                            <option value="İçecekler">İçecekler</option>
                        </select>
                        <input class="btn btn-success" type="submit" value="Kayıt Et" />
                    </form>

                    <table class="table table-hover table-striped table-bordered">
                        <tr>
                            <th>Ürünler</th>
                            <th style="width:30px;">İşlem</th>
                        </tr>
                        <tr>
                            <td>Köfte (Porsiyon)</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kola (Adet)</td>
                            <td>
                                <button type="button" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


        </div>
        <!-- Content End -->
  </body>
</html>
