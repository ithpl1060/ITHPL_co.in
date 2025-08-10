<div id="changePasswordModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <div class="modal-header justify-content-center border-bottom-0">
                <h5 class="modal-title font-weight-bold mb-0" id="myModalLabel">Change Password</h5>
            </div>
            <div class="modal-body text-center px-4 py-4">

                <style>
                    /* ===== Password Strength Bar ===== */
                    .password-strength-bar {
                        height: 6px;
                        border-radius: 50px;
                        background: #eee;
                        overflow: hidden;
                        margin-top: 5px;
                        display: none;
                    }

                    .password-strength-fill {
                        height: 100%;
                        width: 0%;
                        background: var(--gradient, linear-gradient(90deg, red, orange, green));
                        transition: width 0.3s ease, background 0.3s ease;
                    }

                    .strength-text {
                        font-size: 0.75rem;
                        margin-top: 4px;
                        color: #555;
                    }

                    /* ===== Input Group Eye Icon ===== */
                    .input-group-text {
                        cursor: pointer;
                        background: #fff;
                        border-left: 0;
                    }

                    .input-group .form-control {
                        border-right: 0;
                    }
                </style>

                <form id="changePasswordForm">
                    <!-- New Password -->
                    <label class="font-weight-semibold mb-1">
                        <span class="text-danger">*</span> New Password
                    </label>
                    <div class="input-group">
                        <input type="password" id="uPassword" name="uPassword"
                            class="form-control rounded-left text-center" placeholder="Enter New Password"
                            style="font-size:14px">
                        <div class="input-group-append">
                            <span class="input-group-text" id="togglePass"><i class="ti-eye"></i></span>
                        </div>
                    </div>

                    <!-- Strength Bar -->
                    <div class="password-strength-bar gradient-innovation" id="strength-bar">
                        <div class="password-strength-fill" id="strength-fill"></div>
                    </div>
                    <div class="strength-text" id="strength-text"></div>

                    <!-- Confirm Password -->
                    <label class="font-weight-semibold mb-1 mt-3">
                        <span class="text-danger">*</span> Confirm Password
                    </label>
                    <div class="input-group">
                        <input type="password" id="uConfirmPassword" name="uConfirmPassword"
                            class="form-control rounded-left text-center" placeholder="Confirm New Password"
                            style="font-size:14px">
                        <div class="input-group-append">
                            <span class="input-group-text" id="toggleConfirm"><i class="ti-eye"></i></span>
                        </div>
                    </div>

                    <!-- Confirm password match message -->
                    <small id="matchMessage" style="display:none;" class="text-danger">Passwords do not match</small>

                    <button type="submit" class="btn btn-primary btn-block rounded-pill py-2 mt-3">
                        <i class="ti-save-alt mr-1"></i> Save Password
                    </button>
                </form>

                <script>
                    const pass = document.getElementById('uPassword'),
                        confirmPass = document.getElementById('uConfirmPassword'),
                        fill = document.getElementById('strength-fill'),
                        bar = document.getElementById('strength-bar'),
                        text = document.getElementById('strength-text'),
                        matchMsg = document.getElementById('matchMessage');

                    // Strength rules (no checklist UI)
                    const rules = {
                        len: v => v.length >= 8,
                        lower: v => /[a-z]/.test(v),
                        upper: v => /[A-Z]/.test(v),
                        num: v => /\d/.test(v),
                        special: v => /[\W_]/.test(v)
                    };

                    // Password strength check
                    pass.addEventListener('input', () => {
                        let val = pass.value.trim();
                        bar.style.display = val ? "block" : "none";

                        let score = Object.values(rules).reduce((acc, fn) => acc + (fn(val) ? 1 : 0), 0);

                        const percent = score / 5 * 100;
                        fill.style.width = percent + '%';

                        // Dynamic color change
                        if (score <= 2) {
                            fill.style.background = "red";
                            text.textContent = "Weak";
                        } else if (score <= 4) {
                            fill.style.background = "orange";
                            text.textContent = "Medium";
                        } else {
                            fill.style.background = "green";
                            text.textContent = "Strong";
                        }

                        checkMatch();
                    });

                    // Confirm password match check
                    confirmPass.addEventListener('input', checkMatch);
                    function checkMatch() {
                        matchMsg.style.display = (confirmPass.value && pass.value !== confirmPass.value) ? "block" : "none";
                    }

                    // Show password while holding mouse button
                    function holdToShow(input, toggleId) {
                        const toggle = document.getElementById(toggleId);
                        const icon = toggle.querySelector('i');

                        toggle.addEventListener('mousedown', () => {
                            input.type = 'text';
                            icon.classList.replace('ti-eye', 'ti-eye-off');
                        });

                        ['mouseup', 'mouseleave'].forEach(evt => {
                            toggle.addEventListener(evt, () => {
                                input.type = 'password';
                                icon.classList.replace('ti-eye-off', 'ti-eye');
                            });
                        });
                    }

                    holdToShow(pass, 'togglePass');
                    holdToShow(confirmPass, 'toggleConfirm');
                </script>


            </div>
        </div>
    </div>
</div>