<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสารสนเทศ วท.นร</title>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;700&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: 
   #C06;
        }
        .container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 90%;
            max-width: 1000px;
            overflow: hidden;
            position: relative;
            text-align: center;
        }
        h1 {
            font-family: 'Kanit', sans-serif;
            font-size: 36px;
            margin-bottom: 30px;
            color: #00C;
            font-weight: 700;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: color 0.3s, transform 0.3s;
        }
        h1:hover {
            color: #6F0;
            transform: scale(1.05);
        }
        .image-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            overflow-x: auto;
            padding: 20px 0;
        }
        .image-group::-webkit-scrollbar {
            height: 12px;
        }
        .image-group::-webkit-scrollbar-thumb {
            background: #0072ff;
            border-radius: 6px;
        }
        .image-group::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .image-group img {
	width: 250px;
	height: 250px;
	object-fit: cover;
	border-radius: 12px;
	border: 4px solid #ddd;
	box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
	transition: transform 0.4s, border-color 0.4s, box-shadow 0.4s;
        }
        .image-group img:nth-child(1) {
            border-color: #03C;
        }
        .image-group img:nth-child(2) {
            border-color: #03C;
        }
        .image-group img:hover {
            transform: scale(1.1);
            border-color: #3F6;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .group-info {
            margin-top: 30px;
            font-size: 18px;
            color: #360;
            line-height: 1.8;
            text-align: left;
            position: relative;
        }
        .group-info div {
            margin: 15px 0;
            font-family: 'Kanit', sans-serif;
            font-weight: #6FC;
            color: #004d40;
            position: relative;
            padding-bottom: 10px;
            transition: color 0.3s, transform 0.3s;
        }
        .group-info div:hover {
            color: #33F;
            transform: translateX(5px);
        }
        .group-info div::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: #3F6;
            border-radius: 3px;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.4s;
        }
        .group-info div:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        .group-info p {
            margin: 5px 0;
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ระบบสารสนเทศ วท.นร</h1>
        <div class="image-group"> <a href="login_member.php"><img src="image/member.png" alt="กลุ่มนักเรียน นักศึกษา" width="1080" height="1080"></a>          <a href="login_admin.php"><img src="image/admin.png" alt="กลุ่มผู้ดูแลระบบ" width="1223" height="1338"></a>
        </div>
       
        </div>
    </div>
</body>
</html>
