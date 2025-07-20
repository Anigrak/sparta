
<? include ('header.php')?>

<section class="support  back-bage">
    <div class="page_window support_window">
        <div class="headform  t-4 gray1">CONTACT US</div>
        <form class="content">
            <input type="hidden" id="support_form_theme" name="support_form[theme]">
            <input type="hidden" id="support_form_sub_theme_1" name="support_form[sub_theme_1]">
            <input type="hidden" id="support_form_sub_theme_2" name="support_form[sub_theme_2]">
            <input type="hidden" id="support_form_sub_theme_3" name="support_form[sub_theme_3]">
            <input type="hidden" id="support_form_sub_theme_4" name="support_form[sub_theme_4]">
            <div class="mb-3 form-row">
                <input type="text" id="support_form_email" name="support_form[name]" required="required" placeholder="Name" class="field-text" autocomplete="off">
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <div class="mb-3 form-row">
                <div class="select-box">
                    <div class="select-box__current" tabindex="1">
                        <div class="select-box__value placeholder-value">
                            <input class="select-box__input" type="radio" id="theme-no" name="support_form[theme]" checked="">
                            <p class="select-box__input-text">Subject</p>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="theme1" value="1" name="support_form[theme]">
                            <p class="select-box__input-text">Theme</p>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="theme2" value="2" name="support_form[theme]">
                            <p class="select-box__input-text">Theme</p>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="theme3" value="3" name="support_form[theme]">
                            <p class="select-box__input-text">Theme</p>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="theme4" value="4" name="support_form[theme]">
                            <p class="select-box__input-text">Theme</p>
                        </div>
                        <img class="select-box__icon" src="assets/img/select_arrow.png" aria-hidden="true">
                        <ul class="select-box__list">
                            <li>
                                <label class="select-box__option" for="theme1" aria-hidden="aria-hidden">Theme</label>
                            </li>
                            <li>
                                <label class="select-box__option" for="theme2" aria-hidden="aria-hidden">Theme</label>
                            </li>
                            <li>
                                <label class="select-box__option" for="theme3" aria-hidden="aria-hidden">Theme</label>
                            </li>
                            <li>
                                <label class="select-box__option" for="theme4" aria-hidden="aria-hidden">Theme</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <div id="subThemeContainer" class="mb-3 form-row" style="display: none;">
                <div class="js-sub-containers" data-theme="1">
                    <div class="select-box">
                        <div class="select-box__current" tabindex="2">
                            <div class="select-box__value placeholder-value">
                                <input class="select-box__input" type="radio" id="sub_theme_1-no" value="0" name="support_form[sub_theme_1]" checked="">
                                <p class="select-box__input-text">Topic</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme1_1" value="1" name="support_form[sub_theme_1]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme1_2" value="2" name="support_form[sub_theme_1]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme1_3" value="3" name="support_form[sub_theme_1]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme1_4" value="4" name="support_form[sub_theme_1]">
                                <p class="select-box__input-text">Не работает игра на другом устройстве</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme1_5" value="5" name="support_form[sub_theme_1]">
                                <p class="select-box__input-text">Баги в игре</p>
                            </div>
                            <img class="select-box__icon" src="assets/img/select_arrow.png" aria-hidden="true">
                            <ul class="select-box__list">
                                <li>
                                    <label class="select-box__option" for="subTheme1_1" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme1_2" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme1_3" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme1_4" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme1_5" aria-hidden="aria-hidden">Theme</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-sub-containers" data-theme="2">
                    <div class="select-box">
                        <div class="select-box__current" tabindex="2">
                            <div class="select-box__value placeholder-value">
                                <input class="select-box__input" type="radio" id="sub_theme_2-no" value="0" name="support_form[sub_theme_2]" checked="">
                                <p class="select-box__input-text">Topic</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme2_1" value="1" name="support_form[sub_theme_2]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme2_2" value="2" name="support_form[sub_theme_2]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <img class="select-box__icon" src="assets/img/select_arrow.png" aria-hidden="true">
                            <ul class="select-box__list">
                                <li>
                                    <label class="select-box__option" for="subTheme2_1" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme2_2" aria-hidden="aria-hidden">Theme</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-sub-containers" data-theme="3">
                    <div class="select-box">
                        <div class="select-box__current" tabindex="2">
                            <div class="select-box__value placeholder-value">
                                <input class="select-box__input" type="radio" id="sub_theme_3-no" value="0" name="support_form[sub_theme_3]" checked="">
                                <p class="select-box__input-text">Topic</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme3_1" value="1" name="support_form[sub_theme_3]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme3_2" value="2" name="support_form[sub_theme_3]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <img class="select-box__icon" src="assets/img/select_arrow.png" aria-hidden="true">
                            <ul class="select-box__list">
                                <li>
                                    <label class="select-box__option" for="subTheme3_1" aria-hidden="aria-hidden">Theme</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="subTheme3_2" aria-hidden="aria-hidden">Theme</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-sub-containers" data-theme="4">
                    <div class="select-box">
                        <div class="select-box__current" tabindex="2">
                            <div class="select-box__value placeholder-value">
                                <input class="select-box__input" type="radio" id="sub_theme_4-no" value="0" name="support_form[sub_theme_4]" checked="">
                                <p class="select-box__input-text">Topic</p>
                            </div>
                            <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="subTheme4_1" value="1" name="support_form[sub_theme_4]">
                                <p class="select-box__input-text">Theme</p>
                            </div>
                            <img class="select-box__icon" src="assets/img/select_arrow.png" aria-hidden="true">
                            <ul class="select-box__list">
                                <li>
                                    <label class="select-box__option" for="subTheme4_1" aria-hidden="aria-hidden">Theme</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>

            <div class="mb-3 form-row">
                <textarea id="support_form_message" name="support_form[message]" required="required" placeholder="Tell us what's wrong" class="field-text js-no-submit" autocomplete="off"></textarea>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <div class="mb-3 form-row checkbox">
                <input type="checkbox" id="support_form_agreeTerms" name="support_form[agreeTerms]" required="required" class="checkbox-input" value="1">
                <label class="info-text2 required" for="support_form_agreeTerms">I agree... <a href="/privacy" class="underline" target="_blank">Privacy Policy</a></label>
                <div class="info-text2 mt-1 error-detail js-error"></div>
            </div>
            <button type="button" class="mb-3 btn  redbtn btn-text1 js-send">SEND</button>
            <input type="hidden" id="support_form__token" name="support_form[_token]" value=""></form>
    </div>
    <div class="page_window success-block" style="display: none">
        <h3>Email sent</h3>
        <p>Check your mailbox. If not received, check the spam folder</p>
        <a href="/">
            <button type="button" class="mt-4 btn redbtn btn-text1">BACK TO PROFILE</button>
        </a>
    </div>
    <div class="page_window success-block not-success" style="display: none">
        <h3>error occurred</h3>
        <p>An error occurred while changing the e-mail address</p>
        <p style="opacity:0.5">If the issue is still occurring, please contact us via the support form</p>
        <a href="/">
            <button type="button" class="mt-4 btn btn-text1">RETRY</button>
        </a>
    </div>

</section>

<? include ('footer.php')?>
