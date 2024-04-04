<?php
  session_start();
  $role = $_SESSION['role'];
  $admin_number = $_SESSION['admin_id'];
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['role'] = $_POST['role'];
    $_SESSION['admin_id'] = $_POST['adminnumber'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['middlename'] = $_POST['middlename'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phonenumber'] = $_POST['phonenumber'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['homeaddress'] = $_POST['homeaddress'];
    $_SESSION['barangay'] = $_POST['barangay'];
    $_SESSION['city'] = $_POST['city'];
    header('Location: ./review-information-admin.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../../res/images/logo.ico">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./../../../styles/global.css">
  <style>
    *, *::after, *::before {
      font-family: 'San Francisco Rounded Regular';
    }
    .currentProgress {
      font-family: 'San Francisco Rounded Heavy';
    }
    .steps .step-secondary+.step-secondary:before, .steps .step-secondary:after {
      background-color: #FF6BB3;
    }
    #personalInformationForm {
      scrollbar-color: #FF6BB3 transparent;
      scrollbar-width: thin;
      scrollbar-arrow-color: transparent;
    }
  </style>
  <title>EPAY | Admin Account Information</title>
</head>
<body class="bg-[#F7EFD8] flex justify-center min-h-screen overflow-hidden relative w-full">
  <div class="absolute w-full h-screen flex flex-col gap-1 overflow-hidden">
    <img src="./../../../res/images/7848733_8241.png" class="bg-cover bg-repeat" alt="">
    <img src="./../../../res/images/7848733_8241.png" class="bg-cover bg-repeat" alt="">
    <img src="./../../../res/images/7848733_8241.png" class="bg-cover bg-repeat" alt="">
  </div>
  <img src="./../../../res/images/Logologo.png" class="w-16 bottom-5 absolute self-center" alt="">

  <div id="navBar" class="z-50 navbar border border-slate-900/10 backdrop-blur top-0 absolute">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="./pages/accounts/sign-up.php">Get Started</a></li>
          <li><a>Testimony</a></li>
          <li><a>SVFC</a></li>
          <li><a>Contact Us</a></li>
          <li><a>About Us</a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-center">
      <a class="btn btn-ghost text-xl">EPAY</a>
    </div>
    <div class="navbar-end">
      <a href="./../login.php" class="link hover:cursor link-secondary">Log In Instead?</a>
    </div>
  </div>

  <main class="w-full">
    <div class="hero min-h-screen">
      <div class="hero-content flex-col w-11/12 lg:justify-between lg:flex-row">
        <div class="text-center flex flex-col-reverse gap-5">
          <ul class="steps">
            <li class="currentProgress step step-secondary">Register</li>
            <li class="currentProgress step step-secondary">Role</li>
            <li class="currentProgress step step-secondary">Info</li>
            <li class="step">Review</li>
          </ul>
          <div>
            <h1 class="text-3xl currentProgress text-center font-bold">Admin's Personal Information</h1>
            <p class="py-6 text-center">Please fill up all the fields to continue.</p>
          </div>
        </div>
        <div id="personalInformationForm" class="card shrink-0 w-full max-h-96 overflow-scroll overflow-x-hidden max-w-sm shadow-2xl bg-base-100">
          <form method="post" class="card-body">
            <input type="hidden" name="adminnumber" value="<?php echo $admin_number ?>" />
            <input type="hidden" value="<?php echo $role ?>" name="role" />
            <input type="hidden" value="<?php echo $username ?>" name="username" />
            <input type="hidden" value="<?php echo $password ?>" name="password" />
            <div class="form-control">
              <label class="label">
                <span class="label-text">First Name</span>
              </label>
              <input type="text" name="firstname" placeholder="First Name" class="input border-[#FF6BB3] input-bordered" required />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text
                ">Middle Name</span>
              </label>
              <input type="text" name="middlename" placeholder="Middle Name" class="input border-[#FF6BB3] input-bordered" required />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text
                ">Last Name</span>
              </label>
              <input type="text" name="lastname" placeholder="Last Name" class="input border-[#FF6BB3] input-bordered" required />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text
                ">Email</span>
              </label>
              <input type="email" name="email" placeholder="Email" class="input border-[#FF6BB3] input-bordered" required />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text
                ">Phone Number</span>
              </label>
              <input name="phonenumber" type="tel" placeholder="Phone Number" class="input border-[#FF6BB3] input-bordered" required />
            </div>

            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">Birth Date</span>
              </div>
              <input name="birthdate" id="birthdate" type="date" class="input input-bordered border-[#FF6BB3] w-full max-w-xs" required aria-required=true/>
              <div class="label">
                <span id="errorLabel" class="label-text-alt"></span>
              </div>
            </label>

            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">Gender</span>
              </div>
              <select name="gender" required aria-required="true" class="select border-[#FF6BB3] w-full max-w-xs">
                <option disabled selected>Your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Non-Binary">Non-Binary</option>
                <option value="Others">Others</option>
              </select>
              <div class="label">
                <span id="errorLabel" class="label-text-alt"></span>
              </div>
            </label>

            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">Home Address</span>
              </div>
              <input name="homeaddress" id="homeaddress" type="text" class="input input-bordered border-[#FF6BB3] w-full max-w-xs" placeholder="123 Main Street" required aria-required=true/>
              <div class="label">
                <span id="errorLabel" class="label-text-alt"></span>
              </div>
            </label>

            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">Barangay</span>
              </div>
              <input name="barangay" id="barangay" type="text" class="input input-bordered border-[#FF6BB3] w-full max-w-xs" placeholder="Barangay 176" required aria-required=true/>
              <div class="label">
                <span id="errorLabel" class="label-text-alt"></span>
              </div>
            </label>

            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text">City</span>
              </div>
              <input name="city" id="city" type="text" class="input input-bordered border-[#FF6BB3] w-full max-w-xs" placeholder="New York City" required aria-required=true/>
              <div class="label">
                <span id="errorLabel" class="label-text-alt"></span>
              </div>
            </label>

            <div class="form-control gap-5 mt-6">
              <button type="submit" class="btn bg-[#FF6BB3] hover:scale-105">
                FINALIZE
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
                </svg>
              </button>
              <button type="button" id="backButton" class="btn btn-ghost bg-zinc-300 hover:scale-105">
                BACK
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script>
    $(document).ready(() => {
      $("#backButton").click(e => {
        e.preventDefault()
        window.location.href = "./role-selection.php"
      })
    })
  </script>
</body>
</html>