@extends('admin.layouts.admin')
@section('content')
<div class="content-wrap">
   <div class="main">
      <div class="container-fluid">
         <div class="row">
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
               <div class="page-header" style="float:left; padding-top: 15px">
                  <div class="page-title">
                     <h5>Leads Listing</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 p-l-0 title-margin-left">
               <div class="page-header">
                  <div class="page-title">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admindashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Leads Listing</li>
                     </ol>
                  </div>
               </div>
            </div>
            <!-- /# column -->
         </div>
         <section id="main-content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                    <div class="searchdatatable"><a href="javascript:void(0)" title="Search" data-toggle="modal" data-target="#exampleModal"><i class="ti-search" ></i></a></div>
                    <!--<div class="searchdatatable"><a href="javascript:void(0)" type="button" onclick="document.getElementById('AddColorNameForm').reset();"data-toggle="modal" data-target="#AddColorName" class="btn btn-primary" title="Add Company"><i class="ti-plus" ></i></a></div>-->
                     <table id="CarColortable" class="display" style="width:100%">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Description</th>
                              <th>Source</th>
                              <th>Status</th>
                              <th>Add date</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>


<!-- Add Car Color Name Modal -->
<div class="modal fade" id="UpdateLead" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Lead</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
          <div class="card-body" id="Msg"></div>
        <form id="LeadUpdateNameForm" method="post" action="{{route('leadUpdate')}}" onsubmit="handleSubmit(event);">
            @csrf
            <div class="row">
                <div class="input-field col-md-6">
                  <input type="hidden" id="LeadsId" name="id" value="" />
                    <input id="LeadsName" placeholder="User Name" name="name" type="text" class="form-control filter" maxlength="40" />
                </div>
                <div class="input-field col-md-6">
                    <input id="LeadsEmail" placeholder="Email ID" name="email" type="text" class="form-control filter" maxlength="40" readonly />
                </div>
            </div>
             <div class="row">
                <div class="input-field col-md-6">
                    <input id="LeadsMobile" placeholder="Mobile No" name="mobile" type="text" class="form-control filter" maxlength="40" readonly />
                </div>
                <div class="input-field col-md-6">
                    <input id="LeadsSource" placeholder="Source" name="source" type="text" class="form-control filter" maxlength="40" />
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-12">
                  <textarea id="LeadsDescription" class="form-control" placeholder="Lead Message" name="description"  rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-12">
                    <select class="form-control" name="status" id="LeadsStatus">
                      <option value="">Select Status</option>
                      <option value="new">New</option>
                      <option value="accepted">Accepted</option>
                      <option value="completed">Completed</option>
                      <option value="rejected">Rejected</option>
                      <option value="invalid">Invalid</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button class="btn btn-default reset-btn" type="reset">Clear</button>-->
                <button class="btn btn-primary btnSubmit" type="Submit">Submit</button>
             </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Add Car Color Name Modal -->
<div class="modal fade" id="UpdatePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
          <div class="card-body" id="PostMsg"></div>
        <form id="UpdatePostNameForm" method="post" action="{{route('postUpdate')}}" onsubmit="postHandleSubmit(event);">
            @csrf
            <div class="row">
                <div class="input-field col-md-3">
                   Lead ID 
                </div>
                <div class="input-field col-md-9">
                   <input type="text" class="form-control" id="PostLeadsId" name="leads_id" value="" readonly="readonly" />
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-12">
                    <input id="UserName" placeholder="User Name" name="user_name" type="text" class="form-control filter" maxlength="40" required="required" />
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-12">
                  <textarea class="form-control" placeholder="Lead Message" name="lead_message" required="required"  rows="3"></textarea>
                    <!--<input id="LeadMessage" placeholder="Lead Message" name="lead_message" type="text" class="form-control filter" maxlength="40" required="required" />-->
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-12">
                    <select class="form-control" name="lead_status" id="LeadStatus" required="required">
                      <option value="">Select Status</option>
                      <option value="new">New</option>
                      <option value="accepted">Accepted</option>
                      <option value="completed">Completed</option>
                      <option value="rejected">Rejected</option>
                      <option value="invalid">Invalid</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button class="btn btn-default reset-btn" type="reset">Clear</button>-->
                <button class="btn btn-primary btnSubmit" type="Submit">Submit</button>
             </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
        <form id="filter_data">
            <div class="row">
                <div class="input-field col-md-6">
                    <input id="Name" placeholder="Name" name="name" type="text" class="form-control filter">
                    <!--<label for="title">Name</label>-->
                </div>
                <div class="input-field col-md-6">
                    <input id="EmailID" placeholder="Email id" name="email" type="text" class="form-control filter">
                    <!--<label for="title">Name</label>-->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default reset-btn" type="reset">Clear</button>
                <button class="btn btn-primary btnSubmit" type="button" onclick="dataTable();"  data-dismiss="modal" aria-label="Close">Submit</button>
             </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- This Modal Use for the Show Lead Detail-->
<div class="modal fade" id="ShowLeadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lead Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div id="ViewLeadDetail"></div>
          <div class="" id="UpdateLeadDetail"></div>
        </div>
    </div>
  </div>
</div>


<script type="text/javascript">

// This function use for the submit form
function handleSubmit(e){

    e.preventDefault();
  
  var formData = new FormData(e.target);

  app.postWithImg("{{url('admin/leadUpdate')}}", formData ).then(res=>{
          document.querySelector('#Msg').innerHTML=` <div class="alert alert-${res.status ? 'success' : 'danger'}  alert-dismissible fade show" role="alert">
                 ${res.message}
          </div>`;
          if(res.status == true)
          {
              $('#Msg').show();
              $("#LeadUpdateNameForm").trigger("reset");
              $("#LeadsId").val(null);
              table.ajax.reload();
              setTimeout(function () {
                $('#Msg').hide(500);
                $('#UpdateLead').modal('hide');
            }, 3000);

          }else
          {
              $('#Msg').show();
              $("#LeadUpdateNameForm").trigger("reset");
              table.ajax.reload();
              setTimeout(function () {
                $('#Msg').hide(500);
            }, 3000);
            $('#Msg').show();
          }
  })
  
}


// This function use for the Update Post submit form
function postHandleSubmit(e){

    e.preventDefault();
  
  var formData = new FormData(e.target);

  app.postWithImg("{{url('admin/postUpdate')}}", formData ).then(res=>{
          document.querySelector('#PostMsg').innerHTML=` <div class="alert alert-${res.status ? 'success' : 'danger'}  alert-dismissible fade show" role="alert">
                 ${res.message}
          </div>`;
          if(res.status == true)
          {
              $('#PostMsg').show();
              $("#UpdatePostNameForm").trigger("reset");
              $("#LeadsId").val(null);
              table.ajax.reload();
              setTimeout(function () {
                $('#PostMsg').hide(500);
                $('#UpdatePost').modal('hide');
            }, 3000);

          }else
          {
              $('#PostMsg').show();
              $("#UpdatePostNameForm").trigger("reset");
              table.ajax.reload();
              setTimeout(function () {
                $('#PostMsg').hide(500);
            }, 3000);
            $('#PostMsg').show();
          }
  })
  
}



// this function use for the update lead
function edit(id, name, email, mobile, description, source, status)
{
  var LeadsId           = id;
  var LeadsName         = name;
  var LeadsEmail        = email;
  var LeadsMobile       = mobile;
  var LeadsDescription  = description;
  var LeadsSource       = source;
  var LeadsStatus       = status;

  $("#LeadsId").val(LeadsId);
  $("#LeadsName").val(LeadsName);
  $("#LeadsEmail").val(LeadsEmail);
  $("#LeadsMobile").val(LeadsMobile);
  $("#LeadsDescription").val(LeadsDescription);
  $("#LeadsSource").val(LeadsSource);
  $("#LeadsStatus").val(LeadsStatus);

  $('#UpdateLead').modal('show');
  
}

// this function use for the update Post
function post(id)
{
  var PostLeadsId = id;

  $("#PostLeadsId").val(PostLeadsId);
  $('#UpdatePost').modal('show');
  
}


// this function use for the view lead data
function view(id)
{
  var ViewLeadId = id;

  $("#ViewLeadId").val(ViewLeadId);
  $('#ShowLeadModal').modal('show');
  getLeadDetail(ViewLeadId);
  
}


function getLeadDetail(ViewLeadId)
{
  var id = ViewLeadId;
  $.ajax({
    "url": "{{url('/api/admin/ajax-get-data/leadDetail')}}/"+id,
    "type": "POST",
    "dataType": 'json',
    success: function (response) {
      var data        = response.data;
      var lead        = data.lead;
      var update_data = data.update_data;
      var LeadDetail  = `<div class="contact-information">
                       <div class="phone-content">
                          <span class="contact-title">Lead ID:</span>
                          <span class="phone-number">`+lead.id+`</span>
                       </div>
                       <div class="phone-content">
                          <span class="contact-title">Name:</span>
                          <span class="phone-number">`+lead.name+`</span>
                       </div>
                       <div class="address-content">
                          <span class="contact-title">Email:</span>
                          <span class="mail-address">`+lead.email+`</span>
                       </div>
                       <div class="email-content">
                          <span class="contact-title">Mobile:</span>
                          <span class="contact-email">`+lead.mobile+`</span>
                       </div>
                       <div class="website-content">
                          <span class="contact-title">Source:</span>
                          <span class="contact-website">`+lead.source+`</span>
                       </div>
                       <div class="skype-content">
                          <span class="contact-title">Status:</span>
                          <span class="contact-skype">`+lead.status+`</span>
                       </div>
                       <div class="website-content">
                          <span class="contact-title">Description:</span>
                          <span class="contact-website">`+lead.description+`</span>
                       </div>
                       <div class="website-content">
                          <span class="contact-title">Date Time:</span>
                          <span class="contact-website">`+lead.lead_date+`</span>
                       </div>
                    </div>`;
      $('#ViewLeadDetail').html(LeadDetail);

      // This is use for the Listing lead Update
      var updateLeadHtml = ''; var count= 0;
      $.each(update_data, function (index, value) {
        console.log(value.user_name);
        count++;
        var stylecolor = count % 2 ==0 ? '#F5F2F1' : '#EEEBE9';
         updateLeadHtml+=`<div class="contact-information" style="background-color:`+stylecolor+`">
             <div class="phone-content">
                <span class="contact-title">User Name:</span>
                <span class="phone-number">`+value.user_name+`</span>
             </div>
             <div class="address-content">
                <span class="contact-title">Lead Message:</span>
                <span class="mail-address">`+value.lead_message+`</span>
             </div>
             <div class="email-content">
                <span class="contact-title">Lead Status:</span>
                <span class="contact-email">`+value.lead_status+`</span>
             </div>
             <div class="email-content">
                <span class="contact-title">Update Lead Date Time:</span>
                <span class="contact-email">`+value.update_date+`</span>
             </div>
          </div>`;
      });
      var actionhtml=`<div class="contact-information"><p><b>All Action(s)</b><p></div>`;
      updateLeadHtml = update_data.length > 0 ? actionhtml+updateLeadHtml : updateLeadHtml;
      $('#UpdateLeadDetail').html(updateLeadHtml);
    }

  });

}


$(document).ready(function () {
    dataTable();
}); 


  // List for the data
  function dataTable()
  {
    var filterData = {};
      if($('#Name').val().trim())
      {
          filterData.name = $('#Name').val();
      }
      if($('#EmailID').val().trim())
      {
          filterData.email = $('#EmailID').val();
      }
      filterData = filterData;
      table = $('#CarColortable').DataTable({
      "processing": true, //Feature control the processing indicator.
          "serverSide": true, //Feature control DataTables' server-side processing mode.
          "responsive": true,
          "searching": false,
          "ordering": true,
          "lengthChange": false,
          "orderCellsTop": true,
          "destroy": true,
          //"order":[],
          "pageLength":{{config('app.page_length')}},
          // Load data for the table's content from an Ajax source
          "ajax": {
              "url": "{{url('/api/admin/ajax-get-data/lead')}}",
              "type": "POST",
              "data": filterData,
              "dataType": 'json',
              complete: function () {
                 $('[data-toggle="tooltip"]').tooltip();
              },
          },
          "language": {
             "paginate": {
             "next": '&raquo;', // or '→'
             "previous": '&laquo;' // or '←'
             }
          },
          "dom": '<"top"i>rt<"bottom"flp><"clear">',
          "columnDefs": [ {
              "targets": -1,
              "data": null,
              "render": function ( data, type, row ) {
                  var addclass = (row.status == 'Active') ? "fa-toggle-on" : "fa-toggle-off" ;
                  var template = `<td><ul><li><a href="javascript:void(0);" title="Edit" onclick="edit('${row.id}', '${row.name}', '${row.email}', '${row.mobile}', '${row.description}', '${row.source}', '${row.status}');" data-eid="${row.id}"><i class="ti-pencil"></i></a><a href="javascript:void(0);" title="Post Update" onclick="post(${row.id});" data-eid="${row.id}"><i class="ti-pencil-alt"></i></a><a href="javascript:void(0);" onclick="view(${row.id});" class="btn-view" title="View" data-uid="'${row.id}"><i class="ti-eye"></i></a></li></ul></td>`;
                  return template;
              },
              "defaultContent": ''
              },
           ],
          "columns": [
                 {"data": "id"},
                 {"data": "name"},
                 {"data": "email"},
                 {"data": "mobile"},
                 {"data": "description"},
                 {"data": "source"},
                 {"data": "status"},
                 {"data": "date"},
                 {"data": "action"},
            ]
      });
      return false;
  }


    
</script>

@endsection
