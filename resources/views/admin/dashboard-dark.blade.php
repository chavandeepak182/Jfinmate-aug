@extends('layouts.header')
@section('title')
    @parent
    JFS | Dashboard
@endsection

@section('content')
    @parent
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .topbar { height: 4.375rem; background-color: #f7f7f7; }
        #wrapper #content-wrapper #content { flex: 1 0 auto; background-color: #f6f8fd; }

        /* =============== Scoped styles (prefix jd-) =============== */
        .jd {
            --blue: #1a7cf5;
            --text: #1e293b;
            --muted: #64748b;
            --line: #e5e7eb;
            font-family: 'Poppins', 'Segoe UI', Tahoma, sans-serif;
            color: var(--text);
            padding: 14px 32px 40px;
            background: #f6f8fd;
        }
        .jd *, .jd *::before, .jd *::after { box-sizing: border-box; }
        .jd a { text-decoration: none !important; }

        /* ---------- Header ---------- */
        .jd-top { display: flex; justify-content: space-between; align-items: center; height: 44px; margin-bottom: 20px; }
        .jd-hello { font-size: 15px; font-weight: 500; color: #1e293b; }
        .jd-top-actions { display: flex; gap: 14px; }
        .jd-btn {
            height: 40px; display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            padding: 0 30px; background: #fff; color: var(--blue) !important;
            border: 1px solid var(--blue); border-radius: 6px;
            font-size: 14px; font-weight: 500; transition: .2s;
        }
        .jd-btn i { font-size: 14px; }
        .jd-btn.icon { width: 40px; padding: 0; }
        .jd-btn:hover { background: var(--blue); color: #fff !important; }
        .jd-btn.solid {
            background: linear-gradient(90deg, #2f7cf6, #1a73f0); color: #fff !important;
            border-color: transparent; padding: 0 22px; font-size: 13px; gap: 10px;
        }
        .jd-btn.solid:hover { filter: brightness(.95); }

        /* ---------- Metric cards ---------- */
        .jd-metrics { display: grid; grid-template-columns: repeat(4, 1fr); gap: 21px; margin-bottom: 21px; }
        .jd-metric {
            position: relative; display: block; height: 220px; padding: 22px 16px 0 16px;
            border-radius: 14px; overflow: hidden; color: var(--text) !important;
            box-shadow: 0 2px 10px rgba(30, 41, 59, .07); transition: transform .2s, box-shadow .2s;
        }
        .jd-metric:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(30, 41, 59, .12); }
        .jd-metric.purple { background: linear-gradient(180deg, #fff 0%, #faf8ff 100%); --c: #7c3aed; --c2: #a78bfa; }
        .jd-metric.green  { background: linear-gradient(180deg, #fff 0%, #f6fdfa 100%); --c: #059669; --c2: #10b981; }
        .jd-metric.blue   { background: linear-gradient(180deg, #fff 0%, #f6faff 100%); --c: #1d7af3; --c2: #3b9bff; }
        .jd-metric.orange { background: linear-gradient(180deg, #fff 0%, #fffaf5 100%); --c: #f97316; --c2: #fb923c; }

        .jd-metric-head { display: flex; align-items: center; gap: 16px; }
        .jd-metric-icon {
            width: 55px; height: 55px; border-radius: 9px; color: #fff; font-size: 20px;
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .jd-metric.purple .jd-metric-icon { background: linear-gradient(135deg, #5F16FF, #9260FF); }
        .jd-metric.green  .jd-metric-icon { background: linear-gradient(135deg, #0FA47B, #00C792); }
        .jd-metric.blue   .jd-metric-icon { background: linear-gradient(135deg, #006AF5, #2D9DFF); }
        .jd-metric.orange .jd-metric-icon { background: linear-gradient(135deg, #FB8127, #FDAD4D); }
        .jd-metric-title {
            font-size: 16px; font-weight: 600; line-height: 1.2; color: #444444;
            font-family: figtree, 'Poppins', sans-serif;
        }
        .jd-metric-value {
            font-size: 28px; font-weight: 600; line-height: 100%; color: #444444;
            font-family: figtree, 'Poppins', sans-serif;
        }
        .jd-metric-change { margin-top: 22px; font-size: 14px; line-height:100%; font-weight: 600; display: flex; align-items: center; gap: 8px; }
        .jd-metric-change.up { color: #00BC5B; }
        .jd-metric-change.down { color: #FF5454; }
        .jd-metric-sub { margin-top: 1px; font-size: 12px; color: #444444;line-height:100%; }
        
        /* Sparkline canvas positioning */
        .jd-spark { position: absolute !important; left: 14px; right: 14px; bottom: 14px; width: calc(100% - 28px) !important; height: 100px !important; }

        /* ---------- Charts row ---------- */
        .jd-charts { display: grid; grid-template-columns: 1.15fr 1fr; gap: 26px; margin-bottom: 21px; align-items: stretch; }
        .jd-card {
            background: #fff; border-radius: 14px; padding: 18px 17px 16px;
            box-shadow: 0 2px 10px rgba(30, 41, 59, .07); min-width: 0;
            display: flex; flex-direction: column;
        }
        .jd-card-head { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 14px; }
        .jd-card-title { font-size: 16px; font-weight: 600; margin: 0; line-height: 100%; color: #444444; }
        .jd-card-sub { font-size: 12px; color: #444444; margin: 3px 0 0; }

        /* Fixed heights to prevent blank canvases */
        .jd-perf-box { position: relative; width: 100%; height: 260px; }
        .jd-perf-box canvas { position: absolute; inset: 0; width: 100% !important; height: 100% !important; }

        /* Loan status */
        .jd-year {
            appearance: none; -webkit-appearance: none; border: none; outline: none; cursor: pointer;
            background: #f3f4f8 url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%23475569'/%3E%3C/svg%3E") no-repeat right 14px center;
            border-radius: 20px; padding: 0 34px 0 16px; height: 38px; min-width: 110px;
            font-family: inherit; font-size: 12px; color: #475569; margin-top: -8px;
        }
        .jd-status-head { border-bottom: 1px solid var(--line); padding-bottom: 14px; margin-bottom: 0; }
        .jd-status-wrap { display: flex; align-items: center; gap: 48px; padding: 24px 4px 0 0; flex: 1; }
        
        /* Fixed donut size */
        .jd-donut { position: relative; width: 200px; height: 200px; flex-shrink: 0; }
        .jd-donut canvas { position: absolute; inset: 0; width: 100% !important; height: 100% !important; }

        .jd-legend { flex: 1; background: #f3f5fd; border-radius: 8px; padding: 10px 20px; }
        .jd-legend-row { display: flex; justify-content: space-between; align-items: center; font-size: 13px; padding: 9px 0; color: #1e293b; }
        .jd-legend-row .dot { display: inline-block; width: 9px; height: 9px; border-radius: 50%; margin-right: 14px; }
        .jd-legend-row .pct { color: #475569; font-size: 12px; }

        .jd-loading { opacity: .45; transition: opacity .2s; pointer-events: none; }

        /* ---------- Table card ---------- */
        .jd-table-card { background: #fff; border-radius: 14px; padding: 22px 15px 10px; box-shadow: 0 2px 10px rgba(30, 41, 59, .07); }
        .jd-tools { display: flex; align-items: center; gap: 14px; padding-bottom: 28px; }
        .jd-search { position: relative; width: 352px; max-width: 100%; }
        .jd-search i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; font-size: 15px; }
        .jd-search input {
            width: 100%; height: 40px; padding: 0 12px 0 46px; border: 1px solid #d1d5db; border-radius: 6px;
            font-family: inherit; font-size: 12px; background: #fff; outline: none;
        }
        .jd-search input:focus { border-color: var(--blue); }
        .jd-select {
            appearance: none; -webkit-appearance: none; height: 40px; width: 110px; padding: 0 30px 0 16px;
            border: 1px solid #d1d5db; border-radius: 6px; font-family: inherit; font-size: 12px; color: #1e293b; outline: none; cursor: pointer;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6' fill='none' stroke='%231e293b' stroke-width='1.5'%3E%3Cpath d='M1 1l4 4 4-4'/%3E%3C/svg%3E") no-repeat right 14px center;
        }
        .jd-spacer { flex: 1; }

        .jd-table-wrap { overflow-x: auto; border-top: 1px solid var(--line); }
        .jd-table { width: 100%; border-collapse: collapse; min-width: 960px; }
        .jd-table th { text-align: left; font-size: 12px; font-weight: 400; color: #334155; padding: 20px 8px 16px; border-bottom: 1px solid var(--line); white-space: nowrap; }
        .jd-table td { padding: 0 8px; height: 68px; font-size: 12px; font-weight: 500; border-bottom: 1px solid var(--line); vertical-align: middle; }
        .jd-table tbody tr:hover { background: #fafbff; }
        .jd-cust { line-height: 1.35; }
        .jd-tag { display: inline-block; background: #dbe7ff; color: #3b5bdb; border-radius: 3px; font-size: 9px; font-weight: 500; padding: 1px 12px; margin-bottom: 4px; }
        .jd-tag.fair { background: #fef3c7; color: #b45309; }
        .jd-tag.poor { background: #fee2e2; color: #b91c1c; }
        .jd-bar { width: 88px; height: 5px; border-radius: 3px; background: #e2e8f0; overflow: hidden; }
        .jd-bar > div { height: 100%; border-radius: 3px; background: #3b82f6; }
        .jd-bar > div.fair { background: #f59e0b; }
        .jd-bar > div.poor { background: #ef4444; }
        .jd-actions { display: flex; align-items: center; gap: 14px; color: #111827; }
        .jd-actions i { cursor: pointer; font-size: 15px; }
        .jd-empty { text-align: center; color: var(--muted); padding: 28px 0 !important; }

        @media (max-width: 1200px) { .jd-metrics { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 900px) {
            .jd-charts { grid-template-columns: 1fr; }
            .jd-status-wrap { flex-direction: column; gap: 20px; }
            .jd-legend { width: 100%; }
            .jd-tools { flex-wrap: wrap; }
            .jd-top { flex-wrap: wrap; height: auto; gap: 12px; }
        }
        @media (max-width: 576px) { .jd-metrics { grid-template-columns: 1fr; } }

        .jd-legend-row .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }
        .jd-legend-row > div {
            display: flex;
            align-items: center;
        }
        html {
    scroll-behavior: smooth;
}

#announcementSection {
    scroll-margin-top: 100px;
}

.jd-announcement {
    background: #fff;
    border-radius: 14px;
    padding: 22px;
    margin-top: 25px;
    box-shadow: 0 2px 10px rgba(30, 41, 59, .07);
}

.jd-announcement-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 16px;
    margin-bottom: 10px;
}

.jd-announcement-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #444;
    margin: 0;
}

.jd-announcement-header p {
    font-size: 12px;
    color: #64748b;
    margin: 5px 0 0;
}

.jd-announcement-icon {
    width: 42px;
    height: 42px;
    background: #eaf2ff;
    color: #1a7cf5;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.jd-announcement-item {
    display: flex;
    gap: 14px;
    padding: 17px 5px;
    border-bottom: 1px solid #f1f5f9;
}

.jd-announcement-item:last-child {
    border-bottom: none;
}

.jd-announcement-dot {
    width: 9px;
    height: 9px;
    background: #1a7cf5;
    border-radius: 50%;
    margin-top: 6px;
    flex-shrink: 0;
}

.jd-announcement-item h4 {
    font-size: 13px;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 5px;
}

.jd-announcement-item p {
    font-size: 12px;
    color: #64748b;
    margin: 0 0 5px;
}

.jd-announcement-item small {
    font-size: 10px;
    color: #94a3b8;
}
    </style>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="jd">

                <!-- ================= HEADER ================= -->
                <div class="jd-top">
                    <div class="jd-hello">Hello Admin,</div>
                    <div class="jd-top-actions">
                        <a href="../loan-application" class="jd-btn"><i class="fas fa-plus"></i> New Application</a>
                        <a href="{{ route('admin.customers') }}" class="jd-btn"><i class="fas fa-user-plus"></i> Add Customer</a>
                        <a href="javascript:void(0)"
   class="jd-btn icon"
   id="announcementToggle"
   title="Announcement">
    <i class="fas fa-bullhorn"></i>
</a>
                    </div>
                </div>

                <!-- ================= METRICS ================= -->
                <div class="jd-metrics">
                    <a href="{{ route('admin.loans') }}" class="jd-metric purple">
                        <div class="jd-metric-head">
                            <div class="jd-metric-icon"><i class="fas fa-landmark"></i></div>
                            <div>
                                <div class="jd-metric-title">Total loans</div>
                                <div class="jd-metric-value">{{ $totalLoans }}</div>
                            </div>
                        </div>
                        <div class="jd-metric-change up"><i class="fas fa-arrow-trend-up"></i> +12.5%</div>
                        <div class="jd-metric-sub">+$180K from last month</div>
                        <canvas class="jd-spark" data-c="#7c3aed" data-rgb="124,58,237"></canvas>
                    </a>

                    <a href="{{ route('admin.customers') }}" class="jd-metric green">
                        <div class="jd-metric-head">
                            <div class="jd-metric-icon"><i class="fas fa-users"></i></div>
                            <div>
                                <div class="jd-metric-title">Total Customers</div>
                                <div class="jd-metric-value">{{ $totalCustomers }}</div>
                            </div>
                        </div>
                        <div class="jd-metric-change up"><i class="fas fa-arrow-trend-up"></i> +15.3%</div>
                        <div class="jd-metric-sub">+1,124 new this month</div>
                        <canvas class="jd-spark" data-c="#059669" data-rgb="16,185,129"></canvas>
                    </a>

                    <a href="{{ route('admin.listlead') }}" class="jd-metric blue">
                        <div class="jd-metric-head">
                            <div class="jd-metric-icon"><i class="fas fa-clipboard-list"></i></div>
                            <div>
                                <div class="jd-metric-title">Total Leads</div>
                                <div class="jd-metric-value">{{ $leads }}</div>
                            </div>
                        </div>
                        <div class="jd-metric-change up"><i class="fas fa-arrow-trend-up"></i> +8.2%</div>
                        <div class="jd-metric-sub">+94 from last month</div>
                        <canvas class="jd-spark" data-c="#1d7af3" data-rgb="59,155,255"></canvas>
                    </a>

                    <a href="{{ route('admin.customers') }}" class="jd-metric orange">
                        <div class="jd-metric-head">
                            <div class="jd-metric-icon"><i class="fas fa-id-card"></i></div>
                            <div>
                                <div class="jd-metric-title">Total Employees</div>
                                <div class="jd-metric-value">{{ $totalOfficers }}</div>
                            </div>
                        </div>
                        <div class="jd-metric-change down"><i class="fas fa-arrow-trend-down"></i> -5.1%</div>
                        <div class="jd-metric-sub">23 less than previous month</div>
                        <canvas class="jd-spark" data-c="#f97316" data-rgb="251,146,60"></canvas>
                    </a>
                </div>

                <!-- ================= CHARTS ================= -->
                <div class="jd-charts">
                    <div class="jd-card" id="perfCard">
                        <div class="jd-card-head">
                            <div>
                                <h3 class="jd-card-title">Loan performance</h3>
                                <p class="jd-card-sub">Monthly disbursement overview</p>
                            </div>
                        </div>
                        <div class="jd-perf-box"><canvas id="jdPerfChart"></canvas></div>
                    </div>

                    <div class="jd-card" id="statusCard">
                        <div class="jd-card-head jd-status-head">
                            <div>
                                <h3 class="jd-card-title">Loan Status</h3>
                                <p class="jd-card-sub">Current distribution</p>
                            </div>
                            <select class="jd-year" id="yearFilter">
                                @for ($y = now()->year; $y >= now()->year - 4; $y--)
                                    <option value="{{ $y }}">{{ $y == now()->year ? 'This Year' : $y }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="jd-status-wrap">
                            <div class="jd-donut"><canvas id="jdStatusChart"></canvas></div>
                            <div class="jd-legend" id="loanStatusLegend"></div>
                        </div>
                    </div>
                </div>

                <!-- ================= LOANS TABLE ================= -->
                <div class="jd-table-card">
                    <div class="jd-tools">
                        <div class="jd-search">
                            <i class="fas fa-search"></i>
                            <input type="text" id="loanSearch" placeholder="Search category">
                        </div>
                        <select class="jd-select" id="statusFilter">
                            <option value="">Status</option>
                            <option value="in progress">In Progress</option>
                            <option value="approved">Approved</option>
                            <option value="disbursed">Disbursed</option>
                            <option value="rejected">Rejected</option>
                        </select>
                        <select class="jd-select">
                            <option>Recent</option>
                            <option>Oldest</option>
                        </select>
                        <div class="jd-spacer"></div>
                        <a href="#" class="jd-btn solid"><i class="fas fa-file-export"></i> Export Report</a>
                    </div>

                    <div class="jd-table-wrap">
                        <table class="jd-table" id="loansTable">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Customer</th>
                                    <th>Loan type</th>
                                    <th>Credit score</th>
                                    <th>Amount</th>
                                    <th>Banks</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                          <tbody>
    @forelse($recentLoans as $loan)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>
                {{ $loan->user_name ?? 'N/A' }}
                <br>
                <small>{{ $loan->loan_reference_id }}</small>
            </td>

            <td>
                {{ $loan->loan_category_name ?? 'N/A' }}
            </td>

            <td>
                {{ $loan->cibil_score ?? 'N/A' }}
            </td>

            <td>
                ₹{{ number_format((float) $loan->amount, 2) }}
            </td>

            <td>
                {{ $loan->bank_name ?? 'N/A' }}
            </td>

            <td>
                {{ ucfirst($loan->status ?? 'Pending') }}
            </td>

            <td>
                <a href="{{ route('admin.loans', $loan->loan_id) }}"
                   class="btn btn-sm btn-primary">
                    View
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">
                No loans available.
            </td>
        </tr>
    @endforelse
</tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- ================= ANNOUNCEMENT SECTION ================= -->
<div id="announcementSection" class="jd-announcement" style="display: none;">
    <div class="jd-announcement-header">
        <div>
            <h3>Announcements</h3>
            <p>Latest announcements and important updates</p>
        </div>

       
    </div>

    <div class="jd-announcement-content">

        <div class="jd-announcement-item">
            <div class="jd-announcement-dot"></div>
            <div>
                <h4>Welcome to JFS Dashboard</h4>
                <p>Welcome! You can view and manage your latest dashboard activities here.</p>
                <small>{{ now()->format('d M Y') }}</small>
            </div>
        </div>

        <div class="jd-announcement-item">
            <div class="jd-announcement-dot"></div>
            <div>
                <h4>Loan Updates</h4>
                <p>Check the latest loan applications, approvals and disbursement details.</p>
                <small>{{ now()->format('d M Y') }}</small>
            </div>
        </div>

    </div>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const announcementBtn = document.getElementById('announcementToggle');
    const announcementSection = document.getElementById('announcementSection');

    if (announcementBtn && announcementSection) {

        announcementBtn.addEventListener('click', function () {

            if (announcementSection.style.display === 'none') {

                announcementSection.style.display = 'block';

                setTimeout(function () {
                    announcementSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 100);

            } else {

                announcementSection.style.display = 'none';

            }

        });

    }

});
</script>
    <!-- SCRIPT RUNS DIRECTLY AFTER HTML -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            /* ========================================================
               1. TOP 4 CARDS (SPARKLINES)
               ======================================================== */
            const wave = [3, 5, 9, 7, 11, 8, 12, 10, 15, 13, 19, 24];
            document.querySelectorAll('.jd-spark').forEach(function (canvas) {
                const color = canvas.dataset.c, rgb = canvas.dataset.rgb;
                new Chart(canvas.getContext('2d'), {
                    type: 'line',
                    data: {
                        labels: wave.map((_, i) => i),
                        datasets: [{
                            data: wave, 
                            borderColor: color, 
                            borderWidth: 1.5, 
                            fill: true,
                            tension: 0.45, 
                            pointRadius: 0,
                            backgroundColor: function (c) {
                                const a = c.chart.chartArea;
                                if (!a) return 'transparent';
                                const g = c.chart.ctx.createLinearGradient(0, a.top, 0, a.bottom);
                                g.addColorStop(0, 'rgba(' + rgb + ',.38)');
                                g.addColorStop(1, 'rgba(' + rgb + ',0)');
                                return g;
                            }
                        }]
                    },
                    options: {
                        responsive: true, 
                        maintainAspectRatio: false, 
                        animation: false,
                        layout: { padding: 0 },
                        plugins: { legend: { display: false }, tooltip: { enabled: false } },
                        scales: { 
                            x: { display: false }, 
                            y: { display: false, min: 0 } 
                        }
                    }
                });
            });

            /* ========================================================
               2. LOAN PERFORMANCE CHART
               ======================================================== */
            const perfCanvas = document.getElementById('jdPerfChart');
            if (perfCanvas) {
                const MONTHS = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                
                // Dummy Data
                const amountData = [5000, 6500, 6000, 8000, 9500, 11000, 10500, 12000, 14000, 13500, 15000, 18000];
                const loansData = [10, 12, 11, 15, 18, 20, 19, 22, 25, 24, 28, 32];

                function areaFill(rgb, topAlpha) {
                    return function (c) {
                        const a = c.chart.chartArea;
                        if (!a) return 'transparent';
                        const g = c.chart.ctx.createLinearGradient(0, a.top, 0, a.bottom);
                        g.addColorStop(0, 'rgba(' + rgb + ',' + topAlpha + ')');
                        g.addColorStop(1, 'rgba(' + rgb + ',0)');
                        return g;
                    };
                }

                new Chart(perfCanvas.getContext('2d'), {
                    type: 'line',
                    data: {
                        labels: MONTHS,
                        datasets: [
                            {
                                label: 'Total Amount',
                                data: amountData,
                                yAxisID: 'yAmount',
                                borderColor: '#a78bfa',
                                backgroundColor: areaFill('167, 139, 250', .45),
                                fill: true,
                                tension: 0.45,
                                pointRadius: 0,
                                borderWidth: 1.5
                            },
                            {
                                label: 'Total Loans',
                                data: loansData,
                                yAxisID: 'yLoans',
                                borderColor: '#60a5fa',
                                backgroundColor: areaFill('96, 165, 250', .45),
                                fill: true,
                                tension: 0.45,
                                pointRadius: 0,
                                borderWidth: 1.5
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        interaction: { mode: 'index', intersect: false },
                        plugins: { legend: { display: false } },
                        scales: {
                            x: { grid: { display: false }, border: { display: false } },
                            yAmount: { display: false, beginAtZero: true, max: 22000 },
                            yLoans: { display: false, beginAtZero: true, max: 45 }
                        }
                    }
                });
            }

            /* ========================================================
               3. LOAN STATUS DOUGHNUT CHART
               ======================================================== */
            const statusCanvas = document.getElementById('jdStatusChart');
            if (statusCanvas) {
                const palette = ['#4a3aff', '#2563eb', '#bfdbfe', '#cbd5e1'];
                
                new Chart(statusCanvas.getContext('2d'), {
                    type: 'doughnut',
                    data: {
                        labels: ['In Process', 'Approved', 'Disbursed', 'Rejected'],
                        datasets: [{
                            data: [55.56, 11.11, 33.33, 0.00], 
                            backgroundColor: palette,
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '65%',
                        plugins: { legend: { display: false } }
                    }
                });

                // Manually inject the legend HTML
                const legendContainer = document.getElementById('loanStatusLegend');
                if(legendContainer) {
                    legendContainer.innerHTML = `
                        <div class="jd-legend-row"><div><span class="dot" style="background:#4a3aff"></span>In Process</div><span class="pct">55.56%</span></div>
                        <div class="jd-legend-row"><div><span class="dot" style="background:#2563eb"></span>Approved</div><span class="pct">11.11%</span></div>
                        <div class="jd-legend-row"><div><span class="dot" style="background:#bfdbfe"></span>Disbursed</div><span class="pct">33.33%</span></div>
                        <div class="jd-legend-row"><div><span class="dot" style="background:#cbd5e1"></span>Rejected</div><span class="pct">0.00%</span></div>
                    `;
                }
            }

        });
    </script>
@endsection