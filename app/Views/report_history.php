<!-- report_history.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report History</title>
</head>
<body>

    <h2>Report History</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>District</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Time</th>
                <th>Office</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportHistory as $report): ?>
                <tr>
                    <td><?= $report['id'] ?? ''; ?></td>
                    <td><?= $report['title'] ?? ''; ?></td>
                    <td><?= $report['description'] ?? ''; ?></td>
                    <td><?= $report['location'] ?? ''; ?></td>
                    <td><?= $report['district'] ?? ''; ?></td>
                    <td><?= $report['contact'] ?? ''; ?></td>
                    <td><?= $report['date'] ?? ''; ?></td>
                    <td><?= $report['time'] ?? ''; ?></td>
                    <td><?= $report['office'] ?? ''; ?></td>
                    <td><?= $report['status'] ?? ''; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>