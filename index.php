<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - สิทธิพร ทองใบ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-red-600 text-white p-4 shadow-md">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="font-bold text-lg">สิทธิพร (IT ปี 2)</h1>
            <div class="space-x-4">
                <a href="index.php" class="bg-red-800 px-3 py-1 rounded font-bold">หน้าแรก</a>
                <a href="bio.php" class="hover:underline">ประวัติ</a>
                <a href="assignment.php" class="hover:underline">รายการงาน</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto p-6 mt-6">
        <div class="bg-white p-8 rounded-lg shadow border border-gray-200 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">ยินดีต้อนรับสู่เว็บไซต์ส่วนตัว</h2>
            <p class="text-gray-600 mb-6">
                สวัสดีครับ เว็บไซต์นี้จัดทำขึ้นโดย <span class="font-semibold text-red-600">สิทธิพร ทองใบ</span> 
                นักศึกษาสาขาเทคโนโลยีสารสนเทศ (IT) มหาวิทยาลัยราชภัฏรำไพพรรณี
            </p>

            <div class="flex justify-center gap-4">
                <a href="bio.php" class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded shadow">
                    ดูประวัติส่วนตัว
                </a>
                <a href="assignment.php" class="bg-gray-700 hover:bg-gray-800 text-white px-5 py-2 rounded shadow">
                    ดูรายการงานทั้งหมด
                </a>
            </div>
        </div>
    </main>

</body>
</html>