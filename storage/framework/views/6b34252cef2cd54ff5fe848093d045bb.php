<style>
/* Custom Exclusive Theme Overrides */
.fi-main {
    background-color: #f8fafc !important;
}

/* Rounded and soft shadow for panels/cards */
.fi-ta-content, .fi-fo-component-container, .fi-wi-stats-overview-stat {
    border-radius: 1rem !important; /* rounded-2xl */
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01) !important; /* soft large shadow */
    border: none !important; /* border-less */
}

/* Top Navigation Tweaks */
.fi-topbar {
    border-bottom: 1px solid #f1f5f9 !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02) !important;
}

/* Button roundness */
.fi-btn {
    border-radius: 0.75rem !important; /* rounded-xl */
    transition: all 0.3s ease !important;
}
.fi-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(200, 96, 122, 0.2) !important;
}

/* Badge roundness */
.fi-badge {
    border-radius: 9999px !important; /* fully rounded */
    padding-left: 0.75rem !important;
    padding-right: 0.75rem !important;
}

/* Inputs soft border */
.fi-input-wrapper {
    border-radius: 0.75rem !important;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.02) !important;
}

/* Sidebar Fix if not top navigation */
.fi-sidebar {
    border-right: 1px solid #f1f5f9 !important;
}
</style>
<?php /**PATH D:\psikolog\resources\views/filament/custom-css.blade.php ENDPATH**/ ?>