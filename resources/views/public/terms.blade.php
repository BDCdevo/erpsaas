<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شروط الخدمة - منصة المدرسة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <div class="prose prose-lg max-w-none prose-headings:font-bold prose-h1:text-3xl prose-h2:text-2xl prose-h3:text-xl">
                {!! $terms !!}
            </div>
            <div class="mt-8 pt-8 border-t text-center">
                <a href="/school/login" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                    العودة إلى تسجيل الدخول
                </a>
            </div>
        </div>
    </div>
</body>
</html>
