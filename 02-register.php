<!DOCTYPE html>
<html lang="zh-TW">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>會員註冊 - 經典復古風格</title>
     <style>
     /* 基礎全域設定：舒適簡單的字體 */
     body {
          font-family: 'Helvetica Neue', Arial, 'Noto Sans TC', sans-serif;
          background-color: #f7f5f0;
          /* 溫柔的霧白/米色底，襯托復古感 */
          color: #333;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          margin: 0;
          padding: 20px;
     }

     /* 表單外殼：圓潤修飾、紅磚色主調 */
     .register-container {
          background-color: #ffffff;
          width: 100%;
          max-width: 450px;
          border-radius: 16px;
          /* 圓潤修飾 */
          box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
          border-top: 8px solid #a23c26;
          /* 紅磚色主視覺飾條 */
          overflow: hidden;
          padding: 30px;
          box-sizing: border-box;
     }

     /* 標題設計：墨綠色點綴 */
     .register-header {
          text-align: center;
          margin-bottom: 28px;
     }

     .register-header h2 {
          color: #2c4c38;
          /* 墨綠色點綴色 */
          font-size: 24px;
          margin: 0 0 8px 0;
          letter-spacing: 2px;
     }

     .register-header p {
          color: #8c764d;
          /* 霧金色副標 */
          font-size: 14px;
          margin: 0;
          font-weight: 500;
     }

     /* 表單群組與欄位 */
     .form-group {
          margin-bottom: 20px;
     }

     .form-group label {
          display: block;
          margin-bottom: 8px;
          color: #4a4a4a;
          font-size: 14px;
          font-weight: bold;
     }

     /* 輸入框：圓潤線條與舒服的間距 */
     .form-control {
          width: 100%;
          padding: 12px 16px;
          font-size: 15px;
          border: 1.5px solid #dcd6cd;
          /* 溫和的線條顏色 */
          border-radius: 8px;
          /* 圓潤線條 */
          background-color: #faf9f6;
          color: #333;
          box-sizing: border-box;
          transition: all 0.3s ease;
     }

     /* 輸入框聚焦時的精神焦點 */
     .form-control:focus {
          outline: none;
          border-color: #a23c26;
          /* 聚焦時轉為紅磚色 */
          background-color: #ffffff;
          box-shadow: 0 0 0 3px rgba(162, 60, 38, 0.1);
     }

     /* 提交按鈕：紅磚色與霧金色的完美搭配 */
     .btn-submit {
          width: 100%;
          padding: 14px;
          background-color: #a23c26;
          /* 紅磚色 */
          color: #ffffff;
          border: 2px solid #8c764d;
          /* 霧金色邊框線條 */
          border-radius: 8px;
          /* 圓潤按鈕 */
          font-size: 16px;
          font-weight: bold;
          letter-spacing: 4px;
          cursor: pointer;
          transition: all 0.3s ease;
          margin-top: 10px;
          box-shadow: 0 4px 12px rgba(162, 60, 38, 0.2);
     }

     /* 按鈕懸停效果 */
     .btn-submit:hover {
          background-color: #2c4c38;
          /* 懸停時轉為優雅的墨綠色 */
          border-color: #8c764d;
          /* 保持霧金色邊框 */
          box-shadow: 0 4px 12px rgba(44, 76, 56, 0.2);
     }

     /* 表單底部提示 */
     .form-footer {
          text-align: center;
          margin-top: 20px;
          font-size: 12px;
          color: #a09990;
     }
     </style>
</head>

<body>

     <div class="register-container">
          <!-- 表單標頭 -->
          <div class="register-header">
               <h2>簡易註冊系統</h2>
               <p>MEMBERSHIP REGISTRATION</p>
          </div>

          <!-- 註冊表單：對應 members 資料表欄位 -->
          <form action="register_process.php" method="POST">

               <!-- 帳號 account -->
               <div class="form-group">
                    <label for="account">會員帳號 (Account)</label>
                    <input type="text" id="account" name="account" class="form-control" placeholder="請輸入您的帳號" required>
               </div>

               <!-- 密碼 password -->
               <div class="form-group">
                    <label for="password">登入密碼 (Password)</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="請輸入密碼"
                         required>
               </div>

               <!-- 電話 tel -->
               <div class="form-group">
                    <label for="tel">聯絡電話 (Telephone)</label>
                    <input type="tel" id="tel" name="tel" class="form-control" placeholder="例如：0912345678" required>
               </div>

               <!-- 信箱 email -->
               <div class="form-group">
                    <label for="email">電子信箱 (Email)</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com"
                         required>
               </div>

               <!-- 生日 birthday -->
               <div class="form-group">
                    <label for="birthday">出生日期 (Birthday)</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" required>
               </div>

               <!-- 送出按鈕 -->
               <button type="submit" class="btn-submit">送出註冊</button>
          </form>

          <div class="form-footer">
               © Classic Style Registration System. All rights reserved.
          </div>
     </div>

</body>

</html>