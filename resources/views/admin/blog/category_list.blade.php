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
               <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->
            </div>
            <a href="{{route('add-category')}}"><button type="button" class="btn btn-primary">Add New Category</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Title</th>
                        <th class="column-title">Added On </th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                           <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($categroies as $key => $category)
                     <tr class="even pointer">
                        <td class=" ">{{$category->category}}</td>
                        <td class=" ">{{$category->created_at}}</td>
                        <td class="last">
                           <a href="{{route('edit-category',$category->id)}}">Edit</a>
                           <a  href="{{route('category-delete',$category->id )}}" onclick="return confirm('Are you sure to delete this?')">Delete</a>
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
<!--change status through ajax-->
<script>
   function updateStatus(id, selectedId) {
       var _token = "{{csrf_token()}}";
       var status = document.getElementById('status').options[selectedId].value;
       var qs = {
           id: id,
           status: status,
           _token: _token
       };
       
       $.ajax({
           url: "{{route('program-status')}}",
           method: "POST",
           data: qs,
           success: function(result) {
               alertify.set('notifier', 'position', 'top-right');
               alertify.success(result.message);
           },
           error: function(request, status, error) {
               console.log('Error is' + request.responseText);
           }
       });
   }
</script>