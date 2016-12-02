
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">Slider background Image</th>
                            <th width="15%">Slider Font Image</th>
                            <th width="15%">Title</th>
                            <th width="15%">slogan</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($slideralldata as $sliderdata)
                        <tr class="odd gradeX">
                            <td><img src='{{ asset("$sliderdata->bg_image")}}' height="50px" width="70px"></td>
                            <td><img src='{{ asset("$sliderdata->font_image")}}' height="50px" width="70px"></td>
                            <td>{{$sliderdata->title}}</td>
                            <td class="center">{{$sliderdata->slogan}}</td>
                            <td>
                            <a href="/sliderEdit/{{$sliderdata->id}}">Edit</a> 
                            || 
                            <a href="/sliderDelete/{{$sliderdata->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





