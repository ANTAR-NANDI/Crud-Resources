
<!-- @extends('layouts.app')

@section('content') -->
<div class="container">
    <h1>Add New Student </h1>
    <form method="post" action="{{ route('students.store')  }}">
        {{ csrf_field()  }}

        <div class="form-group row">
            <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="inputName3" placeholder="Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
            <div class="col-sm-10">
                <input name="birth_date" type="date" class="form-control" id="inputDate3" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSalary3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-10">
                <input name="salary" type="number" class="form-control" id="inputSalary3" >
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
        </div>
    </form>
</div>

@endsection
