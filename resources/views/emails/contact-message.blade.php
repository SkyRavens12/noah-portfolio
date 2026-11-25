<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New Portfolio Message</title>
    </head>
    <body style="margin:0;padding:24px;background-color:#f8f8f8;font-family:'Manrope',Arial,sans-serif;color:#333333;">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:600px;margin:0 auto;background-color:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #ececec;">
            <tr>
                <td style="background-color:#ffdab9;padding:24px 28px;">
                    <h1 style="margin:0;font-size:20px;line-height:1.3;color:#333333;">New Contact Message</h1>
                    <p style="margin:6px 0 0;font-size:13px;color:#555555;">Sent from your portfolio website</p>
                </td>
            </tr>
            <tr>
                <td style="padding:28px;">
                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="font-size:14px;line-height:1.6;">
                        <tr>
                            <td style="padding:6px 0;color:#888888;width:120px;vertical-align:top;"><strong>Full Name</strong></td>
                            <td style="padding:6px 0;color:#333333;">{{ $contactData['full_name'] }}</td>
                        </tr>
                        <tr>
                            <td style="padding:6px 0;color:#888888;vertical-align:top;"><strong>Email</strong></td>
                            <td style="padding:6px 0;color:#333333;">
                                <a href="mailto:{{ $contactData['email'] }}" style="color:#333333;">{{ $contactData['email'] }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:6px 0;color:#888888;vertical-align:top;"><strong>Phone</strong></td>
                            <td style="padding:6px 0;color:#333333;">{{ $contactData['phone'] }}</td>
                        </tr>
                        <tr>
                            <td style="padding:6px 0;color:#888888;vertical-align:top;"><strong>Subject</strong></td>
                            <td style="padding:6px 0;color:#333333;">{{ $contactData['subject'] }}</td>
                        </tr>
                    </table>

                    <div style="margin-top:20px;padding:18px 20px;background-color:#f5fae1;border-radius:10px;">
                        <p style="margin:0 0 8px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:0.05em;color:#666666;">Message</p>
                        <p style="margin:0;font-size:15px;line-height:1.65;color:#333333;white-space:pre-line;">{{ $contactData['message'] }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
