<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WASMaN Membership Application Received</title>
</head>
<body style="margin:0;padding:0;background:#f3f8f9;font-family:Arial,Helvetica,sans-serif;color:#173a45;">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f3f8f9;padding:32px 15px;">
<tr><td align="center">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px;background:#ffffff;border-radius:16px;overflow:hidden;">
<tr><td style="padding:30px;background:#07586a;color:#ffffff;">
    <div style="font-size:13px;letter-spacing:1.5px;font-weight:700;color:#55d4dc;">WASMaN</div>
    <h1 style="margin:8px 0 0;font-size:27px;">Membership Application Received</h1>
</td></tr>
<tr><td style="padding:32px;">
    <p style="font-size:18px;line-height:1.7;margin-top:0;">Dear {{ $application->full_name }},</p>
    <p style="font-size:17px;line-height:1.7;">Thank you for your interest in joining the Women in Aquatic Science and Management Network (WASMaN).</p>
    <p style="font-size:17px;line-height:1.7;">We have successfully received your membership application. Your application is currently <strong>{{ $application->status }}</strong> and will be reviewed by the WASMaN administration.</p>
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin:24px 0;background:#f2f8f9;border-radius:12px;">
        <tr><td style="padding:20px;font-size:16px;line-height:1.8;">
            <strong>Application summary</strong><br>
            Join as: {{ $application->join_as }}<br>
            Institution/Organisation: {{ $application->institution }}<br>
            Area of expertise/study: {{ $application->expertise }}
        </td></tr>
    </table>
    <p style="font-size:17px;line-height:1.7;">WASMaN will contact you using the email address provided in your application if further information is required or when there is an update on your application.</p>
    <p style="font-size:17px;line-height:1.7;margin-bottom:0;">Kind regards,<br><strong>WASMaN Administration</strong></p>
</td></tr>
</table>
</td></tr>
</table>
</body>
</html>
