<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Registrasi</title>
   <style>
      * {
         font-family: 'arial', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         background: #fff;
      }

      label {
         display: block;
      }

      .title-login {
         margin-top: 4.5rem;
         text-align: center;
         letter-spacing: 1px;
      }

      .border-login {
         width: 500px;
         height: 520px;
         border: 1px solid  rgb(216, 216, 216);
         border-radius: 5px;
         position: relative;
         margin: 6rem auto;
      }

      .form-center {
         margin-top: 2.2rem;
         letter-spacing: 1px;
      }

      input {
         width: 300px;
         height: 35px;
         margin: 10px 0;
         box-sizing: border-box;
         border-radius: 5px;
         outline: none;
         border: 1px solid rgb(216, 216, 216);
      }

      .btn-login button {
         padding: 8px 127px;
         outline: none;
         cursor: pointer;
         border: 0;
         background: rgb(13, 110, 253);
         color: #fff;
         font-size: 16px;
         letter-spacing: 1px;
         border-radius: 5px;
      }

      .form-space {
         position: absolute;
         width: 300px;
         margin: 2rem 6rem;
      }
   </style>
</head>

<body>
   
   <form action="" method="POST">
      <div class="border-login">
         <div class="title-login">
               <h1>Silahkan Login</h1>
            </div>
         <div class="form-center">
            <div class="form-space">
               <label for="username" style="margin-right: 219px;">Username</label>
               <input type="text" name="username" id="username">

               <label for="password" style="margin-right: 220px;">Password</label>
               <input type="password" name="password" id="password">

               <div class="btn-login">
                  <button type="submit" name="login">Login</button>
            </div>

            <div class="belum-terdaftar">
               <p>Belum Registrasi Silahkan Registrasi Disini</p>
               <a href="registrasi.php">Registrasi</a>
            </div>
         </div>
         </div>
      </div>
      </form>

</body>

</html>