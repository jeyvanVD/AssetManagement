@extends('layout')

@section('page_info')
    <h3>Asset Registration</h3>
@endsection

@section('contents')
    <div class="container">
        <div class="card bg-light" style="margin-top:0;width: 1115px;height:550px;padding-left:125px">
            <article class="card-body" style="max-width: 800px;">
                <h4 class="card-title mt-3 text-center" style="margin-bottom: 35px; margin-left: 25px">
                    Register New Asset
                </h4>
                <form method="POST" action="/assets">
                    {{csrf_field()}}
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <select name="category" class="custom-select" style="max-width: 600px;">
                            <option value="0" selected disabled>Select a Category</option>
                            <option value="Laptops">Laptops</option>
                            <option value="Keyboards">Keyboards</option>
                            <option value="Monitors">Monitors</option>
                            <option value="Mouse">Mouse</option>
                            <option value="Cables">Cables</option>
                            <option value="Chargers">Chargers</option>
                            <option value="Chairs">Chairs</option>
                            <option value="Papers">Papers</option>
                        </select>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="brand" class="form-control" placeholder="Brand" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="model" class="form-control" placeholder="Model" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="serial_number" class="form-control" placeholder="Serial Number" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="date_of_purchase" class="date form-control" placeholder="Date of Purchase" type="text">
                    </div>
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <input name="series_number" class="form-control" placeholder="Series Number" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group" style="width: 350px;margin-left:215px;margin-top: 25px">
                        <button type="submit" class="btn btn-primary btn-block">
                            Register Asset
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
