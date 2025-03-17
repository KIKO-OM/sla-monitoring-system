


<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .container {
        display: flex;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }
    .sidebar {
        width: 200px; /* Adjusted for better desktop view */
        background-color: #f0f0f0;
        height: 100vh;
        padding: 20px 0;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
    }
    .sidebar-header {
        padding: 0 20px 20px 20px;
        border-bottom: 1px solid #ddd;
    }
    .welcome {
        display: flex;
        align-items: center;
    }
    .welcome-icon {
        font-size: 20px;
        margin-right: 10px;
    }
    .welcome-text {
        font-size: 14px;
    }
    .welcome-name {
        font-weight: bold;
        color: #3333CC;
    }
    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    .sidebar-menu li {
        padding: 10px 20px;
        font-size: 14px;
        cursor: pointer;
    }
    .sidebar-menu li:hover {
        background-color: #e0e0e0;
    }
    .main-content {
        flex: 1;
        padding: 20px;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .search-bar {
        flex: 1;
        max-width: 500px;
        padding: 8px 15px;
        border-radius: 4px;
        border: 1px solid #ddd;
        background-color: #ffffcc;
    }
    .icons {
        display: flex;
    }
    .icon {
        margin-left: 15px;
        font-size: 20px;
        cursor: pointer;
    }
    .ticket-cards {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 20px;
    }
    .ticket-card {
        flex: 1;
        padding: 15px;
        border-radius: 4px;
        text-align: center;
        color: black;
    }
    .open-tickets {
        background-color: #ff0000;
    }
    .in-progress-tickets {
        background-color: #ffff00;
    }
    .resolved-tickets {
        background-color: #00ff00;
    }
    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
    }
    .summary-section {
        margin-top: 20px;
    }
    .summary-title {
        font-weight: bold;
        margin-bottom: 15px;
    }
    .summary-content {
        display: flex;
        gap: 20px;
    }
    .progress-bars, .chart-container {
        flex: 1;
        background-color: #e6d9bf;
        border-radius: 6px;
        padding: 15px;
    }
    .progress-container {
        margin-bottom: 15px;
    }
    .progress-bar {
        height: 20px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: white;
    }
    .progress-green {
        background-color: #00ff00;
        height: 100%;
        width: 90%;
    }
    .progress-yellow {
        background-color: #ffff00;
        height: 100%;
        width: 50%;
    }
    .progress-red {
        background-color: #ff0000;
        height: 100%;
        width: 30%;
    }
    .progress-percentage {
        text-align: right;
        font-size: 14px;
    }
    .footer-info {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }
    .day-indicator {
        background-color: #00ffcc;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 14px;
        font-weight: bold;
    }
    .resolution-time {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .resolution-label {
        background-color: #f0f0f0;
        padding: 3px 8px;
        border-radius: 4px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
    }
    .resolution-value {
        background-color: #3399ff;
        color: white;
        padding: 3px 8px;
        border-radius: 4px;
    }
    .pie-chart {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: conic-gradient(
            #00b3a1 0% 75%,
            #e6d9bf 75% 100%
        );
        margin: 20px auto;
    }
    .chart-label {
        text-align: center;
        margin-bottom: 10px;
        font-size: 12px;
    }
    .brand {
        color: #00ff00;
        font-weight: bold;
        font-size: 18px;
    }
    .monitor {
        color: #3333CC;
        font-size: 16px;
    }
</style>

<div class="container">
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="brand"><span class="brand">SLAMs</span><span class="monitor">monitor</span></div>
            <div class="welcome">
                <div class="welcome-icon">👤</div>
                <div class="welcome-text">Welcome, <span class="welcome-name">user</span></div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>HOME</li>
            <li>Active SLA Details</li>
            <li>Tickets Management</li>
            <li>Reports</li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
        <form action="/search" method="GET">
    <div class="search-bar">
        <input type="text" name="query" class="search-input" />
        <button type="submit" class="search-button">SEARCH</button>
    </div>
</form>

            <div class="icons">
                <div class="icon">🔔</div>
                <div class="icon">👥</div>
            </div>
        </div>
        <div class="ticket-cards">
            <div class="ticket-card open-tickets">
                <div class="card-title">Open Tickets</div>
                <div>5 open tickets</div>
            </div>
            <div class="ticket-card in-progress-tickets">
                <div class="card-title">In Progress Tickets</div>
                <div>2 tickets in progress</div>
            </div>
            <div class="ticket-card resolved-tickets">
                <div class="card-title">Resolved Tickets</div>
                <div>8 tickets resolved</div>
            </div>
        </div>
        <div class="summary-section">
            <div class="summary-title">SLA Compliance Summary</div>
            <div class="summary-content">
                <div class="progress-bars">
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-green" style="width: 90%;"></div>
                        </div>
                        <div class="progress-percentage">99.99%</div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-yellow" style="width: 50%;"></div>
                        </div>
                        <div class="progress-percentage">99.05%</div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-red" style="width: 30%;"></div>
                        </div>
                        <div class="progress-percentage">99.00%</div>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="chart-label">99.9% SLA adherence</div>
                    <div class="pie-chart"></div>
                    <div class="chart-label">SLA Adherence Rate: A percentage</div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <div class="day-indicator">2 Days</div>
            <div class="resolution-time">
                <div class="resolution-label">Average resolution Time</div>
                <div class="resolution-value">203 × 18</div>
            </div>
        </div>
    </div>
</div>

