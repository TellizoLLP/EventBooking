<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #4caf50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #4caf50;
        }
        .details {
            margin: 20px 0;
            border-collapse: collapse;
            width: 100%;
        }
        .details th, .details td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .details th {
            background-color: #f4f4f9;
        }
        .footer {
            background-color: #f4f4f9;
            padding: 10px;
            text-align: center;
            color: #999;
            font-size: 14px;
        }
        .footer a {
            color: #4caf50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>Registration Successful</h1>
        </div>
        
        <!-- Content -->
        <div class="content">
            <p>Dear {{ $first_name }} {{ $last_name }},</p>
            <p>Thank you for registering! Your registration has been successfully completed. Below are the details of your submission:</p>
            
            <table class="details">
                <tr>
                    <th>First Name</th>
                    <td>{{ $first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <th>Referral Method</th>
                    <td>{{ $referral_method }}</td>
                </tr>
                @if ($current_status == 1)
                <tr>
                    <th>School Name</th>
                    <td>{{ $school_name }}</td>
                </tr>
                <tr>
                    <th>School Grade</th>
                    <td>{{ $school_grade }}</td>
                </tr>
                @endif
            </table>

            @if ($items->count() > 0)
            <h2>Specialty Sessions</h2>
            @foreach ($items as $item)
            @php
                $roomIndex = $item->room_id;
                $selectedSession = collect($rooms[$roomIndex]['sessions'])->firstWhere('id', $item->session_id);
                $sessionDetails = $selectedSession
                    ? [
                        'roomName' => $rooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                        'name' => $selectedSession['name'] ?? 'Unknown Session',
                        'sessionName' => $selectedSession['session'] ?? 'Unknown Session',
                        'startTime' => $selectedSession['start_time'] ?? 'N/A',
                        'endTime' => $selectedSession['end_time'] ?? 'N/A',
                    ]
                    : null;
            @endphp
            @if ($sessionDetails)
            <ul>
                <li><strong>Room Name:</strong> {{ $sessionDetails['roomName'] }}</li>
                <li><strong>Session Name:</strong> {{ $sessionDetails['name'] }}</li>
                <li><strong>Session:</strong> {{ $sessionDetails['sessionName'] }}</li>
                <li><strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}</li>
            </ul>
            @endif
            @endforeach
            @endif

            @if ($itemsMicro->count() > 0)
            <h2>Micro-courses</h2>
            @foreach ($itemsMicro as $item)
            @php
                $roomIndex = $item->room_id;
                $selectedSession = collect($Mainrooms[$roomIndex]['sessions'])->firstWhere('id', $item->session_id);
                $sessionDetails = $selectedSession
                    ? [
                        'roomName' => $Mainrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                        'name' => $selectedSession['name'] ?? 'Unknown Session',
                        'sessionName' => $selectedSession['session'] ?? 'Unknown Session',
                        'startTime' => $selectedSession['start_time'] ?? 'N/A',
                        'endTime' => $selectedSession['end_time'] ?? 'N/A',
                    ]
                    : null;
            @endphp
            @if ($sessionDetails)
            <ul>
                <li><strong>Room Name:</strong> {{ $sessionDetails['roomName'] }}</li>
                <li><strong>Session Name:</strong> {{ $sessionDetails['name'] }}</li>
                <li><strong>Session:</strong> {{ $sessionDetails['sessionName'] }}</li>
                <li><strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}</li>
            </ul>
            @endif
            @endforeach
            @endif

            @if ($itemsAdditional->count() > 0)
            <h2>Additional Sessions</h2>
            @foreach ($itemsAdditional as $item)
            @php
                $roomIndex = $item->room_id;
                $selectedSession = collect($Additionalrooms[$roomIndex]['sessions'])->firstWhere('id', $item->session_id);
                $sessionDetails = $selectedSession
                    ? [
                        'roomName' => $Additionalrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                        'name' => $selectedSession['name'] ?? 'Unknown Session',
                        'sessionName' => $selectedSession['session'] ?? 'Unknown Session',
                        'startTime' => $selectedSession['start_time'] ?? 'N/A',
                        'endTime' => $selectedSession['end_time'] ?? 'N/A',
                    ]
                    : null;
            @endphp
            @if ($sessionDetails)
            <ul>
                <li><strong>Room Name:</strong> {{ $sessionDetails['roomName'] }}</li>
                <li><strong>Session Name:</strong> {{ $sessionDetails['name'] }}</li>
                <li><strong>Session:</strong> {{ $sessionDetails['sessionName'] }}</li>
                <li><strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}</li>
            </ul>
            @endif
            @endforeach
            @endif
            
            <p>If you have any questions or need further assistance, feel free to reply to this email or contact our support team.</p>
            <p>Best regards,</p>
            <p>The Youth Medical Forum Team</p>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} The Youth Medical Forum. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
