
<h2>Edit "{{$cate->name}}" Category</h2>
{{Form::model($cate,['method'=> 'PATCH','url'=> ['admin/category',$cate->id],'id'=>'frmcreate'])}}<?php//tai sao dung model ma k dung open ?>
<lable>Name: </lable>
{{Form::text('name',null,['id'=>'txtName','class'=>'form-control'])}}
{{Form::submit('Save')}}
{!!$errors->first('name','<p style="color:red;">:message</p>')!!}
{{Form::close()}}
