@extends('plantilla')

@section('titulo','COMPLEMENTOS DEL ACTIVO')

@section('subtitulo','NUEVOS COMPLEMENTOS')

@section('contenido')

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel btn-pinterest">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div><h4>OFICINA</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('oficina.crear')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Nueva Oficina</span>
                                <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel btn-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div><h4>CATEGORIA</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('categoria.crear')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Nueva Categoria</span>
                                <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel btn-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cube fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div><h4>UNIDAD</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('unidad.crear')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Nueva Unidad</span>
                                <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel btn-dropbox">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tv -cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div><h4>MARCA</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('marca.crear')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Nueva Marca</span>
                                <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel btn-tumblr">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text -cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div><h4>Documento</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('documento.crear')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Nuevo Docuemnto</span>
                                <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>







@endsection