
@extends('layouts.app')

@section('content')


<div class="container">
    <h1><a href="{{ route('students.create')  }}">Add</a> </h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Sallery</th>
            
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($students as $s)
            <tr>
                <th scope="row">{{ $s->id  }}</th>
                <td>{{ $s->name  }}</td>
                <td>{{ $s->email  }}</td>
                <td>{{ $s->birth_date  }}</td>
                <td>{{ $s->salary  }}</td>
            
                <td>{{ $s->created_at  }}</td>
                <td>{{ $s->updated_at  }}</td>
                <td>
                    <a href="{{ URL::to('students/'.$s->id.'/edit')  }}" >Edit</a> |
                    <!-- <a onclick="confirm('Are you sure???')" href="{{ URL::to('/delete/'.$s->id)  }}" > Delete</a> -->
<!-- Button trigger modal -->
<a href="#{{ $s->id }}" data-toggle="modal" data-target="#exampleModal">
 Delete
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning !!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Delete The Student ?
      </div>
      <div class="modal-footer">
     <!--    <button type="button" class="btn btn-warning">Delete</button> -->

        <form method="post" action="{{ URL::to('students/'.$s->id) }}">
          @method('DELETE')
          @csrf
           <input type="submit" name="" value="Delete" class="btn btn-danger" >
        </form>
       
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
 


                </td>
            </tr>

            @endforeach



        </tbody>
    </table>
</div>

@endsection