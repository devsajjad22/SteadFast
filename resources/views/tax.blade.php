
@extends('home')
@section('maincontent')
<h2>This is tax Calculator</h2>
<div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Taxt Chart</h3>
            <table border="1px" class="text-center" style="width: 100%;">
                    <tr>
                        <th>Total Income</th>
                        <th>Parcentage</th>
                        <th>Amount deducted</th>
                    </tr>
                    <tr>
                        <td>2,20,000</td>
                        <td>Nill</td>
                        <td>Nill</td>
                    </tr>
                    <tr>
                        <td>2,20,001-5,20,000 </td>
                        <td>10% </td>
                        <td>22,000 </td>
                    </tr>
                    <tr>
                        <td>5,20,001-9,20,000</td>
                        <td>15%</td>
                        <td>48,000</td>
                    </tr>
                    <tr>
                        <td>9,20,001-12,20,000 </td>
                        <td>20%</td>
                        <td>94,000</td>
                    </tr>
                    <tr>
                        <td>More than 12,20,000  </td>
                        <td>25%</td>
                        <td>1,55,000</td>
                    </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row mt-4">
        <div class="col">
            <form action="{{url('calculation')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                    <div>
                    <label for="">Enter Amount</label>
                    <input type="number" name="amount" placeholder="Enter amount" class="form-control">
                    @error('amount')
                    <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label for="">Enter Parcentage % </label> <br>
                            
                            <input type="number" name="parcentage" class="form-control" placeholder="Enter Parcentage">
                            @error('parcentage')
                    <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                        </div>
                        <div>
                        <small>(Only Working fo less than 2,20,000, Otherwise working chart rules)</small>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary form-control mt-2">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Result:</h3>
        @foreach(explode('<br>', session('message')) as $msg)
    {{ $msg }}
    @if(!$loop->last)
        <br>
    @endif
@endforeach

        </div>
    </div>
</div>

@endsection