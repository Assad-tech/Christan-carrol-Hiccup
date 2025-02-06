<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hiccup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>Welcome to Hiccup!</h1>
        </div>
        <div class="content">
            <p>Hi {{ $user['full_name'] }},</p>
            <p>Welcome to Hiccup! We’re thrilled to have you onboard.</p>
            <p>Your account has been successfully created, and we’ve received your payment. Below are your account
                details:</p>
            <ul>
                <li><strong>Email:</strong> {{ $user['email'] }}</li>
                <li><strong>Password:</strong> {{ $user['password'] }}</li>
            </ul>
            <p><strong>Payment Details:</strong></p>
            <ul>
                <li>
                    <strong>Transaction ID:</strong> {{ $payment['transaction_id'] }}
                </li>
                <li>
                    <strong>Name on Card:</strong> {{ $payment['name_on_card'] }}
                </li>
                <li>
                    <strong>Amount Paid:</strong> {{ $payment['amount'] }}$
                    {{-- {{ $payment->currency }} --}}
                </li>
                <li>
                    <strong>Date:</strong> {{ \Carbon\Carbon::parse($payment['payment_date'])->format('M/d/Y') }}
                </li>
            </ul>
            <p>You can now log in to your account and explore everything Hiccup has to offer.</p>
            <p>If you have any questions, feel free to reach out to us at <a
                    href="mailto:support@hiccup.com">support@hiccup.com</a>.</p>
            <p>We’re excited to have you with us!</p>
            <p>Cheers,</p>
            <p>The Hiccup Team</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Hiccup. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
