@extends('app')
@section('content')
<div class="row mt">
<div class="col-lg-12">
<div class="content-panel">
<div class="container-fluid">
    <h4><i class="fa fa-angle-right"></i> LIST STOCK</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix">&nbsp;</div>
            <section id="unseen">
        
            <br/><br/>
            <table  class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th><center><font face='calibri'>BACK NO</font></center></th>
                        <th><center><font face='calibri'>PART NO</font></center></th>
                        <th><center><font face='calibri'>PART NAME</font></center>
                        <th><center><font face='calibri'>QUANTITY/BOX</font></center></th>
                        <th><center><font face='calibri'>UNIT</font></center></th>
                        <th><center><font face='calibri'>AMOUNT OF BOX</font></center>
                        <th><center><font face='calibri'>AMOUNT OF PCS</font></center>  
                        <th><center><font face='calibri'>TOTAL(PCS)</font></center></th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($t_transaction) > 0)
                      @foreach($t_transaction as $t_transaction)
                    <tr bgcolor='#FFFFFF'>
                        <td><font face='calibri'>{{ $t_transaction->back_number }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->part_number }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->part_name }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->qty_box }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->unit }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->amount_box }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->amount_pcs }}</font></td>
                        <td><font face='calibri'>{{ $t_transaction->total_pcs }}</font></td>
                         <td><center>
                            <a href="{{ url('stock/input_transaction/'.$t_transaction->id_t_transactions) }}" class="btn btn-info btn-xs">
                                <i class="glyphicon glyphicon-plus"></i>
                            </a>            
                        </center>
                        </td>

                    </tr>
                    @endforeach
                   @else
                    <tr class='info'>
                        <td colspan="9"><center><font face='calibri'>No record to display</font></center></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </section>
        </div>
    </div>
  </div>
</div>
</div>
@if (count($t_transaction) > 0)
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.dataTables_filter').addClass('pull-right');
        $('.pagination').addClass('pull-right');
    });

    $('table').dataTable({
        "searching": true
    });
</script>
@endif
<br/>

@endsection
