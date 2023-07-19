<!-- resources/views/email/verification.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>

    <p>Welcome to our platform! Please verify your email address by clicking the link below:</p>

    <a href="{{ $verificationUrl }}" target="_blank">Verify Email Address</a>

    <p>If you didn't create an account on our platform, you can simply ignore this email.</p>

    <p>Best regards,</p>
    <p>Your Team at Optimal Outsourcing</p>
</body>
</html>
