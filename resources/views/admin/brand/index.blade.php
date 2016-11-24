@extends('admin.layout.app')

@section('title', '品牌列表')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>品牌列表</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="#">管理中心</a>
                </li>
                <li class="active">
                    <strong>品牌列表</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>品牌列表</h5>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="{{route('admin.goods.brand.create')}}"><i class="fa fa-plus"></i> 品牌添加</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>品牌名称</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brand as $val)
                                <tr>
                                    <td>{{$val->brand_id}}</td>
                                    <td>{{$val->brand_name}}</td>
                                    <td><a href="{{route('admin.goods.brand.edit',['id'=>$val->brand_id])}}">编辑</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="ibox-footer text-right">
                        {{$brand->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
