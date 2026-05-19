<!DOCTYPE html>
<html lang="zh-TW">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>後台管理系統</title>
     <style>
          :root {
               --navbar-height: 60px;
               --sidebar-width: 350px;
               --primary-color: #0984e3;
               --family-purple: #6c5ce7;
               --bg-gray: #f8f9fa;
          }

          * { box-sizing: border-box; font-family: "Microsoft JhengHei", "PingFang TC", sans-serif; }
          body { background-color: var(--bg-gray); margin: 0; height: 100vh; overflow: hidden; }

          /* ==================== 1. 登入介面樣式 ==================== */
          .login-overlay {
               position: fixed;
               top: 0; left: 0; width: 100%; height: 100%;
               background: linear-gradient(135deg, #74b9ff, #0984e3);
               display: flex;
               justify-content: center;
               align-items: center;
               z-index: 999; /* 確保蓋在最上層 */
          }
          .login-box {
               background: white;
               padding: 40px;
               border-radius: 12px;
               box-shadow: 0 10px 25px rgba(0,0,0,0.2);
               width: 100%;
               max-width: 400px;
               text-align: center;
          }
          .login-box h2 { color: #2d3436; margin-bottom: 25px; }
          .input-group { margin-bottom: 20px; text-align: left; }
          .input-group label { display: block; font-size: 0.9em; color: #636e72; margin-bottom: 5px; font-weight: bold; }
          .input-group input { width: 100%; padding: 12px; border: 1px solid #dfe6e9; border-radius: 8px; font-size: 14px; }
          .btn-submit { width: 100%; padding: 12px; background: var(--primary-color); color: white; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.2s; }
          .btn-submit:hover { background: #0773c5; }

          /* ==================== 2. 後台介面樣式 ==================== */
          /* 頂部導覽列 */
          .navbar {
               height: var(--navbar-height);
               background: #ffffff;
               border-bottom: 1px solid #dcdde1;
               padding: 0 20px;
               display: flex;
               align-items: center;
               z-index: 100;
          }
          .nav-container { width: 100%; display: flex; justify-content: space-between; align-items: center; }
          .nav-logo { font-size: 1.2em; font-weight: bold; color: #2d3436; text-decoration: none; }
          .nav-links { list-style: none; display: flex; gap: 20px; margin: 0; padding: 0; }
          .nav-links a { text-decoration: none; color: #636e72; font-size: 0.95em; }
          .nav-links a:hover { color: var(--primary-color); }
          .btn-logout { text-decoration: none; background: #fff; border: 1px solid #dcdde1; padding: 6px 15px; border-radius: 4px; color: #2d3436; font-size: 0.9em; cursor: pointer; font-weight: bold; }
          .btn-logout:hover { background: #ffeaa7; color: #d63031; border-color: #ff7675; }

          /* 下方工作區佈局 */
          .main-wrapper {
               display: flex;
               flex: 1;
               height: calc(100vh - var(--navbar-height));
               overflow: hidden;
          }

          /* 左側固定欄 */
          .sidebar {
               width: var(--sidebar-width);
               background: #ffffff;
               border-right: 1px solid #dcdde1;
               padding: 20px;
               display: flex;
               flex-direction: column;
               gap: 15px;
               overflow-y: auto;
          }

          /* 右側表單區 */
          .main-content {
               flex: 1;
               display: flex;
               flex-direction: column;
               background: #fff;
               position: relative;
          }

          /* 左側卡片 */
          .info-card { background: #f1f3f5; padding: 15px; border-radius: 8px; }
          .label { font-size: 0.8em; color: #666; font-weight: bold; display: block; margin-bottom: 5px; }
          .value { font-size: 1.1em; color: #333; font-weight: bold; }

          .family-item {
               background: white;
               padding: 8px 12px;
               border-radius: 6px;
               margin-top: 8px;
               font-size: 14px;
               color: var(--family-purple);
               border: 1px solid #e0d8ff;
          }

          iframe { width: 100%; height: 100%; border: none; }
     </style>
</head>

<body>

     <div class="login-overlay" id="loginScreen">
          <div class="login-box">
               <h2>視光管理系統後台</h2>
               <div class="input-group">
                    <label>管理員帳號</label>
                    <input type="text" placeholder="請輸入帳號 (測試可隨便打)">
               </div>
               <div class="input-group">
                    <label>密碼</label>
                    <input type="password" placeholder="請輸入密碼">
               </div>
               <button class="btn-submit" onclick="handleLogin()">登入系統</button>
          </div>
     </div>

     <nav class="navbar">
          <div class="nav-container">
               <a href="#" class="nav-logo">
                    <span>翠園高中後台管理 / 視光工作站</span>
               </a>
               <ul class="nav-links">
                    <li><a href="#" onclick="alert('功能開發中')">關於我們</a></li>
                    <li><a href="#" onclick="alert('功能開發中')">最新消息</a></li>
                    <li><a href="#" onclick="alert('功能開發中')">聯絡方式</a></li>
               </ul>
               <div class="nav-buttons">
                    <button class="btn-logout" onclick="handleLogout()">登出</button>
               </div>
          </div>
     </nav>

     <div class="main-wrapper">
          <aside class="sidebar">
               <h3 style="color:var(--primary-color); margin-top:0; margin-bottom:10px;">👤 視光工作站</h3>
               
               <div class="info-card">
                    <span class="label">當前作業客戶</span>
                    <div class="value">陳大明</div>
               </div>

               <div class="info-card">
                    <span class="label">客戶編號 / 聯絡電話</span>
                    <div class="value" style="font-size:0.9em; color:#636e72;">C20260515 / 0912-345-678</div>
               </div>

               <div class="info-card" style="background: #f3f0ff; border: 1px solid #e0d8ff;">
                    <span class="label" style="color:var(--family-purple)">👨‍👩‍👧‍👦 家族成員連動</span>
                    <div class="family-item"><span>林美玲 (配偶)</span></div>
                    <div class="family-item"><span>陳小華 (子女)</span></div>
               </div>

               <div style="margin-top: auto; font-size: 12px; color: #999; line-height: 1.6; background:#fff9db; padding:10px; border-radius:6px;">
                    <strong>進貨分析：</strong><br>
                    提交右側表單後，數據會即時存入 Google 試算表。請定期查看試算表中的「品牌佔有率」以優化進貨。
               </div>
          </aside>

          <main class="main-content">
               <iframe 
                    id="form-iframe" 
                    src="https://docs.google.com/forms/d/e/1FAIpQLSfAcKAjZqDa70ZBtL--0gp7Huuv2CRQ0ao6zwcIVcebnihB-w/viewform?embedded=true">
                    載入中…
               </iframe>
          </main>
     </div>

     <script>
          // 點擊「登入系統」
          function handleLogin() {
               // 隱藏登入遮罩，露出下方的後台
               document.getElementById('loginScreen').style.display = 'none';
               // 重新整理一下表單，確保載入最新狀態
               const iframe = document.getElementById('form-iframe');
               iframe.src = iframe.src;
          }

          // 點擊「登出」
          function handleLogout() {
               // 重新顯示登入遮罩，把後台蓋住
               document.getElementById('loginScreen').style.display = 'flex';
          }
     </script>

</body>

</html>