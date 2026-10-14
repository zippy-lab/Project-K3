<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>K3 dalam Lingkungan Software Engineering — Modul Interaktif SMK PPLG</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --primary-light: #eff6ff;
            --primary-border: #bfdbfe;
            --secondary: #059669;
            --secondary-light: #ecfdf5;
            --accent: #d97706;
            --accent-light: #fef3c7;
            --danger: #dc2626;
            --danger-light: #fef2f2;
            --dark: #0f172a;
            --slate-800: #1e293b;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-500: #64748b;
            --slate-400: #94a3b8;
            --slate-200: #e2e8f0;
            --slate-100: #f1f5f9;
            --slate-50: #f8fafc;
            --card-border: #e2e8f0;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 22px;
            --radius-full: 9999px;
            --shadow-sm: 0 1px 3px rgba(15, 23, 42, 0.05);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.04);
            --shadow-lg: 0 20px 35px -8px rgba(37, 99, 235, 0.16);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #f0f7ff 0%, #f8fafc 50%, #effcf6 100%);
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.65;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }

        /* Topbar Header */
        .topbar-wrapper {
            position: sticky;
            top: 12px;
            z-index: 50;
            padding: 0 16px;
            margin-bottom: 24px;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(226, 232, 240, 0.9);
            border-radius: var(--radius-lg);
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow-md);
            gap: 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 800;
            font-size: 1.25rem;
            letter-spacing: -0.5px;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #dbeafe, #bbf7d0);
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.15);
            font-size: 22px;
        }

        .nav-tabs {
            display: flex;
            gap: 6px;
            background: var(--slate-100);
            padding: 4px;
            border-radius: var(--radius-md);
        }

        .nav-btn {
            border: none;
            background: transparent;
            padding: 8px 18px;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--slate-600);
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-btn:hover {
            color: var(--primary);
        }

        .nav-btn.active {
            background: #ffffff;
            color: var(--primary);
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pill-xp {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #fef3c7, #fef9c3);
            border: 1px solid #fde68a;
            color: #92400e;
            padding: 6px 14px;
            border-radius: var(--radius-full);
            font-size: 0.88rem;
            font-weight: 800;
        }

        /* View Content Animation */
        .view-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .view-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 60%, #3b82f6 100%);
            border-radius: 28px;
            padding: 46px 48px;
            color: white;
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1.25fr 0.75fr;
            align-items: center;
            gap: 36px;
            box-shadow: var(--shadow-lg);
            margin-bottom: 32px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            padding: 6px 14px;
            border-radius: var(--radius-full);
            font-size: 0.82rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 16px;
        }

        .hero h1 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(2rem, 3.8vw, 3.2rem);
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 16px;
        }

        .hero p {
            font-size: 1.05rem;
            color: #dbeafe;
            max-width: 580px;
            margin-bottom: 26px;
            line-height: 1.6;
        }

        .btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            border: none;
            cursor: pointer;
            padding: 12px 24px;
            font-size: 0.95rem;
            font-weight: 700;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-white {
            background: #ffffff;
            color: var(--primary);
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }

        .btn-white:hover {
            background: #f8fafc;
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
        }

        .btn-glass {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(6px);
        }

        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        }

        .btn-primary:hover {
            background: var(--primary-hover);
        }

        .btn-secondary {
            background: #ffffff;
            border: 1px solid var(--slate-200);
            color: var(--slate-800);
        }

        .btn-secondary:hover {
            background: var(--slate-100);
        }

        .hero-art {
            text-align: center;
            font-size: 7.5rem;
            user-select: none;
            filter: drop-shadow(0 20px 20px rgba(0,0,0,0.25));
            animation: bounceSoft 4s ease-in-out infinite;
        }

        @keyframes bounceSoft {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 36px;
        }

        .stat-card {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-md);
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: var(--shadow-sm);
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            font-size: 24px;
            background: var(--primary-light);
        }

        .stat-title {
            font-size: 0.82rem;
            color: var(--slate-500);
            font-weight: 700;
        }

        .stat-val {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--dark);
        }

        /* Section Headers */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 20px;
            gap: 14px;
        }

        .section-header h2 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.6rem;
            color: var(--dark);
        }

        .section-header p {
            color: var(--slate-500);
            font-size: 0.95rem;
        }

        /* Course Cards Grid */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
            margin-bottom: 36px;
        }

        .card {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: #cbd5e1;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .course-badge {
            font-size: 0.75rem;
            font-weight: 800;
            padding: 4px 10px;
            border-radius: var(--radius-full);
            background: var(--slate-100);
            color: var(--slate-600);
        }

        .course-badge.done {
            background: #dcfce7;
            color: #15803d;
        }

        .card-emoji {
            font-size: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: grid;
            place-items: center;
        }

        .card h3 {
            font-size: 1.18rem;
            font-weight: 800;
            margin-bottom: 6px;
            color: var(--dark);
        }

        .card-subtitle {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .card p {
            color: var(--slate-600);
            font-size: 0.9rem;
            line-height: 1.55;
            margin-bottom: 18px;
            flex-grow: 1;
        }

        .progress-bar-wrap {
            height: 6px;
            background: var(--slate-100);
            border-radius: var(--radius-full);
            overflow: hidden;
            margin-bottom: 16px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #10b981, #059669);
            width: 0%;
            transition: width 0.3s ease;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 12px;
            border-top: 1px solid var(--slate-100);
        }

        /* Lesson Layout */
        .lesson-layout {
            display: grid;
            grid-template-columns: 310px 1fr;
            gap: 24px;
            align-items: start;
            margin-bottom: 40px;
        }

        .sidebar-nav {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 20px;
            position: sticky;
            top: 90px;
            box-shadow: var(--shadow-sm);
        }

        .sidebar-nav h3 {
            font-size: 1rem;
            font-weight: 800;
            margin-bottom: 14px;
            color: var(--slate-800);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sidebar-links {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 16px;
        }

        .chapter-btn {
            border: none;
            background: transparent;
            text-align: left;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--slate-600);
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chapter-btn:hover {
            background: var(--slate-100);
            color: var(--primary);
        }

        .chapter-btn.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 800;
        }

        .lesson-article {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 40px;
            box-shadow: var(--shadow-sm);
        }

        .lesson-tag {
            display: inline-block;
            background: var(--primary-light);
            color: var(--primary);
            padding: 4px 12px;
            border-radius: var(--radius-full);
            font-size: 0.82rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .lesson-article h1 {
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 8px;
            line-height: 1.25;
        }

        .lesson-subhead {
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 14px;
        }

        .lesson-lead {
            font-size: 1.02rem;
            color: var(--slate-600);
            margin-bottom: 24px;
            line-height: 1.7;
        }

        .info-callout {
            background: #f0fdf4;
            border-left: 4px solid var(--secondary);
            padding: 18px 20px;
            border-radius: var(--radius-sm);
            margin-bottom: 24px;
            font-size: 0.95rem;
        }

        .info-callout.tip {
            background: #fffbeb;
            border-left-color: var(--accent);
        }

        .info-callout.case {
            background: #f8fafc;
            border-left-color: #3b82f6;
        }

        .info-callout strong {
            display: block;
            margin-bottom: 4px;
            color: var(--dark);
            font-weight: 800;
        }

        .lesson-section {
            margin-bottom: 26px;
        }

        .lesson-section h3 {
            font-size: 1.22rem;
            font-weight: 800;
            color: var(--slate-800);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .lesson-section p {
            color: var(--slate-600);
            line-height: 1.75;
            white-space: pre-line;
            font-size: 0.98rem;
        }

        .lesson-footer-nav {
            margin-top: 36px;
            padding-top: 24px;
            border-top: 1px solid var(--slate-200);
            display: flex;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        /* Quiz View */
        .quiz-container {
            max-width: 860px;
            margin: 0 auto 40px;
        }

        .quiz-card {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 40px;
            box-shadow: var(--shadow-md);
        }

        .quiz-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
            font-weight: 800;
            font-size: 0.92rem;
            color: var(--slate-500);
        }

        .quiz-progress-track {
            height: 8px;
            background: var(--slate-100);
            border-radius: var(--radius-full);
            overflow: hidden;
            margin-bottom: 26px;
        }

        .quiz-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), #818cf8);
            transition: width 0.3s ease;
        }

        .question-badge {
            display: inline-block;
            background: var(--slate-100);
            color: var(--slate-700);
            padding: 4px 12px;
            border-radius: var(--radius-full);
            font-size: 0.8rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .question-text {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 24px;
            line-height: 1.45;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 30px;
        }

        .option-item {
            border: 2px solid var(--card-border);
            border-radius: var(--radius-md);
            padding: 14px 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 700;
            color: var(--slate-800);
            transition: all 0.15s ease;
            background: #ffffff;
            font-size: 0.96rem;
        }

        .option-item:hover {
            border-color: #93c5fd;
            background: var(--primary-light);
        }

        .option-item.selected {
            border-color: var(--primary);
            background: #eff6ff;
            color: var(--primary-hover);
        }

        .option-letter {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            display: grid;
            place-items: center;
            font-weight: 800;
            font-size: 0.95rem;
            background: var(--slate-100);
            color: var(--slate-600);
            flex-shrink: 0;
        }

        .option-item.selected .option-letter {
            background: var(--primary);
            color: #ffffff;
        }

        /* Result View */
        .result-box {
            text-align: center;
            padding: 20px 0;
        }

        .result-icon {
            font-size: 5rem;
            margin-bottom: 12px;
        }

        .result-score-big {
            font-size: 5.5rem;
            font-weight: 900;
            font-family: 'Space Grotesk', sans-serif;
            color: var(--primary);
            line-height: 1;
            margin: 16px 0 8px;
        }

        .result-status {
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 800;
            padding: 6px 18px;
            border-radius: var(--radius-full);
            margin-bottom: 24px;
        }

        .result-status.pass {
            background: #dcfce7;
            color: #166534;
        }

        .result-status.fail {
            background: #fee2e2;
            color: #991b1b;
        }

        .result-breakdown {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 24px 0 32px;
        }

        .breakdown-item {
            background: var(--slate-50);
            border: 1px solid var(--card-border);
            border-radius: var(--radius-md);
            padding: 16px;
        }

        .breakdown-val {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--dark);
        }

        .breakdown-label {
            font-size: 0.85rem;
            color: var(--slate-500);
            font-weight: 700;
        }

        /* Review Section */
        .review-box {
            margin-top: 36px;
            text-align: left;
            border-top: 1px solid var(--slate-200);
            padding-top: 28px;
        }

        .review-item {
            background: var(--slate-50);
            border: 1px solid var(--card-border);
            border-radius: var(--radius-md);
            padding: 20px;
            margin-bottom: 16px;
        }

        .review-title {
            font-weight: 800;
            font-size: 1.05rem;
            margin-bottom: 6px;
            color: var(--dark);
        }

        .review-badge {
            font-size: 0.88rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .review-badge.correct {
            color: #16a34a;
        }

        .review-badge.wrong {
            color: #dc2626;
        }

        .review-explanation {
            font-size: 0.92rem;
            color: var(--slate-600);
            line-height: 1.6;
        }

        /* Achievements Profile */
        .profile-card {
            background: linear-gradient(135deg, #eff6ff 0%, #fdf2f8 50%, #fefce8 100%);
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 32px;
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-sm);
        }

        .profile-avatar {
            font-size: 4.5rem;
            background: #ffffff;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            box-shadow: var(--shadow-md);
            flex-shrink: 0;
        }

        .profile-details {
            flex-grow: 1;
        }

        .profile-details h2 {
            font-size: 1.6rem;
            font-weight: 800;
        }

        .profile-level {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .xp-track {
            height: 10px;
            background: rgba(0, 0, 0, 0.08);
            border-radius: var(--radius-full);
            overflow: hidden;
            margin-top: 8px;
        }

        .xp-bar {
            height: 100%;
            background: linear-gradient(90deg, #8b5cf6, #ec4899);
            width: 0%;
            transition: width 0.4s ease;
        }

        .badges-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 36px;
        }

        .badge-item {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-md);
            padding: 24px 16px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }

        .badge-item.locked {
            filter: grayscale(1);
            opacity: 0.5;
            background: var(--slate-50);
        }

        .badge-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .badge-name {
            font-weight: 800;
            font-size: 1rem;
            margin-bottom: 4px;
        }

        .badge-desc {
            font-size: 0.82rem;
            color: var(--slate-500);
        }

        .history-list {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: var(--radius-lg);
            padding: 20px 24px;
            box-shadow: var(--shadow-sm);
        }

        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid var(--slate-100);
        }

        .history-item:last-child {
            border-bottom: none;
        }

        /* Toast */
        .toast {
            position: fixed;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: var(--dark);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: var(--radius-full);
            font-size: 0.95rem;
            font-weight: 700;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            z-index: 999;
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            pointer-events: none;
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        /* Footer */
        footer {
            margin-top: auto;
            border-top: 1px solid var(--card-border);
            background: #ffffff;
            padding: 28px 0;
            text-align: center;
            color: var(--slate-500);
            font-size: 0.88rem;
        }

        @media (max-width: 860px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 32px 24px;
                text-align: center;
            }
            .hero p {
                margin: 0 auto 24px;
            }
            .btn-group {
                justify-content: center;
            }
            .lesson-layout {
                grid-template-columns: 1fr;
            }
            .sidebar-nav {
                position: static;
            }
            .result-breakdown {
                grid-template-columns: repeat(2, 1fr);
            }
            .nav-btn span {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Header Navbar -->
    <div class="topbar-wrapper">
        <header class="topbar container">
            <a href="#" class="brand" onclick="switchTab('home'); return false;">
                <div class="brand-icon">🦺</div>
                <div>K3 <span style="color: var(--primary);">SE</span></div>
            </a>

            <nav class="nav-tabs" aria-label="Navigasi Utama">
                <button class="nav-btn active" data-tab="home" onclick="switchTab('home')">
                    🏠 <span>Beranda</span>
                </button>
                <button class="nav-btn" data-tab="courses" onclick="switchTab('courses')">
                    📚 <span>Materi K3</span>
                </button>
                <button class="nav-btn" data-tab="quiz" onclick="switchTab('quiz')">
                    🧠 <span>Kuis K3</span>
                </button>
                <button class="nav-btn" data-tab="achievements" onclick="switchTab('achievements')">
                    🏆 <span>Pencapaian</span>
                </button>
            </nav>

            <div class="header-actions">
                <div class="pill-xp">
                    <span>⚡</span>
                    <span id="topbarXP">0 XP</span>
                </div>
            </div>
        </header>
    </div>

    <!-- Main Content Area -->
    <main class="container">
        <!-- 1. Beranda -->
        <section id="tab-home" class="view-content active">
            <div class="hero">
                <div>
                    <span class="hero-tag">🎓 PPLG SMK · Modul Pembelajaran Interaktif</span>
                    <h1>K3 dalam Lingkungan<br>Software Engineering</h1>
                    <p>Pelajari pentingnya keselamatan, ergonomi kerja, pencegahan bahaya kelistrikan, kesehatan fisik-mental, dan etika laboratorium untuk calon Programmer, Software Engineer, UI/UX Designer, dan System Analyst profesional.</p>
                    <div class="btn-group">
                        <button class="btn btn-white" onclick="switchTab('courses')">
                            Mulai Belajar Materi →
                        </button>
                        <button class="btn btn-glass" onclick="startQuiz()">
                            🧠 Ikuti Kuis K3 SE
                        </button>
                    </div>
                </div>
                <div class="hero-art">
                    👨‍💻
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon" style="background:#eff6ff; color:#2563eb;">📚</div>
                    <div>
                        <div class="stat-title">Modul Diselesaikan</div>
                        <div class="stat-val" id="statLessons">0 / {{ count($lessons) }}</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background:#fef3c7; color:#d97706;">⭐</div>
                    <div>
                        <div class="stat-title">Skor Kuis Tertinggi</div>
                        <div class="stat-val" id="statBestScore">{{ $bestAttempt ? $bestAttempt->score . '/100' : '—' }}</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background:#f3e8ff; color:#7e22ce;">⚡</div>
                    <div>
                        <div class="stat-title">Total Pengalaman (XP)</div>
                        <div class="stat-val" id="statXP">0 XP</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background:#dcfce7; color:#15803d;">🎯</div>
                    <div>
                        <div class="stat-title">Percobaan Kuis</div>
                        <div class="stat-val" id="statAttempts">{{ $totalAttempts }} Kali</div>
                    </div>
                </div>
            </div>

            <!-- Modul Ringkas -->
            <div class="section-header">
                <div>
                    <h2>Kurikulum Modul K3 Software Engineering</h2>
                    <p>Enam bab terstruktur dengan penjelasan mendalam, contoh situasi nyata di industri IT, dan tips keselamatan.</p>
                </div>
                <button class="btn btn-secondary" onclick="switchTab('courses')">Buka Semua Bab →</button>
            </div>

            <div class="courses-grid" id="homeCoursesList"></div>
        </section>

        <!-- 2. Katalog Materi -->
        <section id="tab-courses" class="view-content">
            <div class="section-header">
                <div>
                    <h2>📚 Modul K3 dalam Lingkungan Software Engineering</h2>
                    <p>Pilih bab pembelajaran di bawah untuk membuka materi lengkap, studi kasus, dan tandai kelulusan belajarmu.</p>
                </div>
            </div>
            <div class="courses-grid" id="allCoursesList"></div>
        </section>

        <!-- 3. Detail Pembacaan Materi -->
        <section id="tab-lesson" class="view-content">
            <div class="lesson-layout">
                <aside class="sidebar-nav">
                    <h3>📑 Daftar Bab Pembelajaran</h3>
                    <div class="sidebar-links" id="chapterNav"></div>
                    <div class="info-callout" style="margin-bottom:0; font-size:0.85rem;" id="lessonSidebarStats">
                        📈 Progres: 0 dari {{ count($lessons) }} bab tuntas
                    </div>
                </aside>

                <article class="lesson-article" id="lessonContentArea">
                    <!-- Ditampilkan dinamis via script -->
                </article>
            </div>
        </section>

        <!-- 4. Kuis K3 Interaktif -->
        <section id="tab-quiz" class="view-content">
            <div class="quiz-container">
                <div class="quiz-card" id="quizCardArea">
                    <!-- Ditampilkan dinamis via script -->
                </div>
            </div>
        </section>

        <!-- 5. Pencapaian & Rekam Jejak -->
        <section id="tab-achievements" class="view-content">
            <div class="profile-card">
                <div class="profile-avatar">🧑‍💻</div>
                <div class="profile-details">
                    <h2 id="studentName">Siswa PPLG (Software Engineering)</h2>
                    <div class="profile-level" id="profileLevelText">K3 Beginner · Level 1</div>
                    <div style="display:flex; justify-content:space-between; font-size:0.85rem; font-weight:700;">
                        <span>Progres Level Siswa</span>
                        <span id="profileXPDetails">0 / 300 XP</span>
                    </div>
                    <div class="xp-track">
                        <div class="xp-bar" id="profileXPBar"></div>
                    </div>
                </div>
            </div>

            <div class="section-header">
                <div>
                    <h2>🏅 Lencana Kompetensi K3 (Badges)</h2>
                    <p>Buktikan pemahamanmu dengan menuntaskan seluruh modul dan lulus kuis evaluasi berstandar.</p>
                </div>
            </div>
            <div class="badges-grid" id="badgeGridArea"></div>

            <div class="section-header" style="margin-top: 36px;">
                <div>
                    <h2>📜 Riwayat Percobaan Kuis (Database Terintegrasi)</h2>
                    <p>Semua hasil kuis tercatat aman di server Laravel beserta tanggal, jumlah benar, dan skor akhir.</p>
                </div>
            </div>
            <div class="history-list" id="quizHistoryList">
                @forelse($latestAttempts as $index => $attempt)
                    <div class="history-item">
                        <div>
                            <strong>Percobaan #{{ $totalAttempts - $index }} ({{ $attempt->student_name }})</strong>
                            <div style="font-size:0.85rem; color:var(--slate-500);">
                                {{ $attempt->created_at->format('d M Y, H:i') }} · {{ $attempt->correct_count }}/{{ $attempt->total_questions }} Jawaban Benar (+{{ $attempt->xp_earned }} XP)
                            </div>
                        </div>
                        <div style="font-size:1.25rem; font-weight:800; color: {{ $attempt->passed ? '#16a34a' : '#dc2626' }};">
                            {{ $attempt->score }}/100
                        </div>
                    </div>
                @empty
                    <p style="color:var(--slate-500); text-align:center; padding:20px 0;">Belum ada riwayat kuis tersimpan di server. Kerjakan kuis pertamamu!</p>
                @endforelse
            </div>
        </section>
    </main>

    <!-- Toast Notification -->
    <div class="toast" id="toastBox">Tersimpan</div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p><strong>K3 dalam Lingkungan Software Engineering</strong> · Dikembangkan untuk Jurusan PPLG SMK berbasis <strong>Laravel {{ app()->version() }}</strong></p>
            <p style="margin-top:4px; font-size:0.82rem; color:var(--slate-500);">Keselamatan, Ergonomi, & Kesehatan Kerja bagi Programmer, UI/UX Designer, dan System Analyst.</p>
        </div>
    </footer>

    <!-- Pass data dari Laravel Blade ke Javascript Client -->
    <script>
        const lessonsData = @json($lessons);
        const questionsData = @json($questions);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // State Aplikasi Pembelajaran
        let appState = {
            completed: JSON.parse(localStorage.getItem('laravel_k3_completed') || '[]'),
            xp: Number(localStorage.getItem('laravel_k3_xp') || 0),
            history: JSON.parse(localStorage.getItem('laravel_k3_local_history') || '[]'),
            currentLessonIdx: 0,
            quizIdx: 0,
            answers: {},
            isSubmitting: false
        };

        function persistState() {
            localStorage.setItem('laravel_k3_completed', JSON.stringify(appState.completed));
            localStorage.setItem('laravel_k3_xp', appState.xp);
            localStorage.setItem('laravel_k3_local_history', JSON.stringify(appState.history));
            updateMetricsUI();
        }

        function showToast(message) {
            const toast = document.getElementById('toastBox');
            toast.textContent = message;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 2600);
        }

        function switchTab(tabId) {
            document.querySelectorAll('.view-content').forEach(view => {
                view.classList.toggle('active', view.id === `tab-${tabId}`);
            });

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.toggle('active', btn.dataset.tab === tabId || (tabId === 'lesson' && btn.dataset.tab === 'courses'));
            });

            if (tabId === 'home') renderCoursesGrid('homeCoursesList');
            if (tabId === 'courses') renderCoursesGrid('allCoursesList');
            if (tabId === 'quiz' && !document.getElementById('quizCardArea').hasChildNodes()) startQuiz();
            if (tabId === 'achievements') renderAchievementsUI();

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function renderCoursesGrid(targetElementId) {
            const target = document.getElementById(targetElementId);
            if (!target) return;

            target.innerHTML = lessonsData.map((item, idx) => {
                const isDone = appState.completed.includes(idx);
                return `
                    <div class="card">
                        <div>
                            <div class="card-top">
                                <div class="card-emoji" style="background: ${item.tint};">${item.emoji}</div>
                                <span class="course-badge ${isDone ? 'done' : ''}">
                                    ${isDone ? '✓ SELESAI' : 'BAB ' + item.chapter_num}
                                </span>
                            </div>
                            <div class="card-subtitle">${item.subtitle}</div>
                            <h3>${item.title}</h3>
                            <p>${item.desc}</p>
                        </div>
                        <div>
                            <div class="progress-bar-wrap">
                                <div class="progress-fill" style="width: ${isDone ? '100%' : '0%'}"></div>
                            </div>
                            <div class="card-footer">
                                <span style="font-size:0.82rem; font-weight:700; color:var(--slate-500)">
                                    ${isDone ? '✓ Sudah tuntas dipelajari' : 'Materi Pembelajaran'}
                                </span>
                                <button class="btn btn-secondary" style="padding: 8px 16px; font-size:0.85rem;" onclick="openLessonPage(${idx})">
                                    ${isDone ? 'Buka Kembali' : 'Pelajari Bab'} →
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function openLessonPage(idx) {
            appState.currentLessonIdx = idx;
            switchTab('lesson');

            const lesson = lessonsData[idx];
            const isDone = appState.completed.includes(idx);

            // Render daftar bab di sidebar
            document.getElementById('chapterNav').innerHTML = lessonsData.map((item, i) => `
                <button class="chapter-btn ${i === idx ? 'active' : ''}" onclick="openLessonPage(${i})">
                    <span>${item.chapter_num}. ${item.title}</span>
                    <span>${appState.completed.includes(i) ? '✓' : ''}</span>
                </button>
            `).join('');

            document.getElementById('lessonSidebarStats').innerHTML = `
                📈 <strong>Progres Modul</strong><br>
                ${appState.completed.length} dari ${lessonsData.length} bab telah diselesaikan.
            `;

            // Render isi artikel modul
            document.getElementById('lessonContentArea').innerHTML = `
                <span class="lesson-tag">BAB ${lesson.chapter_num} DARI ${lessonsData.length}</span>
                <h1>${lesson.emoji} ${lesson.title}</h1>
                <div class="lesson-subhead">${lesson.subtitle}</div>
                <p class="lesson-lead">${lesson.desc}</p>

                <div class="info-callout">
                    <strong>🎯 Tujuan Pembelajaran</strong>
                    ${lesson.goals}
                </div>

                ${lesson.sections.map((sec, secIdx) => `
                    <div class="lesson-section">
                        <h3>📌 ${secIdx + 1}. ${sec.heading}</h3>
                        <p>${sec.body}</p>
                    </div>
                `).join('')}

                <div class="info-callout case">
                    <strong>🏢 Studi Kasus / Contoh Situasi Nyata</strong>
                    ${lesson.real_case}
                </div>

                <div class="info-callout tip">
                    <strong>💡 Poin Kunci K3 yang Perlu Diingat</strong>
                    ${lesson.tip}
                </div>

                <div class="info-callout" style="background:#f1f5f9; border-left-color:var(--slate-600);">
                    <strong>📋 Ringkasan Bab ${lesson.chapter_num}</strong>
                    ${lesson.summary}
                </div>

                <div class="lesson-footer-nav">
                    <button class="btn btn-secondary" ${idx === 0 ? 'disabled' : ''} onclick="openLessonPage(${idx - 1})">
                        ← Bab Sebelumnya
                    </button>
                    <button class="btn ${isDone ? 'btn-secondary' : 'btn-primary'}" onclick="markLessonComplete(${idx})">
                        ${isDone ? '✓ Bab Ini Telah Diselesaikan' : 'Tandai Selesai (+25 XP) ✓'}
                    </button>
                    <button class="btn btn-primary" ${idx === lessonsData.length - 1 ? 'disabled' : ''} onclick="openLessonPage(${idx + 1})">
                        Bab Berikutnya →
                    </button>
                </div>
            `;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function markLessonComplete(idx) {
            if (!appState.completed.includes(idx)) {
                appState.completed.push(idx);
                appState.xp += 25;
                persistState();
                showToast(`🎉 Bab ${idx + 1} selesai! +25 XP didapatkan`);
            } else {
                showToast('Bab ini sudah selesai kamu pelajari sebelumnya.');
            }
            openLessonPage(idx);
        }

        function updateMetricsUI() {
            document.getElementById('topbarXP').textContent = `${appState.xp} XP`;
            document.getElementById('statLessons').textContent = `${appState.completed.length} / ${lessonsData.length}`;
            document.getElementById('statXP').textContent = `${appState.xp} XP`;
        }

        /* 4. Fitur Kuis Interaktif */
        function startQuiz() {
            appState.quizIdx = 0;
            appState.answers = {};
            appState.isSubmitting = false;
            switchTab('quiz');
            renderQuestionUI();
        }

        function renderQuestionUI() {
            const q = questionsData[appState.quizIdx];
            const chosen = appState.answers[appState.quizIdx];
            const container = document.getElementById('quizCardArea');

            const pct = Math.round(((appState.quizIdx + 1) / questionsData.length) * 100);

            let typeLabel = 'Pilihan Ganda';
            if (q.multi) typeLabel = 'Pilih Semua Opsi yang Benar';
            else if (q.tf) typeLabel = 'Benar atau Salah';
            else if (q.type === 'case_study') typeLabel = 'Studi Kasus K3';

            container.innerHTML = `
                <div class="quiz-header">
                    <span>Soal ${appState.quizIdx + 1} dari ${questionsData.length} (Bab ${q.chapter})</span>
                    <span>${pct}% Terjawab</span>
                </div>
                <div class="quiz-progress-track">
                    <div class="quiz-progress-fill" style="width: ${pct}%"></div>
                </div>

                <span class="question-badge">${typeLabel}</span>
                <h2 class="question-text">${q.q}</h2>

                <div class="options-list">
                    ${q.o.map((opt, i) => {
                        const isSelected = Array.isArray(chosen) ? chosen.includes(i) : chosen === i;
                        return `
                            <div class="option-item ${isSelected ? 'selected' : ''}" onclick="pickAnswer(${i})">
                                <div class="option-letter">${String.fromCharCode(65 + i)}</div>
                                <div>${opt}</div>
                            </div>
                        `;
                    }).join('')}
                </div>

                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
                    <button class="btn btn-secondary" ${appState.quizIdx === 0 ? 'disabled' : ''} onclick="navigateQuestion(-1)">
                        ← Soal Sebelumnya
                    </button>
                    <div style="display:flex; gap:10px;">
                        ${appState.quizIdx === questionsData.length - 1 
                            ? `<button class="btn btn-primary" id="btnSubmitQuiz" onclick="submitQuizAnswers()">Kumpulkan Jawaban Selesai ✓</button>`
                            : `<button class="btn btn-primary" onclick="navigateQuestion(1)">Soal Berikutnya →</button>`
                        }
                    </div>
                </div>
            `;
        }

        function pickAnswer(optionIndex) {
            const q = questionsData[appState.quizIdx];
            if (q.multi) {
                let arr = Array.isArray(appState.answers[appState.quizIdx]) ? [...appState.answers[appState.quizIdx]] : [];
                appState.answers[appState.quizIdx] = arr.includes(optionIndex)
                    ? arr.filter(x => x !== optionIndex)
                    : [...arr, optionIndex];
            } else {
                appState.answers[appState.quizIdx] = optionIndex;
            }
            renderQuestionUI();
        }

        function navigateQuestion(offset) {
            appState.quizIdx = Math.max(0, Math.min(questionsData.length - 1, appState.quizIdx + offset));
            renderQuestionUI();
        }

        async function submitQuizAnswers() {
            if (appState.isSubmitting) return;

            const unanswered = questionsData.filter((q, i) => 
                appState.answers[i] === undefined || (Array.isArray(appState.answers[i]) && appState.answers[i].length === 0)
            ).length;

            if (unanswered > 0) {
                if (!confirm(`Terdapat ${unanswered} soal yang masih kosong/belum dijawab. Apakah Anda yakin ingin tetap mengumpulkan kuis?`)) {
                    return;
                }
            }

            const submitBtn = document.getElementById('btnSubmitQuiz');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Memeriksa Kunci Jawaban...';
            }
            appState.isSubmitting = true;

            try {
                // Coba kirim ke Backend Laravel jika backend aktif
                let data = null;
                try {
                    const response = await fetch("{{ route('k3.quiz.submit') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            student_name: 'Siswa PPLG',
                            answers: appState.answers
                        })
                    });
                    if (response.ok) {
                        data = await response.json();
                    }
                } catch (netErr) {
                    console.log('Backend API offline, fallback to client-side evaluation (Netlify Static mode)');
                }

                // Fallback perhitungan mandiri jika berjalan statis di Netlify
                if (!data || !data.success) {
                    let correctCount = 0;
                    let unansweredCount = 0;
                    let reviews = [];

                    questionsData.forEach((q, idx) => {
                        const userAns = appState.answers[idx];
                        let isCorrect = false;

                        if (userAns === undefined || (Array.isArray(userAns) && userAns.length === 0)) {
                            unansweredCount++;
                        } else if (q.multi) {
                            const exp = [...q.a].sort();
                            const act = [...(Array.isArray(userAns) ? userAns : [userAns])].sort();
                            isCorrect = (JSON.stringify(exp) === JSON.stringify(act));
                        } else {
                            isCorrect = (Number(userAns) === Number(q.a));
                        }

                        if (isCorrect) correctCount++;

                        const correctIndices = q.multi ? q.a : [q.a];
                        const labels = correctIndices.map(ci => q.o[ci]).join(', ');

                        reviews.push({
                            question_index: idx + 1,
                            question: q.q,
                            user_answer: userAns,
                            is_correct: isCorrect,
                            correct_labels: labels,
                            explanation: q.why
                        });
                    });

                    const total = questionsData.length;
                    const score = Math.round((correctCount / total) * 100);
                    const xpEarned = correctCount * 10;
                    const passed = (score >= 75);

                    data = {
                        success: true,
                        score: score,
                        correct_count: correctCount,
                        incorrect_count: total - correctCount - unansweredCount,
                        unanswered_count: unansweredCount,
                        total_questions: total,
                        xp_earned: xpEarned,
                        passed: passed,
                        created_at: new Date().toLocaleDateString('id-ID', { day:'numeric', month:'short', year:'numeric', hour:'2-digit', minute:'2-digit' }),
                        reviews: reviews
                    };
                }

                appState.xp += data.xp_earned;
                appState.history.push({
                    date: data.created_at,
                    score: data.score,
                    correct: data.correct_count,
                    total: data.total_questions,
                    xp: data.xp_earned,
                    passed: data.passed
                });
                persistState();
                renderQuizResult(data);
                showToast(`Kuis Selesai! Kamu memperoleh +${data.xp_earned} XP 🏆`);
            } catch (err) {
                console.error(err);
                alert('Terjadi kesalahan saat memproses kuis.');
                appState.isSubmitting = false;
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Kumpulkan Jawaban Selesai ✓';
                }
            }
        }

        function renderQuizResult(result) {
            const container = document.getElementById('quizCardArea');
            const passed = result.passed;

            container.innerHTML = `
                <div class="result-box">
                    <div class="result-icon">${passed ? '🏆' : '🌱'}</div>
                    <h2 style="font-size:2rem; font-weight:800; color:var(--dark); margin-bottom:8px;">
                        ${passed ? 'Luar Biasa, Kamu Lulus Kuis K3!' : 'Tetap Semangat, Evaluasi & Coba Lagi!'}
                    </h2>
                    <p style="color:var(--slate-500); max-width:600px; margin:0 auto 18px;">
                        ${passed ? 'Pemahamanmu mengenai K3, ergonomi komputer, keselamatan kelistrikan, dan etika software engineering telah melampaui standar kelulusan minimal 75.' : 'Kamu belum mencapai batas nilai minimum 75. Periksa kunci jawaban & pembahasan di bawah, lalu ulangi kuis untuk hasil maksimal.'}
                    </p>

                    <div class="result-score-big">${result.score}</div>
                    <div class="result-status ${passed ? 'pass' : 'fail'}">
                        ${passed ? '✓ LULUS (K3 SOFTWARE ENGINEERING AWARE)' : 'BELUM LULUS (NILAI MINIMAL 75)'}
                    </div>

                    <div class="result-breakdown">
                        <div class="breakdown-item">
                            <div class="breakdown-val" style="color:#16a34a;">${result.correct_count}</div>
                            <div class="breakdown-label">Jawaban Benar</div>
                        </div>
                        <div class="breakdown-item">
                            <div class="breakdown-val" style="color:#dc2626;">${result.incorrect_count}</div>
                            <div class="breakdown-label">Jawaban Salah</div>
                        </div>
                        <div class="breakdown-item">
                            <div class="breakdown-val" style="color:#64748b;">${result.unanswered_count}</div>
                            <div class="breakdown-label">Belum Dijawab</div>
                        </div>
                        <div class="breakdown-item">
                            <div class="breakdown-val" style="color:#2563eb;">+${result.xp_earned} XP</div>
                            <div class="breakdown-label">XP Diperoleh</div>
                        </div>
                    </div>

                    <div class="btn-group" style="justify-content:center; margin-top:24px;">
                        <button class="btn btn-primary" onclick="toggleReviewSection()">
                            🔍 Lihat Pembahasan Soal
                        </button>
                        <button class="btn btn-secondary" onclick="startQuiz()">
                            ↻ Ulangi Kuis
                        </button>
                        <button class="btn btn-secondary" onclick="switchTab('courses')">
                            📚 Buka Materi Belajar
                        </button>
                    </div>

                    <div class="review-box" id="reviewBox" style="display:none;">
                        <h3 style="font-size:1.3rem; margin-bottom:18px;">Kunci Jawaban & Pembahasan Mendalam</h3>
                        ${result.reviews.map(rev => `
                            <div class="review-item">
                                <div class="review-title">${rev.question_index}. ${rev.question}</div>
                                <div class="review-badge ${rev.is_correct ? 'correct' : 'wrong'}">
                                    ${rev.is_correct ? '✓ Jawabanmu Tepat' : '✕ Belum Tepat'} · Jawaban Benar: <strong>${rev.correct_labels}</strong>
                                </div>
                                <div class="review-explanation"><strong>Penjelasan:</strong> ${rev.explanation}</div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
        }

        function toggleReviewSection() {
            const box = document.getElementById('reviewBox');
            if (!box) return;
            box.style.display = box.style.display === 'none' ? 'block' : 'none';
            if (box.style.display === 'block') {
                box.scrollIntoView({ behavior: 'smooth' });
            }
        }

        /* 5. Pencapaian UI */
        function renderAchievementsUI() {
            const levels = [
                { name: 'K3 Beginner', xpRequired: 0 },
                { name: 'Safety Learner', xpRequired: 250 },
                { name: 'Ergonomic Practitioner', xpRequired: 600 },
                { name: 'K3 Software Engineer Expert', xpRequired: 1200 }
            ];

            let curLvlIdx = 0;
            levels.forEach((lvl, i) => {
                if (appState.xp >= lvl.xpRequired) curLvlIdx = i;
            });

            const current = levels[curLvlIdx];
            const next = levels[Math.min(curLvlIdx + 1, levels.length - 1)];
            const isMax = curLvlIdx === levels.length - 1;
            const pct = isMax ? 100 : Math.min(100, ((appState.xp - current.xpRequired) / (next.xpRequired - current.xpRequired)) * 100);

            document.getElementById('profileLevelText').textContent = `${current.name} · Level ${curLvlIdx + 1}`;
            document.getElementById('profileXPDetails').textContent = `${appState.xp} / ${isMax ? 'MAX' : next.xpRequired} XP`;
            document.getElementById('profileXPBar').style.width = `${pct}%`;

            // Badges
            const badges = [
                { icon: '📖', title: 'Langkah Pertama', desc: 'Selesaikan modul pembelajaran pertama', unlocked: appState.completed.length >= 1 },
                { icon: '🎓', title: 'PPLG Safety Certified', desc: 'Tuntaskan seluruh 6 bab kurikulum K3', unlocked: appState.completed.length >= lessonsData.length },
                { icon: '🏆', title: 'K3 Safety Achiever', desc: 'Lulus kuis dengan nilai minimal 75', unlocked: appState.xp >= 100 },
                { icon: '💎', title: 'Perfect Engineer', desc: 'Mencapai skor kuis sempurna 100', unlocked: appState.xp >= 250 }
            ];

            document.getElementById('badgeGridArea').innerHTML = badges.map(b => `
                <div class="badge-item ${b.unlocked ? '' : 'locked'}">
                    <div class="badge-icon">${b.icon}</div>
                    <div class="badge-name">${b.title}</div>
                    <div class="badge-desc">${b.unlocked ? '✓ Terbuka' : b.desc}</div>
                </div>
            `).join('');
        }

        // Init App On Load
        renderCoursesGrid('homeCoursesList');
        renderCoursesGrid('allCoursesList');
        updateMetricsUI();
    </script>
</body>
</html>
