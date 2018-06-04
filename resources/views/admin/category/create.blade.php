{{--<h2>Create Category</h2>--}}
{{--<form action="{{url('admin/category/add')}}" method="POST">--}}
    {{--@csrf--}}
    {{--name: <input type="text" name="name">--}}
    {{--<input type="submit" name="Save" value="Submit">--}}
{{--</form>--}}
<h2>Create Category</h2>
{{Form::open(['method'=> 'POST','url'=> 'admin/category/add','id'=>'frmcreate'])}}
    <lable>Name: </lable>
    {{Form::text('name',null,['id'=>'txtName','class'=>'form-control'])}}
    {{Form::submit('Save')}}
{!!$errors->first('name','<p style="color:red;">:message</p>')!!}
{{Form::close()}}
