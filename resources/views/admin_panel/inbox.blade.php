
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox Message</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Name</th>
                            <th width="">Email</th>
                            <th width="">Subject</th>
                            <th width="">Message</th>
                            <th width="">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                 @foreach($messageAll as $message)
                        <tr class="odd gradeX">
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->address}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                            <a href="/inboxView/{{$message->id}}">View</a> 
                            || 
                            <a href="/inboxEdit/{{$message->id}}">Edit</a> 
                            || 
                            <a href="/inboxReplay/{{$message->id}}">Replay</a> 
                            || 
                            <a href="/inboxReplay/{{$message->id}}">Seen</a> 
                            </td>
                        </tr>
                   
                @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>


            <div class="box round first grid">
                <h2>Show Message</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Name</th>
                            <th width="">Email</th>
                            <th width="">Subject</th>
                            <th width="">Message</th>
                            <th width="">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                 @foreach($messageAll as $message)
                        <tr class="odd gradeX">
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->address}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                            
                            <a href="/inboxReplay/{{$message->id}}">Unseen</a> 
                            || 
                            <a href="/inboxDelete/{{$message->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                   
                @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





