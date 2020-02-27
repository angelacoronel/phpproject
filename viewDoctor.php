<!--patient-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container-fluid d-flex align-items-center justify-content-between" style="height: 100px;">
        <a href="index.php?page=doc">
        <i class="far fa-arrow-alt-circle-left" style="font-size:30px; color:#7386D5;"></i>
        </a>
    <h2 class="text-center">Doctor Name</h2>
    <p>&nbsp;</p<>
</div>

<div class="d-inline-flex">
    <div class="card bg-light w-50">
    <div class="card-header">Profile</div>
    <div class="card-body">
        <h5 class="card-title">Light card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content
        Some quick example text to build on the card title and make up the bulk of the card's content
        Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <div class="card bg-light w-50">
    <div class="card-header">History</div>
    <div class="card-body">
        <h5 class="card-title">Light card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
        Some quick example text to build on the card title and make up the bulk of the card's content
        Some quick example text to build on the card title and make up the bulk of the card's content
        </p>
    </div>
    </div>
</div>

<div class="d-flex justify-content-end">
  <div class="pt-5 pl-5"><button type="button" data-toggle="modal" data-target="#editDoctor"class="btn btn-success">Modify</button></div>
  <div class="pt-5 pl-5"><button type="button" data-toggle="modal" data-target="#deleteDoctor" class="btn btn-danger">Delete</button></div>
</div>
<!--edit button-->
<div class="modal fade" id="editDoctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify Doctor Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update Doctor</button>
      </div>
    </div>
  </div>
</div>

<!--delete button-->
<div class="modal fade" id="deleteDoctor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Doctor?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this doctor?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Yes</button>
        <button type="button"  data-dismiss="modal" class="btn btn-primary">No</button>
      </div>
    </div>
  </div>
</div>