<!DOCTYPE html><html lang="en-IN"><head>
  <style>
    html:not(.scroll-ready) {
      visibility: hidden;
    }
  </style>
  <script>
    "scrollRestoration" in history && (history.scrollRestoration = "auto");
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,viewport-fit=cover">
  <meta content="build:version" version="37" plugin="1.2.8">
  <!--BEGIN > CHANNEL STYLES -->
  <style>
    .channel-html *,
    .channel-html button {
      box-sizing: content-box;
    }
    .channel-html .theme-light,
    .channel-html :root {
      --sk-fill-blue: rgb(0, 113, 227);
      --sk-fill-orange: rgb(245, 99, 0);
      --sk-fill-green: rgb(3, 161, 14);
      --sk-productred: rgb(175, 30, 45);
      --sk-enviro-green: rgb(0, 217, 89);
    }
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer,
    .no-small-breakpoint.channel-html.reduced-motion .all-access-pass--product-viewer {
      --card-button-fade-in-opacity-anim-delay: 0ms;
      --card-content-fade-out-opacity-anim-delay: 0ms;
      --card-content-fade-out-y-anim-delay: 0ms;
      --card-content-fade-in-y-anim-delay: 0ms;
      --card-content-image-fade-out-opacity-anim-delay: 0ms;
    }
    .channel-html {
      container-type: inline-size;
      font-synthesis: none;
      -moz-font-feature-settings: "kern";
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-size: 17px;
      font-weight: 400;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      background-color: var(--sk-body-background-color, #fff);
      color: var(--sk-body-text-color, #1d1d1f);
      font-style: normal;
      --global-content-max-width: 1260px;
      --global-content-max-width-hero: 1680px;
    }
    .channel-html .channel-compare .stat .stat-content,
    .channel-html .channel-compare .stat-content,
    .channel-html button,
    .channel-html dt,
    .channel-html figure,
    .channel-html form,
    .channel-html h2,
    .channel-html li,
    .channel-html p,
    .channel-html ul {
      margin: 0;
      padding: 0;
    }
    .channel-html iframe {
      border: 0;
    }
    .channel-html table {
      border-collapse: collapse;
      border-spacing: 0;
    }
    .channel-html .cWGBpQAD,
    .channel-html .channel-compare .compare-column strong,
    .channel-html .channel-compare .row-colors.row-colors-none .colornav-items,
    .channel-html .column.large-show,
    .channel-html .large-show,
    .channel-html details,
    .channel-html.enhanced-rt .product-viewer-container .product-viewer-enhanced {
      display: block;
    }
    .channel-html canvas {
      vertical-align: baseline;
    }
    .channel-html button {
      background: 0 0;
      border: 0;
      color: inherit;
      cursor: pointer;
      font: inherit;
      line-height: inherit;
      overflow: visible;
      vertical-align: inherit;
    }
    .channel-html button:disabled {
      cursor: default;
    }
    .channel-html :focus-visible {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset, 1px);
    }
    .channel-html ::-moz-focus-inner {
      border: 0;
      padding: 0;
    }
    .channel-html :root {
      --sk-body-text-color: rgb(29, 29, 31);
      --sk-headline-text-color: rgb(29, 29, 31);
      --sk-body-background-color: rgb(255, 255, 255);
      --sk-body-font-stack: text;
      --sk-default-stacked-margin: 0.4em;
      --sk-paragraph-plus-element-margin: 0.8em;
      --sk-headline-plus-first-element-margin: 0.8em;
      --sk-headline-plus-headline-margin: 0.4em;
      --sk-paragraph-plus-headline-margin: 1.6em;
      --sk-body-link-color: rgb(0, 102, 204);
      --sk-link-disabled-opacity: 0.42;
      --sk-focus-color: #0071e3;
      --sk-focus-color-alt: rgb(0, 0, 0);
      --sk-focus-offset: 1px;
      --sk-focus-offset-container: 3px;
      --sk-footnote-font-size: 0.6em;
      --sk-footnote-offset-top: -0.5em;
      --sk-glyph: rgb(0, 0, 0);
      --sk-glyph-gray: rgb(29, 29, 31);
      --sk-glyph-gray-alpha: rgba(0, 0, 0, 0.88);
      --sk-glyph-gray-secondary: rgb(110, 110, 115);
      --sk-glyph-gray-secondary-alpha: rgba(0, 0, 0, 0.56);
      --sk-glyph-gray-secondary-alt: rgb(66, 66, 69);
      --sk-glyph-gray-secondary-alt-alpha: rgba(0, 0, 0, 0.72);
      --sk-glyph-gray-tertiary: rgb(134, 134, 139);
      --sk-glyph-gray-tertiary-alpha: rgba(0, 0, 0, 0.48);
      --sk-glyph-blue: rgb(0, 102, 204);
      --sk-glyph-orange: rgb(182, 68, 0);
      --sk-glyph-green: rgb(0, 128, 9);
      --sk-glyph-red: rgb(227, 0, 0);
      --sk-fill: rgb(255, 255, 255);
      --sk-fill-secondary: rgb(250, 250, 252);
      --sk-fill-tertiary: rgb(245, 245, 247);
      --sk-fill-gray: rgb(29, 29, 31);
      --sk-fill-gray-alpha: rgba(0, 0, 0, 0.88);
      --sk-fill-gray-secondary: rgb(134, 134, 139);
      --sk-fill-gray-secondary-alpha: rgba(0, 0, 0, 0.48);
      --sk-fill-gray-tertiary: rgb(210, 210, 215);
      --sk-fill-gray-tertiary-alpha: rgba(0, 0, 0, 0.16);
      --sk-fill-gray-quaternary: rgb(232, 232, 237);
      --sk-fill-gray-quaternary-alpha: rgba(0, 0, 0, 0.08);
      --sk-fill-orange-secondary: rgb(255, 249, 244);
      --sk-fill-green-secondary: rgb(245, 255, 246);
      --sk-fill-red: rgb(227, 0, 0);
      --sk-fill-red-secondary: rgb(255, 242, 244);
      --sk-fill-yellow: rgb(255, 224, 69);
      --sk-fill-yellow-secondary: rgb(255, 254, 242);
      --sk-enviro-neutral: rgb(232, 232, 237);
      --sk-links-inline-margin: 0.8em;
      --sk-links-stacked-margin: 0.4em;
    }
    .channel-html button,
    .channel-html select {
      font-synthesis: none;
      -moz-font-feature-settings: "kern";
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    .channel-html h2 {
      font-weight: 600;
      color: var(--sk-headline-text-color, #1d1d1f);
    }
    .channel-html h2 img {
      display: block;
      margin: 0;
    }
    .channel-html h2 + * {
      margin-top: var(--sk-headline-plus-first-element-margin, 0.8em);
    }
    .channel-html h2 + h2 {
      margin-top: var(--sk-headline-plus-headline-margin, 0.4em);
    }
    .channel-html p + h2,
    .channel-html ul + h2 {
      margin-top: var(--sk-paragraph-plus-headline-margin, 1.6em);
    }
    .channel-html p + *,
    .channel-html ul + * {
      margin-top: var(--sk-paragraph-plus-element-margin, 0.8em);
    }
    .channel-html ul {
      margin-inline-start: 1.1764705882em;
    }
    .channel-html ul ul {
      margin-top: 0;
      margin-bottom: 0;
    }
    .channel-html li li {
      font-size: 1em;
    }
    .channel-html b,
    .channel-html strong {
      font-weight: 600;
    }
    .channel-html i {
      font-style: italic;
    }
    .channel-html :lang(ko) {
      word-break: keep-all;
    }
    .channel-html a {
      color: var(--sk-body-link-color, #06c);
      letter-spacing: inherit;
    }
    .channel-html a.icon,
    .channel-html a.more,
    .channel-html a:disabled {
      text-decoration: none;
    }
    .channel-html a.icon:hover,
    .channel-html a.more:hover,
    .channel-html a:hover {
      text-decoration: underline;
    }
    .channel-html a :disabled {
      opacity: var(--sk-link-disabled-opacity, 0.42);
    }
    .channel-html .visuallyhidden {
      position: absolute;
      clip: rect(1px, 1px, 1px, 1px);
      clip-path: inset(0 0 99.9% 99.9%);
      overflow: hidden;
      height: 1px;
      width: 1px;
      padding: 0;
      border: 0;
    }
    .channel-html .nowrap {
      display: inline-block;
      text-decoration: inherit;
      white-space: nowrap;
    }
    .channel-html sup {
      position: relative;
      font-size: var(--sk-footnote-font-size, 0.6em);
      vertical-align: baseline;
      top: var(--sk-footnote-offset-top, -0.5em);
    }
    .channel-html .row {
      display: flex;
      flex-flow: row wrap;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
    }
    .channel-html .column {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      min-width: 0;
      line-height: 0;
    }
    .channel-html .large-4 {
      flex-basis: 33.3333333333%;
      max-width: 33.3333333333%;
    }
    .channel-html .large-5 {
      flex-basis: 41.6666666667%;
      max-width: 41.6666666667%;
    }
    .channel-html .large-6 {
      flex-basis: 50%;
      max-width: 50%;
    }
    .channel-html .large-7 {
      flex-basis: 58.3333333333%;
      max-width: 58.3333333333%;
    }
    .channel-html .large-8 {
      flex-basis: 66.6666666667%;
      max-width: 66.6666666667%;
    }
    .channel-html .large-10 {
      flex-basis: 83.3333333333%;
      max-width: 83.3333333333%;
    }
    .channel-html .large-12 {
      flex-basis: 100%;
      max-width: 100%;
    }
    .channel-html .icon::after,
    .channel-html .icon::before,
    .channel-html .more::after,
    .channel-html .more::before {
      font-family: "SF Pro Icons";
      color: inherit;
      display: inline-block;
      font-style: normal;
      font-weight: inherit;
      font-size: inherit;
      line-height: 1;
      text-decoration: none;
      position: relative;
      z-index: 1;
      alt: "";
    }
    .channel-html .button,
    .channel-html .channel-compare .selector-dropdown {
      font-size: 14px;
      font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: -0.016em;
      cursor: pointer;
    }
    .channel-html .bento-box.large-hide,
    .channel-html .bentobox-item.large-hide,
    .channel-html .channel-compare .compare-column-range-large-3 #static-compare-header .compare-column:nth-of-type(5) ~ .compare-column,
    .channel-html .channel-compare .compare-column-range-large-3 .compare-row:not(#static-compare-header) .compare-column:nth-of-type(4) ~ .compare-column,
    .channel-html .channel-compare .compare-column.hidden,
    .channel-html .channel-compare .compare-row[compare-header-hide],
    .channel-html .column.large-hide,
    .channel-html .icon::before,
    .channel-html .large-hide,
    .channel-html .more::before,
    .channel-html .responsive-image .image-large,
    .channel-html .responsive-image .image-medium,
    .channel-html .responsive-image .image-small,
    .channel-html.no-js .inline-media-component-container .video-wrapper video {
      display: none;
    }
    .channel-html .icon-after::after,
    .channel-html .more::after {
      padding-inline-start: 0.24em;
      top: 0;
    }
    .channel-html .icon-chevrondown::after,
    .channel-html .icon-chevrondown::before {
      content: "\f303";
    }
    .channel-html :lang(ja) .icon-chevrondown::after,
    .channel-html :lang(ja) .icon-chevrondown::before {
      position: relative;
      top: -0.07em;
    }
    .channel-html .icon-chevronright::after,
    .channel-html .icon-chevronright::before {
      content: "\f301";
    }
    .channel-html :lang(ja) .icon-chevronright::after,
    .channel-html :lang(ja) .icon-chevronright::before {
      position: relative;
      top: -0.1em;
    }
    .channel-html :lang(ko) .icon-chevronright::after,
    .channel-html :lang(ko) .icon-chevronright::before {
      position: relative;
      top: -0.08em;
    }
    .channel-html .theme-dark,
    .theme-dark {
      --sk-glyph: rgb(255, 255, 255);
      --sk-glyph-gray: rgb(245, 245, 247);
      --sk-glyph-gray-alpha: rgba(255, 255, 255, 0.92);
      --sk-glyph-gray-secondary: rgb(134, 134, 139);
      --sk-glyph-gray-secondary-alpha: rgba(255, 255, 255, 0.56);
      --sk-glyph-gray-secondary-alt: rgb(210, 210, 215);
      --sk-glyph-gray-secondary-alt-alpha: rgba(255, 255, 255, 0.8);
      --sk-glyph-gray-tertiary: rgb(110, 110, 115);
      --sk-glyph-gray-tertiary-alpha: rgba(255, 255, 255, 0.4);
      --sk-glyph-blue: rgb(41, 151, 255);
      --sk-glyph-orange: rgb(255, 121, 27);
      --sk-glyph-green: rgb(3, 161, 14);
      --sk-glyph-red: rgb(255, 48, 55);
      --sk-fill: rgb(0, 0, 0);
      --sk-fill-secondary: rgb(22, 22, 23);
      --sk-fill-tertiary: rgb(29, 29, 31);
      --sk-fill-gray: rgb(245, 245, 247);
      --sk-fill-gray-alpha: rgba(255, 255, 255, 0.92);
      --sk-fill-gray-secondary: rgb(110, 110, 115);
      --sk-fill-gray-secondary-alpha: rgba(255, 255, 255, 0.4);
      --sk-fill-gray-tertiary: rgb(66, 66, 69);
      --sk-fill-gray-tertiary-alpha: rgba(255, 255, 255, 0.24);
      --sk-fill-gray-quaternary: rgb(51, 51, 54);
      --sk-fill-gray-quaternary-alpha: rgba(255, 255, 255, 0.2);
      --sk-fill-orange-secondary: rgb(41, 13, 0);
      --sk-fill-green-secondary: rgb(0, 43, 3);
      --sk-fill-red: rgb(255, 48, 55);
      --sk-fill-red-secondary: rgb(51, 0, 0);
      --sk-fill-yellow: rgb(173, 130, 0);
      --sk-fill-yellow-secondary: rgb(43, 32, 0);
      --sk-enviro-neutral: rgb(0, 0, 0);
      --sk-body-background-color: rgb(0, 0, 0);
      --sk-body-text-color: rgb(245, 245, 247);
      --sk-headline-text-color: rgb(245, 245, 247);
      --sk-body-link-color: rgb(41, 151, 255);
      --sk-link-disabled-opacity: 0.36;
      --sk-focus-color-alt: rgb(255, 255, 255);
    }
    .channel-html .theme-dark .button,
    .theme-dark .button {
      --sk-button-disabled-opacity: var(--sk-link-disabled-opacity, 0.36);
      --sk-button-background: rgb(0, 113, 227);
      --sk-button-background-hover: #0076df;
      --sk-button-background-active: #006edb;
    }
    .channel-html .button,
    .channel-html .theme-light .button {
      --sk-button-disabled-opacity: var(--sk-link-disabled-opacity, 0.42);
      --sk-button-background: rgb(0, 113, 227);
      --sk-button-background-hover: #0076df;
      --sk-button-background-active: #006edb;
    }
    .channel-html .theme-dark .list,
    .theme-dark .list {
      --sk-list-copy-color: rgb(245, 245, 247);
      --sk-list-title-color: rgb(245, 245, 247);
    }
    .channel-html .theme-dark .stat,
    .theme-dark .stat {
      --sk-stat-value-color: rgb(245, 245, 247);
      --sk-stat-caption-color: rgb(245, 245, 247);
    }
    .channel-html .stat,
    .channel-html .theme-light .stat {
      --sk-stat-value-color: rgb(29, 29, 31);
      --sk-stat-caption-color: rgb(29, 29, 31);
    }
    .channel-html .theme-light {
      --sk-glyph: rgb(0, 0, 0);
      --sk-glyph-gray: rgb(29, 29, 31);
      --sk-glyph-gray-alpha: rgba(0, 0, 0, 0.88);
      --sk-glyph-gray-secondary: rgb(110, 110, 115);
      --sk-glyph-gray-secondary-alpha: rgba(0, 0, 0, 0.56);
      --sk-glyph-gray-secondary-alt: rgb(66, 66, 69);
      --sk-glyph-gray-secondary-alt-alpha: rgba(0, 0, 0, 0.72);
      --sk-glyph-gray-tertiary: rgb(134, 134, 139);
      --sk-glyph-gray-tertiary-alpha: rgba(0, 0, 0, 0.48);
      --sk-glyph-blue: rgb(0, 102, 204);
      --sk-glyph-orange: rgb(182, 68, 0);
      --sk-glyph-green: rgb(0, 128, 9);
      --sk-glyph-red: rgb(227, 0, 0);
      --sk-fill: rgb(255, 255, 255);
      --sk-fill-secondary: rgb(250, 250, 252);
      --sk-fill-tertiary: rgb(245, 245, 247);
      --sk-fill-gray: rgb(29, 29, 31);
      --sk-fill-gray-alpha: rgba(0, 0, 0, 0.88);
      --sk-fill-gray-secondary: rgb(134, 134, 139);
      --sk-fill-gray-secondary-alpha: rgba(0, 0, 0, 0.48);
      --sk-fill-gray-tertiary: rgb(210, 210, 215);
      --sk-fill-gray-tertiary-alpha: rgba(0, 0, 0, 0.16);
      --sk-fill-gray-quaternary: rgb(232, 232, 237);
      --sk-fill-gray-quaternary-alpha: rgba(0, 0, 0, 0.08);
      --sk-fill-orange-secondary: rgb(255, 249, 244);
      --sk-fill-green-secondary: rgb(245, 255, 246);
      --sk-fill-red: rgb(227, 0, 0);
      --sk-fill-red-secondary: rgb(255, 242, 244);
      --sk-fill-yellow: rgb(255, 224, 69);
      --sk-fill-yellow-secondary: rgb(255, 254, 242);
      --sk-enviro-neutral: rgb(232, 232, 237);
      --sk-body-background-color: rgb(255, 255, 255);
      --sk-body-text-color: rgb(29, 29, 31);
      --sk-headline-text-color: rgb(29, 29, 31);
      --sk-body-link-color: rgb(0, 102, 204);
    }
    .channel-html .theme-light .list {
      --sk-list-copy-color: rgb(29, 29, 31);
      --sk-list-title-color: rgb(29, 29, 31);
    }
    @media (inverted-colors) {
      .channel-html .double-invert {
        filter: invert(1);
      }
    }
    .channel-html .bentobox-item {
      position: relative;
      display: flex;
      flex-direction: column;
    }
    .channel-html .bentobox-item:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      border-style: solid;
    }
    .channel-html .bentobox-item.large-show,
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .preview .preview-image,
    .channel-html .row.large-show,
    .channel-html .section.large-show {
      display: flex;
    }
    .channel-html .bento-box {
      display: grid;
      grid-auto-rows: 1fr;
      margin-left: 0;
    }
    .channel-html .bento-box.large-show,
    .channel-html .channel-compare .compare-row[compare-header-show] {
      display: grid;
    }
    .channel-html .button {
      --sk-button-color: rgb(255, 255, 255);
      --sk-button-color-hover: var(--sk-button-color);
      --sk-button-color-active: var(--sk-button-color-hover);
      --sk-button-border-color: transparent;
      --sk-button-border-radius: 980px;
      --sk-button-margin-horizontal: 14px;
      --sk-button-margin-vertical: 14px;
      --sk-button-min-width-basis: 60px;
      --sk-button-padding-horizontal: 16px;
      --sk-button-padding-vertical: 9px;
      --sk-button-border-width: 1px;
      --sk-button-box-sizing: content-box;
      --sk-button-width: auto;
      --sk-button-display: inline-block;
      line-height: 1.2857742857;
      font-weight: 400;
      background: var(--sk-button-background);
      color: var(--sk-button-color);
      border-color: var(--sk-button-border-color);
      padding-block: calc(var(--sk-button-padding-vertical) - var(--sk-button-border-width));
      padding-inline: calc(var(--sk-button-padding-horizontal) - var(--sk-button-border-width));
      border-radius: var(--sk-button-border-radius);
      border-style: solid;
      border-width: var(--sk-button-border-width);
      width: var(--sk-button-width);
      min-width: calc(var(--sk-button-min-width-basis) - var(--sk-button-padding-horizontal) * 2);
      display: var(--sk-button-display);
      box-sizing: var(--sk-button-box-sizing);
      text-align: center;
      text-decoration: none;
      white-space: nowrap;
    }
    .channel-html .button:hover {
      background: var(--sk-button-background-hover, var(--sk-button-background));
      color: var(--sk-button-color-hover, var(--sk-button-color));
      text-decoration: none;
      border-color: transparent;
    }
    .channel-html .button:focus-visible {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset-container, 3px);
    }
    .channel-html .button:active {
      background: var(--sk-button-background-active, var(--sk-button-background));
      color: var(--sk-button-color-active, var(--sk-button-color));
      outline: 0;
    }
    .channel-html .button:disabled {
      pointer-events: none;
      opacity: var(--sk-button-disabled-opacity);
    }
    .channel-html .button:focus,
    .channel-html .channel-compare .button:focus {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset-container, 3px);
    }
    .channel-html .colornav-items {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      margin: 0 8px 0 0;
      padding-top: 0;
    }
    .channel-html .colornav-item {
      margin: -1px 4px;
    }
    .channel-html .colornav-swatch {
      background: var(--colornav-background) center center;
      border-radius: 50%;
      display: block;
      width: var(--colornav-swatch-size);
      height: var(--colornav-swatch-size);
      position: relative;
      background-repeat: no-repeat;
      background-size: 100%;
    }
    .channel-html .colornav-swatch:after {
      content: "";
      display: block;
      position: absolute;
      height: inherit;
      width: inherit;
      background-image: var(--colornav-border-color);
      mask-image: radial-gradient(circle at 50% 50%, transparent calc(var(--colornav-swatch-size) / 2 - 1.5px), black calc(var(--colornav-swatch-size) / 2 - 0.5px));
      mask-size: 100% 100%;
      mask-clip: border-box;
      border-radius: inherit;
    }
    .channel-html .channel-compare .selector-table {
      padding-top: 10px;
      margin-bottom: 30px;
    }
    .channel-html .channel-compare .compare-header-row,
    .channel-html .channel-compare .selector-table .compare-row {
      margin: 0;
    }
    .channel-html .channel-compare .selector-table .compare-rowheader {
      height: 0;
    }
    .channel-html .channel-compare .selector-element {
      position: relative;
      width: 100%;
      border: none;
      border-radius: 0;
      transition: border-color 0.2s;
    }
    .channel-html .channel-compare .selector-element::before {
      content: "";
      width: 40px;
      position: absolute;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0, #fff 60%, #fff 100%);
      top: 0;
      right: 0;
      height: calc(100% - 1px);
      z-index: 0;
      pointer-events: none;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
    }
    .channel-html .channel-compare .selector-dropdown {
      line-height: 1.4285914286;
      font-weight: 600;
      width: 100%;
      margin: 0;
      color: #000;
      background: 0 0;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      border: 0;
      border-bottom: 1px solid #d6d6d6;
      border-radius: 0;
      overflow: hidden;
      appearance: none;
      outline: 0;
      padding: 12px 15px 12px 0;
    }
    .channel-html .channel-compare .selector-dropdown:focus {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset, 3px);
    }
    .channel-html .channel-compare .selector-icon {
      display: block;
      position: absolute;
      top: 1px;
      font-size: 18px;
      line-height: 1;
      color: #06c;
      padding-right: 0;
      padding-top: 10px;
      pointer-events: none;
      right: 0;
    }
    .channel-html .channel-compare .selector-icon:after,
    .channel-html.no-touch .inline-media-component-container .video-wrapper .end-frame,
    .channel-html.no-touch .inline-media-component-container .video-wrapper .fallback-frame,
    .channel-html.no-touch .inline-media-component-container .video-wrapper .start-frame {
      pointer-events: none;
    }
    .channel-html .channel-compare .static-dropdown {
      font-size: 14px;
      line-height: 1.4285914286;
      font-weight: 600;
      letter-spacing: -0.016em;
      font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      border-bottom: 1px solid #d6d6d6;
      text-align: center;
      width: 100%;
      margin: 0;
      padding-bottom: 7px;
    }
    .channel-html .channel-compare .button,
    .channel-html .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash.stat-caption.copy,
    .channel-html .channel-compare .mdash,
    .channel-html .channel-compare .price-container,
    .channel-html .channel-compare .row-colors .colornav-heading,
    .channel-html .channel-compare .stat-content .stat-caption,
    .channel-html .channel-compare .stat-content .stat-caption p,
    .channel-html .channel-compare .stat-content .stat-value,
    .channel-html .copy,
    .channel-html .fEKoxzBF,
    .channel-html .upgrader-select-container .selector-element-gallery .gallery-select {
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .channel-html .mdash-container:first-child,
    .channel-html.small-breakpoint .product-viewer-media-gallery .product-viewer-media img,
    .channel-html.small-breakpoint .product-viewer.gallery .product-viewer-media img {
      height: 100%;
    }
    .channel-html .channel-compare {
      --sk-paragraph-plus-element-margin: 0px;
    }
    .channel-html .channel-compare .compare-template-display-block .price-container {
      display: block !important;
    }
    .channel-html .channel-compare .compare-template-font-color strong {
      color: var(--font-color);
    }
    .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing,
    .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing:last-child,
    .channel-html .channel-compare .compare-row.compare-template-space-bottom .compare-column,
    .channel-html .channel-compare .multi-row .compare-template-preview-item-color-nav {
      margin-bottom: 30px;
    }
    .channel-html .channel-compare .price-container {
      align-items: center;
      display: flex;
      line-height: 1.4705882353;
      font-weight: 600;
      letter-spacing: -0.022em;
      font-size: 12px;
    }
    .channel-html .channel-compare .button {
      background: 0 0;
      border: 1px solid #1d1d1f;
      color: #1d1d1f;
    }
    .channel-html .channel-compare .button:hover {
      background: 0 0;
      border: 1px solid #6e6e73;
      color: #6e6e73;
    }
    .channel-html .channel-compare .button-container,
    .channel-html .channel-compare .compare-row {
      margin-bottom: 34px;
    }
    .channel-html .channel-compare .button-container .copy {
      font-weight: 400;
    }
    .channel-html .responsive-image {
      line-height: initial;
    }
    .channel-html .responsive-image .image {
      vertical-align: bottom;
    }
    .channel-html .dropdown-content-container[data-active-content="true"],
    .channel-html .responsive-image .is-largest,
    .channel-html.touch .product-viewer-enhanced .viewer-wrapper .loader .loader-headline-touch-text {
      display: inline-block;
    }
    .channel-html .channel-compare .embed-image {
      align-self: flex-end;
    }
    .channel-html .channel-compare .compare-section,
    .channel-html .channel-compare .embed-image .compare-image,
    .channel-html .channel-compare .selector-table,
    .channel-html.no-js .inline-media-component-container .video-wrapper .start-frame {
      position: relative;
    }
    .channel-html .channel-compare .stat {
      min-width: 0;
      margin: 0 auto;
    }
    .channel-html .channel-compare .compare.with-fullwidthrowheader .mdash-container {
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .channel-html .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash.stat-caption.copy {
      font-weight: 600;
      font-size: 17px;
      line-height: 25px;
    }
    .channel-html .channel-compare .stat-content .stat-caption {
      position: static;
      margin-bottom: 0;
    }
    .channel-html .channel-compare .stat-content .stat-caption p {
      color: #1d1d1f;
    }
    .channel-html .channel-compare .stat-content .stat-caption.copy.mdash {
      font-size: 12px;
      font-weight: 600;
      line-height: 16px;
      position: relative;
    }
    .channel-html .channel-compare .stat-content .stat-value {
      white-space: unset;
      overflow-wrap: break-word;
      inset-inline-start: 0;
    }
    .channel-html .channel-compare .stat-content .stat-value.copy {
      font-size: 21px;
      line-height: 25px;
      letter-spacing: 0.23px;
      margin-right: 0.5px;
    }
    .channel-html .channel-compare .compare .copy:not(.stat-value),
    .channel-html .channel-compare .compare .copy:not(.stat-value) :not(sup),
    .channel-html .channel-compare .row-colors .colornav-heading {
      font-size: 12px;
      line-height: 16px;
      letter-spacing: -0.12px;
      font-weight: 600;
    }
    .channel-html .channel-compare .stat-content .stat-elevated .stat-caption p {
      color: #86868b;
    }
    .channel-html .channel-compare .stat-content .embed-image {
      width: auto;
      min-height: 56px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .channel-html .channel-compare .stat-content .stat-row {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 0 10px;
    }
    .channel-html .channel-compare .stat-content .stat-row:not(:last-child) > .stat-caption {
      margin-bottom: 15px;
    }
    .channel-html .channel-compare .stat-content .stat-row:first-child .stat-caption.copy {
      margin-bottom: -4px;
    }
    .channel-html .channel-compare .stat-content .stat-row:first-child .embed-image {
      margin-bottom: 2px;
    }
    .channel-html .channel-compare .stat-content .stat-row:first-child .stat-value {
      margin-bottom: 6px;
    }
    .channel-html .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
      margin-bottom: 25px;
    }
    .channel-html .channel-compare .multi-row .row-colors {
      padding-bottom: 0;
      margin-bottom: 0;
      margin-top: 0;
    }
    .channel-html .channel-compare .row-colors {
      width: 100%;
      text-align: center;
      margin-top: 30px;
      padding-bottom: 24px;
    }
    .channel-html .channel-compare .row-colors .colornav-heading {
      padding-bottom: 8px;
    }
    .channel-html .channel-compare .row-colors.row-colors-none {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .channel-html .channel-compare .colornav-items {
      display: block;
      margin: auto;
    }
    .channel-html .channel-compare .colornav-item-row {
      display: flex;
      justify-content: center;
    }
    .channel-html .channel-compare .colornav-item-row:not(:first-child) {
      margin-top: 6px;
    }
    .channel-html .channel-compare .colornav-item-row .colornav-item {
      margin: 0;
      width: 18px;
      height: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .channel-html .channel-compare .colornav-label-container {
      padding-top: 8px;
    }
    .channel-html .channel-compare .colornav-swatch {
      width: 12px;
      height: 12px;
    }
    .channel-html .channel-compare .colornav-swatch:after {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.48);
    }
    .channel-html .section .section-compare-table {
      overflow: initial;
    }
    .channel-html .channel-compare .compare-wrapper {
      position: relative;
      width: 100%;
    }
    .channel-html .channel-compare select {
      box-sizing: border-box;
    }
    .channel-html .channel-compare sup * {
      vertical-align: inherit;
      font-weight: 400;
    }
    .channel-html .channel-compare .mdash {
      font-weight: 600;
    }
    .channel-html .channel-compare ul {
      margin: 0;
      list-style: none;
    }
    .channel-html .channel-compare .compare-section {
      padding-top: 39px;
      border: 0;
    }
    .channel-html .channel-compare .compare-section.no-padding-top {
      padding: 0;
    }
    .channel-html .channel-compare .compare-header-row,
    .channel-html .channel-compare .compare-row {
      --column-gap: 78px;
      display: grid;
      column-gap: var(--column-gap);
      justify-content: center;
      grid-template-columns: repeat(var(--grid-column), 164px);
    }
    .channel-html .channel-compare .compare-row.compare-template-border-top .compare-column {
      border-top: 1px solid #d6d6d6;
      padding-top: 30px;
    }
    .channel-html .channel-compare .compare-row:last-child {
      margin-bottom: 0;
    }
    .channel-html .channel-compare .compare-rowheader {
      order: -1;
      grid-column: 1 / var(--grid-column) span;
    }
    .channel-html .channel-compare .compare-column {
      display: flex;
      box-sizing: border-box;
    }
    .channel-html .channel-compare .compare.with-fullwidthrowheader .compare-rowheader {
      width: 100%;
    }
    .channel-html .channel-compare .compare.with-fullwidthrowheader .compare-column {
      text-align: center;
      justify-content: center;
      width: 164px;
    }
    .channel-html .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash {
      top: 0;
      font-size: 12px;
      font-weight: 600;
      line-height: 16px;
    }
    .channel-html .channel-compare--hidden {
      opacity: 0;
      visibility: hidden;
    }
    .channel-html .contextual-compare html.no-touch .with-paddlenav-onhover .paddlenav-arrow,
    .channel-html .horizontal-scroll html.no-touch .with-paddlenav-onhover .paddlenav-arrow,
    html.no-touch .with-paddlenav-onhover .paddlenav-arrow {
      opacity: 0;
      transition:
        background 0.1s linear,
        color 0.1s linear,
        opacity 0.1s linear;
    }
    .channel-html .contextual-compare html.no-touch .with-paddlenav-onhover .paddlenav-arrow:focus-visible {
      opacity: 1;
    }
    .channel-html .contextual-compare html.no-touch .with-paddlenav-onhover:hover .paddlenav-arrow {
      opacity: 1;
    }
    .channel-html .contextual-compare html.no-touch .with-paddlenav-onhover .paddlenav-arrow.disabled,
    .channel-html .contextual-compare html.no-touch .with-paddlenav-onhover .paddlenav-arrow:disabled,
    .channel-html .horizontal-scroll html.no-touch .with-paddlenav-onhover .paddlenav-arrow.disabled,
    .channel-html .horizontal-scroll html.no-touch .with-paddlenav-onhover .paddlenav-arrow:disabled,
    .channel-html .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas.entice canvas,
    html.no-touch .with-paddlenav-onhover .paddlenav-arrow.disabled,
    html.no-touch .with-paddlenav-onhover .paddlenav-arrow:disabled {
      opacity: 0;
    }
    .channel-html .horizontal-scroll html.no-touch .with-paddlenav-onhover:hover .paddlenav-arrow,
    .channel-html.no-js .control-item-bg,
    .channel-html.no-js .control-item-content-inner,
    .channel-html.no-js .control-item-label,
    .channel-html.reduced-motion .control-item-bg,
    .channel-html.small-breakpoint .control-item-bg,
    .channel-html.small-breakpoint .control-item-content .control-item-media,
    .no-small-breakpoint.channel-html.no-js .control-item.expanded .control-item-open,
    .reduced-motion.channel-html.no-small-breakpoint .control-item-label,
    html.no-touch .with-paddlenav-onhover:hover .paddlenav-arrow {
      opacity: 1;
    }
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion,
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion *,
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion ::after,
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion ::before,
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion::after,
    .channel-html .contextual-compare .tabnav.tabnav-reduced-motion::before {
      transition: none !important;
    }
    .channel-html .copy {
      -webkit-text-size-adjust: none;
    }
    .channel-html a.footer-link {
      color: #555;
    }
    .channel-html .link-wrapper:focus,
    .channel-html a.footer-link:focus {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset, 1px);
    }
    .channel-html .upgrader-select-container .inline-label-container .dropdown-label {
      display: inline-block;
      margin-bottom: 0;
      pointer-events: none;
    }
    .channel-html .upgrader-select-container .selector-element-gallery {
      position: relative;
      border: none;
      border-radius: 0;
      transition: border-color 0.2s;
      margin: auto;
      width: var(--dropdown-width, 250px);
    }
    .channel-html .upgrader-select-container .selector-element-gallery .gallery-select {
      font-size: 14px;
      line-height: 1.4285914286;
      font-weight: 600;
      width: var(--dropdown-width, 250px);
      letter-spacing: -0.016em;
      margin: 0;
      background: 0 0;
      border: 0;
      border-bottom: 1px solid #86868b;
      border-radius: 0;
      overflow: hidden;
      -webkit-appearance: none;
      appearance: none;
      cursor: pointer;
      outline: 0;
      padding: 8px 0;
    }
    .channel-html .upgrader-select-container .selector-element-gallery .gallery-select:focus {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset, 3px);
      padding-right: 1px;
    }
    .channel-html .upgrader-select-container .selector-element-gallery .selector-gallery-icon {
      display: block;
      position: absolute;
      top: 0;
      font-size: 19px;
      font-weight: 400;
      color: #06c;
      line-height: 1;
      padding-right: 0;
      padding-top: 8px;
      pointer-events: none;
      right: 0;
    }
    .channel-html .dropdown-content-container {
      display: none;
      width: 100%;
    }
    html.no-touch .with-paddlenav-onhover .paddlenav-arrow:focus-visible {
      opacity: 1;
    }
    .channel-html .horizontal-scroll html.no-touch .with-paddlenav-onhover .paddlenav-arrow:focus-visible {
      opacity: 1;
    }
    @font-face {
      font-family: "SF Pro Icons";
      src: url(data:font/truetype;charset=utf-8;base64,AAEAAAAOAIAAAwBgRkZUTYkLJygAALSIAAAAHEdERUYAKQByAAC0aAAAAB5PUy8yhB1wagAAAWgAAABgY21hcPQGTV8AAAN4AAABkmN2dCAARAURAAAFDAAAAARnYXNw//8AAwAAtGAAAAAIZ2x5ZpE79VoAAAXsAACV3GhlYWQXJG3TAAAA7AAAADZoaGVhD6AOHwAAASQAAAAkaG10eDvKadUAAAHIAAABsGxvY2FmrEEEAAAFEAAAANptYXhwANMBWwAAAUgAAAAgbmFtZfvzgUcAAJvIAAATxXBvc3QvFPDYAACvkAAABM4AAQAAAAEAAD1TAUFfDzz1AAsIAAAAAADXPJGTAAAAANc8kZMAAP4SCYwHngAAAAgAAgAAAAAAAAABAAAGEv4SAAAPoAAAAAAJjAABAAAAAAAAAAAAAAAAAAAAbAABAAAAbAEqACUAAAAAAAIAAAABAAEAAABAAC4AAAAAAAMH1AGQAAUAAAnqBZkAAAEeCeoFmQAAA9cAZAIQAAACAAUDAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFBmRWQAQCAU+P8GEv4SALgHngHuAAAAAQAAAAAAAAAAAAAAIAABAuwARAAAAAACqgAAD6AAAAmMAAAJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMDIABEAyAAcwTGAC0ExgAtCJgAHwiYAB8ImAAfCJgAHwR+AC0ETAAmBEwAJgTGACsCWADIA4QAgwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwV4ACcImAAfCJgAHwiYAB8FRgBcBRQAOgiYAB8ImAAfA4QAhAVGAEQHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgZeARwGXgHGBl4BxwTGARkExgEsB4AA1geAANYHgADNBMYBpQTGAbgHgAI/B4ACPweAAjYIngAKAAAAAwAAAAMAAAAcAAEAAAAAAIwAAwABAAAAHAAEAHAAAAAYABAAAwAIIBQliOoe8xnzIfMu8zPzVfNe82T4////AAAgFCWI6gHzAPMe8yrzMPNC81fzYPj////f79p8FgQNIw0fDRcNFg0IDQcNBgdsAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEGAAABAAAAAAAAAAECAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABrAAAAAAAAAAAAAAAAAAAAAAAARAURAAAALAAsACwALAA6AdwDfgUgBsAIYgoEC6QNRA7kEIYSKBPKFWwXDhiwGlIb9B2WHzgg2iJ+JCAlwidkKQYqqCxKLeovjDEuMUQxWDFsMYAx9DJmMtgzSjNsM4QzkjOmM8Q0DDSMNQI1cDXiNl43CDdUN5Y30DgOOFY4yDlSOcY6SDqWOxA7hjvqPAA8KjzSPUQ9ij2gPgg+iD8aP5ZAIEC0QR5BukJQQtxDUEPeRHxFAkWYRjpGsEdYR/hInkkGSThJdkmMSaJJtknKSexKAkoYSixKQEpiSu4AAAACAEQAAAJkBVUAAwAHAC6xAQAvPLIHBADtMrEGBdw8sgMCAO0yALEDAC88sgUEAO0ysgcGAfw8sgECAO0yMxEhESUhESFEAiD+JAGY/mgFVfqrRATNAAAAAQAA/hIJjAeeAAMAABEhESEJjPZ0B572dAAAACUCYwB1BykFOwAHAA8AIQAoACwANQBBAEsATwBTAFcAWwBlAHEAegCEAJQAmACcAKAApACpALkAvQDHAM8A2wDlAOkA8wD/AQcBDwEVARkBIQEpAAABIxUzPwE1JyUjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnJSMVMz8BNScGAQkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu/9jwkJBgIDAb4JCQYCAgUhRAMGMgYDRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAkQEBzIFAAAAJQJjAHUHKQU7AAcADwAXACkAMAA0AD0ASQBTAFcAWwBfAGMAbQB5AIIAjACcAKAApACoAKwAsQDBAMUAzwDXAOMA7QDxAPsBBwEPARcBHQEhASkAAAEjFTM/ATUnJSMVMz8BNScBIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwQ+CQkGAgMBvgkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgIFIUQDBjIGA0QDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgIGCQkGAgL+NwkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7wUhRAMGMgYDRAMGMgb7t0QEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAABIxUzPwE1JzchIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScGAQkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgIC/jcJCQYCAwUJCQYCAwUhRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAkQEBzIFBE5EAwYyBgAlAmMAdQcpBTsABwAZACAAJAAtADkAQwBHAEsATwBTAF0AaQByAHwAjACQAJQAmACcAKEAsQC1AL8AxwDTAN0A4QDrAPcA/wEHAQ0BEQEZASEBKQAAJSMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBSMVMz8BNScDIxUzPwE1JyUjFTM/ATUnBgEJCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7/2PCQkGAgMFCQkGAgMBvgkJBgIC1UQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RT/RAQHMgUETkQDBjIGA0QDBjIGAAAAACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABJiMhIgcGFREUFjMhMjY1ETQHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBAyMVMz8BNScDIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScHBx8w/BwwICFDLgPkLUTVJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCAwUJCQYCAwUbICAiLPwbL0RELwPlLToZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIG+7dEBAcyBQJEBAcyBQRORAMGMgYAAAAAJQJjAHUHKQU7AAcADwAhACYANgA6AD4AQgBMAFQAYABqAG4AeACEAIwAkwCXAKAArAC2ALoAvgDCAMYA0ADcAOUA7wDzAQMBCQERARUBGQEhASkAACUjFTM/ATUnJSMVMz8BNScXMjY1ETQnJiMhIgcGFREUFjM3JicXJhcUBisBIj0BMxUfAT8BNTMvATUXMyMBPQIBIwcjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVEzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjARUBMyczFR8BPwE1MxUUBisBIjUHAQYHATYHNDcBBisBARUBIwEVASMJASMVMz8BNSclIxUzPwE1JwQ+CQkGAgMBvgkJBgICsS1EIh8w/BwwICFDLiUWBE0enAsKFRQXAgUHAxY2l92MRv7dAfZGgwc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0JxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLAu78zEVUFwIFBwMWCwoVFDgDegIR/GYXOwYDjw8PI/ysAw5G/TgCgUX9xAFhCQkGAgMBvgkJBgIC1UQEBzIFAkQEBzIFXkQvA+UtISAgIiz8Gy9ElxYeTgRaCw0XSUgGAwMGSA2WRtwBI0dGRv4KbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUD8RkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMz/QZGAzJuSAYCAgZISAsNFyL8hRwXA5wRWQ8Q/G8GA1VG/PECyUf9fgI9AfNEAwYyBgNEAwYyBgAAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAAlIxUzPwE1JwEiBwYVERQWMyEyNjURNCcmIwcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScEPgkJBgID/pEwICFDLgPkLUQiHzBkJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCA9VEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFBE5EAwYyBgNEAwYyBgAlAmMAdQcpBTsABwAPACEAJgA2ADoAPgBCAEwAVABgAGoAbgB4AIQAjACTAJcAoACsALYAugC+AMIAxgDQANwA5QDvAPMBAwEJAREBFQEZASEBKQAAJSMVMz8BNScDIxUzPwE1JxMyNjURNCcmIyEiBwYVERQWMzcmJxcmFxQGKwEiPQEzFR8BPwE1My8BNRczIwE9AgEjByMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhUTMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMBFQEzJzMVHwE/ATUzFRQGKwEiNQcBBgcBNgc0NwEGKwEBFQEjARUBIwkBIxUzPwE1JwMjFTM/ATUnBgEJCQYCAgYJCQYCArEtRCIfMPwcMCAhQy4lFgRNHpwLChUUFwIFBwMWNpfdjEb+3QH2RoMHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3CwLu/MxFVBcCBQcDFgsKFRQ4A3oCEfxmFzsGA48PDyP8rAMORv04AoFF/cQBYQkJBgIDBQkJBgID1UQEBzIFBE5EAwYyBvtXRC8D5S0hICAiLPwbL0SXFh5OBFoLDRdJSAYDAwZIDZZG3AEjR0ZG/gptMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFQPxGRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzP9BkYDMm5IBgICBkhICw0XIvyFHBcDnBFZDxD8bwYDVUb88QLJR/1+Aj39p0QEBzIFBE5EAwYyBgAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAACUjFTM/ATUnASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzCQEjFTM/ATUnJSMVMz8BNScDIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgIGCQkGAgLVRAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FANNRAMGMgYDRAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAKQAwADQAPQBJAFMAVwBbAF8AYwBtAHkAggCMAJwAoACkAKgArACxAMEAxQDPANcA4wDtAPEA+wEHAQ8BFwEdASEBKQAAASMVMz8BNSclIxUzPwE1JwMjFTM/ATUnEyEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnBD4JCQYCAwG+CQkGAgIGCQkGAgKx/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu/9jwkJBgIDBSFEAwYyBgNEAwYyBvu3RAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQAAACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAAlIxUzPwE1JyUjFTM/ATUnASMVMz8BNSclIxUzPwE1JzchIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAv43CQkGAgMBvgkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv1UQEBzIFAkQEBzIFBE5EAwYyBgNEAwYyBh0gIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAAAAAJQJjAHUHKQU7AAcADwAXAB8AMQA4ADwARQBRAFsAXwBjAGcAawB1AIEAigCUAKQAqACsALAAtAC5AMkAzQDXAN8A6wD1APkBAwEPARcBHwElASkAAAEjFTM/ATUnASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQYBCQkGAgL+NwkJBgIDAb4JCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUCRAQHMgUETkQDBjIGHSAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FAAlAmMAdQcpBTsAEQAYABwAJQAxADsAPwBDAEcASwBVAGEAagB0AIQAiACMAJAAlACZAKkArQC3AL8AywDVANkA4wDvAPcA/wEFAQkBEQEZASEBKQAAASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnJSMVMz8BNScBIxUzPwE1JyUjFTM/ATUnBrj8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgNEAwYyBvu3RAQHMgUCRAQHMgUAACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAAlIxUzPwE1JyUjFTM/ATUnAyMVMz8BNSclIxUzPwE1JyUhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAgYJCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv1UQEBzIFAkQEBzIFBE5EAwYyBgNEAwYyBh0gIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAAAAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAAAEjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnJSMVMz8BNScDIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgIGCQkGAgIFIUQDBjIGHSAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQJEBAcyBQRORAMGMgYAAAAlAmMAdQcpBTsAEQAYABwAJQAxADsAPwBDAEcASwBVAGEAagB0AIQAiACMAJAAlACZAKkArQC3AL8AywDVANkA4wDvAPcA/wEFAQkBEQEZASEBKQAAASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnBrj8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBvu3RAQHMgUCRAQHMgUETkQDBjIGACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBByMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScGuPwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgIC/jcJCQYCAwG+CQkGAgL+NwkJBgIDBTsgIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RT/RAQHMgUCRAQHMgUETkQDBjIGA0QDBjIGAAAAJQJjAHUHKQU7AAcADwAhACgALAA1AEEASwBPAFMAVwBbAGUAcQB6AIQAlACYAJwAoACkAKkAuQC9AMcAzwDbAOUA6QDzAP8BBwEPARUBGQEhASkAACUjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMJASMVMz8BNSclIxUzPwE1JwYBCQkGAgL+NwkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7/2PCQkGAgMBvgkJBgIC1UQEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIGA0QDBjIGAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNScBIxUzPwE1JwMjFTM/ATUnASMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBgEJCQYCAv43CQkGAgMFCQkGAgMBvgkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAABIxUzPwE1JwEjFTM/ATUnAyMVMz8BNScBIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAgYJCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UAAAAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAAlIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScEPgkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAgYJCQYCAv43CQkGAgPVRAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQRORAMGMgYDRAMGMgYAAAAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAACUjFTM/ATUnASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnAyMVMz8BNScBIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCA9VEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBvu3RAQHMgUETkQDBjIGAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAJSMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNSc3ISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC79VEBAcyBQJEBAcyBQRORAMGMgYDRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UAAAAACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMJASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScGuPwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCAgU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgNEAwYyBvu3RAQHMgUCRAQHMgUAJQJjAHUHKQU7ABEAGAAcACUAMQA7AD8AQwBHAEsAVQBhAGoAdACEAIgAjACQAJQAmQCpAK0AtwC/AMsA1QDZAOMA7wD3AP8BBQEJAREBGQEhASkAAAEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEDIxUzPwE1JwMjFTM/ATUnASMVMz8BNScDIxUzPwE1Jwa4/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgIGCQkGAgL+NwkJBgIDBQkJBgIDBTsgIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIG+7dEBAcyBQRORAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7wUhRAMGMgYDRAMGMgb7t0QEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAACUCYwB1BykFOwARABYAJgAqAC4AMgA8AEQAUABaAF4AaAB0AHwAgwCHAJAAnACmAKoArgCyALYAwADMANUA3wDjAPMA+QEBAQUBCQERARkBIQEpAAAlMjY1ETQnJiMhIgcGFREUFjM3JicXJhcUBisBIj0BMxUfAT8BNTMvATUXMyMBPQIBIwcjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVEzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjARUBMyczFR8BPwE1MxUUBisBIjUHAQYHATYHNDcBBisBARUBIwEVASMJASMVMz8BNScDIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScGuC1EIh8w/BwwICFDLiUWBE0enAsKFRQXAgUHAxY2l92MRv7dAfZGgwc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0JxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLAu78zEVUFwIFBwMWCwoVFDgDegIR/GYXOwYDjw8PI/ysAw5G/TgCgUX9xAFhCQkGAgMFCQkGAgMBvgkJBgICBgkJBgICdUQvA+UtISAgIiz8Gy9ElxYeTgRaCw0XSUgGAwMGSA2WRtwBI0dGRv4KbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUD8RkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMz/QZGAzJuSAYCAgZISAsNFyL8hRwXA5wRWQ8Q/G8GA1VG/PECyUf9fgI9/adEBAcyBQRORAMGMgYDRAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBgEJCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu8FIUQDBjIGA0QDBjIG+7dEBAcyBQJEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UACUCYwB1BykFOwAHAA8AFwApADAANAA9AEkAUwBXAFsAXwBjAG0AeQCCAIwAnACgAKQAqACsALEAwQDFAM8A1wDjAO0A8QD7AQcBDwEXAR0BIQEpAAAlIxUzPwE1JwEjFTM/ATUnAyMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBAyMVMz8BNScGAQkJBgIC/jcJCQYCAwUJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgLVRAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgAAAQBE/+ECrQRMAAUAAAkCNwkBAjH+EwHtfP5xAY8ETP3K/ctrAcoBywAAAAABAHP/4QLcBEwABQAANxcJAQcBc3wB7f4TfAGPTGsCNQI2a/41AAAAAQAtAPoEmQNiAAUAAAkBNwkBFwJjAcps/cr9ymwCif5xewHt/hN7AAEALQDLBJkDMwAFAAATBwkBJwGZbAI2AjZs/jYDM3v+EwHte/5xAAADAB/+jwh5BuoAGABAAEYAAAEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUlJwkBNwEETNrGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRf1ofP5AAcB8/p0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT8iVq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaOJbP39/f1rAZgAAAAAAwAf/o8IeQbqABcAPwBFAAAAIDc2ADc2ECcmACcmIAcGAAcGEBcWABcBJjQ3PgU3NjIXHgUXFhQHDgUHBiInLgUFFwkBBwEDcgG0xsABKFFUVFH+2MDG/kzGwP7YUVRUUQEowP4pEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQKYfAHA/kB8AWP+j1RSASi/xwGzx8ABKFFUVFH+2MDH/k3Hv/7YUgMjWrlaWKORe2NFERMTEUVifJGjWFq5WlejkntiRRITExJFYnuSo4prAgMCA2z+aQAAAwAf/o8IeQbqABcAPwBFAAAAIAcGAAcGEBcWABcWIDc2ADc2ECcmACcBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUBFwkBNwEFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfqYbAGXAZds/f0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRo/6gewFi/p57AcEAAwAf/o8IeQbqABcAPwBFAAAAIAcGAAcGEBcWABcWIDc2ADc2ECcmACcBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUJAQcJAScFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfyb/mlsAgMCA2wG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRo/5cAWN8/j8BwXwAAQAtAAUEUQQoAAsAAAkCBwkBFwkBNwkBA93+Yv5idAGe/mJ0AZ4BnnT+YgGeBCj+YgGec/5i/mFzAZ7+YnMBnwGeAAABACYAFwQmBBcACwAAJREhNSERIxEhFSERAngBrv5SpP5SAa4XAa6kAa7+UqT+UgABACYBxQQmAmkAAwAAEyEVISYEAPwAAmmkAAAAAQArAHQEmwOFAAUAABMHCQEnAZtwAasCxXD9qgJ5eP5zApl4/c8AAAIAyAAJAZEEJAAFAA0AABM7ARMjEwIWMjYuASIG2R6ICbgJETpVOgE5VToBQwLh/Tz+4zo6VTo6AAAAAAIAgwAJAwAEJAAlAC4AAAE2NTQuAiMiBwYHDgEPATM3PgEzMhYVFAYHBgcGFxUzNTQ2NzYDIgYUFjI2NCYCZZsuVXNESj06KictAwGhAgVRRUJRLDhMJCUBpAkKFnsqOjpVOTkCFV2jOWRKKBYVKSZoPhcUQkpGODBBIi40OEpVQhokDx/+4TpVOjpVOgAAAAMAH/6PCHkG6gALACQATAAACQIHCQEXCQE3CQIiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUFgf7L/st0ATX+y3QBNQE1dP7LATX+V9rGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQRm/ssBNXT+y/7LdAE1/st0ATUBNQL4VFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVPyJWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowADAB/+jwh5BuoACwAjAEsAAAEjESEVIREzESE1IRIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQSepP5FAbukAbv+RYj+TMbA/thRVFRRASjAxgG0xsABKFFUVFH+2MAB1xISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkUEyv5FpP5FAbukA9tUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaMAAAMAH/6PCHkG6gADABwARAAAASEVIQEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUCbwO6/EYB3drGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQMPpAR/VFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVPyJWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowAAAAADAB/+kAh5BuoABQAdAEUAAAkBBwkBJwIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQO//sZwAaoCxHDu/k7HwP7YUVRUUQEowMcBssfAAShRVFRR/tjAAdcSEhJFYnyRo1daulpXo5F8YkUSEhISRWJ8kaNXWrpaV6ORfGJFAfMBJHn+dAKYeALIVFL+2cDH/k3GwP7YUVRUUQEowMYBs8fAASdS/N1auVpXo5J7YkUSEhISRWJ7kqNXWrlaWKORe2JFEhMTEkVie5GjAAAEAB/+jwh5BuoAFwA/AEUATgAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FARUzEyMVEyIOARYyNjQmBSb+TMbA/thRVFRRASjAxgG0xsABKFFUVFH+2MAB1xISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkX8SaQJtlsqOgE7VTo6BupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaP+PRwC3h38yzpUOzpVOgAAAAQAH/6PCHkG6gAYAEEASQBwAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYXFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgQAIgYUFjI2NBMuASMiBwYHDgEPATM3PgEzMhYVFAYHBgcGFxUzNTQ2NzY3NjU0JgRM2sbA/thRVFRRASjAxgGzx8ABKFFUVFH+2MDHAnAkEhISEkZjfZKlWFu7Wlmkk3xjRhISEhJGY3yTpFlau1tYpZJ9Y/zvVDo6VDqVKnNESj06KicsBAGhAQVSRUJRLDhMIyYBowoKFT2aLQbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVP02U1hbu1tYpJN8Y0YSExMSRmN8k6RYW7tbWKWSfWNFEhMTEkVjfZL9BjlVOjpVAz8lKBYVKSZoPRcUQkpGOTBBIi41N0pVQhokDx8kXaM5ZAAAAAACAB/+jwh5BuoAGAAkAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmEwcJAScJATcJARcBBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMfQdP7L/st0ATX+y3QBNQE1dP7LBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFFU+p50ATX+y3QBNQE1dP7LATV0/ssAAAIAH/6PCHkG6gAXACMAAAAgBwYABwYQFxYAFxYgNzYANzYQJyYAJxMhESMRITUhETMRIQUm/kzGwP7YUVRUUQEowMYBtMbAAShRVFRR/tjAbf5FpP5FAbukAbsG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfvV/kUBu6QBu/5FAAIAH/6PCHkG6gAYABwAAAEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBITUhBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcBBPxGA7oG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT7gaQAAAAAAgAf/pAIeQbqABcAHQAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnCQE3CQEXBSX+TsfA/thRVFRRASjAxwGyx8ABKFFUVFH+2MD90/5WcAE6AlRwBupUUv7ZwMf+TcbA/thRVFRRASjAxgGzx8ABJ1L6fAGMef7cAi94AAMAH/6PCHkG6gAXAB0AJQAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnATsBAyMDEgYiJj4BMhYFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwP4ifB0JpAnAOlU7ATpVOgbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShR/jT9IgLe/B86OlU6OgAAAAMAH/6PCHkG6gAYACAARgAAASIHBgAHBhAXFgAXFiA3NgA3NhAnJgAnJgIGIiY0NjIWEwYHDgEdASM1Jjc2Nz4BNTQmIyIGDwEjNz4BNzY3NjMyHgIVFARM2sbA/thRVFRRASjAxgGzx8ABKFFUVFH+2MDHiTpUOjpUOlM9FQoKowEmI0w4LFFCRVIFAaEBBCwnKjo9SkRzVS0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT6ADo6VTk5AX0kHw8kGkJVSjc1LiJBMDlGSkIUFz1oJikVFihKZDmjAAAAAAQAH/6PCHkG6gAYAEAAUgBVAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FBQEmIg4BFREUHgEyNwE+ATQmAREBBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcCnhISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkX+UP2MFzcvGxsvNhkCchgbG/2BAbwG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT8iVq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaO3AX0OGy8b/QYbLxwPAXwNMDUv/qkCG/7zAAAAAAQAH/6PCHkG6gAYAEAARABIAAABMjc2ADc2ECcmACcmIAcGAAcGEBcWABcWASY0Nz4FNzYyFx4FFxYUBw4FBwYiJy4FATMRIwEzESMETNnHwAEoUVRUUf7YwMf+TcbA/thRVFRRASjAxv1jEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQQtpKT9zKSk/o9UUgEov8cBs8fAAShRVFRR/tjAx/5Nx7/+2FJUA3dauVpYo5F8YkURExMRRWJ8kaNYWrlaV6OSe2JFEhMTEkVie5KjAs78gAOA/IAAAAAEAB/+jwh5BuoAFwA/AE8AUwAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FJSEiBhURFBYzITI2NRE0JgMhESEFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRf33/UgpOzspArgpOztp/cgCOAbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShR/N1auVpXo5J7YkUSExMSRWJ7kqNXWrlaWKORfGJFERMTEUVifJGjsjsp/UgqOjoqArgpO/0kAjgAAAEAJwAnBVEGQQAvAAABDgEHBiInLgEnJjQ3PgE3NjMyFwcXCQEHFyMiBw4BBwYQFx4BFxYgNz4BNzY1IxQEhiWKWV3KXVmKJScnJYpZXWUWFod8ASP+3XxzGId6d7cyNDQyt3d6AQ56d7cyNKQB+1mKJicnJopZXMtcWYomJwKbawFNAU5rhDQyt3d7/vN7drgyNDQyuHZ7h2YAAAQAH/6PCHkG6gAYAEAASABOAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FACIGFBYyNjQHIxEzESMETNrGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfzDUDo5UTqPJaQlBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFFU/IlauVpXo5J7YkUSExMSRWJ7kqNXWrlaWKORfGJFERMTEUVifJGjAP84UTk5UNT88gMOAAADAB/+jwh5BuoACAAgAEgAAAERIxElBwkBJwIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQSepP7lawHYAdhrk/5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQHMAv79AvZ7/mQBnHsEKFRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowAAAAIAH/6PCHkG6gAXAD8AAAAgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQUm/kzGwP7YUVRUUQEowMYBtMbAAShRVFRR/tjAAdcSEhJFYnyRo1daulpXo5F8YkUSEhISRWJ8kaNXWrpaV6ORfGJFBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaMAAQBc/9AFAgR2AAgAABcBETMRIRUhAdADjqT8TgKa/HIwA479ZQOzpPxxAAACADr/kATaBkMACwAUAAABFTMRIREzNSERIREBETMRFzcJARcDiqz8qKz+sASg/V6ktHT+hv6GdAPvpPzpAxek+6EEXwEa/SgC2LR0AXr+hnQAAAAEAB/+jwh5BuoAGABBAEkAbwAAASIHBgAHBhAXFgAXFiA3NgA3NhAnJgAnJgEOBAcGIicuBScmNDc+BTc2MhceBRcWFAcGBBYUBiImNDYBFyMnLgEjIgYVFBYXFhcWHQEjNTQmJyYnJjU0PgIzMhcWFx4BBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcCcCJjfZKlWFu7Wlmkk3xjRhISEhJGY3yTpFlau1tYpZJ9Y0YSEhIS/NE6OlU5OQFUAqEBBVJFQlItOEwjJaQJChU9my5Vc0RKPToqJywG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT6b1GTfGNGEhMTEkZjfJOkWFu7W1ilkn1jRRITExJFY32SpVhbu1tYNDpUOjpVOQI0FxRCSkY5MEEiLjU3SlVCGiQPHyRdozlkSigWFSkmaAAAAAADAB/+jwh5BuoAGAAhAEcAABMUFxYAFxYgNzYANzYQJyYAJyYgBwYABwYBNDYyFhQGIiYDND4CMzIXFhceAR8BIycuASMiBhUUFhcWFxYdASM1NCYnJicmH1RRASjAxgGzx8ABKFFUVFH+2MDH/k3GwP7YUVQD3TlVOjpVOe4uVXNESj06KicsAwKhAQVSRUJSLThMIyWkCQoVPZsCvdrHv/7YUlRUUgEov8cBs8fAAShRVFRR/tjAx/1+Kzk6VDo6AtI5ZEooFhUpJmg9FxRCSkY5MEEiLjU3SlVCGiQPHyRdAAACAIQACQMBBCQABwAtAAAkFhQGIiY0NgEuAScmJyYjIg4CFRQXFhceAR0BMzU2JyYnLgE1NDYzMhYfATMCADo6VTk5AVUDLScqOj1KRHNVLps8FgoJpAElJEw4LFFCRVEFAqHSOlU6OlU6AjI+aCYpFRYoSmQ5o10kHw8kGkJVSjg0LiJBMDhGSkIUAAEARP/QBOoEdgAIAAAlASE1IREzEQEE6vxyApr8TqQDjkMDj6T8TQKb/HIAAwBa/3YHEgYuABcAOQBBAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf8gYoDpqYGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjQAAAMAWv92BxIGLgAXADkAVAAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUFNzY3NjQuASIOAR0BMzU0NjIWFAYPARUhNSMEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/1VhSYVJDZkiGg5lyk/JBod4gG/6gYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOk3UhHTJlTiswWDkDBB4oHy8rGshvfQADAFr/dgcSBi4AFwA5AGQAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJTU+ATU0LgEjIg4BFTM0NjIWFAYrARUzMhYUBiMiJicjHgIzMj4BNTQmBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf9sDRCNWJDRGk5lSlDJyYhREQjJyghJCoBngM7aERKbzxKBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY4QAwlGMjBGJi9VOB4lHzUgbiA2IiEcOVYuKk40OUcABABa/3YHEgYuABcAOQBHAE8AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVASMGBwYHFSEVMzUzNSMHIzU2NzY3MwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/fLlSS8uJwEWnENDmJAgIhoxAwYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOASBvUE1LiVRUfwcFRDssTAAAAAADAFr/dgcSBi4AFwA5AFsAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJSIGByM3ITUhAzM+ATMyFhQGIyImJyMUHgEzMj4BNTQuAQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/YYsQQ8DCAEL/nYZkQwpGCMrKyMfLgWVO2hDRWs6L1QGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjmslIH19/rMTFi1JLCEaNVQvNF4+N1YxAAAEAFr/dgcSBi4AFwA4AFkAYgAABCA3PgE3NhAnLgEnJiAHDgEHBhAXHgEXATQ3PgM3NiAXHgMXFhAHDgMHBiAnLgMnJgUyPgE1NC4BIgcGByMmPgEzMhYXMy4CIyIOARUUHgITMhYUBiImNDYDBwFeoJruQUREQe6aoP6ioJruQUREQe6a/pc3GktfcD6BARyBPnBfSxo3NxpLX3A+gf7kgT5wX0saNwLGQ2s7MFVqJiQPAwQWLyAYJQagBj9jO0xzPyNBYDkhLCxBLCyKQ0Hum6ABXaCb7kFEREHum6D+o6Cb7kEDGY2BPnBfTBo2NhpMX3A+gf7lgT5wX0waNjYaTF9wPoGWNF47NVUwGhgqM04qFxIwSytIh1tCcE4pARMrPywsPysAAAMAWv92BxIGLgAXADkAQQAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlIRUDMxM1IQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/IMBDuat3P5PBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY6jA/5MAbh8AAAABQBa/3YHEgYuABcAOQBVAF4AZwAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlNT4BNTQuASIOARUUFhcVDgEVFB4BMj4BNTQmJzIWFAYiJjQ2EyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf9tzREOmiHaDpENUBQPnKYcj9PrRwmJjklJR0jKytFKysGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjhUDCUkwK0QnJ0QrMEkJAwZPOzJMKipMMjpQsyQ1JCQ1JP6JKD0oKD0oAAAABABa/3YHEgYuABcAOQBbAGMAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVASIOARUUHgEzMjc2NzMWDgEjIiYnIx4CMzI+ATU0LgICIiY0NjIWFARl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/UpDaz0yVTQ4JiQNAwQVLh8aJwahBz9kO09zPSJBYhlALS1ALAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOATA0Xjs1VTAaGCo1TSkXEjBLK0iGXEJwTin+7StAKytAAAAABQBa/3YHEgYuABcAOQBBAE4AWgAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIyUiDgEUHgEyPgE0LgECIicmNDc2MhcWFAcEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uBigOmpgIQTHA9PXCXcD09cCdIFhYWFUkVFhYGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjQQRoa5hkhIh7mFRv4sKi6oLCkpLKguAAQAWv92BxIGLgAXADkAQQBJAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjBRU3MxEzESMEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/u1igOmpgEYiwOlpQYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNF6LW/5aAjQAAAAEAFr/dgcSBi4AFwA5AEEAXQAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIwE3Njc2NC4BIg4BHQEzNTQ2MhYUBg8BFSE1IzUEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uFigOmpgHxhSYVJDZjiWg5lyk/JBod4gG/6QYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNP5NdSEdMmVOKzBYOQMEHigfLysayG99BAAAAAQAWv92BxIGLgAXADkAQQBsAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjATU+ATU0LgEjIg4BFTM0NjIWFAYrARUzMhYUBiMiJicjHgIzMj4BNTQmBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7hooDpqYCaTRBNWJCRWk5lSlDJyYgRUQjJyghJCoBngM7aERKbzxKBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY7Ci1v+WgI0/vADCUYyMEYmL1U4HiUfNSBuIDYiIRw5Vi4qTjQ5RwAFAFr/dgcSBi4AFwA5AEEATwBXAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjISMGBwYHFSEVMzUzNSMHIzU2NzY3MwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+4GLA6WlAsXlSTAuJgEVnUNDmJAgIhkyAwYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNG9QTUuJVFR/BwVEOyxMAAAABABa/3YHEgYuABcAOQBBAGMAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMFIgYHIzchNSEDMz4BMzIWFAYjIiYnIx4CMzI+ATU0LgEEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uHigOmpgI+LUAQAwgBC/52GZEMKRgjLCwjHy4FlQE6aUJGajswVAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNLUlIH19/rMTFi1JLCEaNVQvNF4+N1YxAAAABQBa/3YHEgYuABcAOQBBAGMAbAAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIwUiBwYHIyY+ATMyFhczLgIjIg4BFRQeAjMyPgE1NC4BAyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7g4oDpqYCRjYmJA8DBBYvIBglBqEHP2M7THM/I0FhOkRqPDFVZiAsLEEsLAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNLwaGCozTioXEjBLK0iHW0JwTik0Xjs1VTD+9iw/Kys/LAAABABa/3YHEgYuABcAOQBBAEkAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMFIRUDMxM1IQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+5+KBKWlAQ0BDuau3P5OBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY7Ci1v+WgI0fQP+TAG4fAAAAAAGAFr/dgcSBi4AFwA5AEEAXQBmAG8AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMBNT4BNTQuASIOARUUFhcVDgEVFB4BMj4BNTQmJzIWFAYiJjQ2EyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7dosDpaUCgTREOmiHaTpFNUBQPnKXcz9QrR0mJjkmJhwiLCxFKysGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjT+9QMJSTArRCcnRCswSQkDBk87MkwqKkwyOlCzJDUkJDUk/okoPSgoPSgAAAAFAFr/dgcSBi4AFwA5AEEAYwBrAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjJSIOARUUHgEzMjc2NzMWDgEjIiYnIx4CMzI+ATU0LgICIiY0NjIWFARl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+5WKA6amAgBDaz0yVTQ4JiQNAwUWLh8aJwWiB0BjPE5zPiNBYhlALS1ALAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNBA0Xjs1VTAaGCo1TSkXEjBLK0iGXEJwTin+7StAKytAAAUAWv92BxIGLgAXADkAVABhAG0AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVBTc2NzY0LgEiDgEdATM1NDYyFhQGDwEVITUjASIOARQeATI+ATQuAQIiJyY0NzYyFxYUBwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/D2FJhUkNmSIaDmXKT8kGh3iAb/qAiNLcTw8cJhwPD1vKEgVFxcVSBUWFgYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOk3UhHTJlTiswWDkDBB4oHy8rGshvfQHHRoa5hkhIh7mFRv4sKi6oLCkpLKguAAAAAQEcAKkFQgWNAEMAAAEHBhYfARY2PwE2NTQvAS4BDwEOAR8BBgcGBwYVFBceARcWMzI3Njc2NzYuAScmKwEiBgcGBwYHBiMiJyYnJjQ3Njc2AyZGEAMSKhIvD8kQEckQLxIqEgIQNIp1ckJEKiiTX2NsiXh0SUsJAQQNCw0POhUhAQYzMVBSXmJUUjAxMC5QUgQkThEvECYQAxLgExcZEt8SAhAmEC8ROgdKR3V5jGxiX5MoKkJAcHKIDxMSBwgeFV5OTSwuMi9SVMNTUTAyAAIBxgDFBJcE6wAPAB8AAAEzMhYVERQGKwEiJjURNDYFERQWOwEyNjURNCYrASIGA+xyFyIiF3IYISH98iIXchghIRhyFyIE6yIX/EwXIiIXA7QXIjn8TBciIhcDtBciIgAAAAABAccAlgVeBRoAIwAAASYnASQvAiYiBw4CBwYVERQXHgIXFjY3Nj8BNiUBPgE0BVYID/50/nsIBQ4HFAgGEA0DAwMDDRAGCBQHBQoECAGGAYsPEAL4DQoBAPsEAwcCAgIJEwoOK/xAKQ0LEgkCAwECAgUCBfsA/wodIQAAAQEZ/+cDmgW8AAUAAAkCNwkBA1v9vgJCP/3kAhwFvP0V/RYyArgCuQAAAAABASz/5wOtBbwABQAACQIXCQEBLAIc/eQ/AkL9vgWK/Uf9SDIC6gLrAAAAAAEA1gGaBqoEHAAFAAATFwkBNwHWMQK5Arkx/RYB2T8CHf3jPwJDAAABANYBhwaqBAkABQAACQEHCQEnA8D9RzEC6gLqMQHsAh0//b0CQz8AAQDN/94GswXFAAsAAAkCBwkBFwkBNwkBBnD9UP1QQwKv/VFDArACsEP9UQKvBcX9UAKwRP1R/VBEArD9UEQCsAKvAAABAaUBUQMOBFIABQAACQI3CQECz/7WASo//vwBBARS/n/+gDEBTwFQAAAAAAEBuAFRAyEEUgAFAAAJAhcJAQG4AQT+/D8BKv7WBCH+sP6xMQGAAYEAAAAAAQI/AiYFQQOQAAUAAAEXCQE3AQI/MgFPAU8y/n8CZkABBP78QAEqAAECPwITBUEDfQAFAAAJAQcJAScDwP6xMgGBAYEyAnkBBED+1gEqQAABAjYBSAVKBFsACwAACQIHCQEXCQE3CQEFBv66/rpEAUb+ukQBRgFGRP66AUYEW/66AUZD/rr+uUMBRv66QwFHAUYAAAIACv/XBjsHdABKAFgAAAEjBgcGBwYXFhcWFxYXFQYHBgcGBwYHBgcGJyYnJicmIyIHBgcGBwYHBicmJyYnJicmNTQ3PgE3NhcWFxYXFjMyNzY3Njc2FxYXFiU2NzYnDgIHBhcWNzYGCAEeIDwlMwEBQzBNJx0OFio5NCAwLzk+KigYLC8bLjM1MB0xKhYmJjw6MTUiNVk4PFFB13svOiE/LRQhFxMfEyxMK0tBV0d8/oM1HB0JSaFpHSAKT1FLBNwTHDZEXWyDZkkzGgsCLTJhU0wmOx0kAQELBxMVBw0NCBUSBwsCAiYfPilNgKe3qsCNb4MCAREJGRIGCwoGER4MEwQHHDHzQU9VUgNTektXTwYpJgAAAAAAACIBngABAAAAAAAAACYATgABAAAAAAABAAwAjwABAAAAAAACAAcArAABAAAAAAADAB0A8AABAAAAAAAEABQBOAABAAAAAAAFAA0BaQABAAAAAAAGABIBnQABAAAAAAAHACkCBAABAAAAAAAIAAkCQgABAAAAAAAJAAsCZAABAAAAAAAKBAsKiAABAAAAAAALABQOvgABAAAAAAAMABQO/QABAAAAAAANAL4QkAABAAAAAAAOADIRtQABAAAAAAAPAAwSAgABAAAAAAARAAcSHwADAAEECQAAAEwAAAADAAEECQABABgAdQADAAEECQACAA4AnAADAAEECQADADoAtAADAAEECQAEACgBDgADAAEECQAFABoBTQADAAEECQAGACQBdwADAAEECQAHAFIBsAADAAEECQAIABICLgADAAEECQAJABYCTAADAAEECQAKCBYCcAADAAEECQALACgOlAADAAEECQAMACgO0wADAAEECQANAXwPEgADAAEECQAOAGQRTwADAAEECQAPABgR6AADAAEECQARAA4SDwCpACAAMgAwADEANwAgAEEAcABwAGwAZQAgAEkAbgBjAC4AIABBAGwAbAAgAHIAaQBnAGgAdABzACAAcgBlAHMAZQByAHYAZQBkAC4AAKkgMjAxNyBBcHBsZSBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABTAEYAUABSAE8ASQBDAE8ATgBTACAANAA3ADAAOQAyAGMAYQAtADIAMAAxADYALgAwADMALgAyADIAAFNGUFJPSUNPTlMgNDcwOTJjYS0yMDE2LjAzLjIyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAFIAZQBnAHUAbABhAHIAAFNGIFBybyBJY29ucyBSZWd1bGFyAABWAGUAcgBzAGkAbwBuACAANAAuADIAMAAwAABWZXJzaW9uIDQuMjAwAABTAEYAUAByAG8ASQBjAG8AbgBzAC0AUgBlAGcAdQBsAGEAcgAAU0ZQcm9JY29ucy1SZWd1bGFyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGEAIAB0AHIAYQBkAGUAbQBhAHIAawAgAG8AZgAgAEEAcABwAGwAZQAgAEkAbgBjAC4AAFNGIFBybyBJY29ucyBpcyBhIHRyYWRlbWFyayBvZiBBcHBsZSBJbmMuAABBAHAAcABsAGUAIABJAG4AYwAAQXBwbGUgSW5jAABBAHAAcABsAGUAIABJAG4AYwAuAC4AAEFwcGxlIEluYy4uAABDAHIAZQBhAHQAZQBkACAAaQBuACAAMgAwADEANQAsACAAdABoAGUAIABvAHIAaQBnAGkAbgBhAGwAIABnAGwAeQBwAGgAIABmAG8AbgB0ACwAIABBAHAAcABsAGUAIABJAGMAbwBuAHMALAAgAHcAYQBzACAAcAByAG8AZAB1AGMAZQBkACAAdABvACAAdwBvAHIAawAgAGkAbgAgAHUAbgBpAHMAbwBuACAAdwBpAHQAaAAgAE0AeQByAGkAYQBkACAAUwBlAHQAIABQAHIAbwAgAGEAbgBkACAAcwBlAHIAdgBlAGQAIAB0AG8AIABzAHQAcgBlAG4AZwB0AGgAZQBuACAAaQBuAHQAZQByAGEAYwB0AGkAdgBlACAAbABpAG4AawBzACAAbwBuACAAdwBlAGIALgAgAEEAcABwAGwAZQAgAEkAYwBvAG4AcwAgAHcAbwB1AGwAZAAgAGwAYQB0AGUAcgAgAGIAZQBjAG8AbQBlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIAByAGUAZABlAHMAaQBnAG4AZQBkACAAdABvACAAYQBsAGkAZwBuACAAdABvACAAQQBwAHAAbABlACcAcwAgAG4AZQB3ACAAdAB5AHAAZQBmAGEAYwBlACwAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACwAIABpAG4AIAAyADAAMQA2AC4AIABUAGgAZQAgAHIAZQBkAGUAcwBpAGcAbgAgAGEAZABkAHIAZQBzAHMAZQBzACAAYQAgAG4AdQBtAGIAZQByACAAbwBmACAAaQBzAHMAdQBlAHMAIAB0AGgAYQB0ACAAdwBlAHIAZQAgAHAAcgBlAHMAZQBuAHQAIABpAG4AIABBAHAAcABsAGUAIABJAGMAbwBuAHMALgAgAEkAbQBwAHIAbwB2AGUAbQBlAG4AdABzACAAaQBuAGMAbAB1AGQAZQAgAG0AYQB0AGMAaABlAGQAIAB0AHkAcABlACAAbQBlAHQAcgBpAGMAcwAsACAAYgByAGEAbgBkACAASQBEACAAcwB0AGEAbgBkAGEAcgBkAGkAegBlAGQAIABBAHAAcABsAGUAIABsAG8AZwBvACAAYwBoAGEAcgBhAGMAdABlAHIALAAgAHcAZQBiACAAZgBvAG4AdAAgAG8AcAB0AGkAbQBpAHoAYQB0AGkAbwBuACwAIABjAHUAcwB0AG8AbQAgAGMAaABhAHIAYQBjAHQAZQByACAAcwBwAGEAYwBpAG4AZwAsACAAcABhAHIAZQBuAHQAIAB0AHkAcABlACAAYQBsAGkAZwBuAG0AZQBuAHQALAAgAGUAdABjAC4AIABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGQAZQBzAGkAZwBuAGUAZAAgAHQAbwAgAGIAZQAgAGEAZABhAHAAdABhAGIAbABlACAAdABvACAAdwBvAHIAawAgAHcAaQB0AGgAIABvAHUAcgAgAHQAdwBvACAAdwBlAGIAIABmAG8AbgB0ACAAZgBhAG0AaQBsAGkAZQBzACwAIABTAEYAIABQAHIAbwAgAEQAaQBzAHAAbABhAHkAIABhAG4AZAAgAFMARgAgAFAAcgBvACAAVABlAHgAdAAuACAAVABoAGUAIAB3AGUAYgAgAGYAbwBuAHQAIABmAGEAbQBpAGwAaQBlAHMAIABoAGEAdgBlACAAZABpAGYAZgBlAHIAaQBuAGcAIAB4AGgAZQBpAGcAaAB0AHMALAAgAGQAZQBzAGMAZQBuAGQAZQByACAAYQBuAGQAIABhAHMAYwBlAG4AZABlAHIAIABlAHgAdABlAG4AcwBpAG8AbgBzACwAIABhAGQAdgBhAG4AYwBlAG0AZQBuAHQALAAgAGMAbwB1AG4AdABlAHIAcwAsACAAYQBuAGQAIABiAG8AdwBsAHMALgAgAFQAaABlAHMAZQAgAGQAaQBmAGYAZQByAGUAbgBjAGUAcwAgAHcAZQByAGUAIABwAHUAcgBwAG8AcwBlAGwAeQAgAG0AYQBkAGUAIAB0AG8AIABvAHAAdABpAG0AaQB6AGUAIAB0AGgAZQAgAGwAZQBnAGkAYgBpAGwAaQB0AHkAIABvAGYAIABlAGEAYwBoACAAZgBhAG0AaQBsAHkAIABpAG4AIAB0AGgAZQAgAHQAeQBwAGUAIABzAGkAegBlACAAZgBvAHIAIAB3AGgAaQBjAGgAIAB0AGgAZQB5ACAAYQByAGUAIAB1AHQAaQBsAGkAegBlAGQALgAgAFQAaABlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIABjAGgAYQByAGEAYwB0AGUAcgAgAHMAZQB0ACAAaQBuAGMAbAB1AGQAZQBzACAAQwBUAEEAIABpAGMAbwBuAG8AZwByAGEAcABoAHkALAAgAFUASQAgAGUAbABlAG0AZQBuAHQAcwAsACAAYQBuAGQAIABpAG4AdABlAHIAbgBhAGwAIAB1AHMAZQAgAHMAcABlAGMAaQBhAGwAIABjAGgAYQByAGEAYwB0AGUAcgBzACAAYQBuAGQAIABpAHMAIABhAHYAYQBpAGwAYQBiAGwAZQAgAGEAcwAgAGEAIABmAGEAbQBpAGwAeQAgAG8AZgAgAHQAcgB1AGUAIAB0AHkAcABlACAAZgBvAG4AdABzACAAaQBuACAAZgBvAHUAcgAgAHcAZQBpAGcAaAB0AHMALgAAQ3JlYXRlZCBpbiAyMDE1LCB0aGUgb3JpZ2luYWwgZ2x5cGggZm9udCwgQXBwbGUgSWNvbnMsIHdhcyBwcm9kdWNlZCB0byB3b3JrIGluIHVuaXNvbiB3aXRoIE15cmlhZCBTZXQgUHJvIGFuZCBzZXJ2ZWQgdG8gc3RyZW5ndGhlbiBpbnRlcmFjdGl2ZSBsaW5rcyBvbiB3ZWIuIEFwcGxlIEljb25zIHdvdWxkIGxhdGVyIGJlY29tZSBTRiBQcm8gSWNvbnMgcmVkZXNpZ25lZCB0byBhbGlnbiB0byBBcHBsZSdzIG5ldyB0eXBlZmFjZSwgU2FuIEZyYW5jaXNjbywgaW4gMjAxNi4gVGhlIHJlZGVzaWduIGFkZHJlc3NlcyBhIG51bWJlciBvZiBpc3N1ZXMgdGhhdCB3ZXJlIHByZXNlbnQgaW4gQXBwbGUgSWNvbnMuIEltcHJvdmVtZW50cyBpbmNsdWRlIG1hdGNoZWQgdHlwZSBtZXRyaWNzLCBicmFuZCBJRCBzdGFuZGFyZGl6ZWQgQXBwbGUgbG9nbyBjaGFyYWN0ZXIsIHdlYiBmb250IG9wdGltaXphdGlvbiwgY3VzdG9tIGNoYXJhY3RlciBzcGFjaW5nLCBwYXJlbnQgdHlwZSBhbGlnbm1lbnQsIGV0Yy4gU0YgUHJvIEljb25zIGlzIGRlc2lnbmVkIHRvIGJlIGFkYXB0YWJsZSB0byB3b3JrIHdpdGggb3VyIHR3byB3ZWIgZm9udCBmYW1pbGllcywgU0YgUHJvIERpc3BsYXkgYW5kIFNGIFBybyBUZXh0LiBUaGUgd2ViIGZvbnQgZmFtaWxpZXMgaGF2ZSBkaWZmZXJpbmcgeGhlaWdodHMsIGRlc2NlbmRlciBhbmQgYXNjZW5kZXIgZXh0ZW5zaW9ucywgYWR2YW5jZW1lbnQsIGNvdW50ZXJzLCBhbmQgYm93bHMuIFRoZXNlIGRpZmZlcmVuY2VzIHdlcmUgcHVycG9zZWx5IG1hZGUgdG8gb3B0aW1pemUgdGhlIGxlZ2liaWxpdHkgb2YgZWFjaCBmYW1pbHkgaW4gdGhlIHR5cGUgc2l6ZSBmb3Igd2hpY2ggdGhleSBhcmUgdXRpbGl6ZWQuIFRoZSBTRiBQcm8gSWNvbnMgY2hhcmFjdGVyIHNldCBpbmNsdWRlcyBDVEEgaWNvbm9ncmFwaHksIFVJIGVsZW1lbnRzLCBhbmQgaW50ZXJuYWwgdXNlIHNwZWNpYWwgY2hhcmFjdGVycyBhbmQgaXMgYXZhaWxhYmxlIGFzIGEgZmFtaWx5IG9mIHRydWUgdHlwZSBmb250cyBpbiBmb3VyIHdlaWdodHMuAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABUAGgAaQBzACAAZgBvAG4AdAAgAHMAbwBmAHQAdwBhAHIAZQAgAGkAcwAgAHQAaABlACAAdgBhAGwAdQBhAGIAbABlACAAcAByAG8AcABlAHIAdAB5ACAAbwBmACAAQQBwAHAAbABlACAASQBuAGMALgAgAHwAIABJAG4AdABlAHIAYQBjAHQAaQB2AGUAIABNAEEAUgBDAE8ATQAuACAAUgBlAHAAbABpAGMAYQB0AGkAbwBuACwAIABhAGwAdABlAHIAYQB0AGkAbwBuACwAIABhAG4AZAAgAGQAaQBzAHQAcgBpAGIAdQB0AGkAbwBuACAAbwBmACAAdABoAGkAcwAgAGYAbwBuAHQAIABpAHMAIABzAHQAcgBpAGMAdABsAHkAIABwAHIAbwBoAGkAYgBpAHQAZQBkAC4AIABBAHAAcABsAGUAIABJAG4AYwAuACAAYQBsAGwAIAByAGkAZwBoAHQAcwAgAHIAZQBzAGUAcgB2AGUAZAAuAABUaGlzIGZvbnQgc29mdHdhcmUgaXMgdGhlIHZhbHVhYmxlIHByb3BlcnR5IG9mIEFwcGxlIEluYy4gfCBJbnRlcmFjdGl2ZSBNQVJDT00uIFJlcGxpY2F0aW9uLCBhbHRlcmF0aW9uLCBhbmQgZGlzdHJpYnV0aW9uIG9mIHRoaXMgZm9udCBpcyBzdHJpY3RseSBwcm9oaWJpdGVkLiBBcHBsZSBJbmMuIGFsbCByaWdodHMgcmVzZXJ2ZWQuAABoAHQAdABwAHMAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAGwAZQBnAGEAbAAvAGkAbgB0AGUAbABsAGUAYwB0AHUAYQBsAC0AcAByAG8AcABlAHIAdAB5AC8AAGh0dHBzOi8vd3d3LmFwcGxlLmNvbS9sZWdhbC9pbnRlbGxlY3R1YWwtcHJvcGVydHkvAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAAAAAAACAAAAAAAAABQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwAAAABAAIBAgEDAQQBBQEGAQcBCAEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYBFwEYARkBGgEbARwBHQEeAR8BIAEhASIBIwEkASUBJgEnASgBKQEqAA4A7wErASwAIgEtAS4BLwEwATEBMgEzATQBNQE2ATcBOAE5AToBOwE8AT0BPgE/AUABQQFCAUMBRAFFAUYBRwFIAUkBSgFLAUwBTQFOAU8BUAFRAVIBUwFUAVUBVgFXAVgBWQFaAVsBXAFdAV4BXwFgAWEBYgFjAWQBZQFmANIDZ2FwCWZ1bGxibG9jawV1RjMxQQV1RjMxQgV1RjMxQwV1RjMxRAV1RjMyMgV1RjMyMwV1RjMyNAV1RjMyNQV1RjMyNgV1RjMyNwV1RjMyOAV1RjMyOQV1RjMyRgV1RjMzNAV1RjMzNQV1RjMzNgV1RjMzNwV1RjMzOAV1RjMzOQV1RjMzQQV1RjMzQgV1RjMzQwV1RjMzRAV1RjMzRQV1RjMzRgV1RjM0MAV1RjM0MQV1RjM1NgV1RjM1RgV1RjM2NQtjaGV2cm9ubGVmdAxjaGV2cm9ucmlnaHQJY2hldnJvbnVwC2NoZXZyb25kb3duEWNoZXZyb25sZWZ0Y2lyY2xlEmNoZXZyb25yaWdodGNpcmNsZQ9jaGV2cm9udXBjaXJjbGURY2hldnJvbmRvd25jaXJjbGUFcmVzZXQFY2hlY2sLZXhjbGFtYXRpb24LcmVzZXRjaXJjbGUKcGx1c2NpcmNsZQttaW51c2NpcmNsZQtjaGVja2NpcmNsZRFleGNsYW1hdGlvbmNpcmNsZQ5xdWVzdGlvbmNpcmNsZQpyZXNldHNvbGlkCXBsdXNzb2xpZAptaW51c3NvbGlkCmNoZWNrc29saWQQZXhjbGFtYXRpb25zb2xpZA1xdWVzdGlvbnNvbGlkBHBsYXkFcGF1c2UEc3RvcAZyZXBsYXkEaW5mbwhkb3dubG9hZAZjaXJjbGUIZXh0ZXJuYWwFc2hhcmUTcXVlc3Rpb25fY2lyY2xlX3J0bBJxdWVzdGlvbl9zb2xpZF9ydGwMcXVlc3Rpb25fcnRsDGV4dGVybmFsX3J0bAlzZWN0aW9uMDEJc2VjdGlvbjAyCXNlY3Rpb24wMwlzZWN0aW9uMDQJc2VjdGlvbjA1CXNlY3Rpb24wNglzZWN0aW9uMDcJc2VjdGlvbjA4CXNlY3Rpb24wOQlzZWN0aW9uMTAJc2VjdGlvbjExCXNlY3Rpb24xMglzZWN0aW9uMTMJc2VjdGlvbjE0CXNlY3Rpb24xNQlzZWN0aW9uMTYJc2VjdGlvbjE3CXNlY3Rpb24xOAlzZWN0aW9uMTkJc2VjdGlvbjIwC3ZpZGVvcmVwbGF5CnZpZGVvcGF1c2UJdmlkZW9wbGF5CnBhZGRsZWxlZnQLcGFkZGxlcmlnaHQIcGFkZGxldXAKcGFkZGxlZG93bgptb2RhbGNsb3NlD3BhZGRsZWxlZnRzaG9ydBBwYWRkbGVyaWdodHNob3J0DXBhZGRsZXVwc2hvcnQPcGFkZGxlZG93bnNob3J0D21vZGFsY2xvc2VzaG9ydAAAAAAAAf//AAIAAQAAAAwAAAAWAAAAAgABAAMAawABAAQAAAACAAAAAAAAAAEAAAAA2pIEAQAAAADXPJGTAAAAANc8kZM=)
        format("truetype");
      font-weight: 400;
      font-style: normal;
    }
    .channel-html .icon-copy {
      display: inline;
    }
    .channel-html .icon.icon-after {
      display: inline-block;
      padding-top: 2px;
      background-size: 5em 100%;
      background-position: -60px center;
    }
    .channel-html .link-standalone:link:link {
      text-decoration: none;
    }
    .channel-html .link-standalone:link:link:hover {
      text-decoration: underline;
    }
    .channel-html .link-wrapper {
      display: inline-flex;
    }
    .channel-html .link-wrapper.link-standalone:link:link:focus {
      outline: 2px solid var(--sk-focus-color, #0071e3);
      outline-offset: var(--sk-focus-offset, 1px);
    }
    .channel-html.no-inline-media .inline-media-component-container .video-wrapper .fallback-frame,
    .channel-html.reduced-motion .inline-media-component-container:not(.with-media-ui) .fallback-frame {
      position: relative;
      opacity: 1;
      visibility: visible;
    }
    .channel-html.no-inline-media .inline-media-component-container .video-wrapper .video-element-stack,
    .channel-html.reduced-motion .inline-media-component-container:not(.with-media-ui) .video-element-stack {
      display: none;
      visibility: hidden;
    }
    .channel-html.safari .inline-media-component-container .video-wrapper video {
      mask-image: radial-gradient(white, white);
    }
    @keyframes inline-media-spin {
      0% {
        transform: rotate(0);
      }
      100% {
        transform: rotate(360deg);
      }
    }
    .channel-html.no-reduced-motion .control-item-accessibility-container .inline-media-ui-button.inline-media-ui-replay-only,
    .channel-html.no-reduced-motion .control-item-content-mask .inline-media-ui-button.inline-media-ui-replay-only,
    .channel-html.no-reduced-motion .inline-media-component-container.with-media-ui-text .inline-media-ui-text.inline-media-ui-replay-only,
    .channel-html.no-reduced-motion .inline-media-component-container:not(.fallback, .media-unloaded).with-media-ui-button .inline-media-ui-button.inline-media-ui-replay-only {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }
    .channel-html.no-reduced-motion .control-item-accessibility-container .inline-media-ui-button.inline-media-ui-replay-only.loaded.ended,
    .channel-html.no-reduced-motion .control-item-content-mask .inline-media-ui-button.inline-media-ui-replay-only.loaded.ended,
    .channel-html.no-reduced-motion .inline-media-component-container.with-media-ui-text .inline-media-ui-text.inline-media-ui-replay-only.loaded.ended,
    .channel-html.no-reduced-motion .inline-media-component-container:not(.fallback, .media-unloaded).with-media-ui-button .inline-media-ui-button.inline-media-ui-replay-only.loaded.ended {
      transition: opacity 0.4s ease-in-out;
      opacity: 1;
      visibility: visible;
      pointer-events: all;
    }
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer {
      --card-button-fade-out-opacity-anim-duration: 400ms;
      --card-button-fade-out-opacity-anim-delay: 350ms;
      --card-button-fade-in-opacity-anim-duration: 50ms;
      --card-content-fade-out-opacity-anim-duration: 300ms;
      --card-content-fade-in-opacity-anim-duration: 600ms;
      --card-content-fade-in-opacity-anim-delay: 250ms;
      --card-content-y-anim-amount: var(--product-viewer-ref-border-radius);
      --card-content-fade-out-y-anim-duration: 400ms;
      --card-content-fade-in-y-anim-duration: 400ms;
      --card-content-image-fade-out-opacity-anim-duration: 200ms;
      --card-content-image-fade-in-opacity-anim-duration: 200ms;
      --card-content-image-fade-in-opacity-anim-delay: 250ms;
      --blur-amount: 0px;
    }
    .no-small-breakpoint.channel-html[dir="rtl"] .all-access-pass--product-viewer,
    .no-small-breakpoint.channel-html[dir="rtl"] .product-viewer-component {
      direction: ltr;
    }
    .no-small-breakpoint.channel-html.no-js .all-access-pass--product-viewer {
      pointer-events: all;
    }
    .no-small-breakpoint.channel-html.reduced-motion .all-access-pass--product-viewer {
      --card-button-fade-out-opacity-anim-duration: 0ms;
      --card-button-fade-out-opacity-anim-delay: 0ms;
      --card-button-fade-in-opacity-anim-duration: 0ms;
      --card-content-fade-out-opacity-anim-duration: 0ms;
      --card-content-fade-in-opacity-anim-duration: 0ms;
      --card-content-fade-in-opacity-anim-delay: 0ms;
      --card-content-y-anim-amount: 0ms;
      --card-content-fade-out-y-anim-duration: 0ms;
      --card-content-fade-in-y-anim-duration: 0ms;
      --card-content-image-fade-out-opacity-anim-duration: 0ms;
      --card-content-image-fade-in-opacity-anim-duration: 0ms;
      --card-content-image-fade-in-opacity-anim-delay: 0ms;
      --blur-amount: 20px;
    }
    .channel-html.reduced-motion .all-access-pass--product-viewer {
      --label-offset-t-duration-enter: 0ms;
      --label-offset-t-duration-exit: 0ms;
      --label-offset-t-delay: 0ms;
      --label-offset-o-duration-enter: 0ms;
      --label-offset-o-duration-exit: 0ms;
      --label-offset-o-delay: 0ms;
      --content-offset-y-duration-enter: 0ms;
      --content-offset-y-duration-exit: 0ms;
      --content-offset-y-delay: 0ms;
      --content-offset-o-duration-enter: 0ms;
      --content-offset-o-duration-exit: 0ms;
      --content-offset-o-delay: 0ms;
      --blur-amount: 20px;
    }
    .channel-html.no-js .all-access-pass--product-viewer {
      grid-area: 1/1;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-headline-touch-text,
    .channel-html .row.large-hide,
    .channel-html .section.large-hide,
    .channel-html.no-enhanced .product-viewer-container .product-viewer-enhanced,
    .channel-html.no-enhanced-rt .product-viewer-container .product-viewer-enhanced,
    .channel-html.no-js .all-access-pass--product-viewer .close-button,
    .channel-html.no-js .product-viewer-container .product-viewer-enhanced,
    .channel-html.small-breakpoint .controls .intro-element::before,
    .channel-html.small-breakpoint .controls .paddlenav-container,
    .channel-html.touch .product-viewer-enhanced .viewer-wrapper .loader .loader-headline-text {
      display: none;
    }
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer .close-button {
      place-content: center;
      pointer-events: auto;
      visibility: hidden;
      transform: scale(0);
    }
    .channel-html.no-enhanced .product-viewer-container .product-viewer-fallback,
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer .close-button.visible {
      visibility: visible;
    }
    .channel-html.small-breakpoint .all-access-pass--product-viewer .close-button {
      backdrop-filter: blur(20px);
      background-color: var(--aap-pv-beat-color);
      box-shadow: inset 0 0 0.5px 0 rgba(0, 0, 0, 0.11);
      display: block;
      height: 36px;
      margin-bottom: calc(var(--max-card-height) + 38px);
      margin-left: auto;
      margin-top: 20px;
      position: sticky;
      right: 20px;
      top: calc(20px + var(--r-localnav-gn-height));
      transition:
        visibility 0s linear 0.3s,
        background-color var(--app-pv-background-transition-duration) linear;
      visibility: hidden;
      width: 36px;
      z-index: 9999;
      -webkit-tap-highlight-color: transparent;
    }
    @media (hover: hover) {
      .channel-html.small-breakpoint .all-access-pass--product-viewer .close-button:hover {
        background-color: var(--aap-pv-beat-color-hover);
      }
      .channel-html.no-small-breakpoint .all-access-pass--product-viewer .close-button:hover .close-icon {
        background: var(--aap-pv-beat-color-hover);
      }
    }
    .channel-html.small-breakpoint .all-access-pass--product-viewer .close-button.visible {
      transition:
        visibility 0s linear 0s,
        background-color var(--app-pv-background-transition-duration) linear;
      visibility: visible;
    }
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer .close-button-wrapper {
      left: 0;
      width: 100%;
      height: 100%;
    }
    .channel-html.no-small-breakpoint .all-access-pass--product-viewer .close-button .close-icon {
      backdrop-filter: blur(20px);
      background-color: var(--aap-pv-beat-color);
      transition: background-color var(--app-pv-background-transition-duration) linear;
      border-radius: 50%;
      box-shadow: inset 0 0 0.5px 0 rgba(0, 0, 0, 0.11);
    }
    .channel-html.no-js .all-access-pass--product-viewer .landing-element-accessibility-container {
      z-index: -1;
    }
    .channel-html.no-small-breakpoint .controls {
      --ss: calc((1440px - var(--global-content-max-width)) / 2);
      pointer-events: auto;
      margin-left: min(var(--ss), 6.25vw);
    }
    .channel-html.small-breakpoint .controls .intro-element {
      border-radius: var(--aap-min-height);
      background-color: rgb(var(--aap-background-color-solid));
      bottom: 20px;
      box-sizing: border-box;
      height: var(--aap-min-height);
      left: 50%;
      opacity: 0;
      position: absolute;
      top: auto;
      transform: translateX(-50%) scale(0.01);
      width: var(--aap-min-height);
    }
    .channel-html.no-small-breakpoint .control-item.expanded .control-item-open {
      opacity: 0;
      transition: opacity var(--card-button-fade-in-opacity-anim-duration) ease-in-out var(--card-button-fade-in-opacity-anim-delay);
    }
    .channel-html.no-small-breakpoint .control-item-open {
      opacity: 1;
      transition: opacity var(--card-button-fade-out-opacity-anim-duration) ease-in-out var(--card-button-fade-out-opacity-anim-delay);
    }
    .channel-html.no-js .control-item-accessibility-container {
      visibility: visible;
      z-index: -1;
    }
    .channel-html.no-js .control-item-content {
      position: relative;
      pointer-events: all;
    }
    .channel-html.no-small-breakpoint .control-item-content-inner {
      visibility: hidden;
      transform: translateY(var(--card-content-y-anim-amount));
      transition:
        opacity var(--card-content-fade-out-opacity-anim-duration) ease-in-out var(--card-content-fade-out-opacity-anim-delay),
        visibility var(--card-content-fade-out-opacity-anim-duration) ease-in-out var(--card-content-fade-out-opacity-anim-delay),
        transform var(--card-content-fade-out-y-anim-duration) ease-in-out var(--card-content-fade-out-y-anim-delay);
    }
    .no-small-breakpoint.channel-html[dir="rtl"] .control-item-content-inner {
      direction: rtl;
      text-align: right;
    }
    .channel-html.no-js .control-item-content .control-item-media {
      position: relative;
      max-width: var(--aap-expanded-width);
      opacity: 1;
    }
    .channel-html.no-small-breakpoint .control-item-content .control-item-media {
      display: none;
      transition:
        opacity var(--card-content-image-fade-out-opacity-anim-duration) ease-in-out var(--card-content-image-fade-out-opacity-anim-delay),
        display var(--card-content-image-fade-in-opacity-anim-duration) ease-in-out var(--card-content-image-fade-in-opacity-anim-delay);
      transition-behavior: allow-discrete;
    }
    .channel-html .product-viewer-enhanced.viewer--loading .viewer-wrapper .loader {
      opacity: 1;
      transition: none;
      visibility: visible;
    }
    .channel-html .product-viewer-enhanced.viewer--loading .viewer-wrapper .loader .loader-content {
      opacity: 1;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper {
      position: relative;
      display: grid;
      align-items: center;
      justify-items: center;
      width: 100%;
      height: var(--product-viewer-height);
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas {
      grid-area: 1/1;
      width: 100%;
      height: 100%;
      position: absolute;
      visibility: hidden;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas canvas {
      transition: opacity 0.7s cubic-bezier(0.34, 2.16, 0.64, 1);
      transition-delay: 0.25s;
      transform: translateX(var(--product-viewer-canvas-offset, 0));
    }
    .channel-html.no-small-breakpoint .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas {
      max-width: 1440px;
      height: 760px;
      width: calc(100vw - var(--global-scrollbar-width));
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader {
      grid-area: 1/1;
      display: grid;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition:
        opacity 0.4s ease-out 0.4s,
        visibility 0.4s ease-out 0.4s;
      visibility: hidden;
      width: 100%;
      height: 100%;
      z-index: 1;
      background-color: var(--global-section-background-color-alt);
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-background {
      backdrop-filter: blur(15px);
      background-color: rgb(var(--aap-background-color-solid) / 0.72);
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 2;
      grid-area: 1/1;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-content {
      align-items: center;
      display: flex;
      flex-direction: column;
      gap: 32px;
      justify-content: center;
      opacity: 1;
      transition: opacity 0.4s ease-out;
      z-index: 3;
      grid-area: 1/1;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-headline {
      max-width: 426px;
      text-align: center;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-progress {
      background: rgb(var(--aap-background-color-solid) / 0.32);
      border-radius: 4px;
      height: 8px;
      margin-top: 0;
      overflow: hidden;
      position: relative;
      width: 140px;
      z-index: 2;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-progress-indicator {
      --progress: -100%;
      background: var(--sk-headline-text-color);
      border-radius: 4px;
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      transform: translateX(var(--progress));
      transform-origin: left;
      width: 100%;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-progress-indicator.animate {
      transition: transform 0.5s ease-out;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .loader .preview {
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      grid-area: 1/1;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .viewer-hit-area {
      grid-area: 1/1;
      width: var(--product-viewer-hit-area-width, 100%);
      height: var(--product-viewer-hit-area-height, 100%);
      margin-top: var(--product-viewer-hit-area-offset-y, 0);
      margin-left: var(--product-viewer-hit-area-offset-x, 0);
      box-sizing: border-box;
      justify-content: center;
      align-items: center;
      display: flex;
      user-select: none;
      border-radius: var(--product-viewer-hit-area-border-radius, 0);
      z-index: 1;
      touch-action: pinch-zoom;
      transform: translateX(var(--product-viewer-canvas-offset, 0));
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .viewer-hit-area.debug {
      border: 3px solid #ff4500;
      color: #ff4500;
    }
    .channel-html .product-viewer-enhanced .viewer-wrapper .viewer-hit-area.debug::after {
      content: "hit area";
    }
    .channel-html.no-js .product-viewer-container {
      height: initial;
      grid-area: 1/1;
      position: relative;
    }
    .channel-html.no-js .product-viewer-media-gallery .product-viewer-media,
    .channel-html.no-js .product-viewer.gallery .product-viewer-media {
      opacity: 1;
      position: relative;
      height: initial;
    }
    .channel-html.desktop .product-viewer-media-gallery .product-viewer-media,
    .channel-html.desktop .product-viewer.gallery {
      will-change: transform, opacity;
    }
    .js.no-reduced-motion.channel-html.no-small-breakpoint .product-viewer-media-gallery .product-viewer-media {
      visibility: hidden;
      display: none;
    }
    .channel-html.no-js .product-viewer-component .colornav-gallery .gallery-item,
    .channel-html.no-js .product-viewer-component .product-viewer-fallback .gallery-item {
      grid-area: unset;
    }
    .channel-html.small-breakpoint .tour-engaged .all-access-pass--product-viewer .close-button {
      pointer-events: auto;
    }
    .channel-html.no-small-breakpoint .product-viewer-component .expanded .control-item-content-inner {
      visibility: visible;
      transform: translateY(0);
      transition:
        opacity var(--card-content-fade-in-opacity-anim-duration) ease-in-out var(--card-content-fade-in-opacity-anim-delay),
        transform var(--card-content-fade-in-y-anim-duration) ease-in-out var(--card-content-fade-in-y-anim-delay);
    }
    .channel-html.no-small-breakpoint .product-viewer-component .expanded .control-item-media {
      opacity: 1;
      display: flex;
      margin-top: auto;
      position: relative;
      transition:
        opacity var(--card-content-image-fade-in-opacity-anim-duration) ease-in-out var(--card-content-image-fade-in-opacity-anim-delay),
        display var(--card-content-image-fade-in-opacity-anim-duration) ease-in-out var(--card-content-image-fade-in-opacity-anim-delay);
      transition-behavior: allow-discrete;
    }
    .channel-html.no-js .product-viewer-component {
      height: initial;
      display: grid;
    }
    .channel-html.small-breakpoint .product-viewer-component {
      --clip-path-progress: 0;
      border: none;
      clip-path: unset;
      overflow: unset;
      background-color: transparent;
    }
    .channel-html .product-viewer-container .product-viewer-enhanced {
      grid-area: 1/1;
      place-content: center;
    }
    .channel-html .section {
      display: flex;
      position: relative;
      overflow-x: hidden;
      background-color: var(--sk-body-background-color, #fff);
      color: var(--sk-body-text-color, #1d1d1f);
    }
    .channel-html .section .section-content {
      background-color: inherit;
      color: inherit;
      margin-inline-start: auto;
      margin-inline-end: auto;
      width: 980px;
    }
    .channel-html .stat {
      --sk-stat-currency-offset: -0.375em;
      --sk-stat-caption-lines-top: 1;
      --sk-stat-caption-lines-bottom: 1;
      --sk-stat-margin-top: calc(1em * var(--sk-stat-caption-lines-top));
      --sk-stat-margin-bottom: calc(1em * var(--sk-stat-caption-lines-bottom));
      margin-inline-end: 2em;
      color: var(--sk-stat-value-color);
      box-sizing: border-box;
      display: inline-block;
      font-size: 20px;
      min-width: 5em;
      position: relative;
      z-index: 1;
      white-space: normal;
      margin: 0;
    }
    .channel-html .stat .stat-content {
      margin-top: var(--sk-stat-margin-top);
      margin-bottom: var(--sk-stat-margin-bottom);
      padding-top: 4px;
      padding-bottom: 2px;
      position: relative;
      z-index: 1;
      margin: 0 !important;
    }
    .channel-html .stat .stat-value {
      display: block;
      inset-inline-start: -2px;
      white-space: normal;
      position: relative;
      z-index: 1;
      font-size: 48px;
      line-height: 1;
      font-weight: 600;
      letter-spacing: -0.003em;
      font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .channel-html .stat .stat-caption {
      color: var(--sk-stat-caption-color);
      box-sizing: border-box;
      display: block;
      position: absolute;
      inset-inline-start: 0;
      top: 100%;
      width: 100%;
      z-index: 1;
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: -0.016em;
      font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .channel-html .stat .stat-caption:first-child {
      top: auto;
      bottom: 100%;
    }
    .channel-html .stat-elevated {
      --sk-stat-currency-offset: -0.43em;
    }
    .channel-html .stat-elevated .stat-value {
      font-size: 64px;
      line-height: 1;
      font-weight: 600;
      letter-spacing: -0.009em;
      font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .channel-html .stat-elevated .stat-caption {
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: -0.016em;
      font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    body {
      margin: 0;
      min-width: 320px;
      overflow-x: hidden;
    }
    .channel-html .channel-custom-font-custom-80-headline-super {
      font-size: 80px;
      line-height: 84px;
      font-weight: 600;
      letter-spacing: -0.015em;
    }
    .channel-html .channel-custom-font-custom-17-partner-message {
      font-size: 17px;
      line-height: 21px;
      font-weight: 500;
      letter-spacing: 0;
    }
    .channel-html .channel-custom-font-custom-40-headline-flex,
    .channel-html .channel-custom-font-custom-40-headline-reduced,
    .channel-html .channel-custom-font-custom-40-headline-upgraders {
      font-size: 40px;
      line-height: 44px;
      font-weight: 600;
      letter-spacing: 0;
    }
    .channel-html .channel-custom-font-custom-24-eyebrow-flex-modules {
      font-size: 24px;
      line-height: 28px;
      font-weight: 600;
      letter-spacing: 0.009000000000000001em;
    }
    .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
      font-size: 21px;
      line-height: 25px;
      font-weight: 600;
      letter-spacing: 0;
    }
    .channel-html .channel-custom-font-custom-21-eyebrow-reduced-flex,
    .channel-html .channel-custom-font-custom-21-subheadline-upgrader {
      font-size: 21px;
      line-height: 25px;
      font-weight: 600;
      letter-spacing: 0.011em;
    }
    .channel-html .channel-custom-font-custom-17-body-reduced-flex,
    .channel-html .channel-custom-font-custom-17-links {
      font-size: 17px;
      line-height: 25px;
      font-weight: 400;
      letter-spacing: 0;
    }
    .channel-html .channel-custom-font-custom-12-sosumi {
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
      letter-spacing: 0;
    }
    .channel-html .channel-custom-font-custom-17-dropdown-upgraders {
      font-size: 17px;
      line-height: 21px;
      font-weight: 600;
      letter-spacing: -0.022em;
    }
    .channel-html .channel-custom-font-custom-48-large-stat-upgraders {
      font-size: 48px;
      line-height: 55px;
      font-weight: 600;
      letter-spacing: -0.003em;
    }
    .channel-html .channel-custom-font-custom-21-caption-stat-upgrader-column2,
    .channel-html .channel-custom-font-custom-21-caption-upgrader {
      font-size: 21px;
      line-height: 25px;
      font-weight: 600;
      letter-spacing: -0.021em;
    }
    .channel-html .channel-custom-font-custom-12-disclaimer {
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
      letter-spacing: 0.009000000000000001em;
    }
    .channel-html .cWGBpQAD optgroup,
    .channel-html .cWGBpQAD option,
    .channel-html .cauzdowm {
      background-color: #000;
    }
    .channel-html .eYOlqMvj {
      margin-top: 100px;
      margin-bottom: 40px;
    }
    .channel-html .AxVTeNzM,
    .channel-html .CtVEKnyU,
    .channel-html .KcjSYDuQ,
    .channel-html .MbgULiuT,
    .channel-html .UJljRIqr,
    .channel-html .VXIHXmmA,
    .channel-html .tUlkJbBP,
    .channel-html .vyhubsyV {
      text-align: center;
    }
    .channel-html .TJAFHioy {
      justify-content: center;
      margin-bottom: 9px;
    }
    @supports (contain: inline-size) {
      .uZknhopH {
        width: 260px;
        height: 31px;
      }
      .QixTTypz {
        width: 1009px;
        height: 554px;
      }
      .FmmSHtub,
      .iwZKeXun {
        width: 980px;
        height: 520px;
      }
      .DnhRddmz {
        width: 480px;
        height: 548px;
      }
      .qCwiKMxb {
        width: 355px;
        height: 291px;
      }
      .OyCnYktm {
        width: 426px;
        height: 320px;
      }
      .GSaBqnny,
      .eRowewwA {
        width: 208px;
        height: 322px;
      }
      .KwBeZDBT {
        width: 354px;
        height: 460px;
      }
      .oveDnNzt {
        width: 617px;
        height: 294px;
      }
      .bHtRJnsc {
        width: 254px;
        height: 281px;
      }
      .RRiCmIvm,
      .unWQXVpw {
        width: 314px;
        height: 300px;
      }
      .sFNecxtw {
        width: 224px;
        height: 192px;
      }
      .KaWYRwBk,
      .eyUHrcqM {
        width: 314px;
        height: 287px;
      }
      .ieOxUjwh {
        width: 90px;
        height: 90px;
      }
      .eziTpJBW {
        width: 314px;
        height: 186px;
      }
      .PnYXrnnX {
        width: 230px;
        height: 292px;
      }
      .vLGNuxAA {
        width: 186px;
        height: 178px;
      }
      .wdrFQqnR {
        width: 151px;
        height: 167px;
      }
      .QVudohpT,
      .wsIbcdAi {
        width: 527px;
        height: 415px;
      }
      .IAlhaJxn {
        width: 407px;
        height: 292px;
      }
      .fqLahtxr {
        width: 93px;
        height: 19px;
      }
      .jSUpjTxD {
        width: 494px;
        height: 226px;
      }
      .OiHeKNyh {
        width: 71px;
        height: 19px;
      }
      .QrbTzEnr,
      .TguKijug,
      .zfQvioqp {
        width: 15px;
        height: 14px;
      }
      .JaiDdTpA {
        width: 201px;
        height: 321px;
      }
      @container (max-width:1068px) {
        .uZknhopH {
          width: 223px;
          height: 27px;
        }
        .QixTTypz {
          width: 708px;
          height: 389px;
        }
        .iwZKeXun {
          width: 692px;
          height: 470px;
        }
        .FmmSHtub {
          width: 692px;
          height: 463px;
        }
        .DnhRddmz {
          width: 336px;
          height: 470px;
        }
        .qCwiKMxb {
          width: 281px;
          height: 232px;
        }
        .OyCnYktm {
          width: 386px;
          height: 288px;
        }
        .eRowewwA {
          width: 168px;
          height: 261px;
        }
        .KwBeZDBT {
          width: 330px;
          height: 435px;
        }
        .oveDnNzt {
          width: 558px;
          height: 266px;
        }
        .bHtRJnsc {
          width: 206px;
          height: 229px;
        }
        .GSaBqnny {
          width: 166px;
          height: 261px;
        }
        .RRiCmIvm,
        .unWQXVpw {
          width: 217px;
          height: 217px;
        }
        .sFNecxtw {
          width: 153px;
          height: 130px;
        }
        .KaWYRwBk,
        .eyUHrcqM {
          width: 217px;
          height: 202px;
        }
        .ieOxUjwh {
          width: 61px;
          height: 61px;
        }
        .eziTpJBW {
          width: 216px;
          height: 137px;
        }
        .PnYXrnnX {
          width: 146px;
          height: 183px;
        }
        .vLGNuxAA {
          width: 144px;
          height: 136px;
        }
        .wdrFQqnR {
          width: 107px;
          height: 119px;
        }
        .QVudohpT,
        .wsIbcdAi {
          width: 322px;
          height: 355px;
        }
        .IAlhaJxn {
          width: 334px;
          height: 241px;
        }
        .fqLahtxr {
          width: 90px;
          height: 18px;
        }
        .jSUpjTxD {
          width: 366px;
          height: 170px;
        }
        .OiHeKNyh {
          width: 68px;
          height: 18px;
        }
        .QrbTzEnr,
        .TguKijug,
        .zfQvioqp {
          width: 15px;
          height: 14px;
        }
        .JaiDdTpA {
          width: 151px;
          height: 241px;
        }
      }
      @container (max-width:734px) {
        .uZknhopH {
          width: 179px;
          height: 22px;
        }
        .QixTTypz {
          width: 277px;
          height: 460px;
        }
        .iwZKeXun {
          width: 320px;
          height: 445px;
        }
        .DnhRddmz,
        .FmmSHtub {
          width: 320px;
          height: 420px;
        }
        .qCwiKMxb {
          width: 237px;
          height: 194px;
        }
        .OyCnYktm {
          width: 270px;
          height: 219px;
        }
        .GSaBqnny,
        .eRowewwA {
          width: 129px;
          height: 211px;
        }
        .KwBeZDBT {
          width: 289px;
          height: 377px;
        }
        .oveDnNzt {
          width: 171px;
          height: 255px;
        }
        .bHtRJnsc {
          width: 199px;
          height: 221px;
        }
        .RRiCmIvm,
        .unWQXVpw {
          width: 150px;
          height: 217px;
        }
        .sFNecxtw {
          width: 132px;
          height: 113px;
        }
        .eyUHrcqM {
          width: 150px;
          height: 135px;
        }
        .ieOxUjwh {
          width: 56px;
          height: 56px;
        }
        .eziTpJBW {
          width: 150px;
          height: 131px;
        }
        .PnYXrnnX {
          width: 122px;
          height: 156px;
        }
        .KaWYRwBk {
          width: 150px;
          height: 163px;
        }
        .vLGNuxAA {
          width: 122px;
          height: 117px;
        }
        .wdrFQqnR {
          width: 86px;
          height: 95px;
        }
        .QVudohpT,
        .wsIbcdAi {
          width: 320px;
          height: 220px;
        }
        .IAlhaJxn {
          width: 244px;
          height: 172px;
        }
        .fqLahtxr {
          width: 89px;
          height: 18px;
        }
        .jSUpjTxD {
          width: 278px;
          height: 131px;
        }
        .OiHeKNyh {
          width: 66px;
          height: 18px;
        }
        .QrbTzEnr,
        .TguKijug,
        .zfQvioqp {
          width: 15px;
          height: 14px;
        }
        .JaiDdTpA {
          width: 146px;
          height: 232px;
        }
      }
    }
    .channel-html .fEKoxzBF {
      color: #f5f5f7;
      margin-bottom: 59px;
      padding-left: 162px;
      padding-right: 162px;
      writing-mode: unset;
      inline-size: unset;
      transform: rotate(0);
      word-break: break-word;
    }
    .QixTTypz {
      margin-top: 0;
      margin-left: -15px;
      margin-bottom: -51px;
    }
    .channel-html .LbmUzzty {
      color: #f5f5f7;
      margin-bottom: 25px;
      padding-left: 164px;
      padding-right: 164px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: normal;
      word-break: break-word;
    }
    .cWGBpQAD,
    .channel-html .AMQYAHsf,
    .channel-html .AUiKjkvY,
    .channel-html .DOkbRQvX,
    .channel-html .DWAkQnrg,
    .channel-html .GuhmgXsH,
    .channel-html .HmbQYapK,
    .channel-html .IHworluN,
    .channel-html .IKAFClrS,
    .channel-html .JhbufKsN,
    .channel-html .NvnKIXvs,
    .channel-html .QPSNTXpV,
    .channel-html .QVFmHsxs,
    .channel-html .TlvWIKyV,
    .channel-html .TrOdUkmQ,
    .channel-html .VSbMncqd,
    .channel-html .YPHXMRzV,
    .channel-html .gEWcTHte,
    .channel-html .iYhpVpvp,
    .channel-html .ljqiqApt,
    .channel-html .nJQdcsyJ,
    .channel-html .txIwAUxZ {
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .channel-html .RQidQlrI.button {
      color: #f5f5f7;
      background: #000;
      border: 1px solid #f5f5f7;
    }
    .channel-html .RQidQlrI.button:hover {
      color: #1d1d1f;
      background: #f5f5f7;
    }
    .channel-html .FzvXOoAD,
    .channel-html .jPfbHbAE {
      background-color: #1d1d1f;
    }
    .channel-html .YjqWvCmi {
      margin-top: 15px;
      margin-bottom: 0;
    }
    .channel-html .TQLrXhvV,
    .channel-html .mmXhPOnh,
    .channel-html .wEvEiPvv {
      margin-left: 0;
      list-style: none;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    .channel-html .adKxxdnn,
    .channel-html .eMLUhzoO,
    .channel-html .epDRiDxj,
    .channel-html .hgAhfPpy,
    .channel-html .xXrMmOnM,
    .channel-html .xeILSPyx {
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .channel-html .MckLTHyz,
    .channel-html .aDkqDKsM,
    .channel-html .nkCfYyxJ,
    .channel-html .pTUropmP {
      grid-template-rows: 1fr;
      grid-template-columns: repeat(1, 980px);
      overflow: hidden;
    }
    .channel-html .CsbtbjyC .bentobox-item,
    .channel-html .CsbtbjyC .bentobox-item:before,
    .channel-html .HFlLuvxe .bentobox-item,
    .channel-html .HFlLuvxe .bentobox-item:before,
    .channel-html .Lrmbeoyl .bentobox-item,
    .channel-html .Lrmbeoyl .bentobox-item:before,
    .channel-html .MckLTHyz .bentobox-item,
    .channel-html .MckLTHyz .bentobox-item:before,
    .channel-html .OtgtFHBx .bentobox-item,
    .channel-html .OtgtFHBx .bentobox-item:before,
    .channel-html .PLogiXna .bentobox-item,
    .channel-html .PLogiXna .bentobox-item:before,
    .channel-html .THjBuisu .bentobox-item,
    .channel-html .THjBuisu .bentobox-item:before,
    .channel-html .VSPZZgsA .bentobox-item,
    .channel-html .VSPZZgsA .bentobox-item:before,
    .channel-html .ZgDOekyD .bentobox-item,
    .channel-html .ZgDOekyD .bentobox-item:before,
    .channel-html .aDkqDKsM .bentobox-item,
    .channel-html .aDkqDKsM .bentobox-item:before,
    .channel-html .aGOCrBoc .bentobox-item,
    .channel-html .aGOCrBoc .bentobox-item:before,
    .channel-html .aWdxrLsO .bentobox-item,
    .channel-html .aWdxrLsO .bentobox-item:before,
    .channel-html .djnVZbtw .bentobox-item,
    .channel-html .djnVZbtw .bentobox-item:before,
    .channel-html .dpZhyqyg .bentobox-item,
    .channel-html .dpZhyqyg .bentobox-item:before,
    .channel-html .jkGRCrpp .bentobox-item,
    .channel-html .jkGRCrpp .bentobox-item:before,
    .channel-html .lbnYsJvw .bentobox-item,
    .channel-html .lbnYsJvw .bentobox-item:before,
    .channel-html .lurrhenW .bentobox-item,
    .channel-html .lurrhenW .bentobox-item:before,
    .channel-html .nRShwBwM .bentobox-item,
    .channel-html .nRShwBwM .bentobox-item:before,
    .channel-html .nezerJqE .bentobox-item,
    .channel-html .nezerJqE .bentobox-item:before,
    .channel-html .nkCfYyxJ .bentobox-item,
    .channel-html .nkCfYyxJ .bentobox-item:before,
    .channel-html .oPzlRdyQ .bentobox-item,
    .channel-html .oPzlRdyQ .bentobox-item:before,
    .channel-html .oeziNknn .bentobox-item,
    .channel-html .oeziNknn .bentobox-item:before,
    .channel-html .pTUropmP .bentobox-item,
    .channel-html .pTUropmP .bentobox-item:before,
    .channel-html .qsILGJpm .bentobox-item,
    .channel-html .qsILGJpm .bentobox-item:before,
    .channel-html .ugBnBdtB .bentobox-item,
    .channel-html .ugBnBdtB .bentobox-item:before,
    .channel-html .yuPXRQvx .bentobox-item,
    .channel-html .yuPXRQvx .bentobox-item:before,
    .channel-html .zEkNrWAg .bentobox-item,
    .channel-html .zEkNrWAg .bentobox-item:before {
      border-radius: 18px;
    }
    .channel-html .BpJVCcoz,
    .channel-html .DFVaxapa,
    .channel-html .IEODSbyv,
    .channel-html .KbbnWstN,
    .channel-html .PBEptert,
    .channel-html .QlepACpI,
    .channel-html .QyoMQxBy,
    .channel-html .RLAvECyq,
    .channel-html .UujoTUuO,
    .channel-html .VwQbBtBm,
    .channel-html .WgVjQymB,
    .channel-html .gLUMPPtm,
    .channel-html .kwtQMnBo,
    .channel-html .miQxElnm,
    .channel-html .qFeKscxW,
    .channel-html .rUFiJVua,
    .channel-html .uWZqLqzY {
      background-color: #000;
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      overflow: hidden;
    }
    .channel-html .ABFtPcuN:before,
    .channel-html .AyrGrJuZ:before,
    .channel-html .BpJVCcoz:before,
    .channel-html .DFVaxapa:before,
    .channel-html .DOjrxrnH:before,
    .channel-html .GWeHkfyS:before,
    .channel-html .IEODSbyv:before,
    .channel-html .KbbnWstN:before,
    .channel-html .PBEptert:before,
    .channel-html .QlepACpI:before,
    .channel-html .QyoMQxBy:before,
    .channel-html .RLAvECyq:before,
    .channel-html .TelyDurN:before,
    .channel-html .UHYbxmnK:before,
    .channel-html .UujoTUuO:before,
    .channel-html .VwQbBtBm:before,
    .channel-html .WgVjQymB:before,
    .channel-html .XzPSTbrI:before,
    .channel-html .gLUMPPtm:before,
    .channel-html .jGmpvAsH:before,
    .channel-html .kwtQMnBo:before,
    .channel-html .lNLnksoq:before,
    .channel-html .miQxElnm:before,
    .channel-html .oYOaTDnK:before,
    .channel-html .qFeKscxW:before,
    .channel-html .rUFiJVua:before,
    .channel-html .uWZqLqzY:before {
      content: none;
    }
    .channel-html .VfMkaSyo {
      min-height: 420px;
      flex-grow: 0;
    }
    .channel-html .SVDPqwtB {
      margin-top: -520px;
      padding-top: 48px;
      padding-left: 40px;
      padding-right: 542px;
      text-align: left;
      z-index: 12;
    }
    .channel-html .FZqzIhsF,
    .channel-html .FxrMyEBF,
    .channel-html .QCuqORwR,
    .channel-html .QqRwugrz,
    .channel-html .RkFIsAwD,
    .channel-html .ScboVFoQ,
    .channel-html .UEMuKyzW,
    .channel-html .XjQbRxBj,
    .channel-html .ZGusQSvD,
    .channel-html .aQGbmgqL,
    .channel-html .hAjhXKym,
    .channel-html .ioYfDXzU,
    .channel-html .mcsyBDtz,
    .channel-html .pvAoNWrw {
      color: #00d959;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .AMQYAHsf,
    .channel-html .DOkbRQvX,
    .channel-html .DWAkQnrg,
    .channel-html .GuhmgXsH,
    .channel-html .TrOdUkmQ,
    .channel-html .YPHXMRzV,
    .channel-html .ljqiqApt {
      color: #f5f5f7;
      margin-top: 8px;
      word-break: break-word;
    }
    .channel-html .UWOkfDyX {
      min-height: 520px;
      flex-grow: 0;
    }
    .channel-html .VgGlUfnb {
      margin-top: -520px;
      padding-top: 48px;
      padding-left: 295px;
      padding-right: 295px;
      text-align: center;
      z-index: 12;
    }
    .channel-html .HtcRGhsx,
    .channel-html .aHBYTCwq,
    .channel-html .uhyOXPvP {
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 10px;
    }
    .channel-html .Lrmbeoyl,
    .channel-html .VSPZZgsA,
    .channel-html .aGOCrBoc,
    .channel-html .lurrhenW,
    .channel-html .nRShwBwM,
    .channel-html .zEkNrWAg {
      grid-template-rows: 1fr;
      grid-template-columns: repeat(1, 480px);
      overflow: hidden;
    }
    .channel-html .ffkUzNrU {
      min-height: 548px;
      flex-grow: 0;
    }
    .channel-html .aIYCPGyN {
      margin-top: -548px;
      padding-top: 48px;
      padding-left: 40px;
      padding-right: 83px;
      text-align: left;
      z-index: 12;
    }
    .channel-html .AUiKjkvY {
      color: #f5f5f7;
      margin-top: 8px;
      margin-right: 5px;
      word-break: break-word;
    }
    .channel-html .KbnooSxf,
    .channel-html .TquWsNAm,
    .channel-html .XUKatDrx {
      margin-top: 10px;
      margin-left: 10px;
      margin-bottom: 10px;
    }
    .channel-html .GWeHkfyS,
    .channel-html .TelyDurN,
    .channel-html .UHYbxmnK,
    .channel-html .jGmpvAsH,
    .channel-html .oYOaTDnK {
      background-color: #000;
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      overflow: visible;
    }
    .channel-html .qIHsHDpE,
    .channel-html .vQqLgGve {
      min-height: 548px;
      align-items: flex-end;
      flex-grow: 0;
    }
    .channel-html .wukksTpo {
      padding-top: 44px;
      padding-left: 40px;
      padding-right: 56px;
      text-align: left;
      z-index: 12;
    }
    .channel-html .QPSNTXpV {
      color: #f5f5f7;
      margin-top: 8px;
      padding-right: 0;
      word-break: break-word;
    }
    .channel-html .TlvWIKyV {
      margin-top: 11px;
      word-break: break-word;
    }
    .qCwiKMxb {
      margin-top: 33px;
      margin-left: 24px;
    }
    .channel-html .KSsrfKtK,
    .channel-html .kOFdilwM {
      min-height: 520px;
      align-items: flex-end;
      flex-grow: 0;
    }
    .channel-html .czkSgsyN {
      padding-top: 48px;
      padding-left: 292px;
      padding-right: 292px;
      text-align: center;
      z-index: 12;
    }
    .channel-html .QVFmHsxs {
      color: #f5f5f7;
      margin-top: 8px;
      margin-left: 8px;
      margin-right: 8px;
      word-break: break-word;
    }
    .OyCnYktm {
      margin-top: 32px;
      margin-left: -5px;
    }
    .channel-html .ysHBWPwM {
      padding-top: 48px;
      padding-left: 40px;
      padding-right: 22px;
      text-align: left;
      z-index: 12;
    }
    .GSaBqnny,
    .eRowewwA {
      margin-top: 30px;
      margin-left: 102px;
    }
    .channel-html .qXyLjzxe {
      min-height: 520px;
      align-items: flex-start;
      flex-grow: 0;
    }
    .channel-html .jZKUDVsm {
      margin-top: 60px;
    }
    .KwBeZDBT {
      margin-top: -16px;
      margin-left: 56px;
    }
    .channel-html .iEpSxywP {
      margin-top: -520px;
      padding-top: 55px;
      padding-left: 40px;
      padding-right: 40px;
      text-align: left;
      z-index: 12;
    }
    .channel-html .JcUdshwF {
      min-height: 564px;
      flex-grow: 0;
    }
    .channel-html .jwtsSFwl {
      padding-top: 48px;
      padding-left: 162px;
      padding-right: 162px;
      text-align: center;
      z-index: 12;
    }
    .bHtRJnsc,
    .channel-html .ISfNLurI {
      z-index: 1;
    }
    .channel-html .VSbMncqd {
      color: #f5f5f7;
      margin-top: 12px;
      padding-left: 135px;
      padding-right: 135px;
      word-break: break-word;
    }
    .oveDnNzt {
      margin-top: 39px;
      margin-left: 13px;
    }
    .channel-html .eBCnOOnG {
      min-height: 520px;
      margin-bottom: 28px;
      flex-grow: 0;
    }
    .bHtRJnsc {
      margin-top: 225px;
      margin-left: 116px;
    }
    .channel-html .aYHRFXuU {
      margin-top: -511px;
      padding-top: 45px;
      padding-left: 40px;
      padding-right: 112px;
      order: 1;
      z-index: 12;
    }
    .channel-html .VSKLaYnL {
      padding-top: 48px;
      padding-left: 40px;
      padding-right: 119px;
      text-align: left;
      z-index: 12;
    }
    .channel-html .OzWfZwpS {
      margin-top: 0;
      margin-left: -71.5px;
      margin-bottom: 94px;
    }
    .channel-html .oPzlRdyQ {
      grid-template-rows: 1fr;
      grid-template-columns: repeat(1, 1122px);
      overflow: visible;
    }
    .channel-html .ABFtPcuN {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      overflow: visible;
    }
    .channel-html .KrDvmFxe {
      margin-top: 45px;
      margin-bottom: 0;
      flex-grow: 0;
    }
    .channel-html .uXhKHPva {
      margin-top: 0;
      padding-top: 11px;
      padding-left: 69px;
      order: 1;
    }
    .channel-html .nJQdcsyJ {
      color: #f5f5f7;
      padding-right: 300px;
      word-break: break-word;
    }
    .channel-html .uEfnzSxc {
      margin-top: 38px;
      padding-left: 69px;
      order: 3;
    }
    .channel-html .HmbQYapK,
    .channel-html .IHworluN,
    .channel-html .IKAFClrS,
    .channel-html .JhbufKsN,
    .channel-html .NvnKIXvs,
    .channel-html .iYhpVpvp,
    .channel-html .txIwAUxZ {
      color: #86868b;
      word-break: break-word;
    }
    .channel-html .MihYTJwe {
      margin-top: 0;
      padding-top: 13px;
      padding-left: 42px;
      padding-right: 50px;
      text-align: left;
      order: 2;
    }
    .channel-html .cWGBpQAD .inline-label-container {
      display: block;
      width: 237px;
      color: #86868b;
      margin-bottom: 18px;
    }
    .channel-html .cWGBpQAD .selector-element-gallery {
      display: block;
      margin-left: -1px;
      --dropdown-width: 260px;
    }
    .channel-html .cWGBpQAD .selector-element-gallery .gallery-select {
      color: #f5f5f7;
      border-bottom: 1px solid #6e6e73;
    }
    .channel-html .UfMQNSpo {
      margin-top: 40px;
      padding-left: 71px;
      order: 4;
    }
    .channel-html .WPwDxXrO,
    .channel-html .wvFYvTnX {
      margin-bottom: 10px;
      margin-right: 10px;
    }
    .channel-html .CsbtbjyC,
    .channel-html .OtgtFHBx,
    .channel-html .PLogiXna,
    .channel-html .THjBuisu,
    .channel-html .ZgDOekyD,
    .channel-html .aWdxrLsO,
    .channel-html .djnVZbtw,
    .channel-html .jkGRCrpp,
    .channel-html .nezerJqE,
    .channel-html .oeziNknn,
    .channel-html .ugBnBdtB,
    .channel-html .yuPXRQvx {
      grid-template-rows: 1fr;
      grid-template-columns: repeat(1, 313px);
      overflow: hidden;
    }
    
    .channel-html .HCfsikvg,
    .channel-html .JwMMwYuy {
      min-height: 300px;
      align-items: flex-start;
      flex-grow: 0;
    }
    .channel-html .gEWcTHte {
      color: #86868b;
      margin-top: 54px;
      word-break: break-word;
    }
    .channel-html .EIWxHywZ,
    .channel-html .puktDfpu {
      color: #00d959;
      margin-top: 4px;
      padding-left: 10px;
      padding-right: 10px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .ANkvccqR,
    .channel-html .BrwAjiyr,
    .channel-html .FrRoixog,
    .channel-html .LMhTFTnl,
    .channel-html .QgtZvlBF,
    .channel-html .aDzkBryN {
      color: #86868b;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .LMhTFTnl {
      margin-top: 3px;
    }
    .channel-html .ANkvccqR,
    .channel-html .BrwAjiyr {
      margin-top: 0;
      margin-bottom: 0;
      padding-top: 0;
      padding-bottom: 0;
    }
    .channel-html .TVdExQnl,
    .channel-html .ZHYFAHyo {
      margin-left: 10px;
      margin-bottom: 10px;
    }
    .channel-html .AqcNyJqY,
    .channel-html .PqJGPMoN {
      margin-left: 10px;
      margin-bottom: 10px;
      margin-right: 10px;
    }
    .channel-html .BzisEdug,
    .channel-html .ELNWBJtw,
    .channel-html .GWRrRItv,
    .channel-html .JYmJkPxO,
    .channel-html .PJNDeTww,
    .channel-html .PejhMNoW,
    .channel-html .ahSwPvqk,
    .channel-html .eJKfsHwv,
    .channel-html .lzNUPpxV {
      min-height: 300px;
      flex-grow: 0;
    }
    .channel-html .BYcRWKuS,
    .channel-html .EyqxNizI,
    .channel-html .PnqOnvAJ,
    .channel-html .SGKrrpui {
      margin-top: -300px;
      text-align: center;
    }
    .channel-html .FrRoixog,
    .channel-html .QgtZvlBF {
      margin-top: 32px;
      padding-left: 38px;
      padding-right: 38px;
    }
    .channel-html .TVdExQnl {
      margin-right: 0;
    }
    .channel-html .aDzkBryN {
      margin-top: 26px;
      padding-left: 52px;
      padding-right: 52px;
    }
    .channel-html .HrXILcAp,
    .channel-html .WOOUfKrv {
      margin-top: 10px;
      margin-right: 10px;
    }
    .channel-html .AnLAxUvg,
    .channel-html .DdXuoDBo {
      margin-top: 32px;
      word-break: break-word;
      color: #86868b;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .eyUHrcqM {
      margin-top: 13px;
      margin-left: 0;
    }
    .channel-html .AnLAxUvg {
      padding-left: 64px;
      padding-right: 64px;
    }
    .channel-html .DdXuoDBo {
      padding-left: 80px;
      padding-right: 80px;
    }
    .channel-html .LEEsCPzo,
    .channel-html .XIcHSpne,
    .channel-html .oYtEDdsA {
      margin-top: 10px;
      margin-left: 10px;
      margin-right: 10px;
    }
    .ieOxUjwh {
      margin-top: 72px;
    }
    .channel-html .tAnunIBg {
      color: #86868b;
      margin-top: 15px;
      padding-left: 26px;
      padding-right: 26px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .fhoANsvr {
      margin-top: 10px;
      margin-left: 10px;
    }
    .eziTpJBW {
      margin-top: 114px;
    }
    .channel-html .zqxaYpnq {
      color: #86868b;
      margin-top: 20px;
      padding-left: 44px;
      padding-right: 44px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .gHlWBRxG {
      color: #86868b;
      margin-top: 66px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .BcLAltqW {
      color: #86868b;
      margin-top: 4px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .FPRHNluH {
      min-height: 300px;
      justify-content: center;
      flex-grow: 0;
    }
    .PnYXrnnX {
      margin-top: 8px;
      margin-left: 42px;
    }
    .channel-html .esvOninu {
      color: #86868b;
      margin-top: 32px;
      padding-left: 15px;
      padding-right: 15px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .VfiOqSBv,
    .channel-html .eRDoRIzL {
      margin-top: -300px;
      padding-top: 0;
      text-align: center;
    }
    .channel-html .mqSVsKrm {
      color: #86868b;
      margin-top: 51px;
      padding-left: 40px;
      padding-right: 40px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
      word-break: break-word;
    }
    .channel-html .TESrcVAo,
    .channel-html .cMxOTiqz,
    .channel-html .kWDsdcpB {
      color: #86868b;
      margin-top: 32px;
      word-break: break-word;
    }
    .channel-html .TESrcVAo {
      padding-left: 50px;
      padding-right: 50px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .channel-html .kWDsdcpB {
      padding-left: 53px;
      padding-right: 53px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .vLGNuxAA {
      margin-top: 4px;
      margin-left: 0;
    }
    .channel-html .cMxOTiqz {
      padding-left: 58px;
      padding-right: 58px;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .channel-html .KqdrSCwy,
    .channel-html .ikTdgBpi,
    .channel-html .mPkAryxP,
    .channel-html .miXMPXna,
    .channel-html .tiWlSBxd,
    .channel-html .yxkfsNpy {
      color: #1d1d1f;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .wdrFQqnR {
      margin-top: 30px;
      margin-left: 1px;
    }
    .channel-html .BvAqiSsI {
      align-items: center;
    }
    .channel-html .oQVzpGwC {
      align-items: center;
      margin-top: 97px;
    }
    .channel-html .KqdrSCwy {
      word-break: break-word;
    }
    .channel-html .miXMPXna {
      margin-top: 7px;
      word-break: break-word;
    }
    .channel-html .AruczUzX {
      margin-top: 43px;
      margin-bottom: 106px;
    }
    .channel-html .LZDsQvmB {
      margin-bottom: 10px;
    }
    .channel-html .HFlLuvxe,
    .channel-html .dpZhyqyg,
    .channel-html .lbnYsJvw,
    .channel-html .qsILGJpm {
      grid-gap: 10px;
      grid-template-rows: 1fr;
      grid-template-columns: repeat(1, 980px);
      overflow: hidden;
    }
    .channel-html .DOjrxrnH,
    .channel-html .XzPSTbrI {
      background-color: #f5f5f7;
      grid-column-start: 1;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 2;
      overflow: hidden;
    }
    .channel-html .AwBErZtJ,
    .channel-html .BwJpydnY,
    .channel-html .OxiLObrv,
    .channel-html .kxKFqMtS {
      min-height: 415px;
      align-items: center;
      flex-grow: 0;
    }
    .channel-html .ooMMjozn {
      padding: 42px 32px 40px 42px;
    }
    .channel-html .tiWlSBxd,
    .channel-html .yxkfsNpy {
      margin-left: -1px;
      word-break: break-word;
    }
    .channel-html .ikTdgBpi,
    .channel-html .mPkAryxP {
      margin-top: 8px;
      margin-left: -2px;
      word-break: break-word;
    }
    .channel-html .StSpoOyY,
    .channel-html .hBpbwYAV,
    .channel-html .suqDNjnU {
      color: #1d1d1f;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: normal;
      word-break: break-word;
    }
    .channel-html .hBpbwYAV,
    .channel-html .suqDNjnU {
      margin-top: 18px;
      margin-left: -1px;
      padding-right: 110px;
    }
    .channel-html .XuswKkoX {
      margin-top: 14px;
      margin-left: -1px;
      padding-right: 100px;
    }
    .channel-html .NmjHYbvB {
      margin-left: -37px;
      text-align: center;
    }
    .channel-html .IcxXevvm {
      padding: 40px 15px 40px 42px;
    }
    .channel-html .StSpoOyY {
      margin-top: 18px;
      margin-left: -1px;
      padding-right: 50px;
    }
    .channel-html .gQuqmRmm,
    .channel-html .msDElNyZ {
      color: #1d1d1f;
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        "Helvetica Neue",
        Helvetica,
        Arial,
        sans-serif;
    }
    .channel-html .ImRtaVAx {
      margin-left: -8px;
      padding-top: 10px;
      text-align: center;
    }
    .IAlhaJxn {
      margin-top: -4px;
      margin-left: -13px;
    }
    .channel-html .AyrGrJuZ,
    .channel-html .lNLnksoq {
      background-color: #f5f5f7;
      grid-column-start: 1;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 2;
      overflow: visible;
    }
    .channel-html .hWOacYpY {
      margin-top: 73px;
      margin-bottom: 81px;
      padding-left: 43px;
    }
    .channel-html .msDElNyZ {
      margin-top: 10px;
      margin-left: -2px;
      padding-right: 30px;
      word-break: break-word;
    }
    .channel-html .tvOqwqoy {
      margin-top: 0;
      margin-left: -84px;
      text-align: right;
    }
    .channel-html .AMDnJWtj {
      margin-top: 10px;
      margin-bottom: 50px;
    }
    .channel-html .BKmyMXwt {
      margin-top: 69px;
      margin-bottom: 81px;
      padding-left: 40px;
    }
    .channel-html .gQuqmRmm {
      margin-top: 9px;
      word-break: break-word;
    }
    .channel-html .DJaNXetA,
    .channel-html .JuooJTmK,
    .channel-html .ckWCSboQ,
    .channel-html .uIbBKbwL {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: normal;
      word-break: break-word;
    }
    .channel-html .srXEChBY {
      margin-top: 17px;
      margin-bottom: 18px;
      padding-left: 3px;
    }
    .channel-html .mkOtScuv {
      margin-left: 0;
      list-style: none;
    }
    .channel-html .mwaWGCud,
    .channel-html .xwzUiLyo {
      margin-bottom: 7px;
    }
    .channel-html .BUzcYOrn,
    .channel-html .OETEifzU,
    .channel-html .uYocBirv {
      margin-right: 11px;
    }
    .channel-html .hNeYRrst {
      padding-right: 33px;
    }
    .channel-html .QsAnESuY {
      margin-left: 1px;
    }
    .channel-html .UZLRjnyB {
      margin-top: 0;
      margin-left: -32px;
      text-align: center;
    }
    .channel-html .fTpxsMnx {
      background-color: #f5f5f7;
      overflow: hidden;
    }
    .channel-html .RmBAjHuM {
      margin-top: 16px;
      margin-bottom: 7px;
    }
    .channel-html .AhPiuXws,
    .channel-html .GTeBRfnx,
    .channel-html .HAohoqyJ,
    .channel-html .HlgaLzBa,
    .channel-html .IaUPdmne,
    .channel-html .JMvjufyw,
    .channel-html .KawPnkmI,
    .channel-html .MipLSppp,
    .channel-html .NeAhTlrT,
    .channel-html .NwfRIpzp,
    .channel-html .OrOxShxN,
    .channel-html .PSFeIxvY,
    .channel-html .QfbBBwsm,
    .channel-html .RrkXhSxj,
    .channel-html .URxqwjsH,
    .channel-html .WasgLoug,
    .channel-html .akocFNqC,
    .channel-html .dhvOHABq,
    .channel-html .ftGVleAN,
    .channel-html .iZjqfeBx,
    .channel-html .kgnzWbBG,
    .channel-html .nwtrCwui,
    .channel-html .otJhbGnA,
    .channel-html .ptbMeNyD,
    .channel-html .voCzAsAY,
    .channel-html .wFPXsIon,
    .channel-html .wdaylyzC,
    .channel-html .xVCkIapg {
      margin-bottom: 9px;
    }
    .channel-html .ckWCSboQ {
      color: #6e6e73;
      margin-left: 0;
    }
    .channel-html .cIPsmCvp {
      margin-left: 0;
      padding-left: 0;
      list-style: none;
    }
    .channel-html .ChrOvxsf,
    .channel-html .DJaLCoty,
    .channel-html .FxsxWSwu,
    .channel-html .LebbQvwU,
    .channel-html .QkpsvNyn,
    .channel-html .RsSUSUnW,
    .channel-html .SeSqfMBl,
    .channel-html .URemnZxh,
    .channel-html .UasHjqzl,
    .channel-html .UeyOUVvt,
    .channel-html .WgQXAApa,
    .channel-html .XaLfdFBT,
    .channel-html .XrBmCovg,
    .channel-html .YUQgLPAS,
    .channel-html .bBeQimtN,
    .channel-html .cGSdHlnn,
    .channel-html .duqCuDqc,
    .channel-html .enxcSTsZ,
    .channel-html .gFjQhFBf,
    .channel-html .lkuxkZww,
    .channel-html .medPOoyD,
    .channel-html .nuDBahAl,
    .channel-html .paTWUgrr,
    .channel-html .qEiGyqyY,
    .channel-html .vdWrOPxz,
    .channel-html .vpYknlBf,
    .channel-html .xgABpNBt {
      color: #6e6e73;
      margin-left: -0.5px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: normal;
      word-break: break-word;
    }
    .channel-html .qEiGyqyY,
    .channel-html .xgABpNBt {
      padding-right: 2px;
    }
    .channel-html .QkpsvNyn {
      padding-right: 17px;
    }
    .channel-html .XDSmUsBs {
      width: 100%;
      --grid-column: 3;
    }
    @container (min-width:1069px) {
      .channel-html .row.large-display-bleed {
        position: relative;
      }
      .channel-html .row.large-display-bleed .column {
        z-index: 1;
      }
      .channel-html .row.large-display-bleed::after,
      .channel-html .row.large-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 44px;
        left: -44px;
      }
      .channel-html .row.large-display-bleed::after {
        left: initial;
        right: -44px;
      }
    }
    @container (min-width:1441px) {
      @supports (-moz-appearance: none) {
        .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-background {
          clip-path: inset(0 round calc(var(--product-viewer-ref-border-radius) + 1px));
        }
      }
    }
    @container (min-width:735px) and (max-width:1068px) {
      .channel-html .responsive-image.has-medium .image-medium {
        display: inline-block;
      }
      .channel-html .responsive-image.has-medium .is-largest:not(.image-medium) {
        display: none;
      }
      .channel-html .row.medium-display-bleed {
        position: relative;
      }
      .channel-html .row.medium-display-bleed .column {
        z-index: 1;
      }
      .channel-html .row.medium-display-bleed::after,
      .channel-html .row.medium-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 22px;
        left: -22px;
      }
      .channel-html .row.medium-display-bleed::after {
        left: initial;
        right: -22px;
      }
    }
    @container (max-width:1068px) {
      .bHtRJnsc,
      .channel-html .ISfNLurI {
        z-index: 1;
      }
      .channel-html .medium-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }
      .channel-html .medium-6 {
        flex-basis: 50%;
        max-width: 50%;
      }
      .channel-html .medium-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }
      .channel-html .medium-12 {
        flex-basis: 100%;
        max-width: 100%;
      }
      .channel-html .bento-box.medium-hide,
      .channel-html .bentobox-item.medium-hide,
      .channel-html .channel-compare .compare-column-range-medium-2 #static-compare-header .compare-column:nth-of-type(4) ~ .compare-column,
      .channel-html .channel-compare .compare-column-range-medium-2 .compare-row:not(#static-compare-header) .compare-column:nth-of-type(3) ~ .compare-column,
      .channel-html .column.medium-hide,
      .channel-html .medium-hide,
      .channel-html .row.medium-hide,
      .channel-html .section.medium-hide {
        display: none;
      }
      .channel-html .column.medium-show,
      .channel-html .medium-show {
        display: block;
      }
      .channel-html .bentobox-item.medium-show,
      .channel-html .row.medium-show,
      .channel-html .section.medium-show {
        display: flex;
      }
      .channel-html .bento-box.medium-show {
        display: grid;
      }
      .channel-html .channel-compare .selector-element {
        border: none;
        border-radius: 0;
      }
      .channel-html .channel-compare .selector-element::before {
        width: 40px;
      }
      .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing,
      .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing:last-child,
      .channel-html .channel-compare .compare-row.compare-template-space-bottom .compare-column {
        margin-bottom: 30px;
      }
      .channel-html .channel-compare .price-container {
        font-size: 12px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: -0.016em;
        font-family:
          system-ui,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          "Helvetica Neue",
          Helvetica,
          Arial,
          sans-serif;
      }
      .channel-html .channel-compare .stat-content .stat-row {
        padding: 0 10px;
      }
      .channel-html .channel-compare .row-colors .colornav-heading {
        font-size: 12px;
      }
      .channel-html .channel-compare .compare-wrapper {
        display: flex;
        justify-content: center;
      }
      .channel-html .channel-compare .compare-section {
        padding-top: 53px;
        padding-bottom: 25px;
      }
      .channel-html .channel-compare .compare-row.compare-template-border-top .compare-column {
        padding-top: 30px;
      }
      .channel-html.no-small-breakpoint .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas {
        max-width: 1068px;
        height: 720px;
      }
      .channel-html .section .section-content {
        width: 692px;
      }
      .channel-html .channel-custom-font-custom-80-headline-super {
        font-size: 64px;
        line-height: 68px;
      }
      .channel-html .channel-custom-font-custom-40-headline-flex,
      .channel-html .channel-custom-font-custom-40-headline-reduced {
        font-size: 32px;
        line-height: 36px;
      }
      .channel-html .channel-custom-font-custom-24-eyebrow-flex-modules {
        font-size: 21px;
        line-height: 25px;
      }
      .channel-html .channel-custom-font-custom-40-headline-upgraders {
        font-size: 32px;
        line-height: 36px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-21-caption-upgrader,
      .channel-html .channel-custom-font-custom-21-subheadline-upgrader {
        font-size: 17px;
        line-height: 21px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-48-large-stat-upgraders {
        font-size: 32px;
        line-height: 35px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-21-caption-stat-upgrader-column2 {
        font-size: 19px;
        line-height: 23px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-12-disclaimer {
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
      }
      .channel-html .eYOlqMvj {
        margin-top: 79px;
        margin-bottom: 34px;
      }
      .channel-html .TJAFHioy {
        margin-bottom: 8px;
      }
      .channel-html .fEKoxzBF {
        margin-bottom: 46px;
        padding-left: 80px;
        padding-right: 80px;
      }
      .QixTTypz {
        margin-top: 0;
        margin-left: -8px;
        margin-bottom: -30px;
      }
      .channel-html .LbmUzzty {
        margin-bottom: 23px;
        padding-left: 0;
        padding-right: 0;
      }
      .channel-html .YjqWvCmi {
        margin-top: 15px;
        margin-bottom: 50px;
      }
      .channel-html .HFlLuvxe,
      .channel-html .MckLTHyz,
      .channel-html .aDkqDKsM,
      .channel-html .dpZhyqyg,
      .channel-html .lbnYsJvw,
      .channel-html .nkCfYyxJ,
      .channel-html .pTUropmP,
      .channel-html .qsILGJpm {
        grid-template-columns: repeat(1, 692px);
        overflow: hidden;
      }
      .channel-html .DFVaxapa,
      .channel-html .DOjrxrnH,
      .channel-html .IEODSbyv,
      .channel-html .KbbnWstN,
      .channel-html .QlepACpI,
      .channel-html .QyoMQxBy,
      .channel-html .RLAvECyq,
      .channel-html .UujoTUuO,
      .channel-html .XzPSTbrI,
      .channel-html .gLUMPPtm,
      .channel-html .rUFiJVua {
        overflow: hidden;
      }
      .channel-html .ABFtPcuN :before,
      .channel-html .AyrGrJuZ :before,
      .channel-html .BpJVCcoz :before,
      .channel-html .DFVaxapa :before,
      .channel-html .DOjrxrnH :before,
      .channel-html .GWeHkfyS :before,
      .channel-html .IEODSbyv :before,
      .channel-html .KbbnWstN :before,
      .channel-html .PBEptert :before,
      .channel-html .QlepACpI :before,
      .channel-html .QyoMQxBy :before,
      .channel-html .RLAvECyq :before,
      .channel-html .TelyDurN :before,
      .channel-html .UHYbxmnK :before,
      .channel-html .UujoTUuO :before,
      .channel-html .VwQbBtBm :before,
      .channel-html .WgVjQymB :before,
      .channel-html .XzPSTbrI :before,
      .channel-html .gLUMPPtm :before,
      .channel-html .jGmpvAsH :before,
      .channel-html .kwtQMnBo :before,
      .channel-html .lNLnksoq :before,
      .channel-html .miQxElnm :before,
      .channel-html .oYOaTDnK :before,
      .channel-html .qFeKscxW :before,
      .channel-html .rUFiJVua :before,
      .channel-html .uWZqLqzY :before {
        content: none;
      }
      .channel-html .VfMkaSyo {
        min-height: 420px;
        flex-grow: 0;
      }
      .channel-html .SVDPqwtB {
        margin-top: -471px;
        padding-top: 45px;
        padding-left: 28px;
        padding-right: 313px;
      }
      .channel-html .AMQYAHsf,
      .channel-html .DOkbRQvX,
      .channel-html .DWAkQnrg,
      .channel-html .GuhmgXsH,
      .channel-html .TrOdUkmQ,
      .channel-html .YPHXMRzV,
      .channel-html .gQuqmRmm,
      .channel-html .ljqiqApt {
        margin-top: 8px;
      }
      .channel-html .KSsrfKtK,
      .channel-html .UWOkfDyX,
      .channel-html .ffkUzNrU,
      .channel-html .kOFdilwM,
      .channel-html .vQqLgGve {
        min-height: 470px;
        flex-grow: 0;
      }
      .channel-html .VgGlUfnb {
        margin-top: -471px;
        padding-top: 48px;
        padding-left: 174px;
        padding-right: 174px;
        text-align: center;
      }
      .channel-html .Lrmbeoyl,
      .channel-html .VSPZZgsA,
      .channel-html .aGOCrBoc,
      .channel-html .lurrhenW,
      .channel-html .nRShwBwM,
      .channel-html .zEkNrWAg {
        grid-template-columns: repeat(1, 336px);
        overflow: hidden;
      }
      .channel-html .aIYCPGyN {
        margin-top: -470px;
        padding-top: 44px;
        padding-left: 28px;
        padding-right: 16px;
      }
      .channel-html .AUiKjkvY {
        margin-top: 8px;
        margin-right: 9px;
      }
      .channel-html .AyrGrJuZ,
      .channel-html .UHYbxmnK,
      .channel-html .lNLnksoq {
        overflow: visible;
      }
      .channel-html .wukksTpo {
        padding-top: 44px;
        padding-left: 29px;
        padding-right: 25px;
      }
      .channel-html .QPSNTXpV {
        margin-top: 8px;
        padding-right: 0;
      }
      .channel-html .TlvWIKyV {
        margin-top: 11px;
      }
      .qCwiKMxb {
        margin-top: 34px;
        margin-left: -1px;
      }
      .channel-html .czkSgsyN {
        padding-top: 44px;
        padding-left: 183px;
        padding-right: 183px;
        text-align: center;
      }
      .channel-html .QVFmHsxs {
        margin-top: 8px;
        margin-left: 0;
        margin-right: 0;
      }
      .OyCnYktm {
        margin-top: 30px;
        margin-left: -20px;
      }
      .channel-html .ysHBWPwM {
        padding-top: 44px;
        padding-left: 29px;
        padding-right: 16px;
      }
      .eRowewwA {
        margin-top: 32px;
        margin-left: 60px;
      }
      .channel-html .qXyLjzxe {
        min-height: 470px;
        align-items: flex-start;
        flex-grow: 0;
      }
      .channel-html .jZKUDVsm {
        margin-top: 0;
      }
      .KwBeZDBT {
        margin-top: 35px;
        margin-left: 1px;
      }
      .channel-html .iEpSxywP {
        margin-top: -470px;
        padding-top: 44px;
        padding-left: 29px;
        padding-right: 59px;
      }
      .channel-html .JcUdshwF {
        min-height: 514px;
        flex-grow: 0;
      }
      .channel-html .jwtsSFwl {
        padding-top: 44px;
        padding-left: 55px;
        padding-right: 55px;
        text-align: center;
      }
      .channel-html .VSbMncqd {
        margin-top: 11px;
        padding-left: 100px;
        padding-right: 100px;
      }
      .oveDnNzt {
        margin-top: 24px;
        margin-left: 14px;
      }
      .channel-html .eBCnOOnG {
        min-height: 470px;
        margin-bottom: 0;
        flex-grow: 0;
      }
      .bHtRJnsc {
        margin-top: 213px;
        margin-left: 67px;
      }
      .channel-html .aYHRFXuU {
        margin-top: -456px;
        padding-top: 44px;
        padding-left: 28px;
        padding-right: 20px;
        z-index: 24;
      }
      .channel-html .qIHsHDpE {
        min-height: 470px;
        align-items: flex-end;
        flex-grow: 0;
      }
      .channel-html .VSKLaYnL {
        padding-top: 44px;
        padding-left: 29px;
        padding-right: 23px;
      }
      .GSaBqnny {
        margin-top: 32px;
        margin-left: 62px;
      }
      .channel-html .OzWfZwpS {
        margin-top: 0;
        margin-left: -71.5px;
        margin-bottom: 0;
      }
      .channel-html .oPzlRdyQ {
        grid-template-rows: 1fr;
        grid-template-columns: repeat(1, 836px);
        overflow: visible;
        border-radius: 18px;
      }
      .channel-html .ABFtPcuN,
      .channel-html .GWeHkfyS,
      .channel-html .TelyDurN,
      .channel-html .jGmpvAsH,
      .channel-html .oYOaTDnK {
        grid-column-start: 1;
        overflow: visible;
      }
      .channel-html .KrDvmFxe {
        margin-top: -3px;
        margin-bottom: 48px;
        flex-grow: 0;
      }
      .channel-html .uXhKHPva {
        margin-top: 11px;
        padding-top: 0;
        padding-left: 71px;
      }
      .channel-html .nJQdcsyJ {
        padding-right: 20px;
      }
      .channel-html .uEfnzSxc {
        margin-top: 48px;
        padding-left: 70px;
      }
      .channel-html .MihYTJwe {
        margin-top: 12px;
        padding-top: 0;
        padding-left: 84px;
        padding-right: 0;
      }
      .channel-html .cWGBpQAD .inline-label-container {
        width: 220px;
        margin-bottom: 18px;
      }
      .channel-html .cWGBpQAD .selector-element-gallery {
        margin-left: 0;
        --dropdown-width: 258px;
      }
      .channel-html .UfMQNSpo {
        margin-top: 30px;
        padding-left: 71px;
      }
      .channel-html .TQLrXhvV,
      .channel-html .mmXhPOnh {
        margin-left: 0;
        display: flex;
        flex-wrap: wrap;
      }
      .channel-html .CsbtbjyC,
      .channel-html .OtgtFHBx,
      .channel-html .PLogiXna,
      .channel-html .THjBuisu,
      .channel-html .ZgDOekyD,
      .channel-html .aWdxrLsO,
      .channel-html .djnVZbtw,
      .channel-html .jkGRCrpp,
      .channel-html .nezerJqE,
      .channel-html .oeziNknn,
      .channel-html .ugBnBdtB,
      .channel-html .yuPXRQvx {
        grid-template-rows: 1fr;
        grid-template-columns: repeat(1, 217px);
        overflow: hidden;
      }
      .channel-html .HCfsikvg,
      .channel-html .JwMMwYuy {
        min-height: 217px;
        align-items: center;
        flex-grow: 0;
      }
      .channel-html .MCzIFpBN {
        text-align: center;
      }
      .channel-html .txIwAUxZ {
        margin-top: 0;
        margin-bottom: 0;
      }
      .channel-html .QCuqORwR,
      .channel-html .QqRwugrz {
        margin-top: 7px;
        margin-bottom: 0;
        padding-top: 0;
        padding-left: 15px;
        padding-right: 15px;
      }
      .channel-html .ANkvccqR,
      .channel-html .BrwAjiyr {
        margin-top: 3px;
        margin-bottom: 0;
        padding-top: 0;
      }
      .channel-html .BpJVCcoz,
      .channel-html .PBEptert,
      .channel-html .VwQbBtBm,
      .channel-html .WgVjQymB,
      .channel-html .kwtQMnBo,
      .channel-html .miQxElnm,
      .channel-html .qFeKscxW,
      .channel-html .uWZqLqzY {
        grid-column-start: 1;
        overflow: hidden;
      }
      .channel-html .BzisEdug,
      .channel-html .ELNWBJtw,
      .channel-html .FPRHNluH,
      .channel-html .GWRrRItv,
      .channel-html .JYmJkPxO,
      .channel-html .PJNDeTww,
      .channel-html .PejhMNoW,
      .channel-html .ahSwPvqk,
      .channel-html .eJKfsHwv,
      .channel-html .lzNUPpxV {
        min-height: 217px;
        flex-grow: 0;
      }
      .channel-html .BYcRWKuS,
      .channel-html .PnqOnvAJ {
        margin-top: -217px;
      }
      .channel-html .FrRoixog,
      .channel-html .QgtZvlBF {
        margin-top: 15px;
        padding-left: 32px;
        padding-right: 32px;
      }
      .channel-html .KcjSYDuQ {
        margin-left: 0;
        margin-right: 0;
        text-align: center;
      }
      .channel-html .aDzkBryN {
        margin-top: 21px;
        padding-left: 24px;
        padding-right: 24px;
      }
      .eyUHrcqM {
        margin-top: 15px;
      }
      .channel-html .EyqxNizI {
        margin-top: -217px;
        padding-left: 0;
        padding-right: 0;
      }
      .channel-html .AnLAxUvg {
        margin-top: 25px;
        padding-left: 32px;
        padding-right: 32px;
      }
      .channel-html .DdXuoDBo {
        margin-top: 24px;
        padding-left: 0;
        padding-right: 3px;
      }
      .channel-html .CtVEKnyU,
      .channel-html .VXIHXmmA,
      .channel-html .vyhubsyV {
        padding-left: 0;
        padding-right: 0;
      }
      .ieOxUjwh {
        margin-top: 41px;
      }
      .channel-html .tAnunIBg {
        margin-top: 11px;
        padding-left: 40px;
        padding-right: 40px;
      }
      .eziTpJBW {
        margin-top: 80px;
      }
      .channel-html .zqxaYpnq {
        margin-top: 14px;
        padding-left: 15px;
        padding-right: 15px;
      }
      .channel-html .EIbrPorq {
        margin-top: 3px;
        text-align: center;
      }
      .channel-html .iYhpVpvp {
        margin-bottom: 0;
      }
      .PnYXrnnX {
        margin-top: 34px;
        margin-left: 34px;
      }
      .channel-html .SGKrrpui {
        margin-top: -217px;
        margin-left: 0;
        margin-right: 0;
        text-align: center;
      }
      .channel-html .esvOninu {
        margin-top: 15px;
        padding-left: 24px;
        padding-right: 24px;
      }
      .channel-html .VfiOqSBv,
      .channel-html .eRDoRIzL {
        margin-top: -217px;
        margin-left: 0;
        margin-right: 0;
      }
      .KaWYRwBk {
        margin-top: 6px;
      }
      .channel-html .mqSVsKrm {
        margin-top: 41px;
        padding-left: 24px;
        padding-right: 24px;
      }
      .channel-html .TESrcVAo {
        margin-top: 25px;
        padding-left: 44px;
        padding-right: 44px;
      }
      .channel-html .kWDsdcpB {
        margin-top: 25px;
        padding-left: 22px;
        padding-right: 22px;
      }
      .vLGNuxAA {
        margin-top: -1px;
        margin-left: -3px;
      }
      .channel-html .cMxOTiqz {
        margin-top: 25px;
        padding-left: 28px;
        padding-right: 28px;
      }
      .wdrFQqnR {
        margin-top: 22px;
        margin-left: -1px;
      }
      .channel-html .oQVzpGwC {
        align-items: center;
        margin-top: 73.5px;
      }
      .channel-html .AruczUzX {
        margin-top: 29px;
        margin-bottom: 71px;
      }
      .channel-html .BwJpydnY,
      .channel-html .OxiLObrv {
        min-height: 355px;
        flex-grow: 0;
      }
      .channel-html .ooMMjozn {
        margin-right: 37px;
        padding: 43px 10px 40px 32px;
      }
      .channel-html .XuswKkoX,
      .channel-html .caHgXVzt,
      .channel-html .tiWlSBxd,
      .channel-html .yxkfsNpy {
        margin-left: 0;
      }
      .channel-html .ikTdgBpi {
        margin-top: 6px;
        margin-left: -1px;
      }
      .channel-html .hBpbwYAV {
        margin-top: 19px;
        margin-left: 0;
        padding-right: 0;
      }
      .channel-html .NmjHYbvB {
        text-align: right;
      }
      .channel-html .IcxXevvm {
        padding: 30px 10px 30px 33px;
      }
      .channel-html .mPkAryxP {
        margin-top: 7px;
        margin-left: -1px;
        padding-right: 107px;
      }
      .channel-html .StSpoOyY {
        margin-top: 19px;
        margin-left: 0;
        padding-right: 30px;
      }
      .channel-html .ImRtaVAx {
        margin-left: 0;
        padding-top: 6px;
        padding-left: 2px;
      }
      .IAlhaJxn {
        margin-top: -12px;
        margin-left: -51px;
      }
      .channel-html .AwBErZtJ,
      .channel-html .kxKFqMtS {
        min-height: 355px;
        align-items: center;
        flex-grow: 0;
      }
      .channel-html .hWOacYpY {
        margin-top: 23px;
        margin-bottom: 30px;
        padding-left: 30px;
      }
      .channel-html .msDElNyZ {
        margin-top: 7px;
        margin-left: -1px;
        padding-right: 80px;
      }
      .channel-html .suqDNjnU {
        margin-top: 19px;
        margin-left: -1px;
        padding-right: 40px;
      }
      .channel-html .tvOqwqoy {
        margin-top: 0;
        margin-left: -18px;
      }
      .channel-html .BKmyMXwt {
        margin-top: 17px;
        margin-bottom: 29px;
        padding-left: 30px;
      }
      .OiHeKNyh {
        margin-left: -2px;
      }
      .channel-html .srXEChBY {
        margin-top: 17px;
        margin-bottom: 18px;
        padding-left: 3px;
      }
      .channel-html .CgVSokqu {
        padding-right: 0;
      }
      .channel-html .mwaWGCud,
      .channel-html .xwzUiLyo {
        margin-bottom: 7px;
      }
      .channel-html .BUzcYOrn,
      .channel-html .OETEifzU,
      .channel-html .uYocBirv {
        margin-right: 10px;
      }
      .channel-html .AKxrVemG {
        padding-right: 37px;
      }
      .channel-html .UZLRjnyB {
        margin-top: 0;
        margin-left: 0;
        padding-left: 6px;
      }
      .channel-html .XDSmUsBs {
        --grid-column: 2;
      }
    }
    @container (max-width:734px) {
      .channel-html .small-12 {
        flex-basis: 100%;
        max-width: 100%;
      }
      .channel-html .bento-box.small-hide,
      .channel-html .bentobox-item.small-hide,
      .channel-html .channel-compare .compare-column-range-small-2 #static-compare-header .compare-column:nth-of-type(4) ~ .compare-column,
      .channel-html .channel-compare .compare-column-range-small-2 .compare-row:not(#static-compare-header) .compare-column:nth-of-type(3) ~ .compare-column,
      .channel-html .column.small-hide,
      .channel-html .responsive-image.has-small .is-largest:not(.image-small),
      .channel-html .row.small-hide,
      .channel-html .section.small-hide,
      .channel-html .small-hide {
        display: none;
      }
      .channel-html .column.small-show,
      .channel-html .small-show {
        display: block;
      }
      .channel-html {
        overflow-x: visible;
        --global-content-max-width: 420px;
      }
      .channel-html .bentobox-item.small-show,
      .channel-html .row.small-show,
      .channel-html .section.small-show {
        display: flex;
      }
      .channel-html .bento-box.small-show {
        display: grid;
      }
      .channel-html .colornav-items {
        max-width: 83px;
      }
      .channel-html .channel-compare .selector-element {
        border: none;
        border-radius: 0;
        margin-inline-end: 0;
      }
      .channel-html .channel-compare .selector-element:hover {
        border: none;
        border-radius: 0;
      }
      .channel-html .channel-compare .selector-element::before {
        height: calc(100% - 1px);
        width: 40px;
        right: 5px;
      }
      .channel-html .channel-compare .selector-dropdown:focus {
        box-sizing: content-box;
        width: 122px;
        border-radius: 0;
      }
      .channel-html .channel-compare .selector-dropdown {
        width: 100%;
      }
      .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing,
      .channel-html .channel-compare .compare-row.compare-template-preview-item-pricing:last-child,
      .channel-html .channel-compare .compare-row.compare-template-space-bottom .compare-column {
        margin-bottom: 20px;
      }
      .channel-html .channel-compare .price-container {
        font-size: 12px;
        line-height: 1.3333733333;
        font-weight: 600;
        letter-spacing: -0.01em;
        font-family:
          system-ui,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          "Helvetica Neue",
          Helvetica,
          Arial,
          sans-serif;
      }
      .channel-html .responsive-image.has-small .image-small {
        display: inline-block;
      }
      .channel-html .channel-compare .stat-content .stat-row {
        padding: 0;
      }
      .channel-html .channel-compare .row-colors .colornav-heading {
        font-size: 12px;
      }
      .channel-html .channel-compare .compare-section {
        padding-top: 20px;
        padding-bottom: 14px;
      }
      .channel-html .channel-compare .compare-header-row,
      .channel-html .channel-compare .compare-row {
        --column-gap: 20px;
        grid-template-columns: repeat(var(--grid-column), 130px);
      }
      .channel-html .channel-compare .compare-row.compare-template-border-top .compare-column {
        padding-top: 20px;
      }
      .channel-html .channel-compare .compare.with-fullwidthrowheader .compare-column {
        width: 130px;
      }
      .channel-html .upgrader-select-container .selector-element-gallery .gallery-select:focus {
        padding-right: 6px;
      }
      .channel-html.no-js .controls {
        height: initial;
      }
      .channel-html.no-js .controls .control-group {
        opacity: 1;
        flex-direction: column;
        height: initial;
      }
      .channel-html.desktop .controls .control-group {
        pointer-events: auto;
      }
      .channel-html .row.small-display-bleed,
      .channel-html.no-js .control-item {
        position: relative;
      }
      .channel-html.no-js .control-item-content,
      .channel-html.no-js .control-item > button {
        opacity: 1;
      }
      .channel-html.no-reduced-motion .control-item-accessibility-container .inline-media-ui-button.inline-media-ui-replay-only.loaded.ended {
        opacity: 0;
      }
      .channel-html .product-viewer-enhanced .viewer-wrapper .product-viewer-canvas {
        width: 100%;
        max-width: 734px;
        height: 640px;
      }
      .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-content {
        gap: 26px;
      }
      .channel-html .product-viewer-enhanced .viewer-wrapper .loader .loader-headline {
        max-width: 200px;
      }
      .channel-html .row.small-display-bleed .column {
        z-index: 1;
      }
      .channel-html .row.small-display-bleed::after,
      .channel-html .row.small-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 20px;
        left: -20px;
      }
      .channel-html .row.small-display-bleed::after {
        left: initial;
        right: -20px;
      }
      .channel-html .section .section-content {
        max-width: 320px;
        width: 87.5%;
      }
      .channel-html .channel-custom-font-custom-80-headline-super {
        font-size: 32px;
        line-height: 36px;
      }
      .channel-html .channel-custom-font-custom-40-headline-flex,
      .channel-html .channel-custom-font-custom-40-headline-reduced {
        font-size: 28px;
        line-height: 32px;
      }
      .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
        font-size: 19px;
        line-height: 27px;
      }
      .channel-html .channel-custom-font-custom-21-eyebrow-reduced-flex {
        font-size: 19px;
        line-height: 23px;
      }
      .channel-html .channel-custom-font-custom-40-headline-upgraders,
      .channel-html .channel-custom-font-custom-48-large-stat-upgraders {
        font-size: 28px;
        line-height: 32px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-21-caption-upgrader,
      .channel-html .channel-custom-font-custom-21-subheadline-upgrader {
        font-size: 17px;
        line-height: 21px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-21-caption-stat-upgrader-column2 {
        font-size: 14px;
        line-height: 18px;
        font-weight: 600;
      }
      .channel-html .channel-custom-font-custom-12-disclaimer {
        font-size: 12px;
        line-height: 16px;
      }
      .channel-html .eYOlqMvj {
        margin-top: 49px;
        margin-bottom: 28px;
      }
      .channel-html .TJAFHioy {
        margin-bottom: 8px;
      }
      .channel-html .fEKoxzBF {
        margin-bottom: 30px;
        padding-left: 40px;
        padding-right: 40px;
      }
      .QixTTypz {
        margin-top: -2px;
        margin-left: -41px;
        margin-bottom: 35px;
      }
      .channel-html .LbmUzzty {
        margin-bottom: 16px;
      }
      .channel-html .YjqWvCmi {
        margin-top: 14px;
        margin-bottom: 50px;
      }
      .channel-html .HFlLuvxe,
      .channel-html .Lrmbeoyl,
      .channel-html .MckLTHyz,
      .channel-html .VSPZZgsA,
      .channel-html .aDkqDKsM,
      .channel-html .aGOCrBoc,
      .channel-html .dpZhyqyg,
      .channel-html .lbnYsJvw,
      .channel-html .lurrhenW,
      .channel-html .nRShwBwM,
      .channel-html .nkCfYyxJ,
      .channel-html .pTUropmP,
      .channel-html .qsILGJpm,
      .channel-html .zEkNrWAg {
        grid-template-columns: repeat(1, 320px);
        overflow: hidden;
      }
      .channel-html .DFVaxapa,
      .channel-html .DOjrxrnH,
      .channel-html .IEODSbyv,
      .channel-html .KbbnWstN,
      .channel-html .QlepACpI,
      .channel-html .QyoMQxBy,
      .channel-html .RLAvECyq,
      .channel-html .UujoTUuO,
      .channel-html .XzPSTbrI,
      .channel-html .gLUMPPtm,
      .channel-html .rUFiJVua {
        overflow: hidden;
      }
      .channel-html .ABFtPcuN :before,
      .channel-html .AyrGrJuZ :before,
      .channel-html .BpJVCcoz :before,
      .channel-html .DFVaxapa :before,
      .channel-html .DOjrxrnH :before,
      .channel-html .GWeHkfyS :before,
      .channel-html .IEODSbyv :before,
      .channel-html .KbbnWstN :before,
      .channel-html .PBEptert :before,
      .channel-html .QlepACpI :before,
      .channel-html .QyoMQxBy :before,
      .channel-html .RLAvECyq :before,
      .channel-html .TelyDurN :before,
      .channel-html .UHYbxmnK :before,
      .channel-html .UujoTUuO :before,
      .channel-html .VwQbBtBm :before,
      .channel-html .WgVjQymB :before,
      .channel-html .XzPSTbrI :before,
      .channel-html .gLUMPPtm :before,
      .channel-html .jGmpvAsH :before,
      .channel-html .kwtQMnBo :before,
      .channel-html .lNLnksoq :before,
      .channel-html .miQxElnm :before,
      .channel-html .oYOaTDnK :before,
      .channel-html .qFeKscxW :before,
      .channel-html .rUFiJVua :before,
      .channel-html .uWZqLqzY :before {
        content: none;
      }
      .channel-html .VfMkaSyo {
        min-height: 445px;
        flex-grow: 0;
      }
      .channel-html .SVDPqwtB {
        margin-top: -445px;
        padding-top: 40px;
        padding-left: 36px;
        padding-right: 36px;
        text-align: center;
      }
      .channel-html .AMQYAHsf,
      .channel-html .DOkbRQvX,
      .channel-html .DWAkQnrg,
      .channel-html .GuhmgXsH,
      .channel-html .TrOdUkmQ,
      .channel-html .YPHXMRzV,
      .channel-html .ljqiqApt {
        margin-top: 8px;
      }
      .channel-html .VgGlUfnb,
      .channel-html .aIYCPGyN {
        margin-top: -420px;
        padding-top: 40px;
        text-align: center;
      }
      .channel-html .UWOkfDyX,
      .channel-html .ffkUzNrU {
        min-height: 364px;
        flex-grow: 0;
      }
      .channel-html .VgGlUfnb {
        padding-left: 25px;
        padding-right: 28px;
      }
      .channel-html .HtcRGhsx,
      .channel-html .aHBYTCwq,
      .channel-html .uhyOXPvP {
        margin-bottom: 10px;
        margin-right: 0;
      }
      .channel-html .aIYCPGyN {
        padding-left: 21px;
        padding-right: 21px;
      }
      .channel-html .AUiKjkvY {
        margin-top: 8px;
        margin-left: 32.5px;
        margin-right: 32.5px;
      }
      .channel-html .KbnooSxf,
      .channel-html .TquWsNAm,
      .channel-html .XUKatDrx {
        margin-top: 10px;
        margin-left: 0;
      }
      .channel-html .AyrGrJuZ,
      .channel-html .UHYbxmnK,
      .channel-html .lNLnksoq {
        overflow: visible;
      }
      .channel-html .qXyLjzxe,
      .channel-html .vQqLgGve {
        min-height: 420px;
        flex-grow: 0;
      }
      .channel-html .wukksTpo {
        padding-top: 39px;
        padding-left: 39px;
        padding-right: 39px;
        text-align: center;
      }
      .channel-html .QPSNTXpV {
        margin-top: 8px;
        padding-left: 0;
        padding-right: 0;
      }
      .channel-html .TlvWIKyV {
        margin-top: 12px;
      }
      .qCwiKMxb {
        margin-top: 28px;
        margin-left: 3px;
      }
      .channel-html .JcUdshwF,
      .channel-html .KSsrfKtK {
        min-height: 420px;
        align-items: flex-end;
        flex-grow: 0;
      }
      .channel-html .czkSgsyN {
        margin-top: -420px;
        padding-top: 40px;
        padding-left: 35px;
        padding-right: 35px;
        text-align: center;
      }
      .channel-html .QVFmHsxs {
        margin-top: 8px;
        margin-left: 0;
        margin-right: 0;
      }
      .OyCnYktm {
        margin-top: 27px;
        margin-left: -2px;
      }
      .channel-html .kOFdilwM,
      .channel-html .qIHsHDpE {
        min-height: 420px;
        align-items: flex-start;
        flex-grow: 0;
      }
      .channel-html .jwtsSFwl,
      .channel-html .ysHBWPwM {
        padding-top: 40px;
        padding-left: 30px;
        padding-right: 30px;
        text-align: center;
      }
      .eRowewwA {
        margin-top: 18px;
        margin-left: 9px;
      }
      .channel-html .jZKUDVsm,
      .unWQXVpw {
        margin-top: 0;
      }
      .KwBeZDBT {
        margin-top: 55px;
        margin-left: 10px;
        margin-bottom: -13px;
      }
      .channel-html .iEpSxywP {
        margin-top: -419px;
        padding-top: 40px;
        padding-left: 40px;
        padding-right: 40px;
        text-align: center;
      }
      .channel-html .VSbMncqd {
        margin-top: 12px;
        padding-left: 0;
        padding-right: 0;
      }
      .oveDnNzt {
        margin-top: 18px;
        margin-left: 11px;
        margin-bottom: 0;
      }
      .channel-html .eBCnOOnG {
        min-height: 445px;
        margin-bottom: 0;
        flex-grow: 0;
      }
      .bHtRJnsc {
        margin-top: 198px;
        margin-left: 62px;
      }
      .channel-html .aYHRFXuU {
        margin-top: -430px;
        padding-top: 38px;
        padding-left: 38.5px;
        padding-right: 38.5px;
        text-align: center;
        z-index: 12;
      }
      .channel-html .VSKLaYnL {
        padding-top: 40px;
        padding-left: 18px;
        padding-right: 18px;
        text-align: center;
      }
      .GSaBqnny {
        margin-top: 18px;
        margin-left: 7px;
      }
      .channel-html .jPfbHbAE {
        background-color: #1d1d1f;
      }
      .channel-html .OzWfZwpS {
        margin-top: 0;
        margin-left: 0;
        margin-bottom: 48px;
      }
      .channel-html .oPzlRdyQ {
        grid-template-rows: 1fr;
        grid-template-columns: repeat(1, 320px);
        overflow: hidden;
      }
      .channel-html .ABFtPcuN,
      .channel-html .GWeHkfyS,
      .channel-html .TelyDurN,
      .channel-html .jGmpvAsH,
      .channel-html .oYOaTDnK {
        grid-column-start: 1;
        overflow: visible;
      }
      .channel-html .KrDvmFxe {
        margin-top: 0;
        margin-bottom: 0;
        flex-grow: 0;
      }
      .channel-html .uXhKHPva {
        margin-top: 0;
        padding-top: 0;
        padding-left: 23px;
        order: 1;
      }
      .channel-html .nJQdcsyJ {
        padding-right: 30px;
      }
      .channel-html .uEfnzSxc {
        margin-top: 42px;
        padding-left: 11px;
        text-align: center;
        order: 3;
      }
      .channel-html .NvnKIXvs {
        padding-right: 10px;
      }
      .channel-html .MihYTJwe {
        margin-top: 31px;
        padding-left: 24px;
        padding-right: 24px;
        order: 2;
      }
      .channel-html .cWGBpQAD .inline-label-container {
        width: 220px;
      }
      .channel-html .cWGBpQAD .selector-element-gallery {
        margin-top: -7px;
        margin-left: 0;
        --dropdown-width: 240px;
      }
      .channel-html .UfMQNSpo {
        margin-top: 28px;
        padding-left: 0;
        order: 4;
      }
      .channel-html .TQLrXhvV,
      .channel-html .mmXhPOnh {
        margin-left: 0;
        display: flex;
        flex-wrap: wrap;
      }
      .channel-html .wvFYvTnX {
        margin-bottom: 10px;
        margin-right: 10px;
      }
      .channel-html .CsbtbjyC,
      .channel-html .OtgtFHBx,
      .channel-html .PLogiXna,
      .channel-html .THjBuisu,
      .channel-html .djnVZbtw,
      .channel-html .jkGRCrpp,
      .channel-html .ugBnBdtB,
      .channel-html .yuPXRQvx {
        grid-template-rows: 1fr;
        grid-template-columns: repeat(1, 150px);
        overflow: visible;
      }
      .channel-html .BzisEdug,
      .channel-html .ELNWBJtw,
      .channel-html .FPRHNluH,
      .channel-html .GWRrRItv,
      .channel-html .HCfsikvg,
      .channel-html .JYmJkPxO,
      .channel-html .JwMMwYuy,
      .channel-html .PJNDeTww,
      .channel-html .PejhMNoW,
      .channel-html .ahSwPvqk,
      .channel-html .eJKfsHwv,
      .channel-html .lzNUPpxV {
        min-height: 217px;
        flex-grow: 0;
      }
      .channel-html .CxbEoLnN {
        margin-top: -4px;
        text-align: center;
      }
      .channel-html .HmbQYapK {
        margin-top: 3px;
        margin-bottom: 5px;
      }
      .channel-html .mcsyBDtz {
        margin-top: 3px;
        margin-bottom: 11px;
        padding-left: 10px;
        padding-right: 10px;
      }
      .channel-html .IKAFClrS {
        margin-top: -7px;
        margin-bottom: 0;
        padding: 0 20px;
      }
      .channel-html .AqcNyJqY {
        margin: 0 0 10px 10px;
      }
      .channel-html .BpJVCcoz,
      .channel-html .PBEptert,
      .channel-html .VwQbBtBm,
      .channel-html .WgVjQymB,
      .channel-html .kwtQMnBo,
      .channel-html .miQxElnm,
      .channel-html .qFeKscxW,
      .channel-html .uWZqLqzY {
        grid-column-start: 1;
        overflow: hidden;
      }
      .RRiCmIvm {
        margin-top: -1px;
      }
      .channel-html .FrRoixog {
        margin-top: 21px;
        padding-left: 16px;
        padding-right: 16px;
      }
      .channel-html .TVdExQnl,
      .channel-html .ZHYFAHyo {
        margin: 10px 10px 10px 0;
      }
      .channel-html .ZgDOekyD,
      .channel-html .aWdxrLsO,
      .channel-html .nezerJqE,
      .channel-html .oeziNknn {
        grid-template-rows: 1fr;
        grid-template-columns: repeat(1, 150px);
        overflow: hidden;
      }
      .channel-html .aDzkBryN {
        margin-top: 22px;
        padding-left: 10px;
        padding-right: 10px;
      }
      .channel-html .HrXILcAp,
      .channel-html .WOOUfKrv {
        margin: 10px 0 10px 10px;
      }
      .eyUHrcqM {
        margin-top: 82px;
      }
      .channel-html .EyqxNizI,
      .channel-html .SGKrrpui,
      .channel-html .VfiOqSBv {
        margin-top: -217px;
      }
      .channel-html .AnLAxUvg {
        margin-top: 21px;
        padding-left: 25px;
        padding-right: 25px;
      }
      .channel-html .DdXuoDBo {
        margin-top: 19px;
        padding-left: 22px;
        padding-right: 22px;
      }
      .channel-html .XIcHSpne {
        margin: 10px 10px 0 0;
      }
      .ieOxUjwh {
        margin-top: 35px;
      }
      .channel-html .tAnunIBg {
        margin-top: 9px;
        padding-left: 14px;
        padding-right: 14px;
      }
      .channel-html .LEEsCPzo,
      .channel-html .fhoANsvr {
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 0;
      }
      .eziTpJBW {
        margin-top: 86px;
      }
      .channel-html .PnqOnvAJ {
        margin-top: -217px;
        margin-bottom: 0;
      }
      .channel-html .zqxaYpnq {
        margin-top: 22px;
        padding-left: 4px;
        padding-right: 4px;
      }
      .channel-html .WPwDxXrO {
        margin-top: 0;
        margin-bottom: 10px;
        margin-right: 10px;
      }
      .channel-html .fMnbdCqP {
        margin-top: -6px;
        text-align: center;
      }
      .channel-html .ioYfDXzU {
        margin-top: 4px;
        margin-bottom: 10px;
        padding-left: 2px;
        padding-right: 2px;
      }
      .channel-html .JhbufKsN {
        margin-top: -6px;
        margin-bottom: 0;
        padding: 0 28px;
      }
      .channel-html .PqJGPMoN {
        margin-left: 10px;
        margin-bottom: 10px;
        margin-right: 0;
      }
      .PnYXrnnX {
        margin-top: 61px;
        margin-left: 16px;
      }
      .channel-html .esvOninu {
        margin-top: 21px;
        padding-left: 14px;
        padding-right: 14px;
      }
      .channel-html .QgtZvlBF,
      .channel-html .kWDsdcpB,
      .channel-html .mqSVsKrm {
        margin-top: 21px;
        padding-left: 15px;
        padding-right: 15px;
      }
      .KaWYRwBk {
        margin-top: 54px;
      }
      .channel-html .TESrcVAo {
        margin-top: 32px;
        padding-left: 15px;
        padding-right: 15px;
      }
      .channel-html .oYtEDdsA {
        margin-top: 10px;
        margin-left: 0;
        margin-right: 10px;
      }
      .vLGNuxAA {
        margin-top: 11px;
        margin-left: -1px;
      }
      .channel-html .cMxOTiqz {
        margin-top: 21px;
        padding-left: 10px;
        padding-right: 10px;
      }
      .wdrFQqnR {
        margin-top: 20px;
        margin-left: 2px;
      }
      .channel-html .oQVzpGwC {
        align-items: center;
        margin-top: 41px;
      }
      .channel-html .miXMPXna {
        padding-left: 28px;
        padding-right: 28px;
      }
      .channel-html .AruczUzX {
        margin-top: 9px;
        margin-bottom: 40px;
      }
      .channel-html .OxiLObrv {
        min-height: 510px;
        align-items: flex-start;
        flex-grow: 0;
      }
      .channel-html .ooMMjozn {
        padding: 46px 0 0 43px;
      }
      .channel-html .tiWlSBxd,
      .channel-html .yxkfsNpy {
        margin-left: -1px;
        padding-left: 0;
      }
      .channel-html .ikTdgBpi {
        margin-top: 7px;
        padding-left: 0;
      }
      .channel-html .hBpbwYAV {
        margin-top: 12px;
        padding-right: 8px;
      }
      .channel-html .XuswKkoX {
        margin-top: 12px;
        margin-left: 0;
        padding-bottom: 4px;
      }
      .channel-html .jrZoJltg {
        margin-top: 38px;
      }
      .QVudohpT {
        margin-top: -10px;
      }
      .channel-html .NmjHYbvB {
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 9px;
      }
      .channel-html .BwJpydnY {
        min-height: 569px;
        align-items: flex-start;
        flex-grow: 0;
      }
      .channel-html .IcxXevvm {
        padding: 48px 22px 0 43px;
      }
      .channel-html .mPkAryxP {
        margin-top: 6px;
        padding-left: 0;
        padding-right: 90px;
      }
      .channel-html .StSpoOyY {
        margin-top: 14px;
      }
      .channel-html .ImRtaVAx {
        padding-top: 4px;
        padding-left: 53px;
        text-align: center;
      }
      .channel-html .AwBErZtJ {
        min-height: 529px;
        align-items: flex-start;
        flex-grow: 0;
      }
      .channel-html .hWOacYpY {
        margin-top: 28px;
        margin-bottom: 0;
        padding-left: 40px;
      }
      .channel-html .msDElNyZ {
        margin-top: 5px;
        margin-left: 2px;
        padding-right: 64px;
      }
      .channel-html .suqDNjnU {
        margin-top: 13px;
        margin-left: 1px;
      }
      .channel-html .tvOqwqoy {
        margin-top: 14px;
        margin-left: 0;
      }
      .channel-html .kxKFqMtS {
        min-height: 728px;
        align-items: flex-start;
        margin-bottom: 0;
        flex-grow: 0;
      }
      .channel-html .BKmyMXwt {
        margin-top: 25px;
        margin-bottom: 0;
        padding-left: 43px;
      }
      .OiHeKNyh,
      .channel-html .QsAnESuY {
        margin-left: 1px;
      }
      .channel-html .gQuqmRmm {
        margin-top: 6px;
      }
      .channel-html .srXEChBY {
        margin-top: 14px;
        margin-bottom: 20px;
        padding-left: 4px;
      }
      .channel-html .mwaWGCud,
      .channel-html .xwzUiLyo {
        margin-bottom: 7px;
      }
      .channel-html .BUzcYOrn,
      .channel-html .OETEifzU,
      .channel-html .uYocBirv {
        margin-right: 10px;
      }
      .channel-html .DJaNXetA {
        padding-right: 36px;
      }
      .channel-html .JuooJTmK {
        padding-right: 31px;
      }
      .channel-html .rOapgmBo {
        padding-left: 1px;
        padding-right: 30px;
      }
      .channel-html .UZLRjnyB {
        margin-top: -9px;
        padding-left: 9px;
      }
      .channel-html .caHgXVzt {
        margin-left: 20px;
        margin-right: 19px;
      }
      .channel-html .qEiGyqyY,
      .channel-html .xgABpNBt {
        padding-right: 0;
      }
      .channel-html .PGJfKqxI,
      .channel-html .ZXstfRtL,
      .channel-html .pLepGNmJ {
        margin-top: 10px;
      }
      .channel-html .ChrOvxsf,
      .channel-html .DJaLCoty,
      .channel-html .LebbQvwU,
      .channel-html .RsSUSUnW,
      .channel-html .URemnZxh,
      .channel-html .UeyOUVvt,
      .channel-html .WgQXAApa,
      .channel-html .XrBmCovg,
      .channel-html .YUQgLPAS,
      .channel-html .bBeQimtN,
      .channel-html .cGSdHlnn,
      .channel-html .duqCuDqc,
      .channel-html .enxcSTsZ,
      .channel-html .gFjQhFBf,
      .channel-html .lkuxkZww,
      .channel-html .medPOoyD,
      .channel-html .nuDBahAl,
      .channel-html .paTWUgrr,
      .channel-html .vdWrOPxz,
      .channel-html .vpYknlBf {
        padding-right: 9px;
      }
      .channel-html .FxsxWSwu {
        padding-right: 29px;
      }
      .channel-html .UasHjqzl {
        padding-right: 14px;
      }
      .channel-html .XDSmUsBs {
        --grid-column: 2;
      }
    }
    
	/* ----- Localised CSS ----- */
    .channel-html .THjBuisu, .channel-html .PLogiXna {
    grid-template-columns: repeat(1, 480px);
	}
	.channel-html .PLogiXna {
    text-align:center;
	}
	
	.channel-html .TVdExQnl {
    margin-top: 10px;
    margin-left:0;
    margin-right: 10px;
	}
	.channel-html .HrXILcAp{
	margin-left:10px;
	}
	.channel-html .AqcNyJqY, .channel-html .XIcHSpne{
	margin-right:0;
	}
	
	@container (max-width:1068px) {
	 .channel-html .THjBuisu, .channel-html .PLogiXna {
        grid-template-columns: repeat(1, 336px);
     }

	}
	
	@container (max-width:734px) {
	body .channel-html .THjBuisu{
        grid-template-columns: repeat(1, 320px);
     }
     .channel-html .THjBuisu, .channel-html .PLogiXna {
        grid-template-columns: repeat(1, 150px);
     } 
     .channel-html .wvFYvTnX{
     	margin-right:0;
     }
     .channel-html .AqcNyJqY, .channel-html .HrXILcAp{
     	margin-left:0;
     	margin-top:10px;
     	margin-right:10px;
     }
     .channel-html .TVdExQnl, .channel-html .XIcHSpne{
     	margin-right:0;
    	margin-top: 10px;
    	margin-left: 10px;
	 }
	
	}
	
	</style>
	
  <!--END > CHANNEL STYLES -->
  <noscript><style>
      html {
        visibility: visible !important;
      }
    </style></noscript>
  <script>
    requestAnimationFrame(function () {
      document.documentElement.classList.add("scroll-ready");
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" defer></script>
</head>
<body>
  <?= view('ui/apple_header_nav') ?>
  <div class="channel-html GjvmrWqq">
    <!--BEGIN > FIXED | HERO (DARK)-->
    <div class="section cauzdowm theme-dark">
      <div class="section-content">
        <div class="row eYOlqMvj">
          <span class="column MbgULiuT large-12"><div class="row TJAFHioy large-display-bleed medium-display-bleed small-display-bleed">
              <span class="column lOTVntta"><h2>
                  <figure class="responsive-image channel-picture has-large has-medium has-small">
                    <img class="image uZknhopH image-large is-largest" alt="Apple Watch ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_large.png"><img class="image uZknhopH image-medium" alt="Apple Watch ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_medium.png"><img class="image uZknhopH image-small" alt="Apple Watch ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>logo_hero_small.png">
                  </figure></h2></span>
            </div>
            <p class="copy fEKoxzBF channel-custom-font-custom-80-headline-super" style="--focus-color: rgba(0, 125, 250, 0.6)">A BATTERY YOU CAN’T OUTRUN.</p>
            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                <img class="image QixTTypz image-large is-largest" alt="Apple Watch Ultra 4, titanium case, natural color, digital clock face, complications: readiness, heart rate, Workouts, temperature, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_large.png"><img class="image QixTTypz image-medium" alt="Apple Watch Ultra 4, titanium case, natural color, digital clock face, complications: readiness, heart rate, Workouts, temperature, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_medium.png"><img class="image QixTTypz image-small" alt="Apple Watch Ultra 4, titanium case, natural color, digital clock face, complications: readiness, heart rate, Workouts, temperature, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>hero_small.png"></figure></span>
            <!-- <p class="copy LbmUzzty channel-custom-font-custom-17-partner-message" style="--focus-color: rgba(0, 125, 250, 0.6)">[Your Message]</p> -->
            <a href="#" aria-label="Buy, Apple Watch Ultra 4" class="button button-custom button-base RQidQlrI trigger-buy-modal" data-product-key="apple_watch_ultra" style="--focus-color: rgba(0, 113, 227, 100%)">Buy</a></span>
        </div>
      </div>
    </div>
    <!--END > FIXED | HERO (DARK)--><!--BEGIN > FIXED | BENTO (DARK)-->
    <div class="section FzvXOoAD theme-dark">
      <div class="section-content">
        <div class="row YjqWvCmi">
          <div class="column DpqbVduJ large-12">
            <ul class="wEvEiPvv" role="list" aria-label="Things to love about Apple Watch Ultra 4">
              <li class="xXrMmOnM" role="listitem">
                <div class="row oHvUlTtK large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column NyqyOomw large-12">
                    <div class="bento-box MckLTHyz">
                      <span class="bentobox-item rUFiJVua"><div class="row VfMkaSyo medium-display-bleed small-display-bleed">
                          <div class="column IAEAcWxH large-12">
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image iwZKeXun double-invert image-large is-largest" alt="A person running while wearing Apple Watch Ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_large.png"><img class="image iwZKeXun double-invert image-medium" alt="A person running while wearing Apple Watch Ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_medium.png"><img class="image iwZKeXun double-invert image-small" alt="A person running while wearing Apple Watch Ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>battery_small.png"></figure></span>
                          </div>
                          <div class="column SVDPqwtB large-12">
                            <p class="copy hAjhXKym channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Battery</p>
                            <p class="copy AMQYAHsf channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Longest battery life of any Apple&nbsp;Watch. With up to 45 hours of Max Extended Workout<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> tracking.</p>
                          </div>
                        </div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="xeILSPyx" role="listitem">
                <div class="row nMktvnzf large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column YVqaxPpK large-12">
                    <div class="bento-box nkCfYyxJ">
                      <span class="bentobox-item KbbnWstN"><div class="row UWOkfDyX medium-display-bleed small-display-bleed">
                          <div class="column QpZJXYps large-12">
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image FmmSHtub double-invert image-large is-largest" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_large.png"><img class="image FmmSHtub double-invert image-medium" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_medium.png"><img class="image FmmSHtub double-invert image-small" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_health_small.png"></figure></span>
                          </div>
                          <div class="column VgGlUfnb large-12">
                            <p class="copy aQGbmgqL channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Heart Health</p>
                            <p class="copy DWAkQnrg channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">The Health&nbsp;Sensing System delivers the most accurate heart rate sensing in a wearable.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                          </div>
                        </div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="xeILSPyx" role="listitem">
                <div class="row nMktvnzf large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column YVqaxPpK large-12">
                    <div class="bento-box nkCfYyxJ">
                      <span class="bentobox-item KbbnWstN"><div class="row UWOkfDyX medium-display-bleed small-display-bleed">
                          <div class="column QpZJXYps large-12">
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image FmmSHtub double-invert image-large is-largest" alt="Person wearing Apple Watch Ultra 4 on wrist, Daytime Vitals slightly off" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_large.png"><img class="image FmmSHtub double-invert image-medium" alt="Person wearing Apple Watch Ultra 4 on wrist, Daytime Vitals slightly off" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_medium.png"><img class="image FmmSHtub double-invert image-small" alt="Person wearing Apple Watch Ultra 4 on wrist, Daytime Vitals slightly off" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>heart_rate_small.png"></figure></span>
                          </div>
                          <div class="column VgGlUfnb large-12">
                            <p class="copy aQGbmgqL channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Heart Rate Variability</p>
                            <p class="copy DWAkQnrg channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">More frequent HRV readings help&nbsp;provide insights on <br>stress and recovery.</p>
                          </div>
                        </div></span>
                    </div>
                  </div>
                </div>
              </li>     
              <li class="adKxxdnn" role="listitem">
                <div class="row nOAzONrv large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column ztaoLItj large-12">
                    <div class="bento-box pTUropmP">
                      <span class="bentobox-item DFVaxapa"><div class="row KSsrfKtK medium-display-bleed small-display-bleed">
                          <div class="column czkSgsyN large-12">
                            <p class="copy FZqzIhsF channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Readiness</p>
                            <p class="copy QVFmHsxs channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">A new personal readiness score tells you whether to rest or put yourself to the test.</p>
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image OyCnYktm double-invert image-large is-largest" alt="Apple Watch Ultra 4, titanium case, natural color, readiness score of 8, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_large.png"><img class="image OyCnYktm double-invert image-medium" alt="Apple Watch Ultra 4, titanium case, natural color, readiness score of 8, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_medium.png"><img class="image OyCnYktm double-invert image-small" alt="Apple Watch Ultra 4, titanium case, natural color, readiness score of 8, right side exterior, Digital Crown, raised side button, Ocean Band, translucent gray color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>readiness_small.png"></figure></span>
                          </div></div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="aHBYTCwq" role="listitem">
                <div class="row EJFXYQoT large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column GYFaAevJ large-12">
                    <div class="bento-box lurrhenW">
                      <span class="bentobox-item gLUMPPtm"><div class="row kOFdilwM medium-display-bleed small-display-bleed">
                          <div class="column ysHBWPwM large-12">
                            <p class="copy ScboVFoQ channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Running</p>
                            <p class="copy DOkbRQvX channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Your ultimate running companion with advanced metrics and precision dual-frequency GPS.</p>
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image eRowewwA image-large is-largest" alt="Apple Watch Ultra 4, titanium case, natural color, advanced Outdoor Run workout metrics, right side exterior, Digital Crown, raised side button, Trail Loop band, sand color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_large.png"><img class="image eRowewwA image-medium" alt="Apple Watch Ultra 4, titanium case, natural color, advanced Outdoor Run workout metrics, right side exterior, Digital Crown, raised side button, Trail Loop band, sand color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_medium.png"><img class="image eRowewwA image-small" alt="Apple Watch Ultra 4, titanium case, natural color, advanced Outdoor Run workout metrics, right side exterior, Digital Crown, raised side button, Trail Loop band, sand color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>running_small.png"></figure></span>
                          </div></div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="KbnooSxf" role="listitem">
                <div class="row KlPAxkzW large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column zPVRBpsy large-12">
                    <div class="bento-box nRShwBwM">
                      <span class="bentobox-item UujoTUuO"><div class="row qXyLjzxe medium-display-bleed small-display-bleed">
                          <div class="column jZKUDVsm large-12">
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image KwBeZDBT image-large is-largest" alt="Apple Watch Ultra 4, titanium case, black color, Running workout, next interval, left side exterior, orange Action button, Alpine Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_large.png"><img class="image KwBeZDBT image-medium" alt="Apple Watch Ultra 4, titanium case, black color, Running workout, next interval, left side exterior, orange Action button, Alpine Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_medium.png"><img class="image KwBeZDBT image-small" alt="Apple Watch Ultra 4, titanium case, black color, Running workout, next interval, left side exterior, orange Action button, Alpine Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>action_button_small.png"></figure></span>
                          </div>
                          <div class="column iEpSxywP large-12">
                            <p class="copy UEMuKyzW channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Action Button</p>
                            <p class="copy GuhmgXsH channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">One quick press gives you precise control over customisable functions like starting a workout.</p>
                          </div>
                        </div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="hgAhfPpy" role="listitem">
                <div class="row WvmpqzrT large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column qGusCMpY large-12">
                    <div class="bento-box aDkqDKsM">
                      <span class="bentobox-item QlepACpI"><div class="row JcUdshwF small-display-bleed">
                          <div class="column jwtsSFwl large-12">
                            <p class="copy RkFIsAwD channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Wearable AI Assistant</p>
                            <p class="copy ljqiqApt channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Make every day more effortless with Siri&nbsp;AI.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> And seamless with Audio&nbsp;Intelligence,<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> powered by the S11 chip.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span>
                            </p>
                            <p class="copy VSbMncqd channel-custom-font-custom-12-disclaimer" style="--focus-color: rgba(0, 125, 250, 0.6)">Siri&nbsp;AI is rolling out in English. Some Audio Intelligence features coming in beta in late 2026. Usage limits may apply.</p>
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image oveDnNzt image-large is-largest" alt="Three Apple Watch Ultra 4 devices, one with black titanium case, Siri AI conversation, translucent black Ocean Band, one with natural titanium case, personalized photo on watch face with Siri AI complication, natural titanium Milanese Loop band, and one with black titanium case, Siri Recap, burgundy Trail Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_large.png"><img class="image oveDnNzt image-medium" alt="Three Apple Watch Ultra 4 devices, one with black titanium case, Siri AI conversation, translucent black Ocean Band, one with natural titanium case, personalized photo on watch face with Siri AI complication, natural titanium Milanese Loop band, and one with black titanium case, Siri Recap, burgundy Trail Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_medium.png"><img class="image oveDnNzt image-small" alt="Three Apple Watch Ultra 4 devices, one with black titanium case, Siri AI conversation, translucent black Ocean Band, one with natural titanium case, personalized photo on watch face with Siri AI complication, natural titanium Milanese Loop band, and one with black titanium case, Siri Recap, burgundy Trail Loop band" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>wearable_AI_small.png"></figure></span>
                          </div></div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="uhyOXPvP" role="listitem">
                <div class="row LOycgjAM large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column PNIFtryG large-12">
                    <div class="bento-box aGOCrBoc">
                      <span class="bentobox-item QyoMQxBy"><div class="row eBCnOOnG medium-display-bleed small-display-bleed">
                          <div class="column ISfNLurI large-12">
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image bHtRJnsc image-large is-largest" alt="Apple Watch Ultra 4, titanium case, natural color, Backtrack showing route with compass directions, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_large.png"><img class="image bHtRJnsc image-medium" alt="Apple Watch Ultra 4, titanium case, natural color, Backtrack showing route with compass directions, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_medium.png"><img class="image bHtRJnsc image-small" alt="Apple Watch Ultra 4, titanium case, natural color, Backtrack showing route with compass directions, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>adventure_small.png"></figure></span>
                          </div>
                          <div class="column aYHRFXuU large-12">
                            <p class="copy pvAoNWrw channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Adventure</p>
                            <p class="copy YPHXMRzV channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Hike longer. Climb higher. Dive deeper. With pioneering features for every quest.</p>
                          </div>
                        </div></span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="XUKatDrx" role="listitem">
                <div class="row RbjrrSrV large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column XLRXgOrs large-12">
                    <div class="bento-box Lrmbeoyl">
                      <span class="bentobox-item IEODSbyv"><div class="row qIHsHDpE small-display-bleed">
                          <div class="column VSKLaYnL large-12">
                            <p class="copy FxrMyEBF channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Safety</p>
                            <p class="copy TrOdUkmQ channel-custom-font-custom-24-eyebrow-flex-modules" style="--focus-color: rgba(0, 125, 250, 0.6)">Stay connected and safe with Emergency SOS, Crash&nbsp;Detection, Fall&nbsp;Detection and more.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span>
                            </p>
                            <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                <img class="image GSaBqnny image-large is-largest" alt="Apple Watch Ultra 4, titanium case, black color, satellite connection, right side exterior, Digital Crown, raised side button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_large.png"><img class="image GSaBqnny image-medium" alt="Apple Watch Ultra 4, titanium case, black color, satellite connection, right side exterior, Digital Crown, raised side button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_medium.png"><img class="image GSaBqnny image-small" alt="Apple Watch Ultra 4, titanium case, black color, satellite connection, right side exterior, Digital Crown, raised side button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>safety_small.png"></figure></span>
                          </div></div></span>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--END > FIXED | BENTO (DARK)--><!--BEGIN > FLEX | UPGRADERS (DARK - LAYOUT 3)-->
    <div class="section jPfbHbAE theme-light">
      <div class="section-content">
        <div class="row OzWfZwpS large-display-bleed medium-display-bleed small-display-bleed">
          <div class="column DKMCousu large-12">
            <div class="bento-box oPzlRdyQ">
              <div class="bentobox-item ABFtPcuN">
                <div class="row KrDvmFxe large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column uXhKHPva large-8 medium-6 small-12"><h2 class="copy nJQdcsyJ channel-custom-font-custom-40-headline-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">Worth the upgrade? 100%.</h2></div>
                  <div class="column uEfnzSxc large-8 medium-6 small-12">
                    <p class="copy NvnKIXvs channel-custom-font-custom-21-subheadline-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">A few ways <span style="color: #f5f5f7">Ultra&nbsp;4</span> gives you more.</p>
                  </div>
                  <div class="column MihYTJwe large-4 medium-5 small-12">
                    <div class="cWGBpQAD upgrader-select-container">
                      <div class="inline-label-container"><label for="Upgraders-dropdown-L2-dark" class="dropdown-label channel-custom-font-custom-17-dropdown-upgraders">Select an Apple&nbsp;Watch to compare to Ultra&nbsp;4:</label></div>
                      <div class="selector-element-gallery cWGBpQAD">
                        <select data-group-id="product-name-dropdowns" id="Upgraders-dropdown-L2-dark" aria-controls="Upgraders-dropdown-L2-dark-item-ultra-1" class="gallery-select" autocomplete="off" style="--focus-color: rgba(0, 113, 227, 100%)">
                          <option value="Ultra 1" data-option-id="item-ultra-1">Ultra 1</option>
                          <option value="Series 9, 10, or 11" data-option-id="item-series-9-10-or-11">Series 9, 10, or 11</option></select><span class="selector-gallery-icon icon icon-chevrondown" aria-hidden="true"></span>
                      </div>
                    </div>
                  </div>
                  <div class="column UfMQNSpo large-12">
                    <div data-gallery-position="item-ultra-1" id="Upgraders-dropdown-L2-dark-item-ultra-1" data-active-content="true" class="dropdown-content-container" data-gallery-group-id="product-name-dropdowns" aria-labelledby="Upgraders-dropdown-L2-dark">
                      <ul class="TQLrXhvV" role="list" aria-label="Apple Watch Ultra 1 features">
                        <li class="wvFYvTnX" role="listitem">
                          <div class="row jFhyHNBl large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column CWtOzBoY large-12">
                              <div class="bento-box THjBuisu">
                                <div class="bentobox-item GWeHkfyS">
                                  <div class="row HCfsikvg large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column tUlkJbBP large-show medium-hide small-hide large-12">
                                      <p class="copy gEWcTHte channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy EIWxHywZ channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        14 more<br>hours
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 64px;
                                            padding: 10px 32px 18px 36px;
                                            margin: 0px -4px -5px 12px;
                                          "></span>
                                      </p>
                                      <p class="copy LMhTFTnl channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">battery life.<br>Up to 50 hours total.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                    <div class="column MCzIFpBN large-hide medium-show small-hide medium-12">
                                      <p class="copy txIwAUxZ channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy QqRwugrz channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        14 more<br>hours
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 48px;
                                            padding: 10px 28px 16px 18px;
                                            margin: 2px -4px -4px 8px;
                                          "></span>
                                      </p>
                                      <p class="copy BrwAjiyr channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">battery life.<br>Up to 50 hours total.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                    <div class="column CxbEoLnN large-hide medium-hide small-show large-12">
                                      <p class="copy HmbQYapK channel-custom-font-custom-21-caption-stat-upgrader-column2" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy mcsyBDtz channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        14 more<br>hours
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 46px;
                                            padding: 11px 46px 14px 10px;
                                            margin: 2px -6px -4px 3px;
                                          "></span>
                                      </p>
                                      <p class="copy IKAFClrS channel-custom-font-custom-21-caption-stat-upgrader-column2" style="--focus-color: rgba(0, 125, 250, 0.6)">battery life.<br>Up to 50 hours total.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="AqcNyJqY" role="listitem">
                          <div class="row RAXpNSuK large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column mydwWtnm large-12">
                              <div class="bento-box PLogiXna">
                                <div class="bentobox-item BpJVCcoz">
                                  <div class="row PejhMNoW medium-display-bleed small-display-bleed">
                                    <div class="column MIVulCnM large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image RRiCmIvm double-invert image-large is-largest" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_large.png"><img class="image RRiCmIvm double-invert image-medium" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_medium.png"><img class="image RRiCmIvm double-invert image-small" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_sensor_small.png"></figure></span>
                                    </div>
                                    <div class="column BYcRWKuS large-12">
                                      <p class="copy FrRoixog channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Most accurate heart rate sensing in a wearable<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="TVdExQnl" role="listitem">
                          <div class="row UDKrlZsF large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column bPlhxhAK large-12">
                              <div class="bento-box aWdxrLsO">
                                <div class="bentobox-item VwQbBtBm">
                                  <div class="row GWRrRItv large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column KcjSYDuQ large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image sFNecxtw double-invert image-large is-largest" alt="Apple Watch Ultra 4, titanium case, black color, readiness score of 8, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_large.png"><img class="image sFNecxtw double-invert image-medium" alt="Apple Watch Ultra 4, titanium case, black color, readiness score of 8, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_medium.png"><img class="image sFNecxtw double-invert image-small" alt="Apple Watch Ultra 4, titanium case, black color, readiness score of 8, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_HRV_small.png"></figure></span>
                                      <p class="copy aDzkBryN channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Readiness and Vitals with improved HRV<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="HrXILcAp" role="listitem">
                          <div class="row rSGDPeAa large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column AGdEeQoR large-12">
                              <div class="bento-box jkGRCrpp">
                                <div class="bentobox-item PBEptert">
                                  <div class="row ELNWBJtw large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column QsMdQlsI large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image eyUHrcqM double-invert image-large is-largest" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_large.png"><img class="image eyUHrcqM double-invert image-medium" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_medium.png"><img class="image eyUHrcqM double-invert image-small" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_Siri_AI_small.png"></figure></span>
                                    </div>
                                    <div class="column EyqxNizI large-12">
                                      <p class="copy AnLAxUvg channel-custom-font-custom-21-caption-upgrader large-show medium-show small-hide" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        Siri&nbsp;AI<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> and Audio&nbsp;Intelligence<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span>
                                      </p>
                                      <p class="copy DdXuoDBo channel-custom-font-custom-21-caption-upgrader large-hide medium-hide small-show" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        Siri&nbsp;AI<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> and Audio Intelligence<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="XIcHSpne" role="listitem">
                          <div class="row ozLbLEtY large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column VZNjOCvd large-12">
                              <div class="bento-box djnVZbtw">
                                <div class="bentobox-item WgVjQymB">
                                  <div class="row lzNUPpxV large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column CtVEKnyU large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image ieOxUjwh double-invert image-large is-largest" alt="Health app icon, a pink heart in a white box" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_large.png"><img class="image ieOxUjwh double-invert image-medium" alt="Health app icon, a pink heart in a white box" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_medium.png"><img class="image ieOxUjwh double-invert image-small" alt="Health app icon, a pink heart in a white box" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_health_app_small.png"></figure></span>
                                      <p class="copy tAnunIBg channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Sleep apnoea notifications<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- 
<li class="fhoANsvr" role="listitem">
                          <div class="row jwhshImi large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column BVHeAGoj large-12">
                              <div class="bento-box CsbtbjyC">
                                <div class="bentobox-item uWZqLqzY">
                                  <div class="row eJKfsHwv large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column nQwLnFuy large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image eziTpJBW image-large is-largest" alt="Globe showing user location with satellite icon above" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_large.png"><img class="image eziTpJBW image-medium" alt="Globe showing user location with satellite icon above" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_medium.png"><img class="image eziTpJBW image-small" alt="Globe showing user location with satellite icon above" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Ultra_faster_small.png"></figure></span>
                                    </div>
                                    <div class="column PnqOnvAJ large-12">
                                      <p class="copy zqxaYpnq channel-custom-font-custom-21-caption-upgrader" style="~~focus-color: rgba(0, 125, 250, 0.6)">Stay safe and connected with satellite communications<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
 -->
                      </ul>
                    </div>
                    <div data-gallery-position="item-series-9-10-or-11" id="Upgraders-dropdown-L2-dark-item-series-9-10-or-11" data-active-content="false" class="dropdown-content-container" data-gallery-group-id="product-name-dropdowns" aria-labelledby="Upgraders-dropdown-L2-dark">
                      <ul class="mmXhPOnh" role="list" aria-label="Apple Watch Series 9, 10, or 11 features">
                        <li class="WPwDxXrO" role="listitem">
                          <div class="row EyoKojxx large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column dWmQvysJ large-12">
                              <div class="bento-box ugBnBdtB">
                                <div class="bentobox-item TelyDurN">
                                  <div class="row JwMMwYuy large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column UJljRIqr large-show medium-hide small-hide large-12">
                                      <p class="copy gHlWBRxG channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy puktDfpu channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        2.5x battery<br>life
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 64px;
                                            padding: 13px 32px 18px 32px;
                                            margin: 0px -4px -5px 17px;
                                          "></span>
                                      </p>
                                      <p class="copy BcLAltqW channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">compared to Series&nbsp;9<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                    <div class="column EIbrPorq large-hide medium-show small-hide medium-12">
                                      <p class="copy iYhpVpvp channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy QCuqORwR channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        2.5x battery<br>life
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 48px;
                                            padding: 16px 38px 16px 14px;
                                            margin: 2px -15px -4px 8px;
                                          "></span>
                                      </p>
                                      <p class="copy ANkvccqR channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">compared to Series&nbsp;9<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                    <div class="column fMnbdCqP large-hide medium-hide small-show large-12">
                                      <p class="copy IHworluN channel-custom-font-custom-21-caption-stat-upgrader-column2" style="--focus-color: rgba(0, 125, 250, 0.6)">Up to</p>
                                      <p class="copy ioYfDXzU channel-custom-font-custom-48-large-stat-upgraders" style="--focus-color: rgba(0, 125, 250, 0.6)">
                                        2.5x battery<br>life
                                        <span class="icon" role="img" aria-hidden="true" style="
                                            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAABCCAYAAACb6w5JAAAFD0lEQVR42uydTUhUURTH75iusgxxp9BKx61WA+4knAxamEToK6wWrhSR2rgrchHUQomwRbhIJMaIsAIhmwh3gpVufbqQQHcVTNrKys6Z+yyZuffN+57B+f/gPGS888E9/zn33PvunBvb29sTAFSgCwBTuf9HLBZz/2zTOEXXJFkbWTNZPdlRdKsnfpJtka2SLZKlRTz1Oew33R8RYv/+cCoE06im6wBZP1kj/Bcq62STZI9JFDulIQTT4OgxRHaHrAY+ipQM2V2yRySIX8UTgmnwN/85WQt8UlRWyHpIDOtBC6FwsmgaF+i6DBGUBC1ZX0ifRDhrMI2rdH1NVg0flAzVWZ9I3wSGfmiQqmMRHHGQ0MySLfCzyL7DV56oJYuTtZN1O0jEf5N10TAxF16OIHOC5QKRYInsNn2QefgwBEyjk66jZAmbVjyTaPWTM+iFIGcHSzY5wS7ZCNlD+gB/4LFQxcBD9zDZfbIqmwQy4XU2YZcsDtmI4AfZOXrTcYggAriPua+5z2Xf6xLIoWBzBLlYtKlZJ9i1RLAADxUlOnDu8E4TGXidocHLotO+/ytzHh8Q+sWiEa0ITOOMkCuNyewH0ocxoB9u+QuYFrySGE99VESHBepnHpLHFM+vsXz3IKiIsKbJVjlnaMsbDkzjGF0nyPrgy0CZJhuk/t5W5AyLmgRyndo3+U8W167wDaRPmvbn82YHUgTvC2S1wDv85etQiIFnE281zznt9kaVKllMatcJ1FPECYggVBJWH+cOEfPW2o2KpNc3OyiENk2bWU1OgOEgfPqsvi7sE3sfuhJCs6aNKkHsh48io9+hT+x86EoI9bqJS5AhCLgm6dAndj50JQTdziLVvYMG+CcyGmh4iDnwifRhflvXQnC6sBHDOkGkVIn8tZ2MTfuaaIQQT2Hbc7EJwQeV6NUywDS+0fUN2T3dnUpsZy8PeK/DDcF3Kk3jMoQAeEIwQ2K4BCEA9vkUieEkhAA4MoxDCIC5SFGhCUIAvB7UCyEA5iyEAJhmCAEwdRACEJg1gH2+QgiAWYUQAPMBQgB8K3sGQgCvRDy1BiGUN1y46yZmDeUN/1rtOkWDLxBCeUeCXhLBS6wjlCe86/mp4J/Qx1MvVA2wZ/GwI3ed1xXa8AohHHYc7nj2OjTsoocjg/s6k/MtP2HTPuPlTSpyEgkVtYrHNuGfyNhUfKtrtcmgx988HBTCli64KB5Lwz+RkXboEzsfuhLCqqZNu+KxSfgnMiYd+sTOh66EsKhp061IQLjGzzR8FDrTynpKKp/Y+9CVEHThvtEq15LLoJDlXUA4LFl9nDsd7BT6qqxp/0KQtXd0JVlGrUJOB6MC1/bpQGQIKRKo6ydVCFmNVcW6n4M+KhyO/VzPZ1gxRGyTXbP+/4RsA1NLz1PEDasPE9k+zRWBZFjo61b5ytuCL7gpV7JwsIc7MgWnfSEX3FTVYubbk2Oa53EZ2C5UX40YKQKulH9c0+KWVapXBCkEFOUuHQEUsSi3fMEeIUvAq6iyIsaiZjYBghFBpzUdHLMRwY6QR/v4PucprIM7Miix48rpfO+gBA/u+P8B+biYKQdiANHCIuBdRs/8vpDzU95kZODdrjjXqTTg4aDXbyQonCPk5wz8hq1WUgKKy4qQR/fMBf3CzvYjyEpciew0xeP9buBznUH2fSLIMx+dJYv6xAZHAkdHCR4JrBYFDgkPjtI4JByUN9jODrL8FWAASlTKt7/irlcAAAAASUVORK5CYII=);
                                            background-repeat: no-repeat;
                                            background-size: contain;
                                            background-position: center;
                                            background-size: 48px;
                                            padding: 12px 46px 14px 14px;
                                            margin: 2px -18px -4px 3px;
                                          "></span>
                                      </p>
                                      <p class="copy JhbufKsN channel-custom-font-custom-21-caption-stat-upgrader-column2" style="--focus-color: rgba(0, 125, 250, 0.6)">compared to Series&nbsp;9<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="PqJGPMoN" role="listitem">
                          <div class="row rpjqpaxk large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column krSjGfts large-12">
                              <div class="bento-box oeziNknn">
                                <div class="bentobox-item kwtQMnBo">
                                  <div class="row FPRHNluH large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column oAXxqwnw large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image PnYXrnnX double-invert image-large is-largest" alt="Apple Watch Ultra 4, titanium case, black color, Race Route feature with a map of a running route, left side exterior, Action button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_large.png"><img class="image PnYXrnnX double-invert image-medium" alt="Apple Watch Ultra 4, titanium case, black color, Race Route feature with a map of a running route, left side exterior, Action button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_medium.png"><img class="image PnYXrnnX double-invert image-small" alt="Apple Watch Ultra 4, titanium case, black color, Race Route feature with a map of a running route, left side exterior, Action button, Alpine Loop band, burgundy color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_action_button_small.png"></figure></span>
                                    </div>
                                    <div class="column SGKrrpui large-12">
                                      <p class="copy esvOninu channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Larger display, Action&nbsp;button and improved GPS</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="ZHYFAHyo" role="listitem">
                          <div class="row nTRZqNuH large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column YBbVbKvK large-12">
                              <div class="bento-box nezerJqE">
                                <div class="bentobox-item qFeKscxW">
                                  <div class="row ahSwPvqk medium-display-bleed small-display-bleed">
                                    <div class="column JiDEXqqy large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image unWQXVpw double-invert image-large is-largest" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_large.png"><img class="image unWQXVpw double-invert image-medium" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_medium.png"><img class="image unWQXVpw double-invert image-small" alt="Back of Apple Watch Ultra 4, titanium case, black color, multiple round sensors with glowing green LED lights" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_sensor_small.png"></figure></span>
                                    </div>
                                    <div class="column eRDoRIzL large-12">
                                      <p class="copy QgtZvlBF channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Most accurate heart rate sensing in a wearable<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="WOOUfKrv" role="listitem">
                          <div class="row kThDPgwJ large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column UDZLHErd large-12">
                              <div class="bento-box ZgDOekyD">
                                <div class="bentobox-item miQxElnm">
                                  <div class="row PJNDeTww medium-display-bleed small-display-bleed">
                                    <div class="column AhrJCqtR large-12">
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image KaWYRwBk double-invert image-large is-largest" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_large.png"><img class="image KaWYRwBk double-invert image-medium" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_medium.png"><img class="image KaWYRwBk double-invert image-small" alt="A multi-colored wave of light" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_Siri_AI_small.png"></figure></span>
                                    </div>
                                    <div class="column VfiOqSBv large-12">
                                      <p class="copy mqSVsKrm channel-custom-font-custom-21-caption-upgrader large-show medium-show small-hide" style="--focus-color: rgba(0, 125, 250, 0.6)">Audio&nbsp;Intelligence<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                      <p class="copy TESrcVAo channel-custom-font-custom-21-caption-upgrader large-hide medium-hide small-show" style="--focus-color: rgba(0, 125, 250, 0.6)">Audio Intelligence<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="oYtEDdsA" role="listitem">
                          <div class="row gCPkVxoO large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column iEvZLhnV large-12">
                              <div class="bento-box yuPXRQvx">
                                <div class="bentobox-item oYOaTDnK">
                                  <div class="row BzisEdug large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column VXIHXmmA large-12">
                                      <p class="copy kWDsdcpB channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Readiness and Vitals with improved HRV<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image vLGNuxAA double-invert image-large is-largest" alt="Readiness score of 8, Go For It" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_large.png"><img class="image vLGNuxAA double-invert image-medium" alt="Readiness score of 8, Go For It" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_medium.png"><img class="image vLGNuxAA double-invert image-small" alt="Readiness score of 8, Go For It" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_HRV_small.png"></figure></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="LEEsCPzo" role="listitem">
                          <div class="row BQrCXwqM large-display-bleed medium-display-bleed small-display-bleed">
                            <div class="column hviMdEsv large-12">
                              <div class="bento-box OtgtFHBx">
                                <div class="bentobox-item jGmpvAsH">
                                  <div class="row JYmJkPxO large-display-bleed medium-display-bleed small-display-bleed">
                                    <div class="column vyhubsyV large-12">
                                      <p class="copy cMxOTiqz channel-custom-font-custom-21-caption-upgrader" style="--focus-color: rgba(0, 125, 250, 0.6)">Increased durability and dive to 40 m<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup><span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                                      <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                                          <img class="image wdrFQqnR double-invert image-large is-largest" alt="Apple Watch Ultra 4, titanium case, black color, Depth app showing diving metrics, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_large.png"><img class="image wdrFQqnR double-invert image-medium" alt="Apple Watch Ultra 4, titanium case, black color, Depth app showing diving metrics, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_medium.png"><img class="image wdrFQqnR double-invert image-small" alt="Apple Watch Ultra 4, titanium case, black color, Depth app showing diving metrics, right side exterior, Digital Crown, raised side button" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>upgrader_Series_durability_small.png"></figure></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | UPGRADERS (DARK - LAYOUT 3)--><!--BEGIN > FLEX | COMPARE-->
    <div class="section BvAqiSsI">
      <div class="section-content">
        <div class="row oQVzpGwC large-display-bleed medium-display-bleed small-display-bleed">
          <div class="column AxVTeNzM large-12">
            <h2 class="copy KqdrSCwy channel-custom-font-custom-21-eyebrow-reduced" style="--focus-color: rgba(0, 125, 250, 0.6)">Compare</h2>
            <p class="copy miXMPXna channel-custom-font-custom-40-headline-reduced" style="--focus-color: rgba(0, 125, 250, 0.6)">Which Apple&nbsp;Watch is right for you?</p>
          </div>
        </div>
        <div class="row AruczUzX large-display-bleed medium-display-bleed small-display-bleed">
          <div class="XDSmUsBs">
            <noscript><style>
                .channel-compare {
                  opacity: 1 !important;
                  visibility: visible !important;
                }
              </style></noscript>
            <div class="channel-compare channel-compare--hidden" data-channel-html-compare="{&quot;order&quot;:{&quot;small&quot;:[0,1],&quot;medium&quot;:[0,1],&quot;large&quot;:[0,1,2],&quot;max&quot;:{&quot;large&quot;:3,&quot;medium&quot;:2,&quot;small&quot;:2}},&quot;useStatic&quot;:false,&quot;isConfigurableCompare&quot;:true,&quot;selectorEls&quot;:&quot;[selector-dropdown]&quot;,&quot;labelEls&quot;:&quot;[compare-column-interactive]&quot;,&quot;swapEls&quot;:&quot;[data-column-group]&quot;,&quot;headerEl&quot;:&quot;[compare-header-row]&quot;,&quot;staticEl&quot;:&quot;[compare-column-header-static]&quot;}" data-compare-json-path="<?= base_url('images/appleProducts/apple_watch_ultra/scripts/') ?>channel-html-compare.json" style="--focus-color: rgba(0, 113, 227, 100%)">
              <div class="section section-compare-table">
                <div class="compare-wrapper">
                  <div role="table" aria-label="Compare models" class="compare compare-table with-fullwidthrowheader compare-column-range-large-3 compare-column-range-medium-2 compare-column-range-small-2">
                    <div role="rowgroup">
                      <div role="row" class="compare-row visuallyhidden" compare-header-row="true">
                        <div role="columnheader">&nbsp;</div>
                        <div role="columnheader" id="compare-header-0"><span class="visuallyhidden">Apple Watch Series 12</span></div>
                        <div role="columnheader" id="compare-header-1"><span class="visuallyhidden">Apple Watch Ultra 4</span></div>
                        <div role="columnheader" id="compare-header-2"><span class="visuallyhidden">Apple Watch SE 3</span></div>
                      </div>
                    </div>
                    <div role="rowgroup" class="compare selector-table with-fullwidthrowheader">
                      <div id="static-compare-header" role="row" class="compare-row" data-column-group="true" compare-header-hide="true">
                        <div role="rowheader" class="compare-rowheader" style="order: unset; visibility: hidden; display: none"><div class="visuallyhidden">Choose models to compare.</div></div>
                        <div id="hidden-columnheader" role="columnheader" class="visuallyhidden">&nbsp;</div>
                        <div role="columnheader" compare-column-header-static="true" class="static-dropdown compare-column"><div data-index="0">Apple Watch Series 12</div></div>
                        <div role="columnheader" compare-column-header-static="true" class="static-dropdown compare-column"><div data-index="1">Apple Watch Ultra 4</div></div>
                        <div role="columnheader" compare-column-header-static="true" class="static-dropdown compare-column"><div data-index="2">Apple Watch SE 3</div></div>
                      </div>
                      <div id="interactive-compare-header" role="row" class="compare-row" compare-header-show="true">
                        <div role="rowheader" class="compare-rowheader"><div class="visuallyhidden">Choose models to compare.</div></div>
                        <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column">
                          <form class="selector-element" autocomplete="off">
                            <label for="0" class="visuallyhidden">Select a model</label><select id="0" selector-dropdown="true" class="selector-dropdown" data-default-value="0" data-col-index="0" data-previous-value="0">
                              <option value="0" aria-selected="true" selected="selected">Apple Watch Series 12</option></select><span class="selector-icon icon icon-chevrondown" aria-hidden="true"></span>
                          </form>
                        </div>
                        <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column">
                          <form class="selector-element" autocomplete="off">
                            <label for="1" class="visuallyhidden">Select a model</label><select id="1" selector-dropdown="true" class="selector-dropdown" data-default-value="1" data-col-index="1" data-previous-value="1">
                              <option value="1" aria-selected="true" selected="selected">Apple Watch Ultra 4</option></select><span class="selector-icon icon icon-chevrondown" aria-hidden="true"></span>
                          </form>
                        </div>
                        <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column">
                          <form class="selector-element" autocomplete="off">
                            <label for="2" class="visuallyhidden">Select a model</label><select id="2" selector-dropdown="true" class="selector-dropdown" data-default-value="2" data-col-index="2" data-previous-value="2">
                              <option value="2" aria-selected="true" selected="selected">Apple Watch SE 3</option></select><span class="selector-icon icon icon-chevrondown" aria-hidden="true"></span>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!--BEGIN > CATEGORY > IMAGES-->
                    <div role="rowgroup" class="compare-section section-images no-padding-top">
                      <!--BEGIN > CATEGORY > IMAGES > FEATURE > IMAGES-->
                      <div role="row" class="compare-row compare-template-space-bottom compare-template-preview-item-embeded-image" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Images</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div aria-hidden="false" class="PKJcYpmX embed-image">
                            <figure class="responsive-image compare-image has-large has-small">
                              <img class="image double-invert image-large is-largest" alt="Apple Watch Series 12" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_large.png"><img class="image double-invert image-small" alt="Apple Watch Series 12" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_series_12_small.png">
                            </figure>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div aria-hidden="false" class="fkRmJTBv embed-image">
                            <figure class="responsive-image compare-image has-large has-small">
                              <img class="image double-invert image-large is-largest" alt="Apple Watch Ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_large.png"><img class="image double-invert image-small" alt="Apple Watch Ultra 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_ultra_4_small.png">
                            </figure>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div aria-hidden="false" class="vCC5FA1 embed-image">
                            <figure class="responsive-image compare-image has-large has-small">
                              <img class="image double-invert image-large is-largest" alt="Apple Watch SE 3" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_large.png"><img class="image double-invert image-small" alt="Apple Watch SE 3" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>compare_apple_watch_SE_3_small.png">
                            </figure>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > IMAGES > FEATURE > IMAGES-->
                    </div>
                    <!--END > CATEGORY > IMAGES--><!--BEGIN > CATEGORY > CATEGORY-->
                    <div role="rowgroup" class="compare-section section-category no-padding-top multi-row">
                      <!--BEGIN > CATEGORY > CATEGORY > FEATURE > GPS-->
                      <div role="row" class="compare-row compare-template-display-block compare-template-preview-item-pricing" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">GPS</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="typography-pricing price-container copy" index="0" product-name="Apple Watch Series 12">
                            <strong>GPS</strong>
                            <div><span style="color: #6e6e73">Starting from ₹[XXX]</span></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="typography-pricing price-container copy" index="1" product-name="Apple Watch Ultra 4">
                            <div class="mdash-container"><span aria-hidden="true" class="mdash">—</span><span class="visuallyhidden">Not Applicable</span></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="typography-pricing price-container copy" index="2" product-name="Apple Watch SE 3">
                            <strong>GPS</strong>
                            <div><span style="color: #6e6e73">Starting from ₹[XXX]</span></div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > CATEGORY > FEATURE > GPS--><!--BEGIN > CATEGORY > CATEGORY > FEATURE > GPS-CELLULAR-->
                      <div role="row" class="compare-row compare-template-display-block compare-template-font-color compare-template-preview-item-pricing" data-column-group="true" style="--font-color: #1d1d1f">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">GPS + Cellular</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="typography-pricing price-container copy" index="0" product-name="Apple Watch Series 12">
                            <strong>GPS + Cellular</strong>
                            <div><span style="color: #6e6e73">Grey</span></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="typography-pricing price-container copy" index="1" product-name="Apple Watch Ultra 4">
                            <strong>GPS + Cellular</strong>
                            <div><span style="color: #6e6e73">Starting from ₹[XXX]</span></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="typography-pricing price-container copy" index="2" product-name="Apple Watch SE 3">
                            <strong>GPS + Cellular</strong>
                            <div><span style="color: #6e6e73">Starting from ₹[XXX]</span></div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > CATEGORY > FEATURE > GPS-CELLULAR-->
                    </div>
                    <!--END > CATEGORY > CATEGORY--><!--BEGIN > CATEGORY > FINISH-->
                    <div role="rowgroup" class="compare-section section-finish no-padding-top multi-row">
                      <!--BEGIN > CATEGORY > FINISH > FEATURE > Aluminium-COLOR-->
                      <div role="row" class="compare-row compare-template-space-top compare-template-preview-item-color-nav" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Aluminium</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="row-colors" product-name="Apple Watch Series 12">
                            <strong class="colornav-heading">Aluminium</strong>
                            <div style="height: 18px">
                              <div class="colornav-items" role="list" aria-label="Apple Watch Series 12 Aluminium available in Dark Bronze, Light Gold, Black and Space Grey">
                                <div class="colornav-item-row">
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Dark Bronze" style="background-color: rgb(75, 55, 42)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Light Gold" style="background-color: rgb(227, 210, 186)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Black" style="background-color: rgb(36, 33, 31)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Space Gray" style="background-color: rgb(182, 179, 178)"></figure></div>
                                </div>
                              </div>
                            </div>
                            <div class="colornav-label-container"><p class="channel-colornav-label copy">Dark Bronze, Light Gold, Black, Space&nbsp;Grey</p></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="row-colors row-colors-none" product-name="Apple Watch Ultra 4">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Aluminium not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="row-colors" product-name="Apple Watch SE 3">
                            <strong class="colornav-heading">Aluminium</strong>
                            <div style="height: 18px">
                              <div class="colornav-items" role="list" aria-label="Apple Watch SE 3 Aluminium available in Midnight and Starlight">
                                <div class="colornav-item-row">
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Midnight" style="background-color: rgb(26, 37, 48)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Starlight" style="background-color: rgb(222, 214, 209)"></figure></div>
                                </div>
                              </div>
                            </div>
                            <div class="colornav-label-container"><p class="channel-colornav-label copy">Midnight, Starlight</p></div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > FINISH > FEATURE > Aluminium-COLOR--><!--BEGIN > CATEGORY > FINISH > FEATURE > TITANIUM-COLOR-->
                      <div role="row" class="compare-row compare-template-preview-item-color-nav" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Titanium</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="row-colors" product-name="Apple Watch Series 12">
                            <strong class="colornav-heading">Titanium</strong>
                            <div style="height: 18px">
                              <div role="list" aria-label="Apple Watch Series 12 Titanium available in Radiant Gold and Natural" class="colornav-items">
                                <div class="colornav-item-row">
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Radiant Gold" style="background-color: rgb(242, 225, 182)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Natural" style="background-color: rgb(222, 216, 209)"></figure></div>
                                </div>
                              </div>
                            </div>
                            <div class="colornav-label-container"><p class="channel-colornav-label copy">Radiant Gold, Natural</p></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="row-colors" product-name="Apple Watch Ultra 4">
                            <strong class="colornav-heading">Titanium</strong>
                            <div style="height: 18px">
                              <div role="list" aria-label="Apple Watch Ultra 4 Titanium available in Natural and Black" class="colornav-items">
                                <div class="colornav-item-row">
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Natural" style="background-color: rgb(204, 196, 188)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Black" style="background-color: rgb(15, 14, 14)"></figure></div>
                                </div>
                              </div>
                            </div>
                            <div class="colornav-label-container"><p class="channel-colornav-label copy">Natural, Black</p></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="row-colors row-colors-none" product-name="Apple Watch SE 3">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Titanium not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > FINISH > FEATURE > TITANIUM-COLOR--><!--BEGIN > CATEGORY > FINISH > FEATURE > CERAMIC-COLOR-->
                      <div role="row" class="compare-row compare-template-preview-item-color-nav" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Ceramic</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="row-colors" product-name="Apple Watch Series 12">
                            <strong class="colornav-heading">Ceramic</strong>
                            <div style="height: 18px">
                              <div role="list" aria-label="Apple Watch Series 12 Ceramic available in Pearl White and Night Blue" class="colornav-items">
                                <div class="colornav-item-row">
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Pearl White" style="background-color: rgb(240, 234, 228)"></figure></div>
                                  <div class="colornav-item" role="listitem"><figure class="colornav-swatch" role="img" aria-label="Night Blue" style="background-color: rgb(42, 48, 64)"></figure></div>
                                </div>
                              </div>
                            </div>
                            <div class="colornav-label-container"><p class="channel-colornav-label copy">Pearl White, Night Blue</p></div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="row-colors row-colors-none" product-name="Apple Watch Ultra 4">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p aria-hidden="true" class="mdash">—</p>
                                  <p class="visuallyhidden">Ceramic not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="row-colors row-colors-none" product-name="Apple Watch SE 3">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Ceramic not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > FINISH > FEATURE > CERAMIC-COLOR--><!--BEGIN > CATEGORY > FINISH > FEATURE > STAINLESS-STEEL-COLOR-->
                      <div role="row" class="compare-row compare-template-preview-item-color-nav" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Stainless steel</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="row-colors row-colors-none" product-name="Apple Watch Series 12">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Stainless steel not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="row-colors row-colors-none" product-name="Apple Watch Ultra 4">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Stainless steel not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="row-colors row-colors-none" product-name="Apple Watch SE 3">
                            <div>
                              <div class="colornav-items">
                                <div class="mdash-container">
                                  <p class="mdash" aria-hidden="true">—</p>
                                  <p class="visuallyhidden">Stainless steel not applicable</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > FINISH > FEATURE > STAINLESS-STEEL-COLOR-->
                    </div>
                    <!--END > CATEGORY > FINISH--><!--BEGIN > CATEGORY > BUY-->
                    <div role="rowgroup" class="compare-section section-buy no-padding-top">
                      <!--BEGIN > CATEGORY > BUY > FEATURE > BUY-->
                      <div role="row" class="compare-row compare-template-border-top compare-template-preview-item-button" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Buy</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="button-container"><a id="apple-watch-series-12" href="#" aria-label="Buy, Apple Watch Series 12" class="button compare-button trigger-buy-modal" data-product-key="apple_watch_series_12">Buy</a></div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="button-container"><a id="apple-watch-ultra-4" href="#" aria-label="Buy, Apple Watch Ultra 4" class="button compare-button trigger-buy-modal" data-product-key="apple_watch_ultra">Buy</a></div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="button-container"><a id="apple-watch-se-3" href="#" aria-label="Buy, Apple Watch SE 3" class="button compare-button">Buy</a></div>
                        </div>
                      </div>
                      <!--END > CATEGORY > BUY > FEATURE > BUY-->
                    </div>
                    <!--END > CATEGORY > BUY--><!--BEGIN > CATEGORY > QUICK-LOOK-->
                    <div role="rowgroup" class="compare-section section-quick-look no-padding-top multi-row">
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CASE-SIZE-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Case Size</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="ANSbEAAr embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 32px"><span class="stat-caption copy">46 mm or 42 mm case&nbsp;size</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="YrVpgTsG embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 32px"><span class="stat-caption copy">49 mm case size</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="yE60636 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_applewatch_case_sizes_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 32px"><span class="stat-caption copy">44 mm or 40 mm case&nbsp;size</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CASE-SIZE--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Display</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="WzljhNBy embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Always‑On Retina&nbsp;display</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Up to 2,000 nits</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Wide‑angle OLED</span></div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">LTPO3</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="ALnHwSxN embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Always‑On Retina&nbsp;display</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Up to 3,000 nits</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Wide‑angle OLED</span></div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">LTPO3</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="x0CA01C embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchface_applewatch_case_inset_filled_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Always‑On Retina&nbsp;display</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Up to 1,000 nits</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">OLED</span></div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">LTPO</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > HEART-HEALTH-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Heart Health</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="YmRPMapH embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Recovery&nbsp;HRV</span></div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">High‑frequency background heart rate tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Hypertension notifications not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">ECG app<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">High and low heart rate notifications</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Irregular rhythm notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Low cardio fitness notifications</span></div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">Blood&nbsp;Oxygen app<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="LLOfPLvF embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Recovery&nbsp;HRV</span></div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">High‑frequency background heart rate tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Hypertension notifications not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">ECG app<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">High and low heart rate notifications</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Irregular rhythm notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Low cardio fitness notifications</span></div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">Blood&nbsp;Oxygen app<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="v3CA220 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_watchhealth_heart_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">HRV</span></div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">Heart rate tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Hypertension notifications not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">ECG app not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">High and low heart rate notifications</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Irregular rhythm notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Low cardio fitness notifications</span></div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Blood Oxygen app not applicable</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > HEART-HEALTH--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > SLEEP-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Sleep</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="xeYTDJAu embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Sleep tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Sleep apnoea notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">Sleep score</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="ggntTGyh embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Sleep tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Sleep apnoea notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">Sleep score</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="kCD9928 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_bed_double_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Sleep tracking</span></div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Sleep apnoea notifications<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">Sleep score</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > SLEEP--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > VITALS-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Vitals</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="qyFLWhyO embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 82px">
                                <span class="stat-caption copy">Vitals app featuring heart rate, respiratory rate, wrist temperature, blood oxygen, sleep&nbsp;duration and HRV<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="LMOXPjsN embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 82px">
                                <span class="stat-caption copy">Vitals app featuring heart rate, respiratory rate, wrist temperature, blood oxygen, sleep&nbsp;duration and HRV<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="o85770E embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_vitals_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 82px">
                                <span class="stat-caption copy">Vitals app featuring heart rate, respiratory rate, wrist temperature, sleep&nbsp;duration, and HRV<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > VITALS--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > WOMENS-HEALTH -->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Women's Health</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="HgyeLOrE embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Wrist temperature sensing<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cycle Tracking<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Improved period predictions</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Fertile window estimates</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Retrospective ovulation estimates</span></div>
                              <div class="stat-row" style="height: 34px">
                                <span class="stat-caption copy">Perimenopause and menopause support<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="CvIMqfzF embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Wrist temperature sensing<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cycle Tracking<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Improved period predictions</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Fertile window estimates</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Retrospective ovulation estimates</span></div>
                              <div class="stat-row" style="height: 34px">
                                <span class="stat-caption copy">Perimenopause and menopause support<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="fEDA47D embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_cycletracking_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Wrist temperature sensing<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cycle Tracking<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Improved period predictions</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Fertile window estimates</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Retrospective ovulation estimates</span></div>
                              <div class="stat-row" style="height: 34px">
                                <span class="stat-caption copy">Perimenopause and menopause support<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > WOMENS-HEALTH --><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > APPLE-INTELLIGENCE-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Apple Intelligence</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="nhsEDlzi embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Apple&nbsp;Intelligence<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Audio&nbsp;Intelligence<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="fdbHhVAz embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Apple&nbsp;Intelligence<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Audio&nbsp;Intelligence<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="RVdGOLBB embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_apple_intelligence_gradient_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Apple&nbsp;Intelligence<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Audio Intelligence not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > APPLE-INTELLIGENCE--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > SAFETY-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Safety</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="bWinYYoc embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Emergency SOS<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">International emergency calling<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Fall Detection and Crash&nbsp;Detection<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Emergency siren not applicable</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="XUHKwTuM embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Emergency SOS<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">International emergency calling<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Fall Detection and Crash&nbsp;Detection<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px"><span class="stat-caption copy">Siren</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="m797773 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_sos_circle_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Emergency SOS<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">International emergency calling<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Fall Detection and Crash&nbsp;Detection<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 16px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Emergency siren not applicable</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > SAFETY--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > WATER-RESISTANCE-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Water resistance</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="agOmXSpl embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Water resistant 50 m<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">Swim, snorkel</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Depth gauge to 6 m</span></div>
                              <div class="stat-row" style="height: 32px"><span class="stat-caption copy">Water temperature sensor</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="mlYLWOxR embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Water resistant 100 m<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">Swim, snorkel, scuba, high‑speed water sports</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Depth gauge to 40 m</span></div>
                              <div class="stat-row" style="height: 32px"><span class="stat-caption copy">Water temperature sensor</span></div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="g401DB0 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_drop_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Water resistant 50 m<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 63px"><span class="stat-caption copy">Swim</span></div>
                              <div class="stat-row" style="height: 31px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Depth gauge not applicable</span></span>
                              </div>
                              <div class="stat-row" style="height: 32px">
                                <span class="stat-caption copy"><span aria-hidden="true" class="mdash stat-caption copy">—</span> <span class="visuallyhidden" style="white-space: nowrap">Water temperature sensor not applicable</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > WATER-RESISTANCE--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CONNECTIVITY-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Connectivity</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="uiaTsRwz embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Precision L1 GPS</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cellular options<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">5G capable<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="ZxfvYjBp embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Precision dual‑frequency&nbsp;GPS</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cellular<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">5G capable<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="jB57AB3 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_antenna_radiowaves_left_and_right_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">GPS</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Cellular options<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 18px">
                                <span class="stat-caption copy">5G capable<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CONNECTIVITY--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Chip</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="qTdDStzy embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">S11 chip</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Wrist flick gesture</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Single and double tap gestures</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 34px">
                                <span class="stat-caption copy">Precision&nbsp;Finding for&nbsp;iPhone<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="jVlEFwAO embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s11_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">S11 chip</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Wrist flick gesture</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Single and double tap gestures</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 34px">
                                <span class="stat-caption copy">Precision&nbsp;Finding for&nbsp;iPhone<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="c956FED embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s10_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s10_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_chip_s10_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">S10 chip</span></div>
                              <div class="stat-row" style="height: 31px"><span class="stat-caption copy">Wrist flick gesture</span></div>
                              <div class="stat-row" style="height: 47px"><span class="stat-caption copy">Single and double tap gestures</span></div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Siri&nbsp;AI<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 34px"><span class="stat-caption copy">Find iPhone</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CHIP--><!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > POWER-AND-BATTERY-LIFE-->
                      <div role="row" class="compare-row compare-template-preview-item-stat" data-column-group="true">
                        <div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">Power and Battery Life</span></div>
                        <div role="cell" class="compare-column" headers="compare-header-0">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="yRHpNoBt embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Up to 24 hours<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Up to 38 hours in<br>Low Power Mode<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 66px">
                                <span class="stat-caption copy">Fast‑charge capable<br>(0–80% in about 30&nbsp;minutes; 15&nbsp;minutes for up to 12 hours)<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-1">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="AFFALOns embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Up to 50 hours<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Up to 84 hours in<br>Low Power Mode<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 66px">
                                <span class="stat-caption copy">Fast‑charge capable<br>(0–80% in about 45&nbsp;minutes; 15&nbsp;minutes for up to 18 hours)<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column" headers="compare-header-2">
                          <div class="stat" role="presentation">
                            <div class="stat-content">
                              <div class="stat-row">
                                <div aria-hidden="true" class="w3B4731 embed-image">
                                  <figure class="responsive-image compare-image has-large"><img class="image double-invert image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>icon_compare_battery_100percent_bolt_elevated_large.png"></figure>
                                </div>
                              </div>
                              <div class="stat-row" style="height: 33px">
                                <span class="stat-caption copy">Up to 18 hours<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 49px">
                                <span class="stat-caption copy">Up to 32 hours in<br>Low Power Mode<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                              <div class="stat-row" style="height: 66px">
                                <span class="stat-caption copy">Fast‑charge capable<br>(0–80% in about 45&nbsp;minutes; 15&nbsp;minutes for up to 8 hours)<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers.</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > POWER-AND-BATTERY-LIFE-->
                    </div>
                    <!--END > CATEGORY > QUICK-LOOK-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | COMPARE--><!--BEGIN > FLEX | BANDS-->
    <div class="section mJErLYou theme-light">
      <div class="section-content">
        <div class="row LZDsQvmB">
          <div class="column ZpIeatAj large-12">
            <div class="bento-box HFlLuvxe">
              <span class="bentobox-item XzPSTbrI"><div class="row OxiLObrv">
                  <div class="column ooMMjozn large-6 medium-6 small-12">
                    <h2 class="copy tiWlSBxd channel-custom-font-custom-21-eyebrow-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Straps</h2>
                    <p class="copy ikTdgBpi channel-custom-font-custom-40-headline-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Endless style.</p>
                    <p class="copy hBpbwYAV channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">New materials, new styles, new colours.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup> <span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> Redefine your style with the latest collection of Apple&nbsp;Watch straps.</p>
                    <div class="row XuswKkoX large-display-bleed medium-display-bleed small-display-bleed">
                      <div class="column rPjcnLoL large-12">
                        <a href="#" class="link-wrapper WacMDotl link-standalone" style="--focus-color: rgba(0, 113, 227, 100%)"><span class="channel-icon hjButHwY channel-custom-font-custom-17-links"><span class="icon-copy">Shop straps</span><span class="icon icon-chevronright icon-after" aria-hidden="true"></span></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="column jrZoJltg large-hide medium-hide small-show large-12">
                    <span><figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image QVudohpT image-large is-largest" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large.png"><img class="image QVudohpT image-medium" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium.png"><img class="image QVudohpT image-small" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small.png"></figure></span>
                  </div>
                  <div class="column NmjHYbvB large-show medium-show small-hide large-6 medium-6 small-12">
                    <div>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image wsIbcdAi image-large is-largest" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, starlight Sport Band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_large.png"><img class="image wsIbcdAi image-medium" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, starlight Sport Band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_medium.png"><img class="image wsIbcdAi image-small" alt="Apple Watch Series 11 bands: purple fog Sport Band, anchor blue Ocean band, starlight Sport Band, light blue Alpine Loop" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_bands_small.png">
                      </figure>
                    </div>
                  </div></div></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | BANDS--><!--BEGIN > FLEX | AIRPODS-->
    <div class="section HuqPkmoU theme-light">
      <div class="section-content">
        <div class="row eMLUhzoO large-display-bleed medium-display-bleed small-display-bleed">
          <div class="column EKPhNRoZ large-12">
            <div class="bento-box qsILGJpm">
              <span class="bentobox-item DOjrxrnH"><div class="row BwJpydnY large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column IcxXevvm large-6 small-12">
                    <h2 class="copy yxkfsNpy channel-custom-font-custom-21-eyebrow-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Apple&nbsp;Watch and AirPods</h2>
                    <p class="copy mPkAryxP channel-custom-font-custom-40-headline-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Made for each other.</p>
                    <p class="copy StSpoOyY channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">You can do so much with just Apple&nbsp;Watch and AirPods — all without your iPhone.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup> <span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span> Take calls, stream music and podcasts, and hear incoming notifications. Even respond to messages with Siri.
                    </p>
                  </div>
                  <div class="column ImRtaVAx large-6 medium-6 small-12">
                    <div>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image IAlhaJxn image-large is-largest" alt="Apple Watch Series 12, Aluminium case, black color, black Sport Band, Apple Music app open, paired with AirPods 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_large.png"><img class="image IAlhaJxn image-medium" alt="Apple Watch Series 12, Aluminium case, black color, black Sport Band, Apple Music app open, paired with AirPods 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_medium.png"><img class="image IAlhaJxn image-small" alt="Apple Watch Series 12, Aluminium case, black color, black Sport Band, Apple Music app open, paired with AirPods 4" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_and_airpods_small.png">
                      </figure>
                    </div>
                  </div></div></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | AIRPODS--><!--BEGIN > FLEX | FITNESS+-->
    <div class="section DDKqEPBO theme-light">
      <div class="section-content">
        <div class="row epDRiDxj large-display-bleed medium-display-bleed small-display-bleed">
          <div class="column USjNIszc large-12">
            <div class="bento-box dpZhyqyg">
              <span class="bentobox-item AyrGrJuZ"><div class="row AwBErZtJ large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column hWOacYpY large-7 medium-6 small-12">
                    <h2>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image fqLahtxr image-large is-largest" alt="Apple Fitness+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_large.png"><img class="image fqLahtxr image-medium" alt="Apple Fitness+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_medium.png"><img class="image fqLahtxr image-small" alt="Apple Fitness+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_fitness_plus_small.png">
                      </figure>
                    </h2>
                    <p class="copy msDElNyZ channel-custom-font-custom-40-headline-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Fitness for everyone. Fitness for you.</p>
                    <p class="copy suqDNjnU channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">12 different workout types, from HIIT to Yoga. Meditation too. And get real-time, personalised metrics onscreen with Apple&nbsp;Watch.<sup aria-hidden="true" style="vertical-align: bottom; top: -0.3em">◊</sup> <span class="visuallyhidden" style="white-space: nowrap">Refer to legal disclaimers.</span></p>
                  </div>
                  <div class="column tvOqwqoy large-5 medium-6 small-12">
                    <div>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image jSUpjTxD image-large is-largest" alt="Apple Watch next to iPhone with Apple Fitness+ class on screen" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_large.png"><img class="image jSUpjTxD image-medium" alt="Apple Watch next to iPhone with Apple Fitness+ class on screen" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_medium.png"><img class="image jSUpjTxD image-small" alt="Apple Watch next to iPhone with Apple Fitness+ class on screen" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_fitness_small.png">
                      </figure>
                    </div>
                  </div></div></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | FITNESS+--><!--BEGIN > FLEX | APPLECARE+-->
    <div class="section JLUHKtuj theme-light">
      <div class="section-content">
        <div class="row AMDnJWtj large-display-bleed medium-display-bleed small-display-bleed">
          <div class="column ikesNPoN large-12">
            <div class="bento-box lbnYsJvw">
              <span class="bentobox-item lNLnksoq"><div class="row kxKFqMtS large-display-bleed medium-display-bleed small-display-bleed">
                  <div class="column BKmyMXwt large-7 medium-7 small-12">
                    <h2>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image OiHeKNyh image-large is-largest" alt="Apple Care+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_large.png"><img class="image OiHeKNyh image-medium" alt="Apple Care+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_medium.png"><img class="image OiHeKNyh image-small" alt="Apple Care+" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_logo_applecare_small.png">
                      </figure>
                    </h2>
                    <p class="copy gQuqmRmm channel-custom-font-custom-40-headline-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Handled with AppleCare+.</p>
                    <div class="row srXEChBY">
                      <span class="column CgVSokqu large-12"><ul class="mkOtScuv" role="list" aria-label="Apple care plus support and coverage">
                          <li class="xwzUiLyo" role="listitem">
                            <div class="row wCYMQCra large-display-bleed medium-display-bleed small-display-bleed">
                              <div class="column uYocBirv">
                                <span><figure class="responsive-image channel-picture has-large has-medium has-small" aria-hidden="true">
                                    <img class="image zfQvioqp image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png"><img class="image zfQvioqp image-medium" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png"><img class="image zfQvioqp image-small" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png"></figure></span>
                              </div>
                              <div class="column AKxrVemG large-10"><p class="copy DJaNXetA channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Unlimited repairs for accidents like drops and cracks.</p></div>
                            </div>
                          </li>
                          <li class="mwaWGCud" role="listitem">
                            <div class="row hyvCdIxB large-display-bleed medium-display-bleed small-display-bleed">
                              <div class="column BUzcYOrn large-">
                                <span><figure class="responsive-image channel-picture has-large has-medium has-small" aria-hidden="true">
                                    <img class="image QrbTzEnr image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png"><img class="image QrbTzEnr image-medium" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png"><img class="image QrbTzEnr image-small" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png"></figure></span>
                              </div>
                              <div class="column hNeYRrst large-10"><p class="copy uIbBKbwL channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Battery replacements at no extra charge.</p></div>
                            </div>
                          </li>
                          <li class="ncCICdso" role="listitem">
                            <div class="row bgTBwjvn large-display-bleed medium-display-bleed small-display-bleed">
                              <div class="column OETEifzU large-">
                                <span><figure class="responsive-image channel-picture has-large has-medium has-small" aria-hidden="true">
                                    <img class="image TguKijug image-large is-largest" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_large.png"><img class="image TguKijug image-medium" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_medium.png"><img class="image TguKijug image-small" alt="" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_check_d0112b_34_R_small.png"></figure></span>
                              </div>
                              <div class="column WcwmnMuY large-10"><p class="copy JuooJTmK channel-custom-font-custom-17-body-reduced-flex" style="--focus-color: rgba(0, 125, 250, 0.6)">Priority support from Apple experts.</p></div>
                            </div>
                          </li>
                        </ul></span>
                    </div>
                    <div class="row QsAnESuY large-display-bleed medium-display-bleed small-display-bleed">
                      <div class="column rOapgmBo large-12">
                        <a href="#" class="link-wrapper pmsFQAwL link-standalone" style="--focus-color: rgba(0, 113, 227, 100%)"><span class="channel-icon VwLtsrwg channel-custom-font-custom-17-links"><span class="icon-copy">Learn more about AppleCare+ for Apple&nbsp;Watch</span><span class="icon icon-chevronright icon-after" aria-hidden="true"></span></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="column UZLRjnyB large-5 medium-5 small-12">
                    <div>
                      <figure class="responsive-image channel-picture has-large has-medium has-small">
                        <img class="image JaiDdTpA image-large is-largest" alt="Apple Watch Series 12, Aluminium case, black color, Responsive Art watch face, Sport Band, black color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_large.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_large_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_large.png"><img class="image JaiDdTpA image-medium" alt="Apple Watch Series 12, Aluminium case, black color, Responsive Art watch face, Sport Band, black color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_medium.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_medium_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_medium.png"><img class="image JaiDdTpA image-small" alt="Apple Watch Series 12, Aluminium case, black color, Responsive Art watch face, Sport Band, black color" loading="lazy" srcset="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_small.png, <?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_small_2x.png 2x" src="<?= base_url('images/appleProducts/apple_watch_ultra/images/') ?>flex_watch_applecare_small.png">
                      </figure>
                    </div>
                  </div></div></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX | APPLECARE+--><!--BEGIN > LEGAL-->
    <div class="section fTpxsMnx">
      <div class="section-content">
        <div class="row RmBAjHuM large-display-bleed medium-display-bleed">
          <aside class="column caHgXVzt large-12 medium-12" aria-labelledby="comp" role="complementary">
            <div class="row ptbMeNyD large-display-bleed medium-display-bleed small-display-bleed">
              <span class="column xiAfnpqP large-12"><h2 class="copy ckWCSboQ channel-custom-font-custom-12-sosumi" id="comp" style="--focus-color: rgba(0, 125, 250, 0.6)"><span id="footnote-diamond-1" aria-hidden="true">◊</span>Legal Disclaimers</h2></span>
            </div>
            <ul class="cIPsmCvp" role="list">
             <li class="IaUPdmne" role="listitem">
                <div class="row vogHfGqx large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column QjJAlSBw large-12"><p class="copy YUQgLPAS channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">5G&nbsp;Cellular and Wireless:</span> Data plan is required. 5G is available in selected markets and through selected carriers. Speeds vary based on site conditions and carrier. For details on 5G&nbsp;support, contact your carrier and see&nbsp;<a href="https://apple.com/in/watch/cellular" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watch/cellular</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="voCzAsAY" role="listitem">
                <div class="row JCnVuFsT large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column VKvHedxQ large-12"><p class="copy xgABpNBt channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Apple&nbsp;Fitness+:</span> Apple&nbsp;Fitness+ requires a subscription and compatible hardware and software.</p></span>
                </div>
              </li>
              <li class="kgnzWbBG" role="listitem">
                <div class="row POWdPaAP large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column coBgcqqC large-12"><p class="copy qEiGyqyY channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Apple&nbsp;Intelligence:</span> Some Apple&nbsp;Intelligence features are not available on Apple&nbsp;Watch&nbsp;SE&nbsp;2, Apple&nbsp;Watch&nbsp;Series&nbsp;6, Series&nbsp;7, Series&nbsp;8 and Apple&nbsp;Watch&nbsp;Ultra. Learn more at &nbsp;<a href="https://support.apple.com/en-in/121115" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/121115</span></a>. Apple Intelligence features require an Apple&nbsp;Intelligence–enabled device set to a supported language.
                    </p></span>
                </div>
              </li>
              
              <li class="kgnzWbBG" role="listitem">
                <div class="row MgEOCvmq large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column QNaVffwT large-12"><p class="copy qEiGyqyY channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)">
                      <span style="font-weight: 500">Audio&nbsp;Intelligence:</span> Audio&nbsp;Intelligence includes Live&nbsp;Rewind, Siri Recap, Sound Recognition and faster Shazam, and requires Apple&nbsp;Watch&nbsp;Series&nbsp;12 or Apple&nbsp;Watch&nbsp;Ultra&nbsp;4. Live&nbsp;Rewind and Siri Recap will be available in beta in late 2026 and require an Apple&nbsp;Intelligence–enabled iPhone&nbsp;16 or later (excluding iPhone&nbsp;16e). Will be available in English to start and will not initially be 
                      available in the EU. Certain Audio&nbsp;Intelligence features that rely on server-side models are subject to daily usage limits, including but not limited to Live&nbsp;Rewind and Siri Recap. For more information, visit&nbsp;<a href="https://support.apple.com/en-in/148354" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/148354</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="RrkXhSxj" role="listitem">
                <div class="row wFNoPapd large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column dKPPUEyb large-12"><p class="copy enxcSTsZ channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)">
                      <span style="font-weight: 500">Blood&nbsp;Oxygen:</span> The Blood&nbsp;Oxygen app is for wellness purposes only and not for medical use.
                    </p></span>
                </div>
              </li>
              <li class="wdaylyzC" role="listitem">
                <div class="row ZXstfRtL large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column LZUcmnAy large-12"><p class="copy QkpsvNyn channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Cellular and Wireless:</span> Wireless service plan is required for cellular service. Contact your service provider for more details. Connection may vary based on network availability. Check <a href="https://apple.com/in/watch/cellular" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watch/cellular</span></a> for participating wireless carriers and eligibility. See&nbsp;<a href="https://support.apple.com/en-in/119601" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/119601</span></a> for additional setup instructions.
                    </p></span>
                </div>
              </li>
              <li class="otJhbGnA" role="listitem">
                <div class="row STlGnPul large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column sZBJCYxv large-12"><p class="copy cGSdHlnn channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Compatibility:</span> Apple&nbsp;Watch&nbsp;Series&nbsp;12, Apple&nbsp;Watch&nbsp;Ultra&nbsp;4 and Apple&nbsp;Watch&nbsp;SE&nbsp;3 require iPhone&nbsp;11 or later with iOS&nbsp;27 or&nbsp;later.
                  </p></span>
                </div>
              </li>
              <li class="nwtrCwui" role="listitem">
                <div class="row EOdGseoJ large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column kGItvhmW large-12"><p class="copy FxsxWSwu channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)">
                      <span style="font-weight: 500">Cycle Tracking:</span> The Cycle Tracking app should not be used for birth control or to diagnose a health condition. Cycle deviation notifications are based solely on the user’s logged cycle history. Cycle deviation notifications inclusive of perimenopause are for people 40 years old or older. These notifications are not intended to replace traditional methods of diagnosis, monitoring, or treatment of perimenopause or menopause.
                    </p></span>
                </div>
              </li>
              <li class="HAohoqyJ" role="listitem">
                <div class="row mRUAGWvx large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column sBGRmtoC large-12"><p class="copy UeyOUVvt channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">ECG:</span> The ECG app is available on Apple&nbsp;Watch&nbsp;Series&nbsp;4 and later (excluding Apple&nbsp;Watch&nbsp;SE models) and all Apple&nbsp;Watch&nbsp;Ultra models, and can generate an ECG similar to a <span style="white-space: nowrap">single-lead</span> electrocardiogram. Intended for use by people 22 years old or&nbsp;older.</p></span>
                </div>
              </li>
              <li class="JMvjufyw" role="listitem">
                <div class="row tbFgrbpH large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column HRnfbbqq large-12"><p class="copy UasHjqzl channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Emergency SOS:</span> Emergency&nbsp;SOS requires a cellular connection or Wi-Fi calling with an internet connection from your Apple&nbsp;Watch or nearby iPhone. You can use cellular models of Apple&nbsp;Watch to make an emergency call in many locations, provided that cellular service is available. Some cellular networks may not accept an emergency call from your Apple&nbsp;Watch if your Apple&nbsp;Watch isn’t activated, if it isn’t compatible 
                      with or configured to operate on a particular cellular network, if it isn’t set up for cellular service or if the cellular network does not support emergency calling over IMS. See&nbsp; <a href="https://support.apple.com/en-in/108374" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/108374</span></a> and <a href="https://apple.com/in/watch/cellular" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watch/cellular</span></a> for more information.
                    </p></span>
                </div>
              </li>
              <li class="iZjqfeBx" role="listitem">
                <div class="row NzCnKWxD large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column BBlAqZrU large-12"><p class="copy duqCuDqc channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Fast Charging:</span> Fast charging is compatible with Apple&nbsp;Watch&nbsp;Series&nbsp;7 and later, Apple&nbsp;Watch&nbsp;SE&nbsp;3 and all Apple&nbsp;Watch&nbsp;Ultra models.</p></span>
                </div>
              </li>
              <li class="AhPiuXws" role="listitem">
                <div class="row NMobtiyw large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column HxnCKktt large-12"><p class="copy URemnZxh channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Feature Availability:</span> Features are subject to change. Some features, applications and services may not be available in all regions or all languages, and may require specific hardware and software. For more information, see&nbsp;<a href="https://apple.com/in/watchos/feature-availability" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watchos/feature-availability</span></a>. 
                    </p></span>
                </div>
              </li>
              
              <li class="akocFNqC" role="listitem">
                <div class="row ANNWpPqR large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column YiZIbgsB large-12"><p class="copy LebbQvwU channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)">
                      <span style="font-weight: 500">Heart Rate Sensing:</span> Based on data from an Apple-conducted study of heart rate accuracy, during July and August 2026, utilising commercially available bestselling wearables available as of June 2026. For more information, visit&nbsp;<a href="https://apple.com/HRAccuracy" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/HRAccuracy</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="KawPnkmI" role="listitem">
                <div class="row LwOYBIsI large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column bHQAwBud large-12"><p class="copy nuDBahAl channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)"><span style="font-weight: 500">Hypertension Notifications:</span> Hypertension notifications are not intended for use by people under 22 years old, those who have been previously diagnosed with hypertension or pregnant persons.</p></span>
                </div>
              </li>
              <li class="KawPnkmI" role="listitem">
                <div class="row WCnRkDte large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column rejKxjpf large-12"><p class="copy nuDBahAl channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">International Emergency Calling:</span> International emergency calling requires an Apple&nbsp;Watch&nbsp;Series&nbsp;5 (GPS&nbsp;+&nbsp;Cellular) or later, Apple&nbsp;Watch&nbsp;SE (GPS&nbsp;+&nbsp;Cellular) or later, or Apple&nbsp;Watch&nbsp;Ultra or later. For a list of supported countries and regions, see&nbsp;<a href="https://apple.com/in/watchos/feature-availability" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watchos/feature-availability</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="ftGVleAN" role="listitem">
                <div class="row OrNCrRBl large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column wjLWyMrb large-12"><p class="copy bBeQimtN channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">IRN (Irregular Rhythm Notification):</span> Irregular rhythm notifications are not intended for use by people under 22 years old or those who have been previously diagnosed with atrial fibrillation (AFib).</p></span>
                </div>
              </li>
              <li class="dhvOHABq" role="listitem">
                <div class="row DmdVQhqp large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column nEqYODma large-12"><p class="copy XrBmCovg channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)">
                      <span style="font-weight: 500">Max Extended Workout Tracking:</span> Max Extended Workout turns on Low Power Mode during the workout, and turns off alerts and splits; certain metrics will be unavailable. Testing conducted by Apple in July and August 2026 using <span style="white-space: nowrap">pre-production</span> Apple&nbsp;Watch&nbsp;Ultra&nbsp;4; all devices tested with <span style="white-space: nowrap">pre-release</span> software. Battery life varies by use, configuration, cellular network, signal strength and many other factors; actual results will vary.
                    </p></span>
                </div>
              </li>
              <li class="MipLSppp" role="listitem">
                <div class="row vQLBoKnc large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column WGLBIzoU large-12"><p class="copy WgQXAApa channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Precision Finding for iPhone:</span> Requires an iPhone and Apple&nbsp;Watch with second-generation Ultra&nbsp;Wideband chip. Ultra&nbsp;Wideband availability varies by region. For more information, visit&nbsp;<a href="https://support.apple.com/en-in/109512" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/109512</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="URxqwjsH" role="listitem">
                <div class="row NzGOopwS large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column dzCXYVyQ large-12"><p class="copy medPOoyD channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Power and Battery:</span> Battery life varies by use and configuration. See&nbsp;<a href="https://apple.com/in/watch/battery" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/watch/battery</span></a> for more information.
                    </p></span>
                </div>
              </li>
              <li class="NwfRIpzp" role="listitem">
                <div class="row LvGixBsq large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column sNnRslrO large-12"><p class="copy RsSUSUnW channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Sleep Apnoea Notifications:</span> Sleep apnoea notifications are available on Apple&nbsp;Watch&nbsp;Series&nbsp;9 and later, Ultra&nbsp;2 and later, and SE&nbsp;3. The feature is intended to detect signs of moderate to severe sleep apnoea for people 18 years old or older without a diagnosis of sleep apnoea.</p></span>
                </div>
              </li>
              <li class="PSFeIxvY" role="listitem">
                <div class="row KjUhsABf large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column ASmSCtAK large-12"><p class="copy vdWrOPxz channel-custom-font-custom-12-sosumi" style="~~focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Siri&nbsp;AI:</span> Apple&nbsp;Intelligence is available with Siri and device language set to Chinese (Simplified), Chinese (Traditional), Danish, Dutch, English, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Spanish, Swedish, Turkish or Vietnamese. Some features may not be available in all regions or languages. Some devices may not be available in all regions. Siri&nbsp;AI is available in beta in watchOS&nbsp;27 and 
                      requires an Apple&nbsp;Intelligence–enabled device set to a supported language. Available in English to start. Siri&nbsp;AI will not be initially available in the EU on watchOS. Certain Apple&nbsp;Intelligence features that rely on server-side models are subject to daily usage limits, including but not limited to Siri&nbsp;AI. Daily limits may vary by feature, request complexity, system demand, system policies and other 
                      factors. Expanded access to such features will be available for a fee in the future. Use of these features is subject to the Apple&nbsp;Intelligence Terms and Conditions. Learn more at&nbsp;<a href="https://apple.com/in/apple-intelligence" class="footer-link"><span style="color: #424245; white-space: nowrap">apple.com/in/apple-intelligence</span></a>.
                    </p></span>
                </div>
              </li>
              <li class="OrOxShxN" role="listitem">
                <div class="row iGsHPlqk large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column ylwVEjsc large-12"><p class="copy DJaLCoty channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Straps:</span> Straps are for illustrative purposes only and are subject to availability. Some straps are sold separately.</p></span>
                </div>
              </li>
              <li class="GTeBRfnx" role="listitem">
                <div class="row SGOSuWBF large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column Atqyfnxn large-12"><p class="copy lkuxkZww channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Temperature Sensing:</span> The temperature sensing feature is not intended for medical use. Temperature sensing is available on Apple&nbsp;Watch&nbsp;Series&nbsp;8 and later, Apple&nbsp;Watch&nbsp;SE&nbsp;3 and all Apple&nbsp;Watch&nbsp;Ultra models.</p></span>
                </div>
              </li>
              <li class="xVCkIapg" role="listitem">
                <div class="row OPZvCnuM large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column VKjeMYwW large-12"><p class="copy gFjQhFBf channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 125, 250, 0.6)"><span style="font-weight: 500">Vitals:</span> The Vitals app is for wellness purposes only and not for medical use.</p></span>
                </div>
              </li>
              <li class="wFPXsIon" role="listitem">
                <div class="row UmULWamR large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column xocpGasc large-12"><p class="copy paTWUgrr channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Water and Dust Resistance:</span> Apple&nbsp;Watch&nbsp;Series&nbsp;2 and later and Apple&nbsp;Watch&nbsp;SE and later have a water resistance rating of 50 metres under ISO standard 22810:2010. This means that they may be used for shallow-water activities like swimming in a pool or ocean. Series&nbsp;10 and later can also be used for snorkelling to 6&nbsp;meters. However, they should not be used for scuba diving, waterskiing or other high-velocity 
                       water sports. Apple&nbsp;Watch&nbsp;Ultra models have a water resistance rating of 100&nbsp;metres under ISO standard 22810:2010. They may be used for recreational scuba diving (with compatible third-party app from the App&nbsp;Store) to 40&nbsp;metres and high-speed water sports. They should not be used below 40&nbsp;metres. Water resistance is not a permanent condition and can diminish over time. For more information, see&nbsp;<a href="https://support.apple.com/en-in/109522" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/109522</span></a>. Apple&nbsp;Watch&nbsp;Series&nbsp;7 and later and Apple&nbsp;Watch&nbsp;Ultra models are rated IP6X dust resistant.
                      </p></span>
                </div>
              </li>
              <li class="wFPXsIon" role="listitem">
                <div class="row rIIABRrD large-display-bleed medium-display-bleed small-display-bleed">
                  <span class="column pyHFEBoJ large-12"><p class="copy paTWUgrr channel-custom-font-custom-12-sosumi" style="--focus-color: rgba(0, 113, 227, 100%)">
                      <span style="font-weight: 500">Workout Buddy:</span> Requires a paired Apple&nbsp;Intelligence–enabled iPhone and Bluetooth headphones with device and Siri language set to English or Spanish. To use Workout&nbsp;Buddy without your iPhone nearby, you must have a Wi-Fi or cellular connection. Some features may not be available in all regions or languages. For feature and language availability and system requirements, see&nbsp;<a href="https://support.apple.com/en-in/121115" class="footer-link"><span style="color: #424245; white-space: nowrap">support.apple.com/en-in/121115</span></a>.
                    </p></span>
                </div>
              </li>
            </ul>
          </aside>
        </div>
      </div>
    </div>
    <!--END > LEGAL--><!--BEGIN > CHANNEL SCRIPTS -->
    <script id="channel-html-scripts">(()=>{var u="compare-button",n=0;function i(){window.dispatchEvent(new CustomEvent("channel:reorder-dom"))}function a(l){var c,d;"function"==typeof l._renderCompareButton&&(c=(()=>{var e=document.querySelector(".channel-compare"),t=e&&e.getAttribute("data-compare-button-customization");if(!t)return{};try{return JSON.parse(t)}catch(e){return console.warn("[compare-button-customization] invalid JSON",e),{}}})(),d=c.button||{},l._renderCompareButton=function({item:e,productName:t}){var{aria:e,value:r,featureTitleOverride:n,classes:i,attrs:a,notAvailable:o}=e,s=window.channelHtml&&window.channelHtml.helpers||{},s=s.stringToId?s.stringToId(t):t,t=e||"Not Applicable",o=o||c.notAvailable;return l._createElement("div",{classes:["button-container"],children:[r?l._createElement("a",{classes:(-1===(i=(i=i||d.classes||["button",u]).slice()).indexOf(u)&&i.push(u),i),attrs:{"aria-label":e,href:r,...d.attrs||{},...a||{},id:s},content:n||""}):l._createElement("div",{classes:["mdash-container"],...o?{content:o}:{children:[l._createElement("p",{classes:["mdash","copy"],attrs:{"aria-hidden":"true"},content:"&mdash;"}),l._createElement("p",{classes:["visuallyhidden"],content:t})]}})]})})}function o(){var r,e=window.channelHtml&&window.channelHtml.channelCompare&&window.channelHtml.channelCompare.instances,t=e&&Object.keys(e)[0],e=t&&e[t];!e||!e.compareData||e.dropdowns&&e.dropdowns.length&&!Array.prototype.every.call(e.dropdowns,function(e){return 0<e.options.length&&!Number.isNaN(Number(e.value))})?100<++n||setTimeout(o,100):(a(e),(r=e).dropdowns&&r.dropdowns.length?(r.dropdowns.forEach(function(e,t){r._updateProduct(t,Number(e.value))}),i()):console.warn("[compare-button-customization] no dropdowns; skipped re-render"))}window.addEventListener("pageshow",function(){i()}),document.addEventListener("change",function(e){e=e.target;e&&e.classList&&e.classList.contains("selector-dropdown")&&requestAnimationFrame(i)}),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",o):o()})(),(()=>{function e(){this._createElements(),this._bindEvents()}var t=e.prototype;t._bindEvents=function(){this._onResize=this._resize.bind(this)},t._createElements=function(){var e;typeof document<"u"&&!this.span&&(this.span=document.createElement("span"),(e=this.span.style).visibility="hidden",e.position="absolute",e.top="0",e.zIndex="-1",this.span.innerHTML="&nbsp;",window.ResizeObserver||(this.iframe=document.createElement("iframe"),(e=this.iframe.style).position="absolute",e.top="0",e.left="0",e.width="100%",e.height="100%",this.span.appendChild(this.iframe)),document.body.appendChild(this.span))},t.detect=function(e){this._createElements(),this.originalSize=e||16,this.currentSize=parseFloat(window.getComputedStyle(this.span)["font-size"]),this.currentSize>this.originalSize&&this._onResize(),this.isDetecting||(window.ResizeObserver?(this.resizeObserver=new ResizeObserver(this._onResize),this.resizeObserver.observe(this.span)):this.iframe.contentWindow.addEventListener("resize",this._onResize),this.isDetecting=!0)},t._resize=function(){this.currentSize=parseFloat(window.getComputedStyle(this.span)["font-size"]),this.originalSize<this.currentSize?document.documentElement.classList.add("text-zoom"):document.documentElement.classList.remove("text-zoom"),window.dispatchEvent(new Event("resize")),window.dispatchEvent(new CustomEvent("resize:text-zoom",{detail:this}))},t.getScale=function(){return this.currentSize/this.originalSize},t.remove=function(){this.isDetecting&&(this.resizeObserver&&this.resizeObserver.unobserve(this.span),this.iframe&&this.iframe.contentWindow.removeEventListener("resize",this._onResize),this.isDetecting=!1)},t.destroy=function(){this.remove(),this.span&&this.span.parentElement&&this.span.parentElement.removeChild(this.span),this.span=null,this.iframe=null,this.resizeObserver=null},t.addListener=function(e,t){this.callbacks[e]=t,window.addEventListener("resize:text-zoom",t)},t.removeListener=function(e){this.callbacks[e]&&(window.removeEventListener("resize:text-zoom",this.callbacks[e]),delete this.callbacks[e])},t.callbacks={},window.textZoom=new e,window.textZoom.detect()})(),(()=>{function e(e){var t;return function(){return t="u"<typeof t?e.apply(this,arguments):t}}function t(){var e=T.getDocument().createElement("canvas");return!("function"!=typeof e.getContext||!e.getContext("2d"))}var T=k={getWindow:function(){return window},getDocument:function(){return document},getNavigator:function(){return navigator}},r=e,r=((n={exports:{}}).exports=r(t),n.exports.original=t,n.exports),n={exports:{}};let P=function(e){var t,r={};for(t in e)r[t]=e[t].reduce(function(e,t){return e[t.name]=!1,e},{version:{string:"",major:0,minor:0,patch:0,documentMode:!1}});return r},i={browser:[{name:"edge",userAgent:"Edge",version:["rv","Edge"],test:function(e){return-1<e.ua.indexOf("Edge")||"Mozilla/5.0 (Windows NT 10.0; Win64; x64)"===e.ua}},{name:"edgeChromium",userAgent:"Edge",version:["rv","Edg"],test:function(e){return-1<e.ua.indexOf("Edg")&&-1===e.ua.indexOf("Edge")}},{name:"headlessChrome",userAgent:"HeadlessChrome"},{name:"chrome",userAgent:"Chrome"},{name:"firefox",test:function(e){return-1<e.ua.indexOf("Firefox")&&-1===e.ua.indexOf("Opera")},version:"Firefox"},{name:"android",userAgent:"Android"},{name:"safari",test:function(e){return-1<e.ua.indexOf("Safari")&&-1<e.vendor.indexOf("Apple")},version:"Version"},{name:"ie",test:function(e){return-1<e.ua.indexOf("IE")||-1<e.ua.indexOf("Trident")},version:["MSIE","rv"],parseDocumentMode:function(){let e=!1;return e=document.documentMode?parseInt(document.documentMode,10):e}},{name:"opera",userAgent:"Opera",version:["Version","Opera"]},{name:"samsung",userAgent:"SamsungBrowser"}],os:[{name:"windows",test:function(e){return-1<e.ua.indexOf("Windows")},version:"Windows NT"},{name:"osx",userAgent:"Mac",test:function(e){return-1<e.ua.indexOf("Macintosh")}},{name:"ios",test:function(e){return-1<e.ua.indexOf("iPhone")||-1<e.ua.indexOf("iPad")},version:["iPhone OS","CPU OS"]},{name:"linux",userAgent:"Linux",test:function(e){return(-1<e.ua.indexOf("Linux")||-1<e.platform.indexOf("Linux"))&&-1===e.ua.indexOf("Android")}},{name:"fireos",test:function(e){return-1<e.ua.indexOf("Firefox")&&-1<e.ua.indexOf("Mobile")},version:"rv"},{name:"android",userAgent:"Android",test:function(e){return-1<e.ua.indexOf("Android")}},{name:"chromeos",userAgent:"CrOS"}]};function q(e,r){if("function"==typeof e.parseVersion)return e.parseVersion(r);{let t=e.version||e.userAgent;var n=(t="string"==typeof t?[t]:t).length;for(let e=0;e<n;e++)if((i=r.match((i=t[e],new RegExp(i+"[a-zA-Z\\s/:]+([0-9_.]+)","i"))))&&1<i.length)return i[1].replace(/_/g,".")}var i;return!1}function a(t,r,n){var i,a=t.length;let o,s;for(let e=0;e<a;e++)if("function"==typeof t[e].test?!0===t[e].test(n)&&(o=t[e].name):-1<n.ua.indexOf(t[e].userAgent)&&(o=t[e].name),o)return r[o]=!0,"string"==typeof(s=q(t[e],n.ua))?(i=s.split("."),r.version.string=s,i&&0<i.length&&(r.version.major=parseInt(i[0]||0),r.version.minor=parseInt(i[1]||0),r.version.patch=parseInt(i[2]||0))):"edge"===o&&(r.version.string="12.0.0",r.version.major="12",r.version.minor="0",r.version.patch="0"),"function"==typeof t[e].parseDocumentMode&&(r.version.documentMode=t[e].parseDocumentMode()),r;return r}var o=function(e){var t={},r=P(i);return t.browser=a(i.browser,r.browser,e),t.os=a(i.os,r.os,e),t},s=typeof window<"u"?window.navigator:{userAgent:"",platform:"",vendor:""},o=o({ua:s.userAgent,platform:s.platform,vendor:s.vendor}),s=(s=o)&&s.__esModule&&Object.prototype.hasOwnProperty.call(s,"default")?s.default:s,l=k,c=e;function d(){var e=l.getWindow(),t=l.getDocument(),r=l.getNavigator();return!!("ontouchstart"in e||e.DocumentTouch&&t instanceof e.DocumentTouch||0<r.maxTouchPoints||0<r.msMaxTouchPoints)}(h={exports:{}}).exports=c(d),h.exports.original=d;var u=o,j=(c=h.exports).original,h=e;function p(){return!j()||u.os.ios&&8<=u.os.version.major||u.browser.chrome}n.exports=h(p),n.exports.original=p;var h=n.exports,m=k,v=e;function f(){var e=!1,t=m.getDocument(),r=m.getNavigator();try{"cookie"in t&&r.cookieEnabled&&(t.cookie="ac_feature_cookie=1",e=-1!==t.cookie.indexOf("ac_feature_cookie"),t.cookie="ac_feature_cookie=; expires=Thu, 01 Jan 1970 00:00:01 GMT;")}catch{}return e}function F(){this.initialize()}function R(e,t){var r=G(e),n=!1!==t&&G(t);return E[e]=E[t]=E[r]=E[n]={dom:t,css:n},t}function B(e){var t,r,n,i;if((e+="")in E)return E[e].dom;for(n=K(),r=(e=Q(e)).charAt(0).toUpperCase()+e.substring(1),t="filter"===e?["WebkitFilter","filter"]:(e+" "+X.dom.join(r+" ")+r).split(" "),i=0;i<t.length;i++)if(typeof n.style[t[i]]<"u")return 0!==i&&X.reduce(i-1),R(e,t[i]);return R(e,!1)}(n={exports:{}}).exports=v(f),n.exports.original=f;var w,W,g,v=n.exports,n={exports:{}},b={},x=((x={exports:{}}).exports=function(){return w?(w.style.cssText="",w.removeAttribute("style")):w=document.createElement("_"),w},x.exports.resetElement=function(){w=null},x.exports),U=/^(webkit|moz|ms)/gi,$=/-([a-z])/g,J=["-webkit-","-moz-","-ms-"],Z=["Webkit","Moz","ms"],V=["webkit","moz","ms"],y=((y=F.prototype).initialize=function(){this.reduced=!1,this.css=J,this.dom=Z,this.evt=V},y.reduce=function(e){this.reduced||(this.reduced=!0,this.css=[this.css[e]],this.dom=[this.dom[e]],this.evt=[this.evt[e]])},new F),E=b,K=x,G=function(e){return"cssfloat"===e.toLowerCase()?"float":(e=U.test(e)?"-"+e:e).replace(/([A-Z]+)([A-Z][a-z])/g,"$1-$2").replace(/([a-z\d])([A-Z])/g,"$1-$2").toLowerCase()},Q=function(e){return"float"===e.toLowerCase()?"cssFloat":e="Ms"===(e=e.replace($,function(e,t){return t.toUpperCase()})).substr(0,2)?"ms"+e.substring(2):e},X=y,Y=b,ee=x,_=!1;function C(a,e){var o;return e+="",!!(a=te(a))&&(re(a,e)||(o=ie[a].css,""!==(e=(e=e.replace(oe,function(t){var e,r,n,i;if("#"===t[0]||!isNaN(t[0]))return t;if(r=t.replace(ae,""),(n=o+":"+r)in S)return!1===S[n]?"":t.replace(r,S[n]);for(e=ne.css.map(function(e){return e+t}),e=[t].concat(e),i=0;i<e.length;i++)if(re(a,e[i]))return 0!==i&&ne.reduce(i-1),S[n]=e[i].replace(ae,""),e[i];return S[n]=!1,""})).trim())))&&e}(O={exports:{}}).exports=function(e,t){var r,n;if(!_){_=!0,W="CSS"in window&&"supports"in window.CSS,g=!1,n=ee();try{n.style.width="invalid"}catch{g=!0}}if(W)return e=Y[e].css,CSS.supports(e,t);if(r=(n=ee()).style[e],g)try{n.style[e]=t}catch{return!1}else n.style[e]=t;return n.style[e]&&n.style[e]!==r},O.exports.resetFlags=function(){_=!1};var te=B,re=O.exports,ne=y,ie=b,S={},ae=/(\([^\)]+\))/gi,oe=/([^ ,;\(]+(\([^\)]+\))?)/gi,se=C,x=e;function le(){return["linear-gradient(to bottom right, #9f9, white)","linear-gradient(top left, #9f9, white)","gradient(linear, left top, right bottom, from(#9f9), to(white))"].some(function(e){return!!se("background-image",e)})}function ce(){for(var e="",t=0;t<arguments.length;t++)0<t&&(e+=","),e+=arguments[t];return e}function A(r,n){function i(){var e=arguments,t=n.apply(this,e);return t in i.cache||(i.cache[t]=r.apply(this,e)),i.cache[t]}return n=n||ce,i.cache={},i}n.exports=x(le),n.exports.original=le;var O=n.exports,de=C,ue=B,x=A;function he(e,t){return typeof t<"u"?!!de(e,t):!!ue(e)}(b={exports:{}}).exports=x(he),b.exports.original=he;var n=b.exports,pe=C,b=e;function me(){return!!pe("margin","1vw 1vh")}(x={exports:{}}).exports=b(me),x.exports.original=me;var b=x.exports,ve=k,fe=A;function we(e,t){return e in ve.getDocument().createElement(t=t||"div")}(x={exports:{}}).exports=fe(we),x.exports.original=we;var fe=x.exports,x={exports:{}},L={window:window,document:document},M=function(e,t){return e="on"+e,t in L||(L[t]=document.createElement(t)),e in(t=L[t])||"setAttribute"in t&&(t.setAttribute(e,"return;"),"function"==typeof t[e])},z={transitionend:["webkitTransitionEnd","MSTransitionEnd"],animationstart:["webkitAnimationStart","MSAnimationStart"],animationend:["webkitAnimationEnd","MSAnimationEnd"],animationiteration:["webkitAnimationIteration","MSAnimationIteration"],fullscreenchange:["MSFullscreenChange"],fullscreenerror:["MSFullscreenError"]},ge=["transitionend","animationstart","animationend","animationiteration"],D=y,N={},be=function e(t,r){var n,i,a;if(r=r||"div",t=t.toLowerCase(),r in N||(N[r]={}),t in(i=N[r]))return i[t];if(M(t,r))return i[t]=t;if(t in z)for(a=0;a<z[t].length;a++)if(n=z[t][a],M(n.toLowerCase(),r))return i[t]=n;for(a=0;a<D.evt.length;a++)if(n=D.evt[a]+t,M(n,r))return D.reduce(a),i[t]=n;return"window"!==r&&ge.indexOf(t)?i[t]=e(t,"window"):i[t]=!1},y=A;function xe(e,t){return!!be(e,t)}x.exports=y(xe),x.exports.original=xe;var y=x.exports,x={exports:{}},ye=o.os,Ee=c.original,_e=k,o=e;function Ce(){var e=_e.getWindow();return!Ee()&&!e.orientation||ye.windows}x.exports=o(Ce),x.exports.original=Ce;var o=x.exports,x={exports:{}},I={exports:{}},Se=o.original,Ae=k,H=e;function Oe(){var e=Ae.getWindow(),t=e.screen.width;return e.orientation&&e.screen.height<t&&(t=e.screen.height),!Se()&&600<=t}I.exports=H(Oe),I.exports.original=Oe;var H=I.exports,Le=o.original,Me=H.original,I=e;function ze(){return!Le()&&!Me()}x.exports=I(ze),x.exports.original=ze;var I=x.exports,De=k,Ne=k,Ie=e;function He(){var e=Ne.getWindow(),t=!1;try{t=!(!e.localStorage||null===e.localStorage.non_existent)}catch{}return t}(x={exports:{}}).exports=Ie(He),x.exports.original=He;var Ie=x.exports,ke=k,Te=e;function Pe(){return"HTMLMediaElement"in ke.getWindow()}(x={exports:{}}).exports=Te(Pe),x.exports.original=Pe;var Te=x.exports,qe=k,je=e;function Fe(){var e=qe.getWindow().matchMedia("only all");return!(!e||!e.matches)}(x={exports:{}}).exports=je(Fe),x.exports.original=Fe;var je=x.exports,Re=k;function Be(){var e=Re.getWindow().matchMedia("(prefers-reduced-motion)");return!(!e||!e.matches)}var We=k,Ue=e;function $e(){var e=We.getWindow(),t=!1;try{"sessionStorage"in e&&"function"==typeof e.sessionStorage.setItem&&(e.sessionStorage.setItem("ac_feature","test"),t=!0,e.sessionStorage.removeItem("ac_feature","test"))}catch{}return t}(x={exports:{}}).exports=Ue($e),x.exports.original=$e;var Ue=x.exports,Je=k,Ze=e;function Ve(){return!!Je.getDocument().implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")}(x={exports:{}}).exports=Ze(Ve),x.exports.original=Ve;var Ze=x.exports,Ke=C,Ge=e;function Qe(){return!(!Ke("perspective","1px")||!Ke("transform","translateZ(0)"))}(x={exports:{}}).exports=Ge(Qe),x.exports.original=Qe;var Ge=x.exports,Xe=k,k=e;function Ye(){var e=Xe.getDocument().createElement("canvas");return"function"==typeof e.getContext&&!(!e.getContext("webgl")&&!e.getContext("experimental-webgl"))}(x={exports:{}}).exports=k(Ye),x.exports.original=Ye,k={canvasAvailable:r,continuousScrollEventsAvailable:h,cookiesAvailable:v,cssLinearGradientAvailable:O,cssPropertyAvailable:n,cssViewportUnitsAvailable:b,elementAttributeAvailable:fe,eventTypeAvailable:y,isDesktop:o,isHandheld:I,isRetina:function(){var e=De.getWindow();return"devicePixelRatio"in e&&1.5<=e.devicePixelRatio},isTablet:H,localStorageAvailable:Ie,mediaElementsAvailable:Te,mediaQueriesAvailable:je,prefersReducedMotion:Be,sessionStorageAvailable:Ue,svgAvailable:Ze,threeDTransformsAvailable:Ge,touchAvailable:c,webGLAvailable:x.exports},window.channelHtml={...window.channelHtml||{},helpers:{registerComponent:(i,a)=>{var e;window.channelHtml||(window.channelHtml={}),window.channelHtml[i]={...window.channelHtml[i]||{},instances:{...(null==(e=window.channelHtml[i])?void 0:e.instances)||{}},create:(null==(e=window.channelHtml[i])?void 0:e.create)||(e=>{let{id:t,...r}=e.detail,n=window.channelHtml[i].instances[t];if(n)try{n.destroy()}catch(e){console.error(e)}window.channelHtml[i].instances[t]=new a(t,r)})},document.removeEventListener(`channel:${i}:create`,window.channelHtml[i].create),document.addEventListener(`channel:${i}:create`,window.channelHtml[i].create)},stringToId:e=>e?e.toLowerCase().replace(/[()]/g,"").replace(/\s/g,"-").replace(/\./g,"").replace(/,/g,""):"",touchAvailable:k.touchAvailable,prefersReducedMotion:k.prefersReducedMotion,isDesktop:k.isDesktop,uaDetect:s}}})();var T=Object.defineProperty,M=(e,t,r)=>t in e?T(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,_=(e,t,r)=>M(e,"symbol"!=typeof t?t+"":t,r);function e(e){this.gallerySelectEls=Array.prototype.slice.call(e),this.gallerySelectEls.forEach(function(l){l.onchange=function(){var e,t,r,n=l.selectedOptions[0].getAttribute("data-option-id"),i=l.value,a=l.getAttribute("data-group-id"),n=document.querySelectorAll(`[data-gallery-position=${n}]`),o=document.querySelectorAll(`[data-group-id=${a}]`),s=document.querySelectorAll('[data-active-content="true"]');for(e of o)e.value=i,e.setAttribute("aria-controls",i.toLowerCase().replace(/[()]/g,"").replace(/\s/g,"-").replace(/\./g,"").replace(/,/g,"")+"-item-"+e.id);for(t of s)t.getAttribute("data-gallery-group-id")===a&&t.removeAttribute("data-active-content");for(r of n)r.getAttribute("data-gallery-group-id")===a&&r.setAttribute("data-active-content","true")}}),window.addEventListener("resize",function(){this.gallerySelectEls.forEach(function(e){document.activeElement===e&&e.blur()})}.bind(this))}(()=>{let e,{stringToId:i,registerComponent:t}=(null==(e=window.channelHtml)?void 0:e.helpers)||{};function o(r,n){if(null==r)return r;if("string"==typeof r&&r.startsWith("__i18n_")&&r.endsWith("__"))return void 0!==n[r]?n[r]:r;if(Array.isArray(r))return r.map(e=>o(e,n));if("object"!=typeof r)return r;{let t={};return Object.keys(r).forEach(e=>{t[e]=o(r[e],n)}),t}}t?t("channelCompare",class{constructor(e){_(this,"id"),_(this,"isDestroyed"),_(this,"userHasInteracted"),_(this,"compareData"),_(this,"container"),_(this,"dropdowns"),_(this,"observer"),_(this,"currentViewport"),_(this,"jsonPath"),this.id=e,this.isDestroyed=!1,this.userHasInteracted=!1,this.hasLoaded=!1,this.container=document.querySelector(".channel-html"),this.dropdowns=document.querySelectorAll(`.${e} select.selector-dropdown`),this.compareElement=document.querySelector(`.${e} .channel-compare`),this.jsonPath=null==(e=this.compareElement)?void 0:e.getAttribute("data-compare-json-path");var e=null==(e=null==(e=this.jsonPath)?void 0:e.split("/").pop())?void 0:e.replace(".json",""),t=e?document.getElementById(e):null,e=e?document.getElementById(e+"-content"):null;if(t&&"application/json"===t.type)try{var r,n,i=t.textContent||"",a=JSON.parse(i);e&&"application/json"===e.type?(r=e.textContent||"",n=JSON.parse(r),this.compareData=o(a,n)):this.compareData=a}catch(e){console.error("[ChannelCompare] Failed to parse compare data:",e)}this._applyUrlParameterOverwrites(),this._renderCompareDefault=this._renderCompareDefault.bind(this),this._renderComparePrice=this._renderComparePrice.bind(this),this._renderCompareButton=this._renderCompareButton.bind(this),this._renderCompareStat=this._renderCompareStat.bind(this),this._renderCompareColorNav=this._renderCompareColorNav.bind(this),this._renderCompareEmbeddedImage=this._renderCompareEmbeddedImage.bind(this),this._onDropdownChange=this._onDropdownChange.bind(this),window.textZoom&&window.textZoom.addListener("channelCompare",()=>{requestAnimationFrame(()=>{this._syncRowHeights()})}),this.compareData?this._initialize():this._loadCompareDataFromFile(),this._handleBfcache()}_initialize(){requestAnimationFrame(()=>{this._syncRowHeights()}),this._setDropdownOptions(),this._addListeners(),this._initialReveal()}destroy(){this.isDestroyed||(this.isDestroyed=!0,this.dropdowns.forEach(e=>{e.removeEventListener("change",this._onDropdownChange)}),this.observer.unobserve(this.container),this.observer.disconnect(),window.textZoom&&window.textZoom.removeListener("channelCompare"))}async _loadCompareDataFromFile(){try{if(this.jsonPath){var e=await fetch(this.jsonPath);if(!e.ok)throw new Error("HTTP error! status: "+e.status);var t=await e.json(),r=this.jsonPath.replace(".json","-content.json");try{var n,i=await fetch(r);i.ok?(n=await i.json(),this.compareData=o(t,n)):this.compareData=t}catch{console.warn("[ChannelCompare] i18n file not found, using structure data only"),this.compareData=t}this._initialize()}else console.error("[ChannelCompare] No data-compare-json-path attribute found")}catch(e){console.error("[ChannelCompare] Failed to load compare data from file:",e)}}_handleBfcache(){window.addEventListener("pageshow",e=>{e.persisted&&(this.userHasInteracted=!0,this._setDropdownOptions())})}get _viewport(){var e=(null==(e=this.container)?void 0:e.clientWidth)||0;return e<=734?"small":e<=1068?"medium":"large"}_getProductByIndex(t){var e;return Object.values((null==(e=this.compareData)?void 0:e.products)||{}).find(e=>e.productIndex===t)}get _componentMap(){return{"preview-item-default":this._renderCompareDefault,"preview-item-pricing":this._renderComparePrice,"preview-item-button":this._renderCompareButton,"preview-item-badge":this._renderCompareStat,"preview-item-color-nav":this._renderCompareColorNav,"preview-item-embeded-image":this._renderCompareEmbeddedImage}}_renderCompareDefault({feature:r,item:e,productName:n}){var{shortid:t,children:i,value:a,elevated:o,aria:s}=e;let l=[];return l=null!=i&&i.length?i.map(e=>{var t=e.template??"preview-item-default";return(0,this._componentMap[t])({feature:r,item:e,productName:n})}):a?[this._createElement("div",{classes:o?["elevated"]:[],children:[this._renderFeatureTitle({feature:r,item:e}),this._createElement("div",{content:a})]})]:[this._renderMdash(s)],this._createElement("div",{classes:[t,"copy"],children:l})}_renderComparePrice({feature:e,item:t,productName:r}){var{value:n,elevated:i,aria:a}=t;return this._createElement("div",{classes:["typography-pricing","price-container","copy"],attrs:{"product-name":r},children:[...n?[this._renderFeatureTitle({feature:e,item:t}),this._createElement("div",{classes:[...i?["elevated"]:[]],content:n})]:[this._renderMdash(a,{containerClasses:["mdash-container"]})]]})}_renderCompareButton({item:e,productName:t}){var{aria:e,value:r,featureTitleOverride:n}=e,t=i?i(t):t;return this._createElement("div",{classes:["button-container"],children:[r?this._createElement("a",{classes:["button","compare-button"],attrs:{"aria-label":e,href:r,id:t},content:n||""}):this._renderMdash(e||"Not Applicable",{containerClasses:["mdash-container"],tag:"p",classes:["mdash","copy"]})]})}_renderCompareStat({item:e,productName:r}){let{aria:n,children:t=[]}=e;return this._createElement("div",{classes:["stat",...t.length?[]:["mdash-container","copy"]],attrs:{role:"presentation"},children:[this._createElement("div",{classes:["stat-content"],children:0<t.length?t.map(e=>{let t=e.elevated?["stat-value","copy"]:["stat-caption","copy"];return this._createElement("div",{classes:["stat-row"],children:[...e.images?[this._renderCompareEmbeddedImage({item:e,productName:r,feature:{}})]:[],...e.value?[this._createElement("span",{classes:t,content:e.value})]:[],...e.children?[this._createElement("span",{classes:["stat-elevated"],children:e.children.map(e=>this._createElement("span",{classes:t,children:[this._createElement("p",{content:"string"==typeof e?e:(null==e?void 0:e.value)||""})]}))})]:[],...e.images||e.value||e.renderBlank?[]:[this._renderMdash(e.aria,{classes:["mdash","stat-caption","copy"]})],...e.renderBlank?[this._createElement("div",{children:[this._createElement("span",{classes:["stat-caption","copy"],attrs:{"aria-hidden":"true"},content:"&nbsp;"}),...n?[this._createElement("span",{classes:["visuallyhidden"],content:n})]:[]]})]:[]]})}):[this._renderMdash(n,{tag:"p",container:"span",containerClasses:["stat-caption"],classes:["mdash","stat-caption","copy"]})]})]})}_renderCompareColorNav({feature:e,item:t,productName:r}){var{children:n=[],aria:i}=t,a=this._splitIntoRows(n);return this._createElement("div",{classes:["row-colors",...0===(null==n?void 0:n.length)?["row-colors-none"]:[]],attrs:{"product-name":r},children:[...0<(null==n?void 0:n.length)?[this._renderFeatureTitle({className:"colornav-heading",feature:e,item:t})]:[],this._createElement("div",{children:[this._createElement("div",{classes:["colornav-items"],attrs:{...n.length?{role:"list","aria-label":i??"Available colors for "+r}:{}},children:[...a.map(e=>this._createElement("div",{classes:["colornav-item-row"],children:e.map(e=>this._createElement("div",{classes:["colornav-item"],attrs:{role:"listitem"},children:[this._createElement("figure",{classes:["colornav-swatch"],attrs:{role:"img","aria-label":e.value,style:e.backgroundColor}})]}))})),...n.length?[]:[this._renderMdash(i,{tag:"p",containerClasses:["mdash-container"]})]]})]}),...0<n.length?[this._createElement("div",{classes:["colornav-label-container"],children:[this._createElement("p",{classes:["channel-colornav-label","copy"],content:n.map(e=>e.value).join(", ")})]})]:[]]})}_renderCompareEmbeddedImage({feature:e={},item:t={},productName:i}){let r,a=e.doubleInvert,{shortid:n,images:o=[],aria:s,value:l}=t,c=null==(r=o[0])?void 0:r.src.includes("icon"),d=o.map(({viewport:e})=>e?"has-"+e:null).filter(e=>null!==e);return this._createElement("div",{classes:[n,"embed-image"],attrs:{"aria-hidden":c},children:[this._createElement("figure",{classes:["responsive-image","compare-image",...l?["custom-inline-text"]:[],...d],attrs:{"aria-hidden":c},children:o.map(({src:e,srcSet:t,viewport:r},n)=>this._createElement("img",{classes:["image",...a?[]:["double-invert"],...r?["image-"+r]:[],...0===n?["is-largest"]:[]],attrs:{src:e,srcset:t,alt:c?"":s||i,loading:"lazy"}}))})]})}_renderFeatureTitle({className:e,feature:t,item:r}){t=null!=t&&t.useFeatureTitle?null==t?void 0:t.value:null,r=(null==(r=null==r?void 0:r.featureTitleOverride)?void 0:r.trim())??null,t=t??r;return t?this._createElement("strong",{classes:e?[e]:[],content:t}):null}_renderMdash(e,t={}){var{classes:r=["mdash"],tag:n="span",container:i="div"}=t;return this._createElement(i,{classes:t.containerClasses||[],children:[this._createElement(n,{classes:r,attrs:{"aria-hidden":"true"},content:"&mdash;"}),...e?[this._createElement("p"===n?"p":"span",{classes:["visuallyhidden"],content:e})]:[]]})}_applyUrlParameterOverwrites(){var t=null==(t=this.compareElement)?void 0:t.getAttribute("data-channel-html-compare");if(t){let e;try{e=JSON.parse(t)}catch(e){return void console.warn("ChannelCompare: Failed to parse data-channel-html-compare",e)}if(e.isConfigurableCompare){let r=[];t=document.querySelector("[data-compare-lineup]");if(t)try{var n=t.getAttribute("data-compare-lineup"),i=JSON.parse(n||"{}");i["apple-compare"]&&(r=i["apple-compare"])}catch(e){console.warn("ChannelCompare: Failed to parse data-compare-lineup",e)}t=new URL(window.location.toString()).searchParams;if(0<(r=t.get("apple-compare")?t.get("apple-compare").split(","):r).length){let t=Object.keys((null==(n=this.compareData)?void 0:n.products)||{}).length,e=[...new Set(r.map(e=>Number(e)-1))].filter(e=>0<=Number(e)&&e<t);0<e.length&&(this.compareData.initialColumnState=this._overwriteColumnState(this.compareData.initialColumnState,e))}}}}_overwriteColumnState(r,n){let i={small:[],medium:[],large:[]};return["small","medium","large"].forEach(e=>{var t=r[e].filter(e=>!n.includes(e));i[e]=[...n,...t].slice(0,5)}),i}_createElement(e,t={}){let r=document.createElement(e);return t.classes&&r.classList.add(...t.classes),t.content&&(r.innerHTML=t.content),t.attrs&&Object.entries(t.attrs).forEach(([e,t])=>{void 0!==t&&r.setAttribute(e,t.toString())}),t.dataset&&Object.entries(t.dataset).forEach(([e,t])=>{void 0!==t&&(r.dataset[e]=t)}),t.children&&t.children.forEach(e=>e&&r.appendChild(e)),r}_splitIntoRows(t){var r=t.length;if(r<=5)return[t];var n=r<=7?4:5,i=[];for(let e=0;e<r;e+=n)i.push(t.slice(e,e+n));return i}_syncRowMaxHeight(t){if(0!==t.length){let e=t.map(e=>{var t,r,n=e.style.height,i=(e.style.height="",e.querySelector(".stat-caption, .stat-value"));let a=e.offsetHeight;return i&&(t=i.offsetHeight,i=window.getComputedStyle(i),r=parseFloat(i.marginTop)||0,i=parseFloat(i.marginBottom)||0,a=t+Math.max(0,r)+Math.max(0,i)),e.style.height=n,{element:e,naturalHeight:a,currentHeight:n}}),r=Math.max(...e.map(e=>e.naturalHeight));e.forEach(({element:e,currentHeight:t})=>{(parseInt(t)||0)!==r&&(e.style.height=r+"px")})}}_addListeners(){this.dropdowns.forEach(e=>{e.addEventListener("change",this._onDropdownChange)}),this._resizeListener()}_setDropdownOptions(){this.dropdowns.forEach(t=>{let e,n=t.value||t.dataset.defaultValue;t.innerHTML="",((null==(e=this.compareData)?void 0:e.optionGroups)||[]).forEach(e=>{e=this._createElement("optgroup",{attrs:{label:e.value},children:e.options.map(e=>{var t,r=e.toString()===n;return this._createElement("option",{content:(null==(t=this._getProductByIndex(e))?void 0:t.productName)||"",attrs:{value:e.toString(),"aria-selected":r?"true":"false",...r?{selected:"selected"}:{}}})}).filter(e=>!!e)});t.appendChild(e)}),t.value=n;var r=t.querySelector(`option[value="${n}"]`);r&&(t.selectedIndex=Array.from(t.options).indexOf(r)),t.setAttribute("data-previous-value",n)})}_resizeListener(){let e=()=>{var e=this._viewport;this.userHasInteracted||e===this.currentViewport||(this.compareData.initialColumnState[e].forEach((e,t)=>{var r;this.dropdowns[t]&&(r=Number(this.dropdowns[t].value||t))!==e&&this._swapProductColumns(t,e,r)}),this.currentViewport=e),this._syncRowHeights()};e(),this.observer=new ResizeObserver(()=>{requestAnimationFrame(e)}),this.observer.observe(this.container)}_initialReveal(){this.compareElement&&this.compareElement.classList.contains("channel-compare--hidden")&&requestAnimationFrame(()=>{requestAnimationFrame(()=>{this.compareElement.classList.remove("channel-compare--hidden"),this.hasLoaded=!0})})}_onDropdownChange(e){e.isTrusted&&!this.userHasInteracted&&(this.userHasInteracted=!0);var e=e.target,t=Number(e.value),r=Number(e.dataset.colIndex),n=Number(e.getAttribute("data-previous-value")||r);e.setAttribute("data-previous-value",t.toString()),this._swapProductColumns(r,t,n)}_swapProductColumns(r,n,i){this.dropdowns.forEach((e,t)=>{t!==r&&Number(e.value)===n&&this._updateProduct(t,i)}),this._updateProduct(r,n)}_updateProduct(o,s){this.dropdowns[o]&&((t=this.dropdowns[o]).id=s.toString(),t.value=s.toString(),t.setAttribute("data-previous-value",s.toString()),(r=t.querySelector('option[aria-selected="true"]'))&&r.setAttribute("aria-selected","false"),(r=t.querySelector(`option[value="${s}"]`))&&r.setAttribute("aria-selected","true"),t=null==(r=t.parentElement)?void 0:r.querySelector("label"))&&t.setAttribute("for",s.toString());var t=null==(r=this.compareElement)?void 0:r.querySelector("[compare-header-row]");if(t){var r=t.querySelectorAll('[role="columnheader"]');if(r[o+1]){let e=r[o+1].querySelector("span");e||((e=document.createElement("span")).className="visuallyhidden",r[o+1].textContent="",r[o+1].appendChild(e)),e.textContent=(null==(t=this._getProductByIndex(s))?void 0:t.productName)||""}}var t=null==(r=this.compareElement)?void 0:r.querySelector("#static-compare-header");t&&(r=t.querySelectorAll("[compare-column-header-static]"))[o]&&(t=r[o].querySelector("div"))&&(t.textContent=(null==(r=this._getProductByIndex(s))?void 0:r.productName)||"");let n=this._getProductByIndex(s);Object.keys((null==n?void 0:n.categories)||{}).forEach(t=>{var r=null==(r=this.compareElement)?void 0:r.querySelector(".compare-section.section-"+t);if(r){let e=r.querySelectorAll(".compare-row"),a=n.categories[t]||[];e.forEach((e,t)=>{var r,n,i=e.querySelectorAll(".compare-column")[o],t=a[t];t&&(r=t,e=(null==(e=null==(e=e.querySelector(".compare-rowheader"))?void 0:e.textContent)?void 0:e.trim())||void 0,n=t.template??"preview-item-default",n=this._componentMap[n])&&(i.innerHTML="",i.appendChild(n({feature:{value:e,doubleInvert:t.doubleInvert,useFeatureTitle:t.useFeatureTitle},item:r,productName:(null==(i=this._getProductByIndex(s))?void 0:i.productName)||""})))})}}),requestAnimationFrame(()=>{this._syncRowHeights()})}_syncRowHeights(){this._syncColorRowHeights(),this._syncStatRowHeights()}_syncColorRowHeights(){var e=(null==(e=this.compareElement)?void 0:e.querySelectorAll(".colornav-items"))||[],e=Array.from(e).filter(e=>e.hasAttribute("role")&&"list"===e.getAttribute("role")).map(e=>e.parentElement);this._syncRowMaxHeight(e)}_syncStatRowHeights(){var e;((null==(e=this.compareElement)?void 0:e.querySelectorAll(".compare-template-preview-item-stat"))||[]).forEach(e=>{var r=Array.from(e.querySelectorAll(".compare-column")).map(e=>{e=e.querySelectorAll(".stat-row > .stat-caption");return Array.from(e).map(e=>e.parentElement)}),n=Math.max(...r.map(e=>e.length));for(let t=0;t<n;t++){var i=r.map(e=>e[t]).filter(e=>e);0<i.length&&this._syncRowMaxHeight(i)}})}}):console.warn("make sure ChannelHelpers.js is included")})(),(()=>{let t={nState:null,cState:null,init:function(){this.addListeners()},addListeners:function(){let r={small:window.matchMedia("(max-width: 734px)"),medium:window.matchMedia("(min-width: 735px) and (max-width: 1068px)"),large:window.matchMedia("(min-width: 1069px)")};Object.keys(r).forEach(e=>{let t=r[e];"function"!=typeof t.addEventListener?t.addListener(()=>{t.matches&&this.viewportObserve(e)}):t.addEventListener("change",()=>{t.matches&&this.viewportObserve(e)}),t.matches&&this.viewportObserve(e)})},viewportObserve:function(e){this.nState=e,this.cState!==this.nState&&(this.cState=this.nState,this.dispatch(this.cState))},dispatch:function(e){e=new CustomEvent("channel:viewport-change",{detail:e});window.dispatchEvent(e)}},r={orientation:null,init:function(){var e;this.isMobileDevice()&&(e=window.matchMedia("(orientation: portrait)"),this.orientation=e.matches?"portrait":"landscape",e.addEventListener("change",e=>{e=e.matches?"portrait":"landscape";this.orientation!==e&&(this.orientation=e,this.dispatch(this.orientation))}))},isMobileDevice:function(){var e=navigator.userAgent.toLowerCase(),t=/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(e),r="MacIntel"===navigator.platform&&1<navigator.maxTouchPoints,e=/windows nt|macintosh/i.test(e)&&!r;return(t||r)&&!e},dispatch:function(e){e=new CustomEvent("channel:orientation-change",{detail:e});window.dispatchEvent(e)}},s={init:function(e,t){let i=document.querySelectorAll(e);i.forEach((r,n)=>{r.addEventListener("change",()=>{var e=r.selectedIndex,t=r.value,e=Number(r.options[e].getAttribute("value"));this.dispatch({elIndex:n,selectedIndex:e,value:t,selectorEls:i}),r.focus()})})},dispatch:function(e){e=new CustomEvent("channel:pre-user-select",{detail:e});window.dispatchEvent(e)}},l={buyButtonQuery:null,boundHandleButtonClick:null,init:function(e){this.buyButtonQuery=e,this.boundHandleButtonClick=this.handleButtonClick.bind(this),this.attachButtonListeners(),this.addDOMUpdateListener()},addDOMUpdateListener:function(){window.addEventListener("channel:reorder-dom",()=>{this.attachButtonListeners()})},attachButtonListeners:function(){document.querySelectorAll(this.buyButtonQuery).forEach(e=>{e.removeEventListener("click",this.boundHandleButtonClick),e.addEventListener("click",this.boundHandleButtonClick)})},handleButtonClick:function(e){var t=0===e.screenX&&0===e.screenY?"Keyboard Interaction":"Mouse Click";this.dispatch({productName:e.target.id,eventSource:t})},dispatch:function(e){e=new CustomEvent("channel:buy-button-click",{detail:e});window.dispatchEvent(e)}},c={order:null,viewportKey:null,viewportOrder:null,viewportMax:null,init:function(e,t){this.order=e,this.useStatic=t,this.addListeners()},viewportChange(e){this.viewportKey=e,this.viewportOrder=this.order[this.viewportKey],this.viewportMax=this.order.max[this.viewportKey],this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic})},blurSelects(e){document.querySelectorAll(e).forEach(e=>{e.blur()})},flattenOrders(){this.viewportOrder=this.order[this.viewportKey],this.viewportMax=this.order.max[this.viewportKey],["small","medium","large"].forEach(e=>{this.order[e]=this.viewportOrder})},getLineupInfo(e,r){let n={};return e.forEach((e,t)=>{n[t]={columnIndex:t,deviceName:e.options[e.selectedIndex].text,hasChanged:t===r}}),n},userSelect(r){let{elIndex:e,selectedIndex:t}=r,n=this.viewportOrder[e],i=this.viewportOrder.find(e=>e===t),a=this.viewportOrder.indexOf(i);void 0!==i?(this.viewportOrder[a]=n,this.viewportOrder[e]=i):this.viewportOrder[e]=t,this.flattenOrders(),this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic,selectorIndex:e}),r.deviceLineup=this.getLineupInfo(r.selectorEls,e),delete r.selectorEls;var o=Object.keys(r.deviceLineup).slice(0,this.viewportMax).reduce((e,t)=>(e[t]=r.deviceLineup[t],e),{});this.dispatchPostUserSelect({deviceLineup:o})},addListeners:function(){window.addEventListener("channel:pre-user-select",e=>{this.userSelect(e.detail)}),window.addEventListener("channel:user-refresh",e=>{this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic})}),window.addEventListener("channel:viewport-change",e=>{this.viewportChange(e.detail),this.blurSelects(this.selectorElsQuery)}),window.addEventListener("channel:orientation-change",()=>{this.blurSelects(this.selectorElsQuery)})},dispatch:function(e){e=new CustomEvent("channel:reorder-dom",{detail:e});window.dispatchEvent(e)},dispatchPostUserSelect:function(e){e=new CustomEvent("channel:user-select",{detail:e});window.dispatchEvent(e)}},n={inited:!1,init:function(){if(!this.inited){let e;var n=document.querySelector("[data-channel-html-compare]");if(n){try{var i=n.getAttribute("data-channel-html-compare");e=JSON.parse(i)}catch(e){return void console.warn("channelCompare: error parsing JSON",e)}if(e.isConfigurableCompare){let t={large:[],medium:[],small:[]},r=[];n=document.querySelector("[data-compare-lineup]");if(n)try{var a=n.getAttribute("data-compare-lineup"),o=JSON.parse(a??"{}");o["apple-compare"]&&(r=o["apple-compare"])}catch(e){return void console.warn("channelCompare: error parsing JSON",e)}i=new URL(window.location.toLocaleString()).searchParams;i.get("apple-compare")&&(r=i.get("apple-compare").split(",")),Object.keys(t).forEach(e=>{t[e]=[...new Set((null==r?void 0:r.map(e=>Number(e)-1))??[])].filter(e=>0<=Number(e))}),e.order=this.orderOverwrite(e.order,t)}n=e.order,a=e.selectorEls,o=e.useStatic;o||s.init(a),l.init(".compare-button"),c.init(n,o),t.init(),r.init(),this.inited=!0}else console.warn("channelCompare: element [data-channel-html-compare] not found")}},orderOverwrite:function(e,r){let n={...e};return Object.keys(r).forEach(t=>{var e=n[t].filter(e=>!r[t].includes(e)),e=[...r[t],...e].slice(0,5);n[t]=e}),n}};window.addEventListener("pageshow",e=>{e=e.persisted;e?window.addEventListener("scroll",()=>{var e=new CustomEvent("channel:user-refresh");window.dispatchEvent(e)},{once:!0}):(n.init(),document.querySelector(".channel-compare").classList.remove("channel-compare--hidden"))})})(),document.dispatchEvent(new CustomEvent("channel:channelCompare:create",{detail:{id:"XDSmUsBs"}})),"object"==typeof module&&module.exports?module.exports={GalleryDropdown:e}:new e(document.querySelectorAll(".gallery-select"))</script>
    <!--END > CHANNEL SCRIPTS -->
  </div>

  <!-- ==================== ITHPL ORIGINAL FOOTER ====================
    -->

  <!-- ==================== UNIVERSAL B2B MODAL ==================== -->
  <?php include_once APPPATH . 'Views/ui/appleProducts/partials/apple_buy_modal.php'; ?>
</body></html>