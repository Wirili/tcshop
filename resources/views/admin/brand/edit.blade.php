@extends('admin.layout.app')

@section('title', '品牌列表')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>品牌添加</h2>
            <ol class="breadcrumb">
                <li><a href="#">管理中心</a></li>
                <li>品牌列表</li>
                <li class="active"><strong>品牌添加</strong></li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <form class="form-horizontal" action="#" method="post">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="" >品牌名称</label>
                                <div class="col-md-4">
                                    <input class="form-control input-sm" type="text" id="brand_name" name="brand_name" value="{{$brand->brand_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="brand_letter" >品牌英文</label>
                                <div class="col-md-4">
                                    <input class="form-control input-sm" type="text" id="brand_letter" name="brand_letter" value="{{$brand->brand_letter}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="site_url" >品牌网址</label>
                                <div class="col-md-4">
                                    <input class="form-control input-sm" type="text" id="site_url" name="site_url" value="{{$brand->site_url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="brand_desc" >品牌描述</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="brand_desc" name="brand_desc">{{$brand->brand_desc}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="is_show" >是否显示</label>
                                <div class="col-md-4">
                                    <input class="checkbox" type="checkbox" id="is_show" name="is_show" @if($brand->is_show == 1) checked @endif value="1">
                                </div>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" name="brand_id" value="{{$brand->brand_id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
