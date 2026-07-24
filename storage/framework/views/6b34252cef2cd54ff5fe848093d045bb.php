<style>
    /* ============================================
       FILAMENT ADMIN - MODERN REDESIGN
       An Moerty Psikologi
       ============================================ */

    /* ----- MAIN BACKGROUND ----- */
    .fi-main {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%) !important;
    }

    /* ----- GLASSMORPHISM TOPBAR ----- */
    .fi-topbar {
        backdrop-filter: blur(20px) saturate(180%) !important;
        -webkit-backdrop-filter: blur(20px) saturate(180%) !important;
        background-color: rgba(255, 255, 255, 0.85) !important;
        border-bottom: 1px solid rgba(200, 96, 122, 0.12) !important;
        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.04),
            0 1px 2px rgba(0, 0, 0, 0.02) !important;
    }

    .fi-topbar .fi-logo {
        font-weight: 700 !important;
        letter-spacing: -0.02em !important;
        font-size: 1.125rem !important;
    }

    /* Topbar item hover */
    .fi-topbar nav a:hover {
        background-color: rgba(200, 96, 122, 0.08) !important;
    }

    .fi-topbar nav a.fi-active {
        background-color: rgba(200, 96, 122, 0.12) !important;
        color: #C8607A !important;
        font-weight: 600 !important;
    }

    /* ----- CARDS & PANELS ----- */
    .fi-ta-content,
    .fi-fo-component-container {
        background-color: white !important;
        border-radius: 1rem !important;
        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.04),
            0 1px 2px rgba(0, 0, 0, 0.02) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }

    .fi-ta-content:hover {
        box-shadow:
            0 4px 6px rgba(0, 0, 0, 0.05),
            0 10px 15px rgba(0, 0, 0, 0.03) !important;
    }

    /* Widget card (section wrapper) */
    .fi-wi-widget {
        border-radius: 1rem !important;
        transition: all 0.3s ease !important;
    }

    /* ----- DASHBOARD STATS WIDGETS ----- */
    .fi-wi-stats-overview-stat {
        background: linear-gradient(135deg, white 0%, #fafafa 100%) !important;
        border-radius: 1rem !important;
        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.04),
            0 1px 2px rgba(0, 0, 0, 0.02) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        position: relative !important;
        overflow: hidden !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        animation: fadeInUp 0.5s ease-out both;
    }

    .fi-wi-stats-overview-stat:nth-child(1) { animation-delay: 0.05s; }
    .fi-wi-stats-overview-stat:nth-child(2) { animation-delay: 0.1s; }
    .fi-wi-stats-overview-stat:nth-child(3) { animation-delay: 0.15s; }
    .fi-wi-stats-overview-stat:nth-child(4) { animation-delay: 0.2s; }

    .fi-wi-stats-overview-stat::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #C8607A, #e87998);
        z-index: 1;
    }

    .fi-wi-stats-overview-stat:hover {
        transform: translateY(-2px) !important;
        box-shadow:
            0 10px 15px rgba(200, 96, 122, 0.08),
            0 4px 6px rgba(200, 96, 122, 0.05) !important;
    }

    .fi-wi-stats-overview-stat .fi-wi-stats-overview-stat-description {
        font-size: 0.8125rem !important;
        color: #94a3b8 !important;
    }

    .fi-wi-stats-overview-stat .fi-wi-stats-overview-stat-label {
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        color: #475569 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.03em !important;
    }

    .fi-wi-stats-overview-stat .fi-wi-stats-overview-stat-value {
        font-size: 2rem !important;
        font-weight: 700 !important;
        letter-spacing: -0.02em !important;
        line-height: 1 !important;
    }

    /* ----- TABLES ----- */
    .fi-ta-header-cell {
        font-weight: 600 !important;
        text-transform: uppercase !important;
        font-size: 0.7rem !important;
        letter-spacing: 0.06em !important;
        color: #94a3b8 !important;
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .fi-ta-row {
        transition: all 0.2s ease !important;
    }

    .fi-ta-row:hover {
        background-color: rgba(200, 96, 122, 0.03) !important;
    }

    .fi-ta-row:nth-child(even) {
        background-color: rgba(248, 250, 252, 0.4) !important;
    }

    .fi-ta-row:nth-child(even):hover {
        background-color: rgba(200, 96, 122, 0.04) !important;
    }

    .fi-ta-cell {
        padding-top: 0.875rem !important;
        padding-bottom: 0.875rem !important;
    }

    /* Table pagination */
    .fi-pagination {
        border-radius: 0.75rem !important;
        padding: 0.5rem !important;
        background: white !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        margin-top: 1rem !important;
    }

    /* ----- FORMS & INPUTS ----- */
    .fi-input {
        border-radius: 0.75rem !important;
        border: 1.5px solid #e2e8f0 !important;
        transition: all 0.2s ease !important;
        background-color: #fafafa !important;
    }

    .fi-input:focus {
        border-color: #C8607A !important;
        box-shadow: 0 0 0 3px rgba(200, 96, 122, 0.1) !important;
        background-color: white !important;
    }

    .fi-input-wrapper {
        border-radius: 0.75rem !important;
    }

    .fi-select-input {
        border-radius: 0.75rem !important;
    }

    .fi-fo-field-label {
        font-weight: 600 !important;
        font-size: 0.8125rem !important;
        color: #475569 !important;
    }

    .fi-fo-field-label .fi-fo-field-label-required-indicator {
        color: #ef4444 !important;
    }

    /* ----- BUTTONS ----- */
    .fi-btn {
        border-radius: 0.75rem !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        font-weight: 600 !important;
        letter-spacing: 0.01em !important;
    }

    .fi-btn-primary {
        background: linear-gradient(135deg, #C8607A, #d47a91) !important;
        border: none !important;
        box-shadow: 0 4px 6px rgba(200, 96, 122, 0.2) !important;
    }

    .fi-btn-primary:hover {
        transform: translateY(-1px) !important;
        box-shadow: 0 6px 12px rgba(200, 96, 122, 0.3) !important;
    }

    .fi-btn-primary:active {
        transform: translateY(0px) !important;
        box-shadow: 0 2px 4px rgba(200, 96, 122, 0.2) !important;
    }

    .fi-btn-secondary {
        border: 1.5px solid #e2e8f0 !important;
        background: white !important;
    }

    .fi-btn-secondary:hover {
        border-color: #C8607A !important;
        background: rgba(200, 96, 122, 0.04) !important;
    }

    .fi-btn-danger {
        background: linear-gradient(135deg, #ef4444, #f87171) !important;
        border: none !important;
        box-shadow: 0 4px 6px rgba(239, 68, 68, 0.2) !important;
    }

    .fi-btn-danger:hover {
        transform: translateY(-1px) !important;
        box-shadow: 0 6px 12px rgba(239, 68, 68, 0.3) !important;
    }

    .fi-btn-success {
        background: linear-gradient(135deg, #10b981, #34d399) !important;
        border: none !important;
        box-shadow: 0 4px 6px rgba(16, 185, 129, 0.2) !important;
    }

    .fi-btn-success:hover {
        transform: translateY(-1px) !important;
        box-shadow: 0 6px 12px rgba(16, 185, 129, 0.3) !important;
    }

    /* ----- BADGES ----- */
    .fi-badge {
        border-radius: 9999px !important;
        padding: 0.25rem 0.75rem !important;
        font-weight: 500 !important;
        font-size: 0.7rem !important;
        letter-spacing: 0.02em !important;
        border: none !important;
    }

    .fi-badge-success {
        background: linear-gradient(135deg, #d1fae5, #a7f3d0) !important;
        color: #065f46 !important;
    }

    .fi-badge-warning {
        background: linear-gradient(135deg, #fef3c7, #fde68a) !important;
        color: #92400e !important;
    }

    .fi-badge-danger {
        background: linear-gradient(135deg, #fee2e2, #fecaca) !important;
        color: #991b1b !important;
    }

    .fi-badge-primary {
        background: linear-gradient(135deg, #fce7f3, #fbcfe8) !important;
        color: #9d174d !important;
    }

    /* ----- MODAL / DIALOG ----- */
    .fi-modal-window {
        border-radius: 1.25rem !important;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
        border: none !important;
    }

    /* ----- NOTIFICATIONS / TOAST ----- */
    .fi-notification {
        border-radius: 1rem !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
    }

    /* ----- DROPDOWN ----- */
    .fi-dropdown-panel {
        border-radius: 1rem !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        padding: 0.5rem !important;
    }

    .fi-dropdown-list-item {
        border-radius: 0.5rem !important;
        transition: all 0.15s ease !important;
    }

    .fi-dropdown-list-item:hover {
        background-color: rgba(200, 96, 122, 0.06) !important;
    }

    /* ----- SECTION HEADERS ----- */
    .fi-section-header {
        font-weight: 700 !important;
        letter-spacing: -0.01em !important;
    }

    .fi-section {
        border-radius: 1rem !important;
        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.04),
            0 1px 2px rgba(0, 0, 0, 0.02) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        overflow: hidden !important;
    }

    /* ----- TABS ----- */
    .fi-tabs {
        border-radius: 0.75rem !important;
        background-color: #f1f5f9 !important;
        padding: 0.25rem !important;
    }

    .fi-tabs-item {
        border-radius: 0.5rem !important;
        transition: all 0.2s ease !important;
        font-weight: 500 !important;
    }

    .fi-tabs-item-active {
        background-color: white !important;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08) !important;
        color: #C8607A !important;
        font-weight: 600 !important;
    }

    /* ----- BREADCRUMBS ----- */
    .fi-breadcrumbs {
        font-size: 0.8125rem !important;
    }

    .fi-breadcrumbs a {
        transition: color 0.2s ease !important;
    }

    .fi-breadcrumbs a:hover {
        color: #C8607A !important;
    }

    /* ----- HEADING ACTIONS ----- */
    .fi-page-header-heading {
        font-weight: 700 !important;
        letter-spacing: -0.02em !important;
    }

    /* ----- SIDEBAR (fallback) ----- */
    .fi-sidebar {
        border-right: 1px solid rgba(226, 232, 240, 0.8) !important;
        background: linear-gradient(180deg, #fafafa 0%, #f1f5f9 100%) !important;
    }

    .fi-sidebar-item {
        border-radius: 0.75rem !important;
        transition: all 0.2s ease !important;
    }

    .fi-sidebar-item-active {
        background: linear-gradient(135deg, #C8607A, #d47a91) !important;
        box-shadow: 0 4px 6px rgba(200, 96, 122, 0.2) !important;
    }

    .fi-sidebar-item-active .fi-sidebar-item-label {
        color: white !important;
        font-weight: 600 !important;
    }

    .fi-sidebar-group-label {
        font-weight: 600 !important;
        text-transform: uppercase !important;
        font-size: 0.65rem !important;
        letter-spacing: 0.08em !important;
        color: #94a3b8 !important;
    }

    /* ----- LOGIN PAGE ----- */
    .fi-simple-layout {
        background: linear-gradient(150deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%) !important;
        position: relative !important;
    }

    .fi-simple-layout::before {
        content: '';
        position: fixed;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background:
            radial-gradient(circle at 20% 30%, rgba(200, 96, 122, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(200, 96, 122, 0.03) 0%, transparent 50%);
        pointer-events: none;
    }

    .fi-simple-card {
        border-radius: 1.25rem !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.03), 0 10px 25px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid rgba(226, 232, 240, 0.6) !important;
        background-color: white !important;
    }

    .fi-simple-card .fi-btn-primary {
        width: 100% !important;
        justify-content: center !important;
        padding-top: 0.75rem !important;
        padding-bottom: 0.75rem !important;
    }

    /* ----- SCROLLBAR ----- */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 9999px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }

    /* ----- ANIMATIONS ----- */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(12px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulseGlow {
        0%, 100% {
            box-shadow: 0 0 0 0 rgba(200, 96, 122, 0.4);
        }
        50% {
            box-shadow: 0 0 0 8px rgba(200, 96, 122, 0);
        }
    }

    /* Page transition */
    .fi-page {
        animation: fadeInUp 0.3s ease-out both;
    }

    /* Filter panel */
    .fi-fo-field-wrapper {
        transition: all 0.2s ease !important;
    }

    /* Rich editor */
    .tiptap-editor {
        border-radius: 0.75rem !important;
    }

    /* File upload */
    .fi-fo-file-upload {
        border-radius: 0.75rem !important;
        border: 2px dashed #e2e8f0 !important;
        transition: all 0.2s ease !important;
    }

    .fi-fo-file-upload:hover {
        border-color: #C8607A !important;
        background: rgba(200, 96, 122, 0.03) !important;
    }

    /* Toggle buttons */
    .fi-btn-group {
        border-radius: 0.75rem !important;
        overflow: hidden !important;
    }

    /* Card grid spacing */
    .fi-wi-stats-overview-stat-ctn {
        gap: 1.25rem !important;
    }
</style><?php /**PATH D:\psikolog\resources\views/filament/custom-css.blade.php ENDPATH**/ ?>