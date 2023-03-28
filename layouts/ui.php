<div class="blur" id="ui" style="display: none">
    <div class="ui" id="ui-main">

        <div id="register" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Reģistrācija</h1>

            <div class="ui-buttons">
                <button class="ui-btn" onclick="switchto('login');">Pieslēgties</button>
                <button class="ui-btn active-ui-btn" style="margin-left: 15px">Reģistrācija</button>
            </div>

            <form action="#">

            <div class="input-select ui-input">
                <input type="text" placeholder="Vārds" name="name">
            </div>

            <div class="input-select ui-input">
                <input type="email" placeholder="E-Pasts" name="email">
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 15px">
                <label>+371</label>
                <div class="input-select ui-input" style="margin-bottom: 0; margin-left: 15px">
                    <input type="tel" placeholder="Tālrunis" name="phone">
                </div>
            </div>

            <div class="input-select ui-input">
                <input type="password" placeholder="Parole" name="password">
            </div>

            <div class="input-select ui-input">
                <input type="password" placeholder="Vēlreiz Ievadiet Parole" name="password_again">
            </div>

            <div class="ui-whatsapp">
                <input type="checkbox" name="whatsapp">
                <span>Vai Jums ir WhatsApp?</span>
            </div>

            <div style="text-align: center">
                <button class="ui-btn-submit">Reģistrācija</button>
            </div>

            </form>

        </div>

        <div id="login" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Pieslēgties</h1>

            <div class="ui-buttons">
                <button class="ui-btn active-ui-btn">Pieslēgties</button>
                <button class="ui-btn" style="margin-left: 15px" onclick="switchto('register');">Reģistrācija</button>
            </div>

            <form action="#">

                <div class="input-select ui-input">
                    <input type="email" placeholder="E-Pasts" name="name">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Parole" name="password">
                </div>

                <div class="forgot-password">
                    <span onclick="switchto('forgot-password');">Aizmirsāt savu paroli?</span>
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit">Pieslēgties</button>
                </div>

            </form>

        </div>

        <div id="forgot-password" class="ui-section" style="display: none">

            <div class="ui-logo">

                <img class="ui-head-btn" src="ico/arrow-back.svg" onclick="switchto('login');">

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <p style="margin-bottom: 15px">... Ievadiet savu e-pastu un jauno paroli, uz kuru vēlaties mainīt, pēc tam saņemsiet saiti uz savu e-pastu, lai izmantotu jauno paroli ...</p>

            <form action="#">

                <div class="input-select ui-input">
                    <input type="email" placeholder="E-Pasts" name="email">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Jauna parole" name="new_password">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Vēlreiz Jauna parole" name="new_password_again">
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit">Sūtīt ziņu</button>
                </div>

            </form>

        </div>

        <div id="profile" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Jūsu Profils</h1>

            <div class="ui-buttons">
                <button class="ui-btn active-ui-btn">Jūsu Profils</button>
                <button class="ui-btn" style="margin-left: 15px" onclick="switchto('my-cars');">Manas Mašīnas</button>
            </div>

            <form action="#">

                <div class="ui-profile">
                    <img class="profile-img" src="ico/profile2.jpg">

                    <div class="file-upload">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                </div>

                <div class="input-select ui-input">
                    <input type="text" placeholder="Vārds" name="name" value="Oļegs">
                </div>

                <div style="display: flex; align-items: center; margin-bottom: 15px">
                    <label>+371</label>
                    <div class="input-select ui-input" style="margin-bottom: 0; margin-left: 15px">
                        <input type="tel" placeholder="Tālrunis" name="phone" value="23456789">
                    </div>
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit">Saglabāt</button>
                </div>

            </form>

        </div>

        <div id="my-cars" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Manas Mašīnas</h1>

            <div class="ui-buttons">
                <button class="ui-btn" onclick="switchto('profile');">Jūsu Profils</button>
                <button class="ui-btn active-ui-btn" style="margin-left: 15px">Manas Mašīnas</button>
            </div>

        </div>

    </div>
</div>