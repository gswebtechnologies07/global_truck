@include('layouts.admin.header')
<div class="right_col" role="main">
   <div class="clearfix"></div>
   <div class="row">
      @if($message=Session::get('success'))
      <div class="alert bg-green alert-dismissible" role="alert" id="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
         </button>
         {{ $message }}
      </div>
      @endif
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_content">
            </div>
            <a href="{{route('add-program')}}"><button type="button" class="btn btn-primary">Add New</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Title</th>
                        <th class="column-title">Image </th>
                        <th class="column-title">Description </th>
                        <th class="column-title no-link last">
                           <span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                           <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($program as $key => $program)
                     <tr class="even pointer">
                        <td class=" ">{{$program->title}}</td>
                        <td class=" "><img class="new_images_admin" id="output" src="{{URL::to('/')}}/public/images/programs/{{$program->image}}"></td>
                        <td class=" ">{!!substr($program->description, 0, 100)!!}</td>
                        <td class="last">
                           <a href="{{ route('edit-programs',$program->id) }}">Edit</a>
                           <a  href="{{ route('program-delete',$program->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@include('layouts.admin.footer')-->
<script>
   $(document).ready( function () {
       $('#table_id').DataTable();
   } );
</script>
