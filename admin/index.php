<?php
$activePage   = 'index.php';
$pageTitle    = 'Dashboard';
$pageSubtitle = 'New record intake & directory';
include 'includes/header.php';
?>

<div class="panel accent-bar">
  <div class="panel-head">
    <div>
      <h2>New Record</h2>
      <p>Fill in the details below. Every common input type is wired up and ready to bind to your backend.</p>
    </div>
  </div>

  <form>
    <div class="row g-3">

      <div class="col-md-6">
        <label class="form-label">Full name</label>
        <input type="text" class="form-control" placeholder="e.g. Havoc Rahman">
      </div>

      <div class="col-md-6">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="name@example.com">
      </div>

      <div class="col-md-6">
        <label class="form-label">Phone</label>
        <input type="tel" class="form-control" placeholder="+1 (555) 000-0000">
      </div>

      <div class="col-md-6">
        <label class="form-label">Date of birth</label>
        <input type="date" class="form-control">
      </div>

      <div class="col-md-6">
        <label class="form-label">Country <span class="form-text">(autocomplete)</span></label>
        <input type="text" class="form-control js-autocomplete" autocomplete="off" placeholder="Start typing a country…">
      </div>

      <div class="col-md-6">
        <label class="form-label">Department <span class="form-text">(select2)</span></label>
        <select class="form-select js-select2" data-placeholder="Choose a department">
          <option></option>
          <option>Engineering</option>
          <option>Design</option>
          <option>Marketing</option>
          <option>Sales</option>
          <option>Support</option>
          <option>Finance</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Skills <span class="form-text">(select2, multiple)</span></label>
        <select class="form-select js-select2" multiple data-placeholder="Add skills">
          <option>PHP</option>
          <option>JavaScript</option>
          <option>MySQL</option>
          <option>Bootstrap</option>
          <option>jQuery</option>
          <option>REST APIs</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Monthly budget</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" class="form-control" placeholder="0.00" step="0.01">
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Priority</label>
        <select class="form-select">
          <option>Low</option>
          <option selected>Normal</option>
          <option>High</option>
          <option>Urgent</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Notes</label>
        <textarea class="form-control" rows="3" placeholder="Anything else worth noting…"></textarea>
      </div>

      <div class="col-md-6">
        <label class="form-label d-block">Preferred contact method</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contact" id="contactEmail" checked>
          <label class="form-check-label" for="contactEmail">Email</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contact" id="contactPhone">
          <label class="form-check-label" for="contactPhone">Phone</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="contact" id="contactSms">
          <label class="form-check-label" for="contactSms">SMS</label>
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Attachment</label>
        <input type="file" class="form-control">
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="subscribe" checked>
          <label class="form-check-label" for="subscribe">Send me a copy of this record by email</label>
        </div>
      </div>

    </div>

    <div class="mt-4 d-flex gap-2">
      <button type="submit" class="btn btn-primary">Save record</button>
      <button type="reset" class="btn btn-outline-violet">Clear form</button>
    </div>
  </form>
</div>

<div class="panel">
  <div class="panel-head">
    <div>
      <h2>Buttons &amp; Feedback</h2>
      <p>Themed button variants, dismissible alerts, a confirm popup, and a toast notification.</p>
    </div>
  </div>

  <h6 class="text-uppercase-off" style="font-size:.8rem;color:var(--slate);margin-bottom:.6rem;">Buttons</h6>
  <div class="d-flex flex-wrap gap-2 mb-4">
    <button type="button" class="btn btn-primary">Blue</button>
    <button type="button" class="btn btn-violet">Violet</button>
    <button type="button" class="btn btn-ink">Ink</button>
    <button type="button" class="btn btn-success-soft">Success</button>
    <button type="button" class="btn btn-danger-soft">Danger</button>
    <button type="button" class="btn btn-warning-soft">Warning</button>
    <button type="button" class="btn btn-outline-violet">Outline violet</button>
    <button type="button" class="btn btn-ghost">Ghost</button>
  </div>

  <h6 style="font-size:.8rem;color:var(--slate);margin-bottom:.6rem;">Alerts</h6>
  <div class="alert alert-success-soft alert-dismissible fade show" role="alert">
    Record saved successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="alert alert-info-soft alert-dismissible fade show" role="alert">
    Two records are waiting for approval.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="alert alert-warning-soft alert-dismissible fade show" role="alert">
    Your session will expire in 5 minutes.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="alert alert-danger-soft alert-dismissible fade show mb-4" role="alert">
    Could not reach the server. Check your connection.
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <h6 style="font-size:.8rem;color:var(--slate);margin-bottom:.6rem;">Popup &amp; toast</h6>
  <div class="d-flex flex-wrap gap-2">
    <button type="button" class="btn btn-violet" data-bs-toggle="modal" data-bs-target="#demoModal">Open confirm popup</button>
    <button type="button" class="btn btn-outline-violet" id="showToastBtn">Show toast notification</button>
  </div>
</div>

<div class="panel">
  <div class="panel-head">
    <div>
      <h2>Directory</h2>
      <p>Searchable, sortable, paginated — powered by DataTables.</p>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table js-datatable w-100">
      <thead>
        <tr>
          <th>Name</th>
          <th>Department</th>
          <th>Email</th>
          <th>Country</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Amara Osei</td><td>Engineering</td><td>amara.osei@example.com</td><td>Nigeria</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Liu Wei</td><td>Design</td><td>liu.wei@example.com</td><td>China</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Sofia Alvarez</td><td>Marketing</td><td>sofia.alvarez@example.com</td><td>Mexico</td><td><span class="badge-status pending">Pending</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Rohan Mehta</td><td>Sales</td><td>rohan.mehta@example.com</td><td>India</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Emma Johansson</td><td>Finance</td><td>emma.j@example.com</td><td>Sweden</td><td><span class="badge-status inactive">Inactive</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Karim Haddad</td><td>Support</td><td>karim.h@example.com</td><td>Egypt</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Nadia Kowalski</td><td>Engineering</td><td>nadia.k@example.com</td><td>Poland</td><td><span class="badge-status pending">Pending</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Tomás Ferreira</td><td>Design</td><td>tomas.f@example.com</td><td>Brazil</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Aiko Tanaka</td><td>Marketing</td><td>aiko.t@example.com</td><td>Japan</td><td><span class="badge-status active">Active</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
        <tr><td>Daniel Kim</td><td>Sales</td><td>daniel.kim@example.com</td><td>South Korea</td><td><span class="badge-status inactive">Inactive</span></td><td class="row-actions"><button type="button" class="btn-icon btn-icon-blue js-view" title="View">&#128065;</button><button type="button" class="btn-icon btn-icon-violet js-edit" title="Edit">&#9998;</button><button type="button" class="btn-icon btn-icon-danger js-delete" data-bs-toggle="modal" data-bs-target="#demoModal" title="Delete">&#128465;</button></td></tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Confirm popup (Bootstrap modal) -->
<div class="modal fade" id="demoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete this record?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-0">This action can't be undone. The record will be permanently removed from the directory.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger-soft" id="confirmDeleteBtn" data-bs-dismiss="modal">Delete record</button>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>