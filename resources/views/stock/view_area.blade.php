@extends('app')
@section('content')
<div class="row mt">
<div class="col-lg-12">
<div class="content-panel">
<div class="container-fluid">
    <h4><i class="fa fa-angle-right"></i> DATA AREA</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix">&nbsp;</div>
            <section id="unseen">
           <button class='btn btn-primary btn-flat btn-sm' data-toggle="modal" data-target="#myModal">
                <i class='glyphicon glyphicon-plus'></i> <font face='calibri'><b>CREATE AREA</b></font>
            </button>
            <br/><br/>
            <table  class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th><center><font face='calibri'>ID AREA</font></center></th>
                        <th><center><font face='calibri'>PLANT TYPE</font></center></th>
                        <th><center><font face='calibri'>AREA CODE</font></center></th>
                        <th><center><font face='calibri'>AREA NAME</font></center></th>
                        <th><center><font face='calibri'>PIC</font></center></th>
                        <th><center><font face='calibri'>CONTACT</font></center></th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($m_area) > 0)
                    @foreach ($m_area as $m_area)
                    <tr bgcolor='#FFFFFF'>
                        <td><font face='calibri'>{{ $m_area->id_area }}</font></td>
                        <td><font face='calibri'>{{ $m_area->type_plant }}</font></td>
                        <td><font face='calibri'>{{ $m_area->code_area }}</font></td>
                        <td><font face='calibri'>{{ $m_area->name_area }}</font></td>
                        <td><font face='calibri'>{{ $m_area->pic_name }}</font></td>
                        <td><font face='calibri'>{{ $m_area->pic_contact }}</font></td>
                        <td><center>
                            <a href="{{ url('stock/edit_area/'.$m_area->id) }}" class="btn btn-info btn-xs">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            
                            <a href="{{ url('stock/delete_area/'.$m_area->id) }}" class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure to delete area \'{{$m_area->name_area}}\'?')">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </center>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class='info'>
                        <td colspan="8"><center><font face='calibri'>No record to display</font></center></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </section>
        </div>
    </div>
     <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-info">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><font face='calibri'><b>CREATE AREA</b></font></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" enctype='multipart/form-data' method="POST" action="{{ url('/stock/save_area') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
             
    
            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>ID Area</b></font></label>
              <div class="col-md-7">
                <input type="text" class="form-control" name="id_area" id="id_area" autofocus required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>Plant</b></font></label>
              <div class="col-md-7">
               <select class="form-control" name="type_plant" id="type_plant">
                      <option value="UNIT">UNIT</option>
                      <option value="BODY">BODY</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>Code Area</b></font></label>
              <div class="col-md-7">
                <input type="text" class="form-control" name="code_area" id="code_area" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>Area Name</b></font></label>
              <div class="col-md-7">
                  <input type='text' class="form-control" name="name_area" id="name_area" required>
                </div>
              </div>
           

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>PIC</b></font></label>
              <div class="col-md-7">
                <input type="text" class="form-control" name="pic_name" id="pic_name" required>
              </div>
              </div>
            

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'><b>Contact</b></font></label>
              <div class="col-md-7">
                  <input type='text' class="form-control" name="pic_contact" id="pic_contact"  required>
               </div>
              </div>
            


            <div class="form-group">
              <div class="col-md-8 col-md-offset-3">
                <button type="submit" class="btn btn-flat btn-primary">
                  <span class='glyphicon glyphicon-floppy-saved'></span> <font face='calibri'><b>SAVE</b></font>
                </button>
                <button type="reset" class="btn btn-flat btn-danger">
                  <span class='glyphicon glyphicon-repeat'></span> <font face='calibri'><b>RESET</b></font>
                </button>
              </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
@if (count($m_area) > 0)
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
