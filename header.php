<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول - مركز التعليم المستمر</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo-area">
            <img src="university-logo.png" alt="شعار الجامعة" class="logo">
            <div class="menu">
                <a href="#">الرئيسية</a> |
                <a href="#">العقود</a> |
                <a href="#">الإجازات</a>
            </div>
        </div>
    </header>

    <main>
        <section class="login-box">
            <h2>تسجيل الدخول</h2>
            <form action="login_process.php" method="post">
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">الرقم السري</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">تسجيل الدخول</button>
            </form>
            <a href="#" class="forgot-password">نسيت الرقم السري؟</a>
        </section>
    </main>

    <footer>
        جميع الحقوق محفوظة © مركز التعليم المستمر - جامعة الإمام عبدالرحمن بن فيصل
    </footer>
</body>
</html>
