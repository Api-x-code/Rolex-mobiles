<?php
/**
 * header.php
 * Opens the document, loads all CSS dependencies, starts the app shell,
 * includes the sidebar (menu.php), and renders the topbar.
 *
 * Expects (optional) before including this file:
 *   $pageTitle    = 'Dashboard';
 *   $pageSubtitle = 'Short description of the current page';
 */
if (!isset($pageTitle))    { $pageTitle = 'Dashboard'; }
if (!isset($pageSubtitle)) { $pageSubtitle = 'Overview of your workspace'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle); ?> · AppShell</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="../assets/css/select2.min.css">

<!-- jQuery UI (autocomplete) -->
<link rel="stylesheet" href="../assets/css/jquery-ui.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="../assets/css/buttons.dataTables.min.css">

<!-- App theme -->
<link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body>

<div class="app-shell">

  <?php include __DIR__ . '/menu.php'; ?>
  <div class="sidebar-overlay"></div>

  <div class="app-main">

    <header class="app-topbar">
      <button class="sidebar-toggle" id="sidebarToggle" type="button" aria-label="Toggle menu">
        <svg width="18" height="18" viewBox="0 0 16 16" fill="none">
          <path d="M1.5 3h13M1.5 8h13M1.5 13h13" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
        </svg>
      </button>

      <div class="page-title">
        <?php echo htmlspecialchars($pageTitle); ?>
        <small><?php echo htmlspecialchars($pageSubtitle); ?></small>
      </div>

      <div class="topbar-search">
        <input type="text" class="form-control" placeholder="Search…">
      </div>

      <div class="topbar-user">
        <div class="avatar">HV</div>
        <div class="who">
          <strong>Havoc</strong>
          <span>Administrator</span>
        </div>
      </div>
    </header>

    <main class="app-content">