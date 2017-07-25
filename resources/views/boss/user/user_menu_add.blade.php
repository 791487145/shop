@extends('pub_lay')
<title>添加管理员 - 管理员管理 - H-ui.admin v2.4</title>
@section('content')
<article class="page-container">
	<form class="form form-horizontal" id="form" method="post" action="/user/menu/add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单路由：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" datatype="*" placeholder="" id="adminName" name="path">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单昵称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" datatype="*" placeholder="" id="adminName" name="name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>图标：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value=""  placeholder="" id="adminName" name="icon">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>排序：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" datatype="n" placeholder="" id="adminName" name="display_order">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">所属菜单：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<span class="select-box" style="width:150px;">
			<select class="select" name="parent_id" size="1">
				<option value="0" selected>一级菜单</option>
				@foreach($MenuBases as $menuBase)
					<option value="{{$menuBase->id}}">{{$menuBase->name}}</option>
				@endforeach
			</select>
			</span>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单说明：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" datatype="*" placeholder="" id="adminName" name="description">
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>
@endsection
@section('javascript')


<script type="text/javascript">
		$("#form").Validform({
			tiptype:2,
			ajaxPost:true,
			postonce:true,
			callback:function(data){
				layer.msg('已添加!',{icon:1,time:1000});
				parent.location.replace(parent.location.href);
			}
		});
</script>
@endsection