@extends('admin.layout.master')

@section('content');

<div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
       @if(!isset($settingForWel[0])) <a href="{{url('setting/show')}}">Add Setting</a>
       @endif
        <tr>
            <th>SI.</th>
            <th>email</th>
            <th>phone number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <?php
            $i=0;
          ?>
        @foreach($settingForWel as $showSetting)
           <tr class="odd gradeX">
               <td>{{++$i }}</td>
               <td>{{$showSetting->email}}</td>
               <td>{{$showSetting->phoneNumber}}</td>
               <td> <a href="{{url('/setting/delete').'?id='.$showSetting->id}}">Delete</a>

               </td>

           </tr>

        @endforeach
        </tbody>
    </table>
</div>

@endsection