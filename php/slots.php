<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Slot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .available {
            background-color: #5cb85c;
            color: white;
        }

        .unavailable {
            background-color: #d9534f;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Available Time Slots</h1>

    <label for="category">Select a category:</label>
    <select id="category" onchange="updateSlots()">
        <option value="Meeting">Meeting</option>
        <option value="Break">Break</option>
        <option value="CashWithdrawal">Cash Withdrawal</option>
        <option value="CashDeposit">Cash Deposit</option>
        <option value="MeetingManager">Meeting with Manager</option>
        <option value="Counter4">Counter 4</option>
        <option value="Counter5">Counter 5</option>
    </select>

    <table>
        <tr>
            <th>Time</th>
            <th>Status</th>
        </tr>
        <?php
            $interval = '30 minutes';
            $categories = array(
                'Meeting' => generateTimeSlots('10:00 AM', '12:00 PM', $interval),
                'Break' => generateTimeSlots('2:00 PM', '4:00 PM', $interval),
                'CashWithdrawal' => generateTimeSlots('10:30 AM', '11:30 AM', $interval),
                'CashDeposit' => generateTimeSlots('1:30 PM', '2:30 PM', $interval),
                'MeetingManager' => generateTimeSlots('3:00 PM', '4:00 PM', $interval),
                'Counter4' => generateTimeSlots('10:00 AM', '11:00 AM', $interval),
                'Counter5' => generateTimeSlots('11:30 AM', '12:30 PM', $interval),
            );

            foreach ($categories['Meeting'] as $slot) {
                $time = $slot[0];
                $status = $slot[1];

                echo "<tr>";
                echo "<td>$time</td>";
                echo "<td class='" . ($status ? 'available' : 'unavailable') . "'>" . ($status ? 'Available' : 'Unavailable') . "</td>";
                echo "</tr>";
            }

            function generateTimeSlots($startTime, $endTime, $interval) {
                $slots = array();
                $currentTime = strtotime($startTime);

                while ($currentTime <= strtotime($endTime)) {
                    $slots[] = array(date('h:i A', $currentTime), isAvailable($currentTime));
                    $currentTime = strtotime($interval, $currentTime);
                }

                return $slots;
            }

            function isAvailable($time) {
                return !isBetween12to1($time);
            }

            function isBetween12to1($time) {
                $start12PM = strtotime('12:00 PM');
                $end1PM = strtotime('1:00 PM');

                return ($time >= $start12PM && $time < $end1PM);
            }
        ?>
    </table>

    <script>
        function updateSlots() {
            var category = document.getElementById('category').value;
            var slots = <?php echo json_encode($categories); ?>;

            document.querySelector('table').innerHTML = "<tr><th>Time</th><th>Status</th></tr>";

            for (var i = 0; i < slots[category].length; i++) {
                var time = slots[category][i][0];
                var status = slots[category][i][1];

                var newRow = "<tr><td onclick='" + (status ? 'bookSlot' : 'alert(\"This slot is unavailable. Please choose another slot.\");') + "'>" + time + "</td><td class='" + (status ? 'available' : 'unavailable') + "'>" + (status ? 'Available' : 'Unavailable') + "</td></tr>";

                document.querySelector('table').innerHTML += newRow;
            }
        }

        function bookSlot(time) {
            var category = document.getElementById('category').value;
            window.location.href = category.toLowerCase() + '.php?time=' + encodeURIComponent(time);
        }
    </script>
</body>
</html>