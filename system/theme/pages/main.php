<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 12/03/15
 * Time: 13:40
 */
?>
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
                        <?php

                        ?>
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