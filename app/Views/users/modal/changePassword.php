<div id="changePasswordModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <div class="modal-header justify-content-center border-bottom-0">
                <h5 class="modal-title font-weight-bold mb-0" id="myModalLabel">Change Password</h5>
            </div>
            <div class="modal-body text-center px-4 py-4">

                <style>
                    /* Minimal Modern Password Strength */
                    .password-checklist {
                        font-size: 0.85rem;
                        margin: 8px 0 0;
                        padding: 0;
                    }

                    .password-checklist li {
                        list-style: none;
                        display: none;
                        /* hidden until met */
                        align-items: center;
                        margin-bottom: 3px;
                        color: #777;
                        transition: 0.3s;
                    }

                    .password-checklist span {
                        width: 16px;
                        height: 16px;
                        border-radius: 50%;
                        background: #ccc;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 11px;
                        margin-right: 6px;
                        transition: background 0.3s, color 0.3s;
                    }

                    .password-checklist li.valid {
                        color: #28a745;
                    }

                    .password-checklist li.valid span {
                        background: #28a745;
                        color: #fff;
                    }

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
                        background: linear-gradient(90deg, red, orange, green);
                        transition: width 0.3s ease;
                    }
                </style>

                <form id="changePasswordForm">
                    <label class="font-weight-semibold mb-1">
                        <span class="text-danger">*</span> New Password
                    </label>
                    <input type="password" id="uPassword" name="uPassword" class="form-control rounded-pill text-center"
                        placeholder="Enter New Password" style="font-size:14px">

                    <div class="password-strength-bar gradient-innovation" id="strength-bar">
                        <div class="password-strength-fill" id="strength-fill"></div>
                    </div>

                    <ul class="password-checklist" id="checklist">
                        <li id="len"><span>•</span> At least 8 chars</li>
                        <li id="lower"><span>•</span> Lowercase</li>
                        <li id="upper"><span>•</span> Uppercase</li>
                        <li id="num"><span>•</span> Number</li>
                        <li id="special"><span>•</span> Special char</li>
                    </ul>

                    <button type="submit" class="btn btn-primary btn-block rounded-pill py-2 mt-2">
                        <i class="ti-save-alt mr-1"></i> Save Password
                    </button>
                </form>

                <script>
                    const pass = document.getElementById('uPassword'),
                        fill = document.getElementById('strength-fill'),
                        bar = document.getElementById('strength-bar'),
                        rules = {
                            len: v => v.length >= 8,
                            lower: v => /[a-z]/.test(v),
                            upper: v => /[A-Z]/.test(v),
                            num: v => /\d/.test(v),
                            special: v => /[\W_]/.test(v)
                        };

                    pass.addEventListener('input', () => {
                        let val = pass.value.trim();

                        // Show/hide strength bar
                        bar.style.display = val.length > 0 ? "block" : "none";

                        let score = 0;
                        Object.entries(rules).forEach(([id, fn]) => {
                            let item = document.getElementById(id);
                            if (fn(val)) {
                                item.style.display = "flex"; // show when met
                                item.classList.add('valid');
                                score++;
                            } else {
                                item.style.display = "none"; // hide if not met
                                item.classList.remove('valid');
                            }
                        });

                        fill.style.width = (score / 5 * 100) + '%';
                    });
                </script>
            </div>
        </div>
    </div>
</div>