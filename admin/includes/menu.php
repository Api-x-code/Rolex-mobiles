<?php
/**
 * menu.php
 * Sidebar navigation. Include the current page's file name in
 * $activePage before including header.php to highlight the right link,
 * e.g. $activePage = 'index.php';
 */
if (!isset($activePage)) { $activePage = basename($_SERVER['PHP_SELF']); }

function nav_link($href, $label, $icon, $activePage) {
    $isActive = ($activePage === $href) ? 'active' : '';
    echo '<a class="nav-link ' . $isActive . '" href="' . htmlspecialchars($href) . '">' . $icon . '<span>' . htmlspecialchars($label) . '</span></a>';
}
?>
<aside class="app-sidebar" id="appSidebar">

  <div class="sidebar-brand">
    <div class="mark">A</div>
    <div class="name">AppShell<small>Starter workspace</small></div>
  </div>

  <nav class="sidebar-nav">

    <div class="sidebar-section-label">Main</div>
    <?php
    nav_link('index.php', 'Dashboard', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="1.5" width="6" height="6" rx="1.2" stroke="currentColor" stroke-width="1.4"/><rect x="8.5" y="1.5" width="6" height="6" rx="1.2" stroke="currentColor" stroke-width="1.4"/><rect x="1.5" y="8.5" width="6" height="6" rx="1.2" stroke="currentColor" stroke-width="1.4"/><rect x="8.5" y="8.5" width="6" height="6" rx="1.2" stroke="currentColor" stroke-width="1.4"/></svg>', $activePage);
    nav_link('forms.php', 'Forms', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="1.5" width="12" height="13" rx="1.4" stroke="currentColor" stroke-width="1.4"/><path d="M4.8 5h6.4M4.8 8h6.4M4.8 11h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>', $activePage);
    nav_link('records.php', 'Records', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 4.2C2 3 3.8 2 6 2s4 1 4 2.2v7.6c0 1.2-1.8 2.2-4 2.2s-4-1-4-2.2z" stroke="currentColor" stroke-width="1.4"/><path d="M10 4.5 12.4 6c1 .6 1.6 1.5 1.6 2.4V11c0 .9-1.2 1.7-2.7 1.9" stroke="currentColor" stroke-width="1.4"/></svg>', $activePage);
    ?>

    <div class="sidebar-section-label">Manage</div>
    <?php
    nav_link('customers.php', 'Customers', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="6" cy="5" r="2.3" stroke="currentColor" stroke-width="1.4"/><path d="M1.6 13.3c.5-2.3 2.3-3.6 4.4-3.6s3.9 1.3 4.4 3.6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="12" cy="5.5" r="1.8" stroke="currentColor" stroke-width="1.3"/><path d="M10.8 9.9c1.6.1 2.9 1.2 3.3 3.1" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>', $activePage);
    nav_link('reports.php', 'Reports', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2.5 13.5V7M7 13.5V3M11.5 13.5V9.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><path d="M1.5 13.5h13" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>', $activePage);
    nav_link('settings.php', 'Settings', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="2.2" stroke="currentColor" stroke-width="1.4"/><path d="M8 1.8v1.6M8 12.6v1.6M14.2 8h-1.6M3.4 8H1.8M12.3 3.7l-1.1 1.1M4.8 11.2l-1.1 1.1M12.3 12.3l-1.1-1.1M4.8 4.8 3.7 3.7" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>', $activePage);
    ?>
  </nav>

  <div class="sidebar-foot">
    v1.0 · AppShell Starter
  </div>

</aside>
