<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>會員登入</title>
     <style>
     </style>
</head>

<body>
     <div class="container">
          <div class="form-header">
               <h3>會員登入</h3>
               <P>歡迎回來</P>
          </div>

          <div class="success-message" id="successMessage">登入成功!</div>

          <form id="loginform" action="api_login.php" method="post">
               <div classs="form-group">
                    <label for="account">帳號 *</label>
                    <input
                         type="text"
                         id="account"
                         name="account"
                         placeholder="請輸入帳號"
                         required>

               </div>
               <div class="form-group">
                    <label for="password">密碼 *</label>
                    <input
                         type="password"
                         id="password"
                         name="password"
                         placeholder="請輸入密碼"
                         required>

               </div>

               <div class="form-actions">
                    <button type="submit" class="btn-submit">登入</button>
                    <button type="reset" class="btn-reset">重置</button>

               </div>
          </form>

          <div class="form-footer">
               還沒有帳號? <a href="02-register.php">立即註冊</a>

          </div>

          <div class="info-text">* 表示必須項目</div>
     </div>

</body>

</html>