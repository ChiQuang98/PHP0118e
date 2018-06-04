<h2>Category List</h2>
<a href="{{ url('admin/category/add') }}">Create</a>
@if(Session::has('Success'))
    <p style="color:green">{{Session::get('Success')}}</p>
@endif
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Parent_Id</th>
        <th>Action</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->parent_id}}
            <td>
                <a href="{{url('admin/category/'.$item->id.'/edit')}}">Edit</a> |
                <a href="{{url('admin/category/'.$item->id.'/delete')}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
