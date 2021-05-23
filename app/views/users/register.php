<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="">
            <img class="card-img img-fluid vw-100 vh-100" src="<?php echo URLROOT ?>/public/img/2.jpg" alt="">
            <div class="card-img-overlay d-flex justify-content-center flex-column bg-blue_overlay align-items-center">
                
                <form action="<?php echo URLROOT; ?>/users/register" method="post" class="w-25 d-flex justify-content-center flex-column align-items-center">
                    <svg class="logo-footer" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.31 127.99"><defs><style>.cls-1{fill:#f2f3f8;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M70.71,66H58.31V52.28c0-3.16.75-5.14,5.08-5.14h7.32c11.34,0,15.43,2.36,15.43,9C86.14,63.57,82,66,70.71,66Z" transform="translate(-8.11 -9.82)"/><path class="cls-1" d="M89.43,90.77c0,7.33-4,9.68-15.37,9.68H63.39c-4.33,0-5.08-2-5.08-5.15V80.49H74.06C85.33,80.49,89.43,82.9,89.43,90.77Z" transform="translate(-8.11 -9.82)"/><path class="cls-1" d="M120.18,9.82H24A15.91,15.91,0,0,0,8.11,25.73v96.16A15.91,15.91,0,0,0,24,137.81h96.16a15.92,15.92,0,0,0,15.92-15.92V25.73A15.91,15.91,0,0,0,120.18,9.82ZM70.33,114.09H60.17c-13.39,0-19.27-4.9-19.27-17.8v-45c0-12.9,5.88-17.79,19.21-17.79H68.6c22.63,0,34.34,4.59,34.34,20.45,0,8.87-3.6,14.64-10.72,18,9.67,3.22,14.63,9.55,14.63,20.33C106.85,109.37,94.39,114.09,70.33,114.09Z" transform="translate(-8.11 -9.82)"/><path class="cls-2" d="M212.79,46.05v3.12c0,2.66-1.49,4.15-4.15,4.15H194V96.47c0,2.66-1.49,4.16-4.15,4.16h-4.57c-2.66,0-4.15-1.5-4.15-4.16V53.32h-14.6c-2.66,0-4.15-1.49-4.15-4.15V46.05c0-2.67,1.49-4.16,4.15-4.16h42.07C211.3,41.89,212.79,43.38,212.79,46.05Z" transform="translate(-8.11 -9.82)"/><path class="cls-2" d="M243,82.51l-19.11,2c1.63,5.06,5.74,6.86,11.75,6.86A44.75,44.75,0,0,0,246,89.92c2.94-.68,4.7.59,4.7,3.52V94.8a4.34,4.34,0,0,1-3.52,4.65,53.39,53.39,0,0,1-13.74,2c-13.69,0-22.86-7.46-22.86-23,0-14.68,7.77-23,22.95-23,12.74,0,20.29,6,20.29,17.26C253.77,79,251.1,81.65,243,82.51Zm-1.08-11c0-4.29-2.62-6.59-8.41-6.59-6.28,0-9.62,2.84-10.3,10.48l15.59-1.58C241.39,73.52,241.89,73,241.89,71.48Z" transform="translate(-8.11 -9.82)"/><path class="cls-2" d="M273.65,78.44c0,8.9,3.47,12.56,11.92,12.56a43.05,43.05,0,0,0,7.5-.72c2.89-.45,4.57.81,4.57,3.7v1.54c0,2.44-1.13,4.07-3.53,4.61a45.22,45.22,0,0,1-10.57,1.31c-13.33,0-22.64-7.5-22.64-23s9.31-23,22.64-23a45.22,45.22,0,0,1,10.57,1.31c2.4.54,3.53,2.17,3.53,4.61v1.53c0,2.9-2,4.07-5.38,3.53a47.54,47.54,0,0,0-6.69-.59C277.12,65.79,273.65,69.54,273.65,78.44Z" transform="translate(-8.11 -9.82)"/><path class="cls-2" d="M349.41,78.4V96.47c0,2.66-1.49,4.16-4.16,4.16H341c-2.67,0-4.16-1.5-4.16-4.16V78.4c0-9.58-3.52-12.47-12.29-12.47-1.94,0-4.16.13-6.69.31V96.47c0,2.66-1.49,4.16-4.15,4.16h-4.25c-2.67,0-4.16-1.5-4.16-4.16V41.53c0-2.67,1.49-4.16,4.16-4.16h4.25c2.66,0,4.15,1.49,4.15,4.16V55.67c2.17-.18,4.3-.27,6.28-.27C340,55.4,349.41,61.18,349.41,78.4Z" transform="translate(-8.11 -9.82)"/></svg>
                    <div class="mb-3 w-100 mt-3 ">
                      <input type="text" name="name" class="w-100 form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                      <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                    </div>
                    <div class="mb-3 w-100 ">
                        <input type="email" name="email" class="w-100 form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['email']; ?>" placeholder="Email">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                      </div>
                    <div class="mb-3 w-100">
                      <input type="password" name="password" class="w-100 form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" id="exampleInputPassword1" placeholder="Password">
                      <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="mb-3 w-100">
                        <input type="password" name="confirm_password" class="w-100 form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" value="<?php echo $data['confirm_password']; ?>" placeholder="Confirm Password">
                        <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                      </div>
                    <button type="submit" class="w-100 btn btn-Subscribe text-light">Sign Up</button>
                    <p class="text-light">Have an account? <a href="<?php echo URLROOT; ?>/users/login">Login</a></p>
                  </form>
            </div>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>