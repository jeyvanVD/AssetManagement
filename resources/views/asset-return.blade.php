@extends('layout')

@section('page_info')
    <h3>Asset Return</h3>
@endsection

@section('contents')
    <div class="container">
        <div class="card bg-light" style="margin-top:0;width: 1115px;height:550px;padding-left:125px">
            <article class="card-body" style="max-width: 800px;">
                <h4 class="card-title mt-3 text-center" style="margin-bottom: 35px; margin-left: 25px">
                    Search Asset
                </h4>
                <form id="search_asset" action="{{url('/assets/edit2')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="serial_number" class="form-control serial_number" placeholder="Serial Number" type="text">
                    </div> <!-- form-group// -->
                    <h6 style="font-size: smaller;alignment: center ; padding-left: 375px; padding-top:0">
                        Or
                    </h6>
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="series_number" class="form-control serial_number" placeholder="Series Number"
                               type="text">
                    </div> <!-- form-group// -->

                    <div class="form-group" style="width: 350px;margin-left:215px;margin-top: 25px">
                        <button type="submit" class="btn btn-primary btn-block">
                            Search Asset
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
