<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
</head>
<body>
    <h1>感谢您在IRENE APP上注册</h1>

    <p>
        请点击下列链接进行确认注册
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        如果不是您本人请忽略该邮件
    </p>
</body>
</html>