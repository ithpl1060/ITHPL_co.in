<?php
/**
 * Universal Apple Product Buy Now Modal
 * Shared across: Mac Studio, Mac Mini, iPhone 18 Pro, Apple Watch Ultra, Apple Watch Series 12, Apple AirPods
 *
 * Usage on each product page:
 *   <?php include_once APPPATH . 'Views/ui/appleProducts/partials/apple_buy_modal.php'; ?>
 *
 * Trigger button attributes:
 *   class="trigger-buy-modal"
 *   data-product-key="mac_studio"   <- mac_studio | mac_mini | iphone_18_pro | apple_watch_ultra | apple_watch_series_12 | apple_airpods
 *   data-preset-chip="m2ultra"      <- (optional) pre-select a chip
 */
?>

<!-- ============================================================
     ITHPL UNIVERSAL APPLE B2B BUY NOW MODAL
     ============================================================ -->
<div id="buy-configurator-modal"
  class="fixed inset-0 z-[200] bg-black/70 backdrop-blur-md flex items-end sm:items-center justify-center p-0 sm:p-4 hidden">
  <div id="buy-modal-card"
    class="bg-white rounded-t-[26px] sm:rounded-[24px] w-full max-w-2xl max-h-[88vh] sm:max-h-[84vh] flex flex-col overflow-hidden shadow-2xl border border-black/[0.07] relative">

    <!-- Mobile drag handle -->
    <div class="w-10 h-1 bg-gray-300 rounded-full mx-auto mt-3 mb-0.5 sm:hidden shrink-0 cursor-pointer"
      onclick="document.getElementById('close-buy-modal')?.click()"></div>

    <!-- Close button -->
    <button id="close-buy-modal" type="button"
      class="absolute top-3.5 right-3.5 sm:top-4 sm:right-4 z-20 text-gray-400 hover:text-gray-800 bg-[#f5f5f7] hover:bg-[#e8e8ed] w-8 h-8 rounded-full flex items-center justify-center transition-all cursor-pointer"
      aria-label="Close">
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <!-- Scrollable inner body -->
    <div class="overflow-y-auto flex-1 touch-scroll px-4 sm:px-6 pb-6 pt-3">

      <!-- FORM VIEW -->
      <div id="b2b-preorder-form-container">

        <!-- Header -->
        <div class="text-center mb-4 pt-1">
          <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#f5f5f7] border border-black/[0.06] text-[10px] font-semibold mb-2">
            <svg class="w-3 h-3" viewBox="0 0 384 512" fill="currentColor">
              <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            <span>Apple Business Partner</span>
            <span class="w-1 h-1 rounded-full bg-gray-400"></span>
            <span class="text-blue-600">Corporate Desk</span>
          </div>
          <h3 id="modal-product-title" class="text-lg sm:text-xl font-extrabold tracking-tight text-[#1d1d1f]">Buy Apple Product</h3>
          <p class="text-[11px] text-[#6e6e73] mt-1 max-w-sm mx-auto leading-snug">
            Configure specs and request a corporate quotation with 18% GST Input Tax Credit.
          </p>
          <!-- 2-Stage Stepper -->
          <div class="inline-flex items-center bg-[#f5f5f7] p-[3px] rounded-xl max-w-[250px] w-full mx-auto mt-3 border border-black/[0.04]">
            <button type="button" id="step-tab-1"
              class="flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold bg-white text-[#1d1d1f] shadow-sm transition-all cursor-pointer">
              <span id="step-badge-1" class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center text-[9px] font-bold">1</span>
              Specifications
            </button>
            <button type="button" id="step-tab-2"
              class="flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold text-[#86868b] hover:text-[#1d1d1f] transition-all cursor-pointer">
              <span id="step-badge-2" class="w-4 h-4 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-[9px] font-bold">2</span>
              Your Details
            </button>
          </div>
        </div>

        <form id="b2b-preorder-form" novalidate>

          <!-- STAGE 1 -->
          <div id="form-stage-1" class="space-y-3.5">

            <!-- Processor -->
            <div>
              <div class="flex items-center justify-between mb-1.5">
                <label class="text-[10px] font-bold text-[#1d1d1f] uppercase tracking-wider">1. Processor</label>
                <span id="chip-series-label" class="text-[10px] text-blue-600 font-medium"></span>
              </div>
              <div id="chip-options-container" class="grid grid-cols-1 sm:grid-cols-2 gap-2"></div>
            </div>

            <!-- Memory -->
            <div>
              <div class="flex items-center justify-between mb-1.5">
                <label class="text-[10px] font-bold text-[#1d1d1f] uppercase tracking-wider">2. Unified Memory</label>
                <span id="memory-bandwidth-label" class="text-[10px] text-gray-500"></span>
              </div>
              <div id="memory-options-container" class="grid grid-cols-3 gap-2"></div>
            </div>

            <!-- Storage -->
            <div>
              <div class="flex items-center justify-between mb-1.5">
                <label class="text-[10px] font-bold text-[#1d1d1f] uppercase tracking-wider">3. Storage</label>
                <span class="text-[10px] text-gray-500">NVMe SSD</span>
              </div>
              <div id="storage-options-container" class="grid grid-cols-4 gap-2"></div>
            </div>

            <!-- Summary pill -->
            <div class="bg-[#f5f5f7] rounded-xl px-3 py-2.5 flex items-center gap-2">
              <svg class="w-3.5 h-3.5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <p id="config-summary-text" class="text-[11px] text-[#1d1d1f] font-medium"></p>
            </div>

            <!-- Next -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 pt-1">
              <span class="text-[10px] text-gray-400 flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>Step 1 of 2
              </span>
              <button type="button" id="stage-1-next-btn"
                class="w-full sm:w-auto bg-[#0071e3] hover:bg-[#0077ed] text-white font-semibold h-10 px-6 rounded-full text-[11px] shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer">
                Continue to Your Details
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- STAGE 2 -->
          <div id="form-stage-2" class="space-y-3 hidden">

            <!-- Specs recap -->
            <div class="bg-[#f5f5f7] rounded-xl px-3 py-2.5 flex items-start justify-between gap-2">
              <div>
                <p class="text-[9px] text-gray-400 uppercase tracking-wider font-semibold">Your Configuration</p>
                <p id="stage-2-spec-summary" class="text-[11px] text-[#1d1d1f] font-semibold mt-0.5"></p>
              </div>
              <button type="button" id="stage-2-edit-specs-btn"
                class="text-[10px] text-blue-600 hover:text-blue-800 font-medium whitespace-nowrap cursor-pointer">Edit</button>
            </div>

            <!-- Full Name -->
            <div>
              <label for="b2b-full-name" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">Full Name *</label>
              <input type="text" id="b2b-full-name" placeholder="Contact person's full name" class="ithpl-input w-full" autocomplete="name">
              <span id="err-full-name" class="field-error-msg hidden">Please enter your full name</span>
            </div>

            <!-- Work Email -->
            <div>
              <label for="b2b-work-email" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">Work Email *</label>
              <input type="email" id="b2b-work-email" placeholder="name@company.com" class="ithpl-input w-full" autocomplete="email">
              <span id="err-work-email" class="field-error-msg hidden">Please enter a valid work email</span>
            </div>

            <!-- Phone + Fleet row -->
            <div class="grid grid-cols-2 gap-2.5">
              <div>
                <label for="b2b-phone" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">Phone *</label>
                <input type="tel" id="b2b-phone" placeholder="+91 XXXXX XXXXX" class="ithpl-input w-full" autocomplete="tel">
                <span id="err-phone" class="field-error-msg hidden">Enter a valid phone</span>
              </div>
              <div>
                <label for="b2b-fleet-units" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">Fleet Qty</label>
                <select id="b2b-fleet-units" class="ithpl-input w-full">
                  <option value="1-5">1 – 5 units</option>
                  <option value="6-25">6 – 25 units</option>
                  <option value="26-100">26 – 100 units</option>
                  <option value="100+">100+ units</option>
                </select>
              </div>
            </div>

            <!-- Company + City row -->
            <div class="grid grid-cols-2 gap-2.5">
              <div>
                <label for="b2b-company" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">Company *</label>
                <input type="text" id="b2b-company" placeholder="Organization name" class="ithpl-input w-full" autocomplete="organization">
                <span id="err-company" class="field-error-msg hidden">Enter company name</span>
              </div>
              <div>
                <label for="b2b-city" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">City & State *</label>
                <input type="text" id="b2b-city" placeholder="Mumbai, MH" class="ithpl-input w-full">
                <span id="err-city" class="field-error-msg hidden">Enter city & state</span>
              </div>
            </div>

            <!-- GSTIN -->
            <div>
              <label for="b2b-gstin" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">
                GSTIN <span class="text-gray-400 font-normal">(Optional — for GST invoice)</span>
              </label>
              <input type="text" id="b2b-gstin" maxlength="15" placeholder="27AAAAA0000A1Z5"
                class="ithpl-input w-full uppercase" autocomplete="off">
              <span id="err-gstin" class="field-error-msg hidden">Invalid GSTIN (15-char format)</span>
            </div>

            <!-- Deployment tags -->
            <div>
              <p class="text-[10px] font-semibold text-[#1d1d1f] mb-1.5">
                Deployment Services <span class="text-gray-400 font-normal">(select all that apply)</span>
              </p>
              <div class="flex flex-wrap gap-1.5">
                <button type="button" class="pref-tag-btn" data-tag="Apple Business Manager (MDM)"><span>+</span> ABM / MDM</button>
                <button type="button" class="pref-tag-btn" data-tag="AppleCare+ for Enterprise (3 Years)"><span>+</span> AppleCare+ Enterprise</button>
                <button type="button" class="pref-tag-btn" data-tag="Volume Licensing"><span>+</span> Volume Licensing</button>
                <button type="button" class="pref-tag-btn" data-tag="Same-Day Onsite Setup"><span>+</span> Onsite Setup</button>
                <button type="button" class="pref-tag-btn" data-tag="Priority Shipment"><span>+</span> Priority Ship</button>
              </div>
            </div>

            <!-- Notes -->
            <div>
              <label for="b2b-notes" class="block text-[10px] font-semibold text-[#1d1d1f] mb-1">
                Requirements <span class="text-gray-400 font-normal">(optional)</span>
              </label>
              <textarea id="b2b-notes" rows="2" placeholder="Custom software image, delivery timeline, VLAN config…"
                class="ithpl-input w-full resize-none"></textarea>
            </div>

            <!-- Notice -->
            <p class="text-[10px] text-gray-400 leading-relaxed border-t border-gray-100 pt-2">
              You'll receive an official quotation with 18% GST ITC, volume pricing, and dedicated Apple Account Specialist within 2 business hours.
            </p>

            <!-- Stage 2 actions -->
            <div class="flex flex-col sm:flex-row gap-2 pt-0.5">
              <button type="button" id="stage-2-prev-btn"
                class="flex items-center justify-center gap-1.5 h-10 px-4 rounded-full text-[11px] font-semibold border border-gray-200 text-gray-600 hover:border-gray-400 hover:text-gray-900 transition-all cursor-pointer">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back
              </button>
              <button type="submit" id="submit-preorder-btn"
                class="flex-1 bg-[#0071e3] hover:bg-[#0077ed] text-white font-semibold h-10 px-6 rounded-full text-[11px] shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer">
                <span>Submit Corporate Buy Order</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </div>
          </div>

        </form>
      </div><!-- /form container -->

      <!-- SUCCESS VIEW -->
      <div id="b2b-preorder-success" class="hidden py-6 text-center">
        <div class="w-14 h-14 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-3">
          <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <h3 class="text-lg font-extrabold text-[#1d1d1f]">Buy Order Confirmed!</h3>
        <p class="text-[11px] text-gray-500 mt-1 mb-4">Our specialist contacts you within 2 business hours.</p>

        <div class="bg-[#f5f5f7] rounded-2xl p-4 text-left space-y-2.5 max-w-sm mx-auto">
          <div class="flex items-center justify-between">
            <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Reference ID</span>
            <div class="flex items-center gap-2">
              <span id="success-ref-id" class="text-[11px] font-bold font-mono text-[#1d1d1f]"></span>
              <button id="copy-ref-id-btn"
                class="flex items-center gap-1 text-[10px] text-blue-600 border border-blue-200 rounded-full px-2 py-0.5 hover:bg-blue-50 transition-colors cursor-pointer">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                <span id="copy-ref-label">Copy ID</span>
              </button>
            </div>
          </div>
          <div class="flex justify-between text-[11px]">
            <span class="text-gray-400">Company</span>
            <span id="success-company" class="font-semibold text-[#1d1d1f] text-right max-w-[180px] truncate"></span>
          </div>
          <div class="flex justify-between text-[11px]">
            <span class="text-gray-400">Contact</span>
            <span id="success-name" class="font-semibold text-[#1d1d1f]"></span>
          </div>
          <div class="flex justify-between text-[11px]">
            <span class="text-gray-400">Fleet</span>
            <span id="success-units" class="font-semibold text-[#1d1d1f]"></span>
          </div>
          <div class="pt-2 border-t border-gray-200">
            <p class="text-[10px] text-gray-400">Configuration</p>
            <p id="success-specs" class="text-[11px] font-medium text-[#1d1d1f] mt-0.5"></p>
          </div>
        </div>

        <p class="text-[10px] text-gray-400 mt-3 max-w-xs mx-auto">Confirmation email with GST quotation and volume pricing will be sent shortly.</p>
        <button type="button" onclick="document.getElementById('close-buy-modal').click()"
          class="mt-3 text-[11px] text-blue-600 hover:text-blue-800 font-medium cursor-pointer transition-colors">
          Close &amp; Continue Browsing →
        </button>
      </div>

    </div><!-- /touch-scroll -->
  </div><!-- /modal card -->
</div><!-- /modal overlay -->


<!-- ============================================================
     UNIVERSAL MODAL STYLES
     ============================================================ -->
<style>
  .ithpl-input {
    display: block;
    width: 100%;
    height: 36px;
    padding: 0 11px;
    background: #fff;
    border: 1.5px solid #d2d2d7;
    border-radius: 10px;
    font-size: 11px;
    color: #1d1d1f;
    transition: border-color .2s, box-shadow .2s;
    outline: none;
    font-family: inherit;
    -webkit-appearance: none;
  }
  textarea.ithpl-input { height: auto; padding: 8px 11px; }
  .ithpl-input:focus { border-color: #0071e3; box-shadow: 0 0 0 3px rgba(0,113,227,.12); }
  .ithpl-input.input-error-state { border-color: #e02424; box-shadow: 0 0 0 3px rgba(224,36,36,.1); }
  select.ithpl-input {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23888' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    padding-right: 28px;
  }
/* Self-contained modal layout (works with or without Tailwind) */
  #buy-configurator-modal.hidden { display: none !important; }
  #buy-configurator-modal:not(.hidden) {
    display: flex !important;
    position: fixed !important;
    top: 0 !important; right: 0 !important; bottom: 0 !important; left: 0 !important;
    z-index: 999999 !important;
    background: rgba(0, 0, 0, 0.72) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 12px !important;
    box-sizing: border-box !important;
  }
  #buy-modal-card {
    background: #fff !important;
    width: 100% !important;
    max-width: 680px !important;
    max-height: 88vh !important;
    display: flex !important;
    flex-direction: column !important;
    border-radius: 24px !important;
    overflow: hidden !important;
    box-shadow: 0 25px 60px -10px rgba(0,0,0,0.35) !important;
    position: relative !important;
    box-sizing: border-box !important;
    font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Segoe UI", Roboto, sans-serif !important;
  }

  /* Spec radio cards */
  .spec-radio-card {
    border: 1.5px solid #e5e5ea !important;
    background: #fff !important;
    border-radius: 12px !important;
    padding: 10px 12px !important;
    cursor: pointer !important;
    transition: border-color .2s, box-shadow .2s, background .2s !important;
    position: relative !important;
    text-align: center !important;
    box-sizing: border-box !important;
    box-shadow: none !important;
  }
  .spec-radio-card.chip-card { text-align: left !important; padding: 12px 14px !important; border-radius: 14px !important; }
  .spec-radio-card:hover { border-color: #bbb !important; }

  /* Selected Card State */
  .spec-radio-card.is-selected,
  .spec-radio-card:has(input[type="radio"]:checked) {
    border-color: #0071e3 !important;
    background: rgba(0,113,227,.05) !important;
    box-shadow: 0 0 0 1px #0071e3 inset !important;
  }

  /* Check dot — hidden by default, visible only when selected/checked */
  .radio-check-dot {
    position: absolute !important;
    top: 8px !important; right: 8px !important;
    width: 16px !important; height: 16px !important;
    border-radius: 50% !important;
    background: #0071e3 !important;
    color: #fff !important;
    font-size: 9px !important; font-weight: 700 !important;
    display: flex !important; align-items: center !important; justify-content: center !important;
    opacity: 0 !important;
    transform: scale(.5) !important;
    transition: opacity .18s, transform .18s cubic-bezier(.16,1,.3,1) !important;
    pointer-events: none !important;
  }
  .spec-radio-card.is-selected .radio-check-dot,
  .spec-radio-card:has(input[type="radio"]:checked) .radio-check-dot {
    opacity: 1 !important;
    transform: scale(1) !important;
  }

  /* Unselected Card State (Strict Reset) */
  .spec-radio-card:not(.is-selected):not(:has(input[type="radio"]:checked)) {
    border-color: #e5e5ea !important;
    background: #fff !important;
    box-shadow: none !important;
  }
  .spec-radio-card:not(.is-selected):not(:has(input[type="radio"]:checked)) .radio-check-dot {
    opacity: 0 !important;
    transform: scale(.5) !important;
  }
  /* Tag buttons */
  .pref-tag-btn {
    font-size: 10px; font-weight: 500;
    padding: 4px 10px;
    border-radius: 9999px;
    background: #f5f5f7;
    border: 1px solid rgba(0,0,0,.06);
    color: #1d1d1f;
    transition: all .2s;
    cursor: pointer;
    line-height: 1.4;
  }
  .pref-tag-btn:hover { background: #e8e8ed; }
  .pref-tag-btn.is-active { background: #0071e3 !important; color: #fff !important; border-color: #0071e3 !important; }
  /* Error messages */
  .field-error-msg { font-size: 10px; color: #e02424; margin-top: 3px; display: block; }
  /* Scrollbar */
  .touch-scroll { -webkit-overflow-scrolling: touch; scrollbar-width: thin; scrollbar-color: rgba(0,0,0,.12) transparent; }
  .touch-scroll::-webkit-scrollbar { width: 4px; }
  .touch-scroll::-webkit-scrollbar-thumb { background: rgba(0,0,0,.12); border-radius: 4px; }
  /* Nudge animation */
  @keyframes modal-nudge { 0%{transform:scale(1)} 33%{transform:scale(1.012)} 66%{transform:scale(.992)} 100%{transform:scale(1)} }
  .animate-modal-nudge { animation: modal-nudge .32s cubic-bezier(.16,1,.3,1); }
</style>


<!-- ============================================================
     UNIVERSAL MODAL JS
     ============================================================ -->
<script>
(function () {
  /* ── Server submit URL ── */
  const APPLE_LEAD_SUBMIT_URL = '<?= base_url("apple-leads/submit") ?>';
  /* ── Product catalogue ── */
  const PRODUCTS = {
    mac_studio: {
      title: 'Buy Mac Studio',
      chipSeries: 'Apple Silicon M5 Max & M5 Ultra',
      memBW: '614 GB/s – 1.2 TB/s',
      chips: [
        { v:'m5max',   l:'Apple M5 Max',   badge:'Pro Studio',   bc:'text-blue-700 bg-blue-50',
          desc:'18-core CPU · Up to 40-core GPU · 614 GB/s', sub:'Up to 128GB unified memory · 16-core Neural Engine' },
        { v:'m5ultra', l:'Apple M5 Ultra', badge:'Extreme Tier', bc:'text-purple-700 bg-purple-50',
          desc:'Up to 36-core CPU · Up to 80-core GPU · 1.2 TB/s', sub:'Up to 512GB unified memory · 32-core Neural Engine' }
      ],
      memory: {
        m5max:  [{v:'36gb',l:'36GB',s:'Base Pro'},{v:'64gb',l:'64GB',s:'Power'},{v:'96gb',l:'96GB',s:'Heavy'},{v:'128gb',l:'128GB',s:'Max Pro'}],
        m5ultra:[{v:'128gb',l:'128GB',s:'Studio Power'},{v:'256gb',l:'256GB',s:'Heavy Compute'},{v:'512gb',l:'512GB',s:'Ultra Max'}],
        _all:   [{v:'36gb',l:'36GB',s:'Std'},{v:'64gb',l:'64GB',s:'Mid'},{v:'128gb',l:'128GB',s:'Max'}]
      },
      storage:[{v:'1tb',l:'1TB',s:'Base'},{v:'2tb',l:'2TB',s:'Popular'},{v:'4tb',l:'4TB',s:'Pro'},{v:'8tb',l:'8TB',s:'Extreme Max'}],
      storeKey:'ithpl_macstudio_preorders', refPfx:'ITH-MS'
    },
    mac_mini: {
      title: 'Buy Mac mini',
      chipSeries: 'Apple Silicon M6 & M5 Pro',
      memBW: 'Up to 300 GB/s',
      chips: [
        { v:'m6',    l:'Apple M6',     badge:'Next-Gen', bc:'text-blue-700 bg-blue-50',
          desc:'12-core CPU · 12-core GPU · Dual 16-core Neural Engine', sub:'Neural Accelerators in GPU · Front: 2× USB-C' },
        { v:'m5pro', l:'Apple M5 Pro', badge:'Pro Tier',  bc:'text-purple-700 bg-purple-50',
          desc:'18-core CPU · 20-core GPU · 16-core Neural Engine', sub:'Thunderbolt 5 up to 120Gb/s · Front: 2× USB-C' }
      ],
      memory: {
        m6:   [{v:'16gb',l:'16GB',s:'Base'},{v:'24gb',l:'24GB',s:'Mid'},{v:'32gb',l:'32GB',s:'Max'}],
        m5pro:[{v:'24gb',l:'24GB',s:'Base Pro'},{v:'48gb',l:'48GB',s:'Power'},{v:'64gb',l:'64GB',s:'Max Pro'}],
        _all: [{v:'16gb',l:'16GB',s:'Base'},{v:'24gb',l:'24GB',s:'Mid'},{v:'32gb',l:'32GB',s:'Max'}]
      },
      storage:[{v:'256gb',l:'256GB',s:'Base'},{v:'512gb',l:'512GB',s:'Popular'},{v:'1tb',l:'1TB',s:'Pro'},{v:'2tb',l:'2TB',s:'Max'},{v:'4tb',l:'4TB',s:'Extreme'}],
      storeKey:'ithpl_macmini_preorders', refPfx:'ITH-MM'
    },
    iphone_18_pro: {
      title: 'Buy iPhone 18 Pro',
      chipSeries: 'Apple A19 Pro Bionic',
      memBW: 'A19 Pro · ProMotion',
      chips: [
        { v:'ip18pro',    l:'iPhone 18 Pro',     badge:'6.3"', bc:'text-gray-700 bg-gray-100',
          desc:'6.3" Super Retina XDR · A19 Pro · Triple camera', sub:'Titanium · ProMotion · Emergency SOS' },
        { v:'ip18promax', l:'iPhone 18 Pro Max',  badge:'6.9"', bc:'text-orange-700 bg-orange-50',
          desc:'6.9" Super Retina XDR · A19 Pro · Quad camera',  sub:'Titanium · Periscope zoom · 5x' }
      ],
      memory: { _all:[{v:'8gb',l:'8GB',s:'Unified RAM'}] },
      storage:[{v:'256gb',l:'256GB',s:'Base'},{v:'512gb',l:'512GB',s:'Popular'},{v:'1tb',l:'1TB',s:'Max'}],
      storeKey:'ithpl_ip18pro_orders', refPfx:'ITH-IP'
    },
    iphone_duo: {
      title: 'Buy iPhone Duo',
      chipSeries: 'Apple A20 Pro Bionic',
      memBW: 'A20 Pro · Foldable Super Retina XDR',
      chips: [
        { v:'ipduo_white', l:'iPhone Duo (Star White)', badge:'Foldable', bc:'text-blue-700 bg-blue-50',
          desc:'Dual Super Retina XDR OLED · Vapor-cooled A20 Pro', sub:'Ultra-thin foldable · Pro camera system' },
        { v:'ipduo_blk',   l:'iPhone Duo (Space Black)', badge:'Foldable', bc:'text-gray-700 bg-gray-100',
          desc:'Dual Super Retina XDR OLED · Vapor-cooled A20 Pro', sub:'Ultra-thin foldable · Pro camera system' }
      ],
      memory: { _all:[{v:'12gb',l:'12GB',s:'Unified RAM'}] },
      storage:[{v:'256gb',l:'256GB',s:'Base'},{v:'512gb',l:'512GB',s:'Popular'},{v:'1tb',l:'1TB',s:'Max'}],
      storeKey:'ithpl_ipduo_orders', refPfx:'ITH-ID'
    },
    apple_watch_ultra: {
      title: 'Buy Apple Watch Ultra',
      chipSeries: 'Apple S10 Chip',
      memBW: 'S10 · Precision GPS',
      chips: [
        { v:'ultra4_blk', l:'Apple Watch Ultra (Black Titanium)', badge:'49mm', bc:'text-gray-700 bg-gray-100',
          desc:'49mm Black Titanium · 36h battery · Depth gauge 100m', sub:'Precision dual-frequency GPS · Action button' },
        { v:'ultra4_nat', l:'Apple Watch Ultra (Natural Titanium)', badge:'49mm', bc:'text-yellow-700 bg-yellow-50',
          desc:'49mm Natural Titanium · 36h battery · Depth gauge 100m', sub:'Precision dual-frequency GPS · Action button' }
      ],
      memory: { _all:[{v:'64gb',l:'64GB',s:'Unified'}] },
      storage:[{v:'gps_cell',l:'GPS + Cellular',s:'Standard'}],
      storeKey:'ithpl_watch_ultra_orders', refPfx:'ITH-WU'
    },
    apple_watch_series_12: {
      title: 'Buy Apple Watch Series 12',
      chipSeries: 'Apple S10 Chip',
      memBW: 'S10 · UWB',
      chips: [
        { v:'s12_41', l:'Watch Series 12', badge:'41mm', bc:'text-blue-700 bg-blue-50',
          desc:'41mm Aluminium · 18h battery · ECG · Blood Oxygen', sub:'Crash Detection · S10 chip' },
        { v:'s12_45', l:'Watch Series 12', badge:'45mm', bc:'text-indigo-700 bg-indigo-50',
          desc:'45mm Aluminium · 18h battery · ECG · Blood Oxygen', sub:'Crash Detection · S10 chip' }
      ],
      memory: { _all:[{v:'32gb',l:'32GB',s:'Internal'}] },
      storage:[{v:'32gb',l:'32GB',s:'Standard'}],
      storeKey:'ithpl_watch_s12_preorders', refPfx:'ITH-WS'
    },
    apple_airpods: {
      title: 'Buy Apple AirPods',
      chipSeries: 'Apple H2 Headphone Chip',
      memBW: 'H2 · Adaptive Audio · ANC',
      chips: [
        { v:'ap5',       l:'AirPods 5',                 badge:'Standard', bc:'text-gray-700 bg-gray-100',
          desc:'Active Noise Cancellation · Siri AI · USB-C Case', sub:'Up to 30h total listening time' },
        { v:'ap5_case',  l:'AirPods 5 (Wireless Case)', badge:'Wireless', bc:'text-blue-700 bg-blue-50',
          desc:'ANC · Wireless Charging Case · Speaker for Find My', sub:'Up to 30h total listening time' },
        { v:'appro3',    l:'AirPods Pro 3',             badge:'Pro Tier', bc:'text-purple-700 bg-purple-50',
          desc:'Up to 2x more ANC · Heart rate sensing · Hearing test', sub:'MagSafe Case (USB-C) · Precision Finding' },
        { v:'apmax',     l:'AirPods Max',               badge:'Over-Ear', bc:'text-orange-700 bg-orange-50',
          desc:'Pro-level ANC · High-fidelity audio · Digital Crown', sub:'USB-C charging · Smart Case' }
      ],
      memory: { _all:[{v:'h2',l:'Apple H2',s:'Audio Chip'}] },
      storage:[{v:'standard_case',l:'Standard Case',s:'USB-C'},{v:'wireless_case',l:'Wireless Case',s:'Qi / MagSafe'}],
      storeKey:'ithpl_airpods_orders', refPfx:'ITH-AP'
    }
  };

  /* ── DOM refs ── */
  const modal = document.getElementById('buy-configurator-modal');
  const modalCard = document.getElementById('buy-modal-card');
  const closeBtn = document.getElementById('close-buy-modal');
  const formCont = document.getElementById('b2b-preorder-form-container');
  const successCont = document.getElementById('b2b-preorder-success');
  const form = document.getElementById('b2b-preorder-form');
  const submitBtn = document.getElementById('submit-preorder-btn');
  const copyBtn = document.getElementById('copy-ref-id-btn');
  const copyLabel = document.getElementById('copy-ref-label');
  const stage1El = document.getElementById('form-stage-1');
  const stage2El = document.getElementById('form-stage-2');
  const stepTab1 = document.getElementById('step-tab-1');
  const stepBadge1 = document.getElementById('step-badge-1');
  const stepTab2 = document.getElementById('step-tab-2');
  const stepBadge2 = document.getElementById('step-badge-2');
  const s1NextBtn = document.getElementById('stage-1-next-btn');
  const s2PrevBtn = document.getElementById('stage-2-prev-btn');
  const s2EditBtn = document.getElementById('stage-2-edit-specs-btn');
  const chipCont = document.getElementById('chip-options-container');
  const memCont = document.getElementById('memory-options-container');
  const storCont = document.getElementById('storage-options-container');
  const chipSeriesEl = document.getElementById('chip-series-label');
  const memBWEl = document.getElementById('memory-bandwidth-label');
  const titleEl = document.getElementById('modal-product-title');
  const sumEl = document.getElementById('config-summary-text');
  const sum2El = document.getElementById('stage-2-spec-summary');
  const notesTA = document.getElementById('b2b-notes');

  /* ── State ── */
  let cProd = 'mac_studio', cChip = null;

  /* ── HTML builders ── */
  const chipHtml = (c, first) =>
    `<label class="spec-radio-card chip-card${first?' is-selected':''} cursor-pointer flex flex-col gap-1.5">
      <input type="radio" name="config-chip" value="${c.v}" class="sr-only"${first?' checked':''}>
      <div class="radio-check-dot">✓</div>
      <div class="flex items-center gap-2 flex-wrap">
        <span class="text-[12px] font-bold text-[#1d1d1f]">${c.l}</span>
        <span class="text-[9px] font-semibold ${c.bc} px-1.5 py-0.5 rounded-full">${c.badge}</span>
      </div>
      <p class="text-[10px] text-[#6e6e73] leading-snug">${c.desc}</p>
      <p class="text-[9px] text-gray-400">${c.sub}</p>
    </label>`;

  const memHtml = (m, first) =>
    `<label class="spec-radio-card${first?' is-selected':''} cursor-pointer">
      <input type="radio" name="config-memory" value="${m.v}" class="sr-only"${first?' checked':''}>
      <div class="radio-check-dot">✓</div>
      <span class="block text-[12px] font-bold text-[#1d1d1f]">${m.l}</span>
      <span class="text-[9px] text-[#6e6e73] block mt-0.5">${m.s}</span>
    </label>`;

  const storHtml = (s, first) =>
    `<label class="spec-radio-card${first?' is-selected':''} cursor-pointer">
      <input type="radio" name="config-storage" value="${s.v}" class="sr-only"${first?' checked':''}>
      <div class="radio-check-dot">✓</div>
      <span class="block text-[11px] font-bold text-[#1d1d1f]">${s.l}</span>
      <span class="text-[9px] text-[#6e6e73] block mt-0.5">${s.s}</span>
    </label>`;

  /* ── Wire radio clicks ── */
  function wireCards(container) {
    container.querySelectorAll('input[type="radio"]').forEach(r => {
      r.addEventListener('change', () => {
        syncCards(container);
        updateSummary();
      });
    });
  }

  function syncCards(container) {
    container.querySelectorAll('.spec-radio-card').forEach(card => {
      const r = card.querySelector('input[type="radio"]');
      if (r && r.checked) {
        card.classList.add('is-selected');
      } else {
        card.classList.remove('is-selected');
      }
    });
  }

  /* ── Build options for a product ── */
  function buildOptions(key, presetChip) {
    const cfg = PRODUCTS[key];
    if (!cfg) return;
    titleEl && (titleEl.textContent = cfg.title);
    chipSeriesEl && (chipSeriesEl.textContent = cfg.chipSeries);
    memBWEl && (memBWEl.textContent = cfg.memBW);

    // Determine initial selected chip
    const activeChip = (presetChip && cfg.chips.some(c => c.v === presetChip))
      ? presetChip
      : cfg.chips[0].v;
    cChip = activeChip;

    // Render chips with activeChip checked
    chipCont.innerHTML = cfg.chips.map(c => chipHtml(c, c.v === activeChip)).join('');

    // Mem
    const memList = cfg.memory[cChip] || cfg.memory._all || [];
    memCont.innerHTML = memList.map((m, i) => memHtml(m, i === 0)).join('');

    // Stor
    const cols = Math.min(cfg.storage.length, 4);
    storCont.className = `grid grid-cols-${cols} gap-2`;
    storCont.innerHTML = cfg.storage.map((s, i) => storHtml(s, i === 0)).join('');

    // Chip change → rebuild mem & update cards
    chipCont.querySelectorAll('input[name="config-chip"]').forEach(r => {
      r.addEventListener('change', () => {
        syncCards(chipCont);
        cChip = r.value;
        const newMem = cfg.memory[cChip] || cfg.memory._all || [];
        memCont.innerHTML = newMem.map((m, i) => memHtml(m, i === 0)).join('');
        wireCards(memCont);
        syncCards(memCont);
        updateSummary();
      });
    });

    wireCards(chipCont);
    wireCards(memCont);
    wireCards(storCont);

    /* Ensure selected state visual styles are applied */
    syncCards(chipCont);
    syncCards(memCont);
    syncCards(storCont);
    updateSummary();
  }

  /* ── Summary ── */
  function getSpecs() {
    const cfg = PRODUCTS[cProd] || {};
    const cv = document.querySelector('input[name="config-chip"]:checked')?.value || '';
    const mv = document.querySelector('input[name="config-memory"]:checked')?.value || '';
    const sv = document.querySelector('input[name="config-storage"]:checked')?.value || '';
    const chipDef = cfg.chips?.find(c => c.v === cv);
    const cl = chipDef ? `${chipDef.l} (${chipDef.badge})` : cv.toUpperCase();
    return { cv, cl, mv: mv.toUpperCase(), sv: sv.toUpperCase(),
      summary: `${cl} · ${mv.toUpperCase()} RAM · ${sv.toUpperCase()} SSD` };
  }

  function updateSummary() {
    const s = getSpecs();
    if (sumEl) sumEl.textContent = s.summary;
    if (sum2El) sum2El.textContent = s.summary;
  }

  /* ── Stage nav ── */
  function goStage(n) {
    const scroll = modalCard?.querySelector('.touch-scroll');
    if (n === 1) {
      stage1El?.classList.remove('hidden');
      stage2El?.classList.add('hidden');
      if (stepTab1) stepTab1.className = 'flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold bg-white text-[#1d1d1f] shadow-sm transition-all cursor-pointer';
      if (stepBadge1) { stepBadge1.className = 'w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center text-[9px] font-bold'; stepBadge1.textContent = '1'; }
      if (stepTab2) stepTab2.className = 'flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold text-[#86868b] hover:text-[#1d1d1f] transition-all cursor-pointer';
      if (stepBadge2) { stepBadge2.className = 'w-4 h-4 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-[9px] font-bold'; stepBadge2.textContent = '2'; }
    } else {
      stage1El?.classList.add('hidden');
      stage2El?.classList.remove('hidden');
      updateSummary();
      if (stepTab1) stepTab1.className = 'flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold text-emerald-700 bg-emerald-50 transition-all cursor-pointer';
      if (stepBadge1) { stepBadge1.className = 'w-4 h-4 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[9px] font-bold'; stepBadge1.textContent = '✓'; }
      if (stepTab2) stepTab2.className = 'flex-1 flex items-center justify-center gap-1 py-1.5 px-2.5 rounded-[9px] text-[10px] font-semibold bg-white text-[#1d1d1f] shadow-sm transition-all cursor-pointer';
      if (stepBadge2) { stepBadge2.className = 'w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center text-[9px] font-bold'; stepBadge2.textContent = '2'; }
    }
    scroll?.scrollTo({ top: 0, behavior: 'smooth' });
  }

  /* ── Reset Stage 2 details without clearing configured radios ── */
  function resetContactFields() {
    ['b2b-full-name','b2b-work-email','b2b-phone','b2b-company','b2b-city','b2b-gstin'].forEach(id => {
      const el = document.getElementById(id);
      if (el) { el.value = ''; el.classList.remove('input-error-state'); }
      const err = document.getElementById(`err-${id.replace('b2b-','')}`);
      if (err) err.classList.add('hidden');
    });
    if (notesTA) notesTA.value = '';
    form?.querySelectorAll('.pref-tag-btn').forEach(b => {
      b.classList.remove('is-active');
      const sp = b.querySelector('span');
      if (sp) sp.textContent = '+';
    });
    const fleetSelect = document.getElementById('b2b-fleet-units');
    if (fleetSelect) fleetSelect.selectedIndex = 0;
  }

  /* ── Open / close ── */
  function openModal(key, preset) {
    cProd = key || 'mac_studio';
    resetContactFields();
    buildOptions(cProd, preset);
    goStage(1);
    formCont?.classList.remove('hidden');
    successCont?.classList.add('hidden');
    modal?.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal?.classList.add('hidden');
    document.body.style.overflow = 'auto';
  }

  window.openIthplModal = openModal;
  window.openAppleBuyModal = openModal;

  /* ── Button delegation ── */
  document.addEventListener('click', e => {
    const btn = e.target.closest('.trigger-buy-modal, a[aria-label*="Buy"], a.compare-button, a[href="#buy"]');
    if (!btn) return;
    if (btn.id === 'close-buy-modal' || btn.closest('#buy-configurator-modal')) return;

    e.preventDefault();

    let key = btn.dataset.productKey
      || btn.closest('[data-product-key]')?.dataset.productKey
      || document.querySelector('[data-product-key]')?.dataset.productKey
      || document.body.dataset.productKey;

    if (!key) {
      const aria = (btn.getAttribute('aria-label') || '').toLowerCase();
      const id = (btn.id || '').toLowerCase();
      const href = (btn.getAttribute('href') || '').toLowerCase();
      const path = (window.location.pathname || '').toLowerCase();

      if (aria.includes('duo') || id.includes('duo') || href.includes('duo') || path.includes('duo')) {
        key = 'iphone_duo';
      } else if (aria.includes('18 pro') || id.includes('18-pro') || href.includes('18-pro') || path.includes('18-pro')) {
        key = 'iphone_18_pro';
      } else if (aria.includes('ultra') || id.includes('ultra') || href.includes('ultra') || path.includes('ultra')) {
        key = 'apple_watch_ultra';
      } else if (aria.includes('series 12') || id.includes('series-12') || href.includes('series-12') || path.includes('series-12')) {
        key = 'apple_watch_series_12';
      } else if (aria.includes('mini') || id.includes('mini') || href.includes('mini') || path.includes('mini')) {
        key = 'mac_mini';
      } else if (aria.includes('studio') || id.includes('studio') || href.includes('studio') || path.includes('studio')) {
        key = 'mac_studio';
      } else if (aria.includes('airpods') || id.includes('airpods') || href.includes('airpods') || path.includes('airpods')) {
        key = 'apple_airpods';
      } else {
        key = 'mac_studio';
      }
    }

    openModal(key, btn.dataset.presetChip);
  });

  closeBtn?.addEventListener('click', closeModal);
  modal?.addEventListener('click', e => {
    if (e.target === modal && modalCard) {
      modalCard.classList.remove('animate-modal-nudge');
      void modalCard.offsetWidth;
      modalCard.classList.add('animate-modal-nudge');
    }
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && !modal?.classList.contains('hidden')) closeModal();
  });

  stepTab1?.addEventListener('click', () => goStage(1));
  stepTab2?.addEventListener('click', () => goStage(2));
  s1NextBtn?.addEventListener('click', () => goStage(2));
  s2PrevBtn?.addEventListener('click', () => goStage(1));
  s2EditBtn?.addEventListener('click', () => goStage(1));

  /* ── Tag chips ── */
  form?.addEventListener('click', e => {
    const btn = e.target.closest('.pref-tag-btn');
    if (!btn) return;
    const tag = btn.dataset.tag;
    btn.classList.toggle('is-active');
    const sp = btn.querySelector('span');
    if (sp) sp.textContent = btn.classList.contains('is-active') ? '✓' : '+';
    if (notesTA && tag) {
      let t = notesTA.value.trim();
      if (btn.classList.contains('is-active')) {
        if (!t.includes(tag)) notesTA.value = t ? `${t}, ${tag}` : tag;
      } else {
        notesTA.value = t.replace(tag,'').replace(/,\s*,/g,',').replace(/^,\s*|,\s*$/g,'').trim();
      }
    }
  });

  /* ── GSTIN uppercase ── */
  document.getElementById('b2b-gstin')?.addEventListener('input', e => { e.target.value = e.target.value.toUpperCase(); });

  /* ── Live error clearing ── */
  ['b2b-full-name','b2b-work-email','b2b-phone','b2b-company','b2b-city','b2b-gstin'].forEach(id => {
    document.getElementById(id)?.addEventListener('input', () => {
      document.getElementById(id)?.classList.remove('input-error-state');
      document.getElementById(`err-${id.replace('b2b-','')}`)?.classList.add('hidden');
    });
  });

  /* ── Form submit ── */
  form?.addEventListener('submit', e => {
    e.preventDefault();
    let hasErr = false, firstEl = null;

    function setErr(fid, eid, msg) {
      const inp = document.getElementById(fid);
      const err = document.getElementById(eid);
      if (inp) { inp.classList.add('input-error-state'); if (!firstEl) firstEl = inp; }
      if (err) { if (msg) err.textContent = msg; err.classList.remove('hidden'); }
      hasErr = true;
    }

    const fullName = document.getElementById('b2b-full-name')?.value.trim() || '';
    const email    = document.getElementById('b2b-work-email')?.value.trim() || '';
    const phone    = document.getElementById('b2b-phone')?.value.trim() || '';
    const company  = document.getElementById('b2b-company')?.value.trim() || '';
    const city     = document.getElementById('b2b-city')?.value.trim() || '';
    const fleet    = document.getElementById('b2b-fleet-units')?.value || '1-5';
    const gstin    = document.getElementById('b2b-gstin')?.value.trim().toUpperCase() || 'Not Provided';
    const notes    = document.getElementById('b2b-notes')?.value.trim() || 'None';

    if (!fullName || fullName.length < 2) setErr('b2b-full-name','err-full-name','Enter full name (min 2 chars)');
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) setErr('b2b-work-email','err-work-email','Enter valid work email');
    if (!phone || phone.replace(/[\s\-\(\)\+]/g,'').length < 10) setErr('b2b-phone','err-phone','Enter valid phone (10+ digits)');
    if (!company || company.length < 2) setErr('b2b-company','err-company','Enter company name');
    if (!city || city.length < 2) setErr('b2b-city','err-city','Enter city & state');
    if (gstin && gstin !== 'Not Provided' && !/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][1-9A-Z]Z[0-9A-Z]$/.test(gstin)) {
      setErr('b2b-gstin','err-gstin','Invalid GSTIN (e.g. 27AAAAA0000A1Z5)');
    }

    if (hasErr) { firstEl?.focus(); firstEl?.scrollIntoView({ behavior:'smooth', block:'center' }); return; }

    // Loading state
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `<svg class="animate-spin w-4 h-4 inline mr-1" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/></svg>Processing…`;
    }

    setTimeout(() => {
      const cfg = PRODUCTS[cProd] || {};
      const refId = `${cfg.refPfx || 'ITH-AP'}-${Math.floor(10000 + Math.random() * 90000)}`;
      const specs = getSpecs();
      const data = { refId, ts: new Date().toISOString(), product: cProd,
        fullName, email, phone, company, city, fleet, gstin, notes, specs: specs.summary };

      try {
        const key = cfg.storeKey || 'ithpl_preorders';
        const arr = JSON.parse(localStorage.getItem(key) || '[]');
        arr.unshift(data); localStorage.setItem(key, JSON.stringify(arr));
      } catch {}

      /* ── Send lead data to server (non-blocking) ── */
      try {
        const deployTags = [];
        form?.querySelectorAll('.pref-tag-btn.is-active').forEach(b => { if (b.dataset.tag) deployTags.push(b.dataset.tag); });

        const formData = new FormData();
        formData.append('full_name', fullName);
        formData.append('work_email', email);
        formData.append('phone', phone);
        formData.append('company_name', company);
        formData.append('city', city);
        formData.append('fleet_qty', fleet);
        formData.append('gstin', gstin);
        formData.append('product_name', cfg.title || cProd);
        formData.append('specs_summary', specs.summary);
        formData.append('deployment_services', deployTags.join(', '));
        formData.append('notes', notes);
        formData.append('source_page', cProd);
        formData.append('ref_id', refId);

        fetch(APPLE_LEAD_SUBMIT_URL, { method: 'POST', body: formData })
          .then(r => r.json())
          .then(r => { if (r.status === 200) console.log('Apple lead saved:', r.lead_id); })
          .catch(err => console.warn('Apple lead submit error:', err));
      } catch (ajaxErr) { console.warn('Apple lead AJAX error:', ajaxErr); }

      const s = (id, v) => { const el = document.getElementById(id); if (el) el.textContent = v; };
      s('success-ref-id', refId); s('success-company', company);
      s('success-name', fullName); s('success-units', `${fleet} Units`); s('success-specs', specs.summary);

      if (copyBtn && copyLabel) {
        copyBtn.onclick = () => {
          navigator.clipboard.writeText(refId).then(() => {
            copyLabel.textContent = 'Copied!';
            copyBtn.classList.add('text-emerald-600','border-emerald-300');
            setTimeout(() => { copyLabel.textContent = 'Copy ID'; copyBtn.classList.remove('text-emerald-600','border-emerald-300'); }, 2000);
          }).catch(() => { copyLabel.textContent = 'Copied!'; });
        };
      }

      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = `<span>Submit Corporate Buy Order</span><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>`;
      }

      formCont?.classList.add('hidden');
      successCont?.classList.remove('hidden');
      modalCard?.querySelector('.touch-scroll')?.scrollTo({ top: 0, behavior: 'smooth' });
    }, 650);
  });

  console.log('ITHPL Universal Buy Now Modal ready.');
})();
</script>
