@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Add New Student </h1>
    <form method="post" action="{{ URL::to('students/'.$data->id)  }}">
        @method('PUT')
        {{ csrf_field()  }}
     <input type="hidden" name="id" value="{{ $data->id  }}">
        <div class="form-group row">
            <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input value="{{ $data->name  }}" name="name" type="text" class="form-control" id="inputName3" placeholder="Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input value="{{ $data->email  }}" name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
            <div class="col-sm-10">
                <input value="{{ $data->birth_date  }}" name="birth_date" type="date" class="form-control" id="inputDate3" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSalary3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-10">
                <input value="{{ $data->salary  }}" name="salary" type="number" class="form-control" id="inputSalary3" >
            </div>
        </div>

       

        {{--<fieldset class="form-group">--}}
            {{--<div class="row">--}}
                {{--<legend class="col-form-label col-sm-2 pt-0">Status</legend>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="radio" name="status" id="status1" value="1" >--}}
                        {{--<label class="form-check-label" for="status1">--}}
                            {{--Available--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="radio" name="status" id="status2" value="0">--}}
                        {{--<label class="form-check-label" for="status2">--}}
                            {{--Unavailable--}}
                        {{--</label>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</fieldset>--}}

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>

@endsection

