@extends('app')
@section('content')
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/dataTables.bootstrap.js')}}"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <font face='calibri' color='grey'><b><big><big><big>INVOICE REJECT</big></big></big></b>
            <br/><b>LIST INVOICE REJECT FROM USER</b>
            </font>
        	<div class="clearfix">&nbsp;</div>
                <table class="table table-striped table-bordered">
                <thead>
                    <tr class='success'>
                        <th><center><small><font face='calibri'>NO PENERIMAAN</font></small></center></th>
                        <th><center><small><font face='calibri'>DEPT CODE </font></small></center></th>
                        <th><center><small><font face='calibri'>VENDOR</font></small></center></th>
                        <th><center><small><font face='calibri'>TGL TERIMA</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC NO</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC DATE</font></small></center></th>
                        <th><center><small><font face='calibri'>DUE DATE</font></small></center></th>
                        <th><center><small><font face='calibri'>CURR</font></small></center></th>
                        <th><center><small><font face='calibri'>AMOUNT</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC NO</font></small></center></th>
                        <th><center><small><font face='calibri'>REJECT REASON</font></small></center></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            @if (count($invoice) > 0)
                @foreach ($invoice as $invoice)
                <tr class='warning'>
                    <td><font face='calibri'>{{ $invoice->no_penerimaan }}</font></td>
                    <td><font face='calibri'>
                    @if ($invoice->dept_code == '1')
                        Purchasing
                    @elseif ($invoice->dept_code == '2')
                        General Affair
                    @elseif ($invoice->dept_code == '3')
                        BOD
                    @elseif ($invoice->dept_code == '5')
                        MIS
                    @elseif ($invoice->dept_code == '6')
                        HRD
                    @endif
                    </font></td>
                    <td><font face='calibri'>{{ $invoice->vendor }}</font></td>
                    <td><center><font face='calibri'>{{ $invoice->tgl_terima }}</font></center></td>
                    <td><font face='calibri'>{{ $invoice->doc_no }}</font></td>
                    <td><center><font face='calibri'>{{ $invoice->doc_date }}</font></center></td>
                    <td><center><font face='calibri'>{{ $invoice->due_date }}</font></center></td>
                    <td><font face='calibri'>{{ $invoice->curr }}</font></td>
                    <td><font face='calibri'>{{ $invoice->amount }}</font></td>
                    <td><font face='calibri'>{{ $invoice->doc_no_2 }}</font></td>
                    <td><font face='calibri'><small><b>{{ $invoice->remark }}</b> <br/>( {{$invoice->tgl_pending_user}} )</small></font></td>
                    <td>
                        <center>
                            <a href="{{ url('invoice/pending/user/checked/'.$invoice->id) }}" class="btn btn-info btn-xs" onclick="return confirm('Are you sure to checked invoice with no penerimaan \'{{$invoice->no_penerimaan}}\'?')">
                                <font face='calibri'><b>Checked</b></font>
                            </a>
                        </center>
                    </td>
                </tr>
                @endforeach
            @else
                <tr class='warning'>
                    <td colspan="12"><center><font face='calibri'>No record to display</font></center></td>
                </tr>
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@if (count($invoice) > 0)
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function(){
        $('input[type="search"]').removeClass('form-control').removeClass('input-sm');
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