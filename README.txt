Apta Cosmetics — Cross-platform static website

Included files:
- index.html
- checkout.html (full cross-platform: Razorpay + Android UPI buttons; iOS hides UPI buttons)
- upi-redirect.html (handles UPI deep link / intent)
- success.html (shows last order/payment)
- admin.html (full admin dashboard: login, view, mark shipped, export CSV)
- firebase-config.js

Notes:
- Razorpay uses test key rzp_test_RgNPzBBvzYUGVL in checkout.html. Replace with live key when ready.
- Ensure Firebase Auth has your admin user (email/password).
- Realtime Database rules should permit reads/writes for authenticated admin or adjust for testing.
- UPI redirection is reliable on Android; UPI deep links are not consistently supported on iOS.
