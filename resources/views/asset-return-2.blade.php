@extends('layout')

@section('page_info')
    <h3>Asset Return</h3>
@endsection

@section('contents')
    <div class="container">
        <div class="card bg-light" style="margin-top:0;width: 1115px;height:550px;padding-left:125px">
            <article class="card-body" style="max-width: 800px;">
                <h4 class="card-title mt-3 text-center" style="margin-bottom: 35px; margin-left: 25px">
                    Return Asset
                </h4>
                <form method="POST" action="{{url('/assets/update2')}}">
                    {{csrf_field()}}
                    <input name="id" class="form-control" placeholder="Category" type="hidden"
                           value="{{$article->id}}" >
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="category" class="form-control" placeholder="Category" type="text"
                               value="{{$article->category}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="brand" class="form-control" placeholder="Brand" type="text"
                               value="{{$article->brand}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="model" class="form-control" placeholder="Model" type="text"
                               value="{{$article->model}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="serial_number" class="form-control" placeholder="Serial Number" type="text"
                               value="{{$article->serial_number}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="date_of_purchase" class="date form-control" placeholder="Date of Purchase"
                               type="text" value="{{$article->date_of_purchase}}" disabled>
                    </div>
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="series_number" class="form-control" placeholder="Series Number" type="text"
                               value="{{$article->series_number}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="user" class="form-control" placeholder="Enter new User" type="text"
                               value="{{$article->user}}" disabled>
                    </div> <!-- form-group// -->
                    <div class="form-group" style="width: 350px;margin-left:215px;margin-top: 25px">
                        <button type="submit" class="btn btn-primary btn-block">
                            Return Asset
                        </button>
                    </div> <!-- form-group// -->

                    @if ($errors->any())
                        <ul style="list-style-type: none;color: red">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                </form>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
@endsection
@section('script')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection
