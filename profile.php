
<? include ('header.php')?>
<script src="assets/js/profile.js"></script>
<section class="profile back-bage">
    <div class="page_window_profile profile_window" >
        <div class="profile_window">
            <h3>ivan_techno2001</h3>
            <p>ivantechno@gmail.com</p>
            <ul class="button-text">
                <li class="btn btn-gray "><a href="mygames.php">My Games</a></li>
                <li class="btn btn-gray "><a href="" >support</a></li>
                <li class="menu_separator"></li>
                <li class="btn btn-gray js-mail">change email</li>
                <li class="btn btn-gray js-pass">change password</li>
                <li class="menu_separator"></li>
                <li class="btn btn-gray2"><a href="">Sign out</a></li>

            </ul>

        </div>
    </div>
    <div class="page_window success-block password-div js-hide" style="display: none">
        <h3>Change password</h3>
        <form class="content in">
            <div class="mb-2 form-row">
                <input type="password" id="change_form_password_old" name="change_form[password][old]" required="required" placeholder="Current password" class="field-text" autocomplete="off">
                <span class="password-toggle js-password-toggle"></span>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <div class="mb-2 form-row">
                <input type="password" id="change_form_password_first" name="change_form[password][first]" required="required" placeholder="New password" class="field-text" autocomplete="off">
                <span class="password-toggle js-password-toggle"></span>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <div class="mb-3 form-row">
                <input type="password" id="change_form_password_second" name="change_form[password][second]" required="required" placeholder="Repeat password" class="field-text" autocomplete="off">
                <span class="password-toggle js-password-toggle"></span>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <button type="button" class="mb-2 btn redbtn btn-text1 js-change-password">CHANGE</button>
            <button type="button" class="mb-2 btn btn-text1 js-back btn_back">BACK</button>
            <input type="hidden" id="change_form__token" name="change_form[_token]" value="">
        </form>
    </div>
    <div class="page_window success-block email-div js-hide" style="display: none">
        <h3>Change email</h3>
        <form class="content in">
            <div class="mb-3 form-row">
                <input type="text" id="change_email_form" name="change_email_form[email]" required="required" placeholder="New Email" class="field-text" autocomplete="off">
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <button type="button" class="mb-2 btn redbtn btn-text1 js-change-email">CHANGE</button>
            <input type="hidden" id="change_email_form__token" name="change_email_form[_token]" value="">
        </form>
    </div>
    <div class="page_window  success success-block" style="display: none">
        <a href="" class="back-box__icon"></a><h3>Check your email</h3>
        <p>An email with account activation link has been sent to your email address. Please, check your mailbox. If not received, check the spam folder</p>
        <p class="counter"><span style="opacity:0.5">Send again in</span> <span id="countdown">1:30</span></p>
        <a href="/">
            <button type="button" class="mt-4 btn btn-text1 js-send-verify disabled" disabled>RESEND</button>
        </a>
    </div>
    <div class="page_window success-block error" id="error_occurred" style="display: none">
        <h3 class="rederrortext">error occurred</h3>
        <p>An error occurred while changing the e-mail address</p>
        <p style="opacity:0.5">If the issue is still occurring, please contact us via the support form</p>
        <a href="/">
            <button type="button" class="mt-4 btn btn-text1">RETRY</button>
        </a>
    </div>
</section>
<? include ('footer.php')?>
