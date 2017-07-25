@extends('pub')
<title>菜单列表</title>
@section('content')
<div class="page-container">
	<div class="text-c">
		<form>
			<input type="text" class="input-text" style="width:250px" placeholder="输入菜单名称" id="" name="">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜菜单</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="javascript:;" onclick="admin_add('添加菜单','/user/menu/add')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 添加菜单
			</a>
		</span>
		<span class="r">共有数据：<strong>54</strong> 条</span>
	</div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">菜单昵称</th>
				<th width="90">图标</th>
				<th width="150">菜单说明</th>
				<th>所属菜单</th>
				<th>排序</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($MenuBases as $menuBase)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{$menuBase->id}}</td>
				<td>{{$menuBase->name}}</td>
				<td><i class="Hui-iconfont">{{$menuBase->icon}}</i></td>
				<td>{{$menuBase->description}}</td>
				<td>{{$menuBase->menu}}</td>
				<td>{{$menuBase->display_order}}</td>
				<td class="td-manage">
					<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','/user/menu/{{$menuBase->id}}/update')" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6df;</i>
					</a>
					<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url){
	layer_show(title,url);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*管理员-编辑*/
function admin_edit(title,url){
	layer_show(title,url);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script>
@endsection