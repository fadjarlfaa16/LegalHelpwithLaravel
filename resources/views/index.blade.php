<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LegalHelp</title>
    <link rel="stylesheet" href="indexstyle.css" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="slogan">
          Protect your life from <span id="element"></span>
        </div>
        <a href="#" class="start" id="start">Get Started →</a>
      </div>
      <div class="reg" id="reg">
        <h3 class="text-center">Fill out your identity</h3>
        <br />
        <form>
          <div class="col-12">
            <label for="nama">Fullname</label>
            <input type="text" name="nama" id="nama" />
          </div>
          <div class="col-12">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="col-12">
            <label for="num">Your Handphone Number</label>
            <input type="text" name="hp" id="hp" />
          </div>
          <div class="col-12">
            <label for="pw">Password</label>
            <input type="password" name="pw" id="pw" />
          </div>
          <div class="check">
            <input type="checkbox" id="cek" />
            <label for="cek"
              >By accepting this you have agreed our privacy and policy
              guidelines</label
            >
          </div>
          <button type="submit" id="submit-reg" class="submit-btn">
            Submit
          </button>
          <div class="card-footer text-center" style="margin-top: 20px">
            <a href="#" id="haveAcc">Already have an account?</a>
          </div>
        </form>
      </div>

    </div>
    
    <script src="typed.js/dist/typed.umd.js"></script>
    <script src="jquery.js"></script>
    <script>
      var typed = new Typed("#element", {
        strings: ["legals violation", "jail"],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true,
        loopCount: Infinity,
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
