<table class="table">
    <thead>
    <tr>
        <th scope="col">Subject</th>
        <th width="40%">Message</th>
        <th scope="col">From Email</th>
        <th scope="col">Name</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($content as $row)
        <tr>
            <th scope="row">{{$row->subject}}</th>
            <td>{{$row->message}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->name .$row->last_name}}</td>
            @can("delete_message")
            <td  class=" text-center" > <span data-route="{{$row->id}}" class="btn-sm btn-danger mt-3 fas fa-trash"></span></td>
            @endcan
        </tr>
    @endforeach
    </tbody>
</table>
{{$content->links()}}
