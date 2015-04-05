@extends('admin.app')

@section('content')
	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        新闻管理
	        <small>新闻管理</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="/admin"><i class="fa fa-dashboard"></i> Admin</a></li>
	        <li class="active">新闻管理</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <!-- Main row -->
	     	<div class="row">
	      	  	<div class="box">
	                <div class="box-header">
	                  	<h3 class="box-title">新闻列表</h3>
					  	<br><br>
					  	<div>
			                <a href="/admin/new/create" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>  新建</a>
			                <a href="/admin/new" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  批量删除</a>
	                  	</div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
						<table class="table table-bordered table-striped table-hover">
						    <thead>
						      <tr>
						      	<th><input type="checkbox" class="minimal"></th>
						        <th>id</th>
						        <th>标题</th>
						        <th>内容</th>
						        <th>语言</th>
						        <th>发布时间</th>
						        <th>发布状态</th>
						        <th>创建时间</th>
						        <th>修改时间</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    @foreach ($news as $new)
						        <tr>
								    <td><input type="checkbox" class="minimal"></td>
						            <td>{{ $new->id }}</td>
						            <td>{{ $new->title }}</td>
						            <td>{{ $new->content }}</td>
						            <td>{{ $new->lang }}</td>
						            <td>{{ $new->published_at }}</td>
						            <td>{{ $new->published }}</td>
						            <td>{{ $new->created_at }}</td>
						            <td>{{ $new->updated_at }}</td>
						            <td>
						            	<a href="" class="btn btn-default btn-xs"><i class="fa fa-file"></i>  查看</a>
						            	<a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>  编辑</a>
						            	<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  删除</a>
						            </td>
						        </tr>
							@endforeach 
						    </tbody>
						</table>
						{!! $news->render() !!}
	                </div><!-- /.box-body -->
              	</div><!-- /.box -->
	    	</div><!-- /.row (main row) -->
	    </section><!-- /.content -->
	</div><!-- /.content-wrapper -->
@endsection