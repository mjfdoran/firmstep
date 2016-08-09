@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div id="error"></div>
        </div>
        <div class="col-sm-6">
            <h2>New Customer</h2>
            {{ Form::open(['url' => 'customer', 'method' => 'post', 'id' => 'customerForm']) }}
            <p>Services</p>
            <div class="radio">
                <label for="serviceRadios1">
                    <input type="radio" name="services" id="serviceRadios1" value="housing">Housing
                </label>
            </div>
            <div class="radio">
                <label for="serviceRadios2">
                    <input type="radio" name="services" id="serviceRadios2" value="housing">Benefits
                </label>
            </div>
            <div class="radio">
                <label for="serviceRadios3">
                    <input type="radio" name="services" id="serviceRadios3" value="council-tax">Council Tax
                </label>
            </div>
            <div class="radio">
                <label for="serviceRadios4">
                    <input type="radio" name="services" id="serviceRadios4" value="fly-tipping">Fly Tipping
                </label>
            </div>
            <div class="radio">
                <label for="serviceRadios5">
                    <input type="radio" name="services" id="serviceRadios5" value="missed-bin">Missed Bin
                </label>
            </div>
            <br>

            <button type="button" data-type="1" class="type-btn btn radio-button">Citizen</button>
            <button type="button" data-type="2" class="type-btn btn radio-button">Organisation</button>
            <button type="button" data-type="3" class="type-btn btn radio-button">Anonymous</button>
            <br>
            <div style="display:none;">
            <input class="hidden-radio" type="radio" name="type" id="typeRadios1" value="citizen">
            <input class="hidden-radio" type="radio" name="type" id="typeRadios2" value="organisation">
            <input class="hidden-radio" type="radio" name="type" id="typeRadios3" value="anonymous">
            </div>
            <br>
            <div class="form-group">
                <select name="title" class="form-control">
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="dr">Dr</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" name="first-name" id="first-name" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Last Name">
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
        <div class="col-sm-6">
            <h2>Queue</h2>
            <p>List of customers being queued</p>
            <div class="table-responsive">
                <table id="customer-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Queued at</th>
                        </tr>
                    </thead>
                    <tbody id="queue">
                    <?php $queueNumber = 1; ?>
                    @foreach($customers as $customer)
                    <tr class="table-row">
                        <td>{{ $queueNumber }}</td>
                        <td>{{ $customer->type }}</td>
                        <td>{{ $customer->title }} {{ $customer->first_name }} {{ $customer->last_name }}</td>
                        <td>{{ $customer->services }}</td>
                        <td>{{ date("H:i", strtotime($customer->created_at)) }}</td>
                    </tr>
                    <?php $queueNumber++; ?>
                    @endforeach
                    </tbody>


                </table>

            </div>
        </div>
    </div>


@endsection