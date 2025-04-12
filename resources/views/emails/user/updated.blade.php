<!-- resources/views/emails/user/updated.blade.php -->

@component('mail::message')
# Xin chào {{ $user->name }} 1111

Thông tin tài khoản của bạn đã được cập nhật.

@component('mail::button', ['url' => 'https://your-app.com'])
Xem chi tiết
@endcomponent

Cảm ơn bạn đã sử dụng dịch vụ!
@endcomponent

