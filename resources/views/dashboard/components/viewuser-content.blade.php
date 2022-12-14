
<section class="all-vehicles-section">



<div class="pb-3 d-flex justify-content-between px-3 pt-4">
<h5 class="">All Registered User</h5>
<a href="/add" title="Add Car"><button class="btn btn-success rounded-pill"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
</div>

<div class="table-responsive px-3">

<table class="table align-middle mb-0 bg-light">
<thead class="table table-dark">
<tr>
<th scope="col">User's Name</th>
<th scope="col">Email</th>
<th scope="col">Status</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
@foreach($socialite as $item)
<tr>
<td>
<div class ="d-flex align-items-center">
    <img src="user.jpg" alt=""
    style="height: 45px; width: 45px;" class="rounded-circle">
<div class="ms-3">
    <p class="fw-bold mb-1">{{ $item->name}}</p>

</div>
</div>

</td>
<td>
<p class="text-muted mb-0">{{ $item->email}}</p>
</td>
<td>
    <span class="badge bg-danger rounded-pill">ACTIVE</span>
</td>
<td>
<a href="#" title="View" class="actions action-view"><i class="fa fa-eye" aria-hidden="true"></i></a>
<a href="" title="Edit" class="actions action-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="#" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)" class="actions action-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

</td>
</tr>

@endforeach

@foreach($socialite as $item)
<tr>
<td>
<div class ="d-flex align-items-center">
    <img src="user.jpg" alt=""
    style="height: 45px; width: 45px;" class="rounded-circle">
<div class="ms-3">
    <p class="fw-bold mb-1">{{ $item->fname}} {{ $item->lname}}</p>

</div>
</div>

</td>
<td>
<p class="text-muted mb-0">{{ $item->email}}</p>
</td>
<td>
    <span class="badge bg-danger rounded-pill">ACTIVE</span>
</td>
<td>
<a href="#" title="View" class="actions action-view"><i class="fa fa-eye" aria-hidden="true"></i></a>
<a href="" title="Edit" class="actions action-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="#" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)" class="actions action-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

</td>
</tr>

@endforeach



</tbody>
</table>





</div>




</section>