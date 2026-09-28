$(function () {

  /* =========================================================
     Sidebar: desktop hide/unhide + mobile off-canvas drawer
     ========================================================= */
  var $body = $('body');
  var isDesktop = function () { return window.innerWidth >= 992; };

  // restore desktop collapsed state
  if (isDesktop() && localStorage.getItem('sidebarCollapsed') === '1') {
    $body.addClass('sidebar-collapsed');
  }

  $('#sidebarToggle').on('click', function () {
    if (isDesktop()) {
      $body.toggleClass('sidebar-collapsed');
      localStorage.setItem('sidebarCollapsed', $body.hasClass('sidebar-collapsed') ? '1' : '0');
    } else {
      $body.toggleClass('sidebar-open-mobile');
    }
  });

  $('.sidebar-overlay').on('click', function () {
    $body.removeClass('sidebar-open-mobile');
  });

  $(window).on('resize', function () {
    if (isDesktop()) {
      $body.removeClass('sidebar-open-mobile');
    }
  });

  /* =========================================================
     Select2
     ========================================================= */
  if ($.fn.select2) {
    $('.js-select2').each(function () {
      $(this).select2({
        width: '100%',
        placeholder: $(this).data('placeholder') || 'Select an option',
        allowClear: true
      });
    });
  }

  /* =========================================================
     jQuery UI Autocomplete
     ========================================================= */
  var countryList = [
    'Australia', 'Bangladesh', 'Brazil', 'Canada', 'China', 'Egypt',
    'France', 'Germany', 'India', 'Indonesia', 'Italy', 'Japan',
    'Kenya', 'Malaysia', 'Mexico', 'Nepal', 'Netherlands', 'Nigeria',
    'Pakistan', 'Philippines', 'Poland', 'Saudi Arabia', 'Singapore',
    'South Africa', 'South Korea', 'Spain', 'Sri Lanka', 'Sweden',
    'Thailand', 'Turkey', 'United Arab Emirates', 'United Kingdom',
    'United States', 'Vietnam'
  ];

  if ($.fn.autocomplete) {
    $('.js-autocomplete').autocomplete({
      source: countryList,
      minLength: 1,
      appendTo: 'body',
      classes: {
        'ui-autocomplete': 'shadow-sm'
      },
      open: function () {
        // Keep the suggestion list the same width as its input — the
        // stylesheet already keeps it above every other layer (z-index).
        var $input = $(this);
        $input.autocomplete('widget').css({ width: $input.outerWidth() + 'px' });
      }
    });
  }

  /* =========================================================
     DataTables
     ========================================================= */
  if ($.fn.DataTable) {
    $('.js-datatable').DataTable({
      pageLength: 5,
      lengthMenu: [5, 10, 25, 50],
      columnDefs: [
        { orderable: false, targets: -1 } // Actions column isn't sortable
      ],
      dom: '<"dt-toolbar"Bf>rtip',
      buttons: [
        { extend: 'copyHtml5',  text: 'Copy' },
        { extend: 'csvHtml5',   text: 'CSV' },
        { extend: 'print',      text: 'Print' }
      ],
      language: {
        search: '',
        searchPlaceholder: 'Search records…'
      }
    });
  }

  /* =========================================================
     Toast helper — call showToast('Message', 'success'|'info'|'warning'|'danger')
     ========================================================= */
  window.showToast = function (message, variant) {
    variant = variant || 'violet';
    var $toast = $(
      '<div class="toast align-items-center border-0 toast-' + variant + '" role="alert" aria-live="assertive" aria-atomic="true">' +
        '<div class="d-flex">' +
          '<div class="toast-body">' + message + '</div>' +
          '<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>' +
        '</div>' +
      '</div>'
    );
    $('#appToastContainer').append($toast);
    var toast = new bootstrap.Toast($toast[0], { delay: 3500 });
    toast.show();
    $toast.on('hidden.bs.toast', function () { $(this).remove(); });
  };

  /* Demo trigger button on the index page */
  $('#showToastBtn').on('click', function () {
    showToast('This is a themed toast notification.', 'violet');
  });

  /* Directory row actions */
  var $pendingRow = null;

  $(document).on('click', '.js-view', function () {
    var name = $(this).closest('tr').find('td').eq(0).text();
    showToast('Viewing record: ' + name, 'info');
  });

  $(document).on('click', '.js-edit', function () {
    var name = $(this).closest('tr').find('td').eq(0).text();
    showToast('Edit form would open for: ' + name, 'violet');
  });

  $(document).on('click', '.js-delete', function () {
    $pendingRow = $(this).closest('tr');
  });

  $('#confirmDeleteBtn').on('click', function () {
    if ($pendingRow && $.fn.DataTable) {
      var table = $('.js-datatable').DataTable();
      var name = $pendingRow.find('td').eq(0).text();
      table.row($pendingRow).remove().draw(false);
      showToast(name + ' was deleted.', 'danger');
      $pendingRow = null;
    }
  });

});