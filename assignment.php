<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการงาน - สิทธิพร ทองใบ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-red-600 text-white p-4 shadow-md">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="font-bold text-lg">สิทธิพร (IT ปี 2)</h1>
            <div class="space-x-4">
                <a href="index.php" class="hover:underline">หน้าแรก</a>
                <a href="bio.php" class="hover:underline">ประวัติ</a>
                <a href="assignment.php" class="bg-red-800 px-3 py-1 rounded font-bold">รายการงาน</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto p-6 mt-6">
        <div class="bg-white p-8 rounded-lg shadow border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-red-500 pb-2 mb-6">
                รายการงานที่ได้รับมอบหมาย (Assignments)
            </h2>

            <div class="space-y-4">
                <div class="p-4 border rounded-lg bg-gray-50 flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-gray-800">งานที่ 1: ติดตั้ง VS Code และ XAMPP</h3>
                        <p class="text-sm text-gray-500">วิชา Web Technology</p>
                    </div>
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">
                        ส่งแล้ว
                    </span>
                </div>

                <div class="p-4 border rounded-lg bg-gray-50 flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-gray-800">งานที่ 2: ออกแบบ Layout 3 คอลัมน์ด้วย Tailwind CSS</h3>
                        <p class="text-sm text-gray-500">วิชา Web Technology</p>
                    </div>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">
                        กำลังทำ
                    </span>
                </div>

                <div class="p-4 border rounded-lg bg-gray-50 flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-gray-800">งานที่ 3: สร้างเว็บไซต์ส่วนตัว 3 หน้า</h3>
                        <p class="text-sm text-gray-500">วิชา Web Technology</p>
                    </div>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">
                        กำลังทำ
                    </span>
                </div>
            </div>
        </div>
    </main>

</body>
</html>