<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="gayalogin.css">

    <title>CRUD</title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body" style="text-align: center;">
                <h1 style="color: blue; font-weight: bold;">Login</h1>
                <p style="font-size: 20px;">Masukkan Username dan Password</p>
                <form action="cek_login.php" method="POST" onsubmit="return validateForm()">
                  <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" />
                  <input type="password" name="pass" id="password" class="form-control my-4 py-2" placeholder="Password" />
                  <div class="text-center mt-3">
                    <button type="submit">Masuk</button>
                    <a href="#" class="nav-link" style="color: black;">Lupa Password? <span style="font-weight: bold;">Klik disini!</span></a>
                    <a href="register.php">Daftar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // if (username === "" || password === "") {
        //   alert("Mohon dilengkapi");
        //   return false
        // }
        if (username === "") {
          alert("Username harus diisi");
          return false;
        }

        if (password === "") {
          alert("Password harus diisi");
          return false;
        }

      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
