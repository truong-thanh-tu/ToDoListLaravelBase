{{--Thua ke tu trong master.blade template--}}
@extends('layout.master')
{{--Noi dung trang  con--}}
{{--Dung app.css--}}
@section('content')
    {{--Dinh nghia phan noi dung cua trang  task--}}
    <div class="panel-body">
        {{--Form nhap task moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            @csrf
            {{--Ten task--}}
            <div class="form-group">
                <lable for="task" class="col-lg-3 control-label">Task</lable>
                <div class="col-lg-6">
                    <input type="text" name="name" id="task_name" class="form-control">
                </div>
            </div>
            {{--Nut task--}}
            <div class="form-group">
                <div class="col-lg-3 col-lg-6">
                    <button type="submit" class="btn btn-info text-white">
                        <i class="fas fa-plus-circle"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
        {{--Hien thi thong bao loi--}}
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <p style="color: red">{{$error}}</p>
            @endforeach
        @endif

        {{--Hien thi danh sach cong viec hien tai co--}}
        @if(count($getDataTasks) > 0 )
            <table class="table">
                <thead class="thead-dark text-center">
                <tr>
                    <th colspan="3">Task</th>

                </tr>
                </thead>
                <tbody>
                @php($count = 1)
                @foreach($getDataTasks as $getDataTask)
                    <tr>
                        <th>{{ $count++ }}</th>
                        <th>{{ $getDataTask->name }}</th>
                        <th>
                            <form action="{{ Route('Delete',$getDataTask->task_id) }}"  method="post">
                                <button><i class="fas fa-times"></i></button>
                                <input type="hidden"name="_method" value="DELETE">
                                @csrf
                            </form>

                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
