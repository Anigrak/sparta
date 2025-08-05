
    <? include ('header.php')?>
    <script src="assets/js/auth.js"></script>
    <section class="login  back-bage">
        <div class="page_window">
            <div class="headform t-2 login ">SIGN IN</div><div class="headform t-3 register ">SIGN UP</div>
            <form class="content up">
                <div class="mb-3 form-row">
                    <input type="text" id="registration_form_name" name="registration_form[name]" required="required" placeholder="Username" class="field-text" autocomplete="off">
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <div class="mb-3 form-row">
                    <input type="email" id="registration_form_email" name="registration_form[email]" required="required" placeholder="Email" class="field-text" autocomplete="off">
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>

                <div class="mb-3 form-row">
                    <input type="password" id="registration_form_password_first" name="registration_form[password][first]" required="required" placeholder="Password" class="field-text" autocomplete="off">
                    <span class="password-toggle js-password-toggle"></span>
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <div class="mb-3 form-row">
                    <input type="password" id="registration_form_password_second" name="registration_form[password][second]" required="required" placeholder="Repeat password" class="field-text" autocomplete="off">
                    <span class="password-toggle js-password-toggle"></span>
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <div class="mb-3 form-row checkbox">
                    <input type="checkbox" id="registration_form_agreeTerms" name="registration_form[agreeTerms]" required="required" class="checkbox-input" value="1">
                    <label class="info-text2 required" for="registration_form_agreeTerms">
                        I agree... <a href="/privacy" class="underline" target="_blank">Privacy Policy</a>
                    </label>
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <button type="button" class="mb-3 btn btn-text1 js-register">SIGN UP</button>
                <input type="hidden" id="registration_form__token" name="registration_form[_token]" value="">
            </form>


            <form class="content in">
                <div class="mb-3 form-row">
                    <input type="email" id="login_form_email" name="login_form[email]" required="required" placeholder="Email" class="field-text" autocomplete="off">
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>

                <div class="mb-3 form-row">
                    <input type="password" id="login_form_password_first" name="login_form[password]" required="required" placeholder="Password" class="field-text" autocomplete="off">
                    <span class="password-toggle js-password-toggle"></span>
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <div class="mb-3 form-row checkbox">
                    <input type="checkbox" id="login_form_keep" name="login_form[keep]"  class="checkbox-input" value="1">
                    <label class="info-text2 required" for="login_form_keep">
                        Keep me logged in
                    </label>
                    <div class="info-text2 mt-1 error-detail js-error"></div>
                </div>
                <div class="mb-3 form-row forgot">
                    <div class="info-text2 mt-1">Forgot password</div>
                </div>
                <button type="button" class="mb-3 btn btn-text1 js-auth">SIGN IN</button>
                <input type="hidden" id="login_form__token" name="login_form[_token]" value="">
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
        <div class="page_window success-block error" id="link_expired" style="display: none">
            <h3 class="rederrortext">link expired</h3>
            <p>The link has expired. Request new one by signing in</p>
            <a href="/">
                <button type="button" class="mt-4 btn redbtn btn-text1">MAIN PAGE</button>
            </a>
        </div>
    </section>

    <? include ('footer.php')?>
