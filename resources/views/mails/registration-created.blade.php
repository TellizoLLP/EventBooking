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
            <p>Dear {{ $registration->first_name }} {{ $registration->last_name }},</p>
            <p>Thank you for registering! Your registration has been successfully completed. Below are the details of your submission:</p>
            
            <table class="details">
                <tr>
                    <th>First Name</th>
                    <td>{{ $registration->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $registration->last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $registration->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $registration->phone }}</td>
                </tr>
                <tr>
                    <th>Current Status</th>
                    <td>{{ $registration->current_status ==1 ? 'Student' : 'Parent' }}</td>
                </tr>
                @if($registration->school_name)
                <tr>
                    <th>School Name</th>
                    <td>{{ $registration->school_name }}</td>
                </tr>
                @endif
                @if($registration->school_grade)
                <tr>
                    <th>School Grade</th>
                    <td>{{ $registration->school_grade }}</td>
                </tr>
                @endif
                @if($registration->referral_method)
                <tr>
                    <th>Referral Method</th>
                    <td>{{ $registration->referral_method }}</td>
                </tr>
                @endif
            </table>
            
            <p>If you have any questions or need further assistance, feel free to reply to this email or contact our support team.</p>
            
            <p>Best regards,</p>
            <p>The Youth Medical Forum Team</p>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} Tellizo. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</body>
</html>
