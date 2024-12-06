<?php
if (!function_exists('icons')) :
    function icons()
    {
        $icon = [
            'bx bx-sticker', 'bx bx-shield-quarter', 'bx bx-upside-down', 'bx bx-laugh', 'bx bx-meh-blank', 'bx bx-happy-beaming', 'bx bx-shocked', 'bx bx-sleepy', 'bx bx-confused', 'bx bx-wink-smile', 'bx bx-dizzy', 'bx bx-happy-heart-eyes', 'bx bx-angry', 'bx bx-smile', 'bx bx-tired', 'bx bx-cool', 'bx bx-happy-alt', 'bx bx-wink-tongue', 'bx bx-meh-alt', 'bx bx-food-menu', 'bx bx-food-tag', 'bx bx-female-sign', 'bx bx-male-sign', 'bx bx-female', 'bx bx-male', 'bx bx-clinic', 'bx bx-health', 'bx bx-shekel', 'bx bx-yen', 'bx bx-won', 'bx bx-pound', 'bx bx-euro', 'bx bx-rupee', 'bx bx-ruble', 'bx bx-lira', 'bx bx-bitcoin', 'bx bx-tone', 'bx bx-bolt-circle', 'bx bx-cake', 'bx bx-spa', 'bx bx-dish', 'bx bx-fridge', 'bx bx-image-add', 'bx bx-image-alt', 'bx bx-space-bar', 'bx bx- alarm-add', 'bx bx-archive-out', 'bx bx-archive-in', 'bx bx-add-to-queue', 'bx bx-border-radius', 'bx bx-check-shield', 'bx bx-label', 'bx bx-file-find', 'bx bx-face', 'bx bx-extension', 'bx bx-exit', 'bx bx-conversation', 'bx bx-sort-z-a', 'bx bx-sort-a-z', 'bx bx-printer', 'bx bx-radio', 'bx bx-customize', 'bx bx-brush-alt', 'bx bx-briefcase-alt-2', 'bx bx-time-five', 'bx bx-pie-chart-alt-2', 'bx bx-gas-pump', 'bx bx-mobile-vibration', 'bx bx-mobile-landscape', 'bx bx-border-all', 'bx bx-border-bottom', 'bx bx-border-top', 'bx bx-border-left', 'bx bx-border-right', 'bx bx-dialpad-alt', 'bx bx-filter-alt', 'bx bx-brightness', 'bx bx-brightness-half', 'bx bx-wifi-off', 'bx bx-credit-card-alt', 'bx bx-band-aid', 'bx bx-hive', 'bx bx-map-pin', 'bx bx-line-chart', 'bx bx-receipt', 'bx bx-purchase-tag-alt', 'bx bx-basket', 'bx bx-palette', 'bx bx-no-entry', 'bx bx-message-alt-dots', 'bx bx-message-alt', 'bx bx-check-square', 'bx bx-log-out-circle', 'bx bx-log-in-circle', 'bx bx-doughnut-chart', 'bx bx-building-house', 'bx bx-accessibility', 'bx bx-user-voice', 'bx bx-cuboid', 'bx bx-cube-alt', 'bx bx-polygon', 'bx bx-square-rounded', 'bx bx-square', 'bx bx-error-alt', 'bx bx-shield-alt-2', 'bx bx-paint-roll', 'bx bx-droplet', 'bx bx-street-view', 'bx bx-plus-medical', 'bx bx-search-alt-2', 'bx bx-bowling-ball', 'bx bx-dna', 'bx bx-cycling', 'bx bx-shape-circle', 'bx bx-down-arrow-alt', 'bx bx-up-arrow-alt', 'bx bx-right-arrow-alt', 'bx bx-left-arrow-alt', 'bx bx-lock-open-alt', 'bx bx-lock-alt', 'bx bx-cylinder', 'bx bx-pyramid', 'bx bx-comment-dots', 'bx bx-comment', 'bx bx-landscape', 'bx bx-book-open', 'bx bx-transfer-alt', 'bx bx-copy-alt', 'bx bx-run', 'bx bx-user-pin', 'bx bx-grid', 'bx bx-code-alt', 'bx bx-mail-send', 'bx bx-ghost', 'bx bx-shape-triangle', 'bx bx-shape-square', 'bx bx-video-recording', 'bx bx-notepad', 'bx bx-bug-alt', 'bx bx-mouse-alt', 'bx bx-edit-alt', 'bx bx-chat', 'bx bx-book-content', 'bx bx-message-square-dots', 'bx bx-message-square', 'bx bx-slideshow', 'bx bx-wallet-alt', 'bx bx-memory-card', 'bx bx-message-rounded-dots', 'bx bx-message-dots', 'bx bx-bar-chart-alt-2', 'bx bx-store-alt', 'bx bx-buildings', 'bx bx-home-circle', 'bx bx-money', 'bx bx-walk', 'bx bx-repeat', 'bx bx-font-family', 'bx bx-joystick-button', 'bx bx-paint', 'bx bx-unlink', 'bx bx-brush', 'bx bx-rotate-left', 'bx bx-badge-check', 'bx bx-show-alt', 'bx bx-caret-down', 'bx bx-caret-right', 'bx bx-caret-up', 'bx bx-caret-left', 'bx bx-calendar-event', 'bx bx-magnet', 'bx bx-rewind-circle', 'bx bx-card', 'bx bx-help-circle', 'bx bx-test-tube', 'bx bx-note', 'bx bx-sort-down', 'bx bx-sort-up', 'bx bx-id-card', 'bx bx-badge', 'bx bx-grid-small', 'bx bx-grid-vertical', 'bx bx-grid-horizontal', 'bx bx-move-vertical', 'bx bx-move-horizontal', 'bx bx-stats', 'bx bx-equalizer', 'bx bx-disc', 'bx bx-analyse', 'bx bx-search-alt', 'bx bx-dollar-circle', 'bx bx-football', 'bx bx-ball', 'bx bx-circle', 'bx bx-transfer', 'bx bx-fingerprint', 'bx bx-font-color', 'bx bx-highlight', 'bx bx-file-blank', 'bx bx-strikethrough', 'bx bx-photo-album', 'bx bx-code-block', 'bx bx-font-size', 'bx bx-handicap', 'bx bx-dialpad', 'bx bx-wind', 'bx bx-water', 'bx bx-swim', 'bx bx-restaurant', 'bx bx-box', 'bx bx-menu-alt-right', 'bx bx-menu-alt-left', 'bx bx-video-plus', 'bx bx-list-ol', 'bx bx-planet', 'bx bx-hotel', 'bx bx-movie', 'bx bx-taxi', 'bx bx-train', 'bx bx-bath', 'bx bx-bed', 'bx bx-area', 'bx bx-bot', 'bx bx-dumbbell', 'bx bx-check-double', 'bx bx-bus', 'bx bx-check-circle', 'bx bx-rocket', 'bx bx-certification', 'bx bx-slider-alt', 'bx bx-sad', 'bx bx-meh', 'bx bx-happy', 'bx bx-cart-alt', 'bx bx-car', 'bx bx-loader-alt', 'bx bx-loader-circle', 'bx bx-wrench', 'bx bx-alarm-off', 'bx bx-layout', 'bx bx-dock-left', 'bx bx-dock-top', 'bx bx-dock-right', 'bx bx-dock-bottom', 'bx bx-dock-bottom', 'bx bx-world', 'bx bx-selection', 'bx bx-paper-plane', 'bx bx-slider', 'bx bx-loader', 'bx bx-chalkboard', 'bx bx-trash-alt', 'bx bx-grid-alt', 'bx bx-command', 'bx bx-window-close', 'bx bx-notification-off', 'bx bx-plug', 'bx bx-infinite', 'bx bx-carousel', 'bx bx-hourglass', 'bx bx-briefcase-alt', 'bx bx-wallet', 'bx bx-station', 'bx bx-collection', 'bx bx-tv', 'bx bx-closet', 'bx bx-paperclip', 'bx bx-expand', 'bx bx-pen', 'bx bx-purchase-tag', 'bx bx-images', 'bx bx-pie-chart-alt', 'bx bx-news', 'bx bx-downvote', 'bx bx-upvote', 'bx bx-globe-alt', 'bx bx-store', 'bx bx-hdd', 'bx bx-skip-previous-circle', 'bx bx-skip-next-circle', 'bx bx-chip', 'bx bx-cast', 'bx bx-body', 'bx bx-phone-outgoing', 'bx bx-phone-incoming', 'bx bx-collapse', 'bx bx-rename', 'bx bx-rotate-right', 'bx bx-horizontal-center', 'bx bx-ruler', 'bx bx-import', 'bx bx-calendar-alt', 'bx bx-battery', 'bx bx-server', 'bx bx-task', 'bx bx-folder-open', 'bx bx-film', 'bx bx-aperture', 'bx bx-phone-call', 'bx bx-up-arrow', 'bx bx-undo', 'bx bx-timer', 'bx bx-support', 'bx bx-subdirectory-right', 'bx bx-right-arrow', 'bx bx-', 'bx bx-revision', 'bx bx-repost', 'bx bx-reply', 'bx bx-reply-all', 'bx bx-redo', 'bx bx-radar', 'bx bx-poll', 'bx bx-list-check', 'bx bx-like', 'bx bx-left-arrow', 'bx bx-joystick-alt', 'bx bx-history', 'bx bx-flag', 'bx bx-first-aid', 'bx bx-export', 'bx bx-down-arrow', 'bx bx-dislike', 'bx bx-crown', 'bx bx-barcode', 'bx bx-user', 'bx bx-user-x', 'bx bx-user-plus', 'bx bx-user-minus', 'bx bx-user-circle', 'bx bx-user-check', 'bx bx-underline', 'bx bx-trophy', 'bx bx-trash', 'bx bx-text', 'bx bx-sun', 'bx bx-star', 'bx bx-sort', 'bx bx-shuffle', 'bx bx-shopping-bag', 'bx bx-shield', 'bx bx-shield-alt', 'bx bx-share', 'bx bx-share-alt', 'bx bx-select-multiple', 'bx bx-screenshot', 'bx bx-save', 'bx bx-pulse', 'bx bx-power-off', 'bx bx-plus', 'bx bx-pin', 'bx bx-pencil', 'bx bx-pin', 'bx bx-pencil', 'bx bx-paste', 'bx bx-paragraph', 'bx bx-package', 'bx bx-notification', 'bx bx-music', 'bx bx-move', 'bx bx-mouse', 'bx bx-minus', 'bx bx-microphone-off', 'bx bx-log-out', 'bx bx-log-in', 'bx bx-link-external', 'bx bx-joystick', 'bx bx-italic', 'bx bx-home-alt', 'bx bx-heading', 'bx bx-hash', 'bx bx-group', 'bx bx-git-repo-forked', 'bx bx-git-pull-request', 'bx bx-git-merge', 'bx bx-git-compare', 'bx bx-git-commit', 'bx bx-git-branch', 'bx bx-font', 'bx bx-filter', 'bx bx-file', 'bx bx-edit', 'bx bx-diamond', 'bx bx-detail', 'bx bx-cut', 'bx bx-cube', 'bx bx-crop', 'bx bx-credit-card', 'bx bx-columns', 'bx bx-cog', 'bx bx-cloud-snow', 'bx bx-cloud-rain', 'bx bx-cloud-lightning', 'bx bx-cloud-light-rain', 'bx bx-cloud-drizzle', 'bx bx-check', 'bx bx-cart', 'bx bx-calculator', 'bx bx-bold', 'bx bx-award', 'bx bx-anchor', 'bx bx-album', 'bx bx-adjust', 'bx bx-x', 'bx bx-table', 'bx bx-duplicate', 'bx bx-windows', 'bx bx-window', 'bx bx-window-open', 'bx bx-wifi', 'bx bx-voicemail', 'bx bx-video-off', 'bx bx-usb', 'bx bx-upload', 'bx bx-alarm', 'bx bx-tennis-ball', 'bx bx-target-lock', 'bx bx-tag', 'bx bx-tab', 'bx bx-spreadsheet', 'bx bx-sitemap', 'bx bx-sidebar', 'bx bx-send', 'bx bx-pie-chart', 'bx bx-phone', 'bx bx-navigation', 'bx bx-mobile', 'bx bx-mobile-alt', 'bx bx-message', 'bx bx-message-rounded', 'bx bx-map', 'bx bx-map-alt', 'bx bx-lock', 'bx bx-lock-open', 'bx bx-list-minus', 'bx bx-list-ul', 'bx bx-list-plus', 'bx bx-link', 'bx bx-link-alt', 'bx bx-layer', 'bx bx-laptop', 'bx bx-home', 'bx bx-heart', 'bx bx-headphone', 'bx bx-devices', 'bx bx-globe', 'bx bx-gift', 'bx bx-envelope', 'bx bx-download', 'bx bx-dots-vertical', 'bx bx-dots-vertical-rounded', 'bx bx-dots-horizontal', 'bx bx-dots-horizontal-rounded', 'bx bx-dollar', 'bx bx-directions', 'bx bx-desktop', 'bx bx-data', 'bx bx-compass', 'bx bx-crosshair', 'bx bx-terminal', 'bx bx-cloud', 'bx bx-cloud-upload', 'bx bx-cloud-download', 'bx bx-chart', 'bx bx-calendar', 'bx bx-calendar-x', 'bx bx-calendar-minus', 'bx bx-calendar-check', 'bx bx-calendar-plus', 'bx bx-buoy', 'bx bx-bulb', 'bx bx-bluetooth', 'bx bx-bug', 'bx bx-building', 'bx bx-broadcast', 'bx bx-briefcase', 'bx bx-bookmark-plus', 'bx bx-bookmark-minus', 'bx bx-', 'bx bx-book', 'bx bx-book-bookmark', 'bx bx-block', 'bx bx-basketball', 'bx bx-bar-chart', 'bx bx-bar-chart-square', 'bx bx-bar-chart-alt', 'bx bx-at', 'bx bx-archive', 'bx bx-zoom-out', 'bx bx-zoom-in', 'bx bx-x-circle', 'bx bx-volume', 'bx bx-volume-mute', 'bx bx-volume-low', 'bx bx-volume-full', 'bx bx-video', 'bx bx-vertical-center', 'bx bx-up-arrow-circle', 'bx bx-trending-up', 'bx bx-trending-down', 'bx bx-toggle-right', 'bx bx-toggle-left', 'bx bx-time', 'bx bx-sync', 'bx bx-stopwatch', 'bx bx-stop', 'bx bx-stop-circle', 'bx bx-skip-previous', 'bx bx-skip-next', 'bx bx-show', 'bx bx-search', 'bx bx-rss', 'bx bx-right-top-arrow-circle', 'bx bx-right-indent', 'bx bx-right-down-arrow-circle', 'bx bx-right-arrow-circle', 'bx bx-reset', 'bx bx-rewind', 'bx bx-rectangle', 'bx bx-radio-circle', 'bx bx-radio-circle-marked', 'bx bx-question-mark', 'bx bx-plus-circle', 'bx bx-play', 'bx bx-play-circle', 'bx bx-pause', 'bx bx-pause-circle', 'bx bx-moon', 'bx bx-minus-circle', 'bx bx-microphone', 'bx bx-menu', 'bx bx-left-top-arrow-circle', 'bx bx-left-indent', 'bx bx-left-down-arrow-circle', 'bx bx-left-arrow-circle', 'bx bx-last-page', 'bx bx-key', 'bx bx-align-justify', 'bx bx-info-circle', 'bx bx-image', 'bx bx-hide', 'bx bx-fullscreen', 'bx bx-folder', 'bx bx-folder-plus', 'bx bx-folder-minus', 'bx bx-first-page', 'bx bx-fast-forward', 'bx bx-fast-forward-circle', 'bx bx-exit-fullscreen', 'bx bx-error', 'bx bx-error-circle', 'bx bx-down-arrow-circle', 'bx bx-copyright', 'bx bx-copy', 'bx bx-coffee', 'bx bx-code', 'bx bx-code-curly', 'bx bx-clipboard', 'bx bx-chevrons-left', 'bx bx-chevrons-right', 'bx bx-chevrons-up', 'bx bx-chevrons-down', 'bx bx-chevron-right', 'bx bx-chevron-left', 'bx bx-chevron-up', 'bx bx-chevron-down', 'bx bx-checkbox-square', 'bx bx-checkbox', 'bx bx-checkbox-checked', 'bx bx-captions', 'bx bx-camera', 'bx bx-camera-off', 'bx bx-bullseye', 'bx bx-bookmarks', 'bx bx-bookmark', 'bx bx-bell', 'bx bx-bell-plus', 'bx bx-bell-off', 'bx bx-bell-minus', 'bx bx-arrow-back', 'bx bx-align-right', 'bx bx-align-middle', 'bx bx-align-left', 'bx bxs-wink-tongue', 'bx bxs-upside-down', 'bx bxs-happy-alt', 'bx bxs-laugh', 'bx bxs-meh-blank', 'bx bxs-cool', 'bx bxs-tired', 'bx bxs-happy-beaming', 'bx bxs-shocked', 'bx bxs-happy', 'bx bxs-sad', 'bx bxs-sleepy', 'bx bxs-confused', 'bx bxs-meh-alt', 'bx bxs-meh', 'bx bxs-smile', 'bx bxs-wink-smile', 'bx bxs-dizzy', 'bx bxs-happy-heart-eyes', 'bx bxs-angry', 'bx bxs-business', 'bx bxs-camera-plus', 'bx bxs-food-menu', 'bx bxs-offer', 'bx bxs-clinic', 'bx bxs-hand-left', 'bx bxs-hand-down', 'bx bxs-hand-right', 'bx bxs-hand-up', 'bx bxs-baby-carriage', 'bx bxs-caret-left-circle', 'bx bxs-caret-right-circle', 'bx bxs-caret-down-circle', 'bx bxs-caret-up-circle', 'bx bxs-tone', 'bx bxs-bolt-circle', 'bx bxs-city', 'bx bxs-cake', 'bx bxs-spa', 'bx bxs-dish', 'bx bxs-fridge', 'bx bxs-image-add', 'bx bxs-alarm-add', 'bx bxs-archive-out', 'bx bxs-archive-in', 'bx bxs-add-to-queue', 'bx bxs-check-shield', 'bx bxs-label', 'bx bxs-face', 'bx bxs-file-find', 'bx bxs-extension', 'bx bxs-exit', 'bx bxs-brush-alt', 'bx bxs-layout', 'bx bxs-quote-alt-right', 'bx bxs-quote-alt-left', 'bx bxs-mobile-vibration', 'bx bxs-fast-forward-circle', 'bx bxs-rewind-circle', 'bx bxs-carousel', 'bx bxs-customize', 'bx bxs-calendar-event', 'bx bxs-calendar-check', 'bx bxs-calendar-x', 'bx bxs-calendar-minus', 'bx bxs-calendar-plus', 'bx bxs-calendar-alt', 'bx bxs-calendar', 'bx bxs-briefcase-alt-2', 'bx bxs-bookmark-minus', 'bx bxs-bookmarks', 'bx bxs-time-five', 'bx bxs-pie-chart-alt-2', 'bx bxs-time', 'bx bxs-timer', 'bx bxs-stopwatch', 'bx bxs-compass', 'bx bxs-user-check', 'bx bxs-user-x', 'bx bxs-grid', 'bx bxs-zoom-out', 'bx bxs-zoom-in', 'bx bxs-search', 'bx bxs-bell-minus', 'bx bxs-bell-plus', 'bx bxs-folder-minus', 'bx bxs-mobile', 'bx bxs-data', 'bx bxs-skip-next-circle', 'bx bxs-skip-previous-circle', 'bx bxs-chalkboard', 'bx bxs-school', 'bx bxs-institution', 'bx bxs-left-down-arrow-circle', 'bx bxs-left-top-arrow-circle', 'bx bxs-right-down-arrow-circle', 'bx bxs-right-top-arrow-circle', 'bx bxs-down-arrow', 'bx bxs-up-arrow', 'bx bxs-left-arrow', 'bx bxs-right-arrow', 'bx bxs-rectangle', 'bx bxs-brightness', 'bx bxs-brightness-half', 'bx bxs-paint', 'bx bxs-credit-card', 'bx bxs-credit-card-alt', 'bx bxs-band-aid', 'bx bxs-map-pin', 'bx bxs-receipt', 'bx bxs-purchase-tag-alt', 'bx bxs-basket', 'bx bxs-palette', 'bx bxs-plane-alt', 'bx bxs-component', 'bx bxs-traffic-barrier', 'bx bxs-no-entry', 'bx bxs-message-alt-dots', 'bx bxs-message-alt', 'bx bxs-check-square', 'bx bxs-notification-off', 'bx bxs-notification', 'bx bxs-log-out', 'bx bxs-log-in', 'bx bxs-log-out-circle', 'bx bxs-log-in-circle', 'bx bxs-circle', 'bx bxs-doughnut-chart', 'bx bxs-building-house', 'bx bxs-comment-error', 'bx bxs-user-voice', 'bx bxs-cuboid', 'bx bxs-cube-alt', 'bx bxs-polygon', 'bx bxs-square-rounded', 'bx bxs-square', 'bx bxs-error-alt', 'bx bxs-shield-alt-2', 'bx bxs-paint-roll', 'bx bxs-comment-add', 'bx bxs-droplet-half', 'bx bxs-search-alt-2', 'bx bxs-bowling-ball', 'bx bxs-hourglass-bottom', 'bx bxs-hourglass-top', 'bx bxs-lock-open-alt', 'bx bxs-lock-alt', 'bx bxs-graduation', 'bx bxs-vial', 'bx bxs-cylinder', 'bx bxs-pyramid', 'bx bxs-wine', 'bx bxs-comment-detail', 'bx bxs-comment-dots', 'bx bxs-comment', 'bx bxs-traffic', 'bx bxs-landscape', 'bx bxs-adjust-alt', 'bx bxs-id-card', 'bx bxs-parking', 'bx bxs-plane-land', 'bx bxs-plane-take-off', 'bx bxs-analyse', 'bx bxs-file-gif', 'bx bxs-file-jpg', 'bx bxs-file-png', 'bx bxs-file-txt', 'bx bxs-file-md', 'bx bxs-file-json', 'bx bxs-file-js', 'bx bxs-file-css', 'bx bxs-file-html', 'bx bxs-copy-alt', 'bx bxs-file-doc', 'bx bxs-user-pin', 'bx bxs-quote-single-right', 'bx bxs-quote-single-left', 'bx bxs-ghost', 'bx bxs-direction-left', 'bx bxs-video-recording', 'bx bxs-notepad', 'bx bxs-bug-alt', 'bx bxs-mouse-alt', 'bx bxs-edit-alt', 'bx bxs-chat', 'bx bxs-book-content', 'bx bxs-message-square-dots', 'bx bxs-message-square', 'bx bxs-slideshow', 'bx bxs-bank', 'bx bxs-wallet-alt', 'bx bxs-memory-card', 'bx bxs-devices', 'bx bxs-message-rounded-dots', 'bx bxs-message-dots', 'bx bxs-bar-chart-alt-2', 'bx bxs-store-alt', 'bx bxs-buildings', 'bx bxs-home-circle', 'bx bxs-file-pdf', 'bx bxs-yin-yang', 'bx bxs-ship', 'bx bxs-factory', 'bx bxs-tree', 'bx bxs-plane', 'bx bxs-user-rectangle', 'bx bxs-eyedropper', 'bx bxs-cloud-lightning', 'bx bxs-cloud-rain', 'bx bxs-eraser', 'bx bxs-magic-wand', 'bx bxs-hotel', 'bx bxs-color-fill', 'bx bxs-capsule', 'bx bxs-flask', 'bx bxs-joystick-button', 'bx bxs-direction-right', 'bx bxs-directions', 'bx bxs-megaphone', 'bx bxs-keyboard', 'bx bxs-brush', 'bx bxs-coffee-alt', 'bx bxs-badge-check', 'bx bxs-landmark', 'bx bxs-gas-pump', 'bx bxs-user-badge', 'bx bxs-right-arrow-square', 'bx bxs-down-arrow-square', 'bx bxs-up-arrow-square', 'bx bxs-left-arrow-square', 'bx bxs-ambulance', 'bx bxs-magnet', 'bx bxs-card', 'bx bxs-help-circle', 'bx bxs-note', 'bx bxs-badge', 'bx bxs-flame', 'bx bxs-disc', 'bx bxs-minus-square', 'bx bxs-plus-square', 'bx bxs-x-square', 'bx bxs- microphone-alt', 'bx bxs-image-alt', 'bx bxs-skull', 'bx bxs-dollar-circle', 'bx bxs-film', 'bx bxs-ball', 'bx bxs-edit', 'bx bxs-file-blank', 'bx bxs-bell-ring', 'bx bxs-photo-album', 'bx bxs-key', 'bx bxs-video-plus', 'bx bxs-box', 'bx bxs-planet', 'bx bxs-movie', 'bx bxs-taxi', 'bx bxs-train', 'bx bxs-bath', 'bx bxs-bed', 'bx bxs-area', 'bx bxs-bot', 'bx bxs-bus', 'bx bxs-star-half', 'bx bxs-checkbox-checked', 'bx bxs-checkbox', 'bx bxs-check-circle', 'bx bxs-rocket', 'bx bxs-certification', 'bx bxs-file-plus', 'bx bxs-dashboard', 'bx bxs-conversation', 'bx bxs-battery-low', 'bx bxs-folder-open', 'bx bxs-zap', 'bx bxs-x-circle', 'bx bxs-wrench', 'bx bxs-widget', 'bx bxs-watch', 'bx bxs-watch-alt', 'bx bxs-wallet', 'bx bxs-volume', 'bx bxs-volume-mute', 'bx bxs-volume-low', 'bx bxs-volume-full', 'bx bxs-videos', 'bx bxs-video', 'bx bxs-video-off', 'bx bxs-user', 'bx bxs-user-plus', 'bx bxs-user-minus', 'bx bxs-user-detail', 'bx bxs-user-circle', 'bx bxs-upvote', 'bx bxs-up-arrow-circle', 'bx bxs-truck', 'bx bxs-trophy', 'bx bxs-trash', 'bx bxs-trash-alt', 'bx bxs-torch', 'bx bxs-toggle-right', 'bx bxs-to-top', 'bx bxs-terminal', 'bx bxs-tennis-ball', 'bx bxs-tag', 'bx bxs-tag-x', 'bx bxs-t-shirt', 'bx bxs-sun', 'bx bxs-store', 'bx bxs-star', 'bx bxs-spreadsheet', 'bx bxs-show', 'bx bxs-shopping-bag', 'bx bxs-shopping-bag-alt', 'bx bxs-shield', 'bx bxs-share', 'bx bxs-share-alt', 'bx bxs-server', 'bx bxs-send', 'bx bxs-select-multiple', 'bx bxs-sort-alt', 'bx bxs-save', 'bx bxs-ruler', 'bx bxs-right-arrow-circle', 'bx bxs-report', 'bx bxs-rename', 'bx bxs-radio', 'bx bxs-quote-right', 'bx bxs-quote-left', 'bx bxs-purchase-tag', 'bx bxs-printer', 'bx bxs-plus-circle', 'bx bxs-plug', 'bx bxs-playlist', 'bx bxs-pin', 'bx bxs-pie-chart', 'bx bxs-pie-chart-alt', 'bx bxs-phone', 'bx bxs-phone-outgoing', 'bx bxs-phone-incoming', 'bx bxs-phone-call', 'bx bxs-pencil', 'bx bxs-pen', 'bx bxs-paste', 'bx bxs-paper-plane', 'bx bxs-package', 'bx bxs-news', 'bx bxs-navigation', 'bx bxs-music', 'bx bxs-mouse', 'bx bxs-moon', 'bx bxs-minus-circle', 'bx bxs-microphone', 'bx bxs-microphone-off', 'bx bxs-message', 'bx bxs-message-rounded', 'bx bxs-map', 'bx bxs-map-alt', 'bx bxs-lock', 'bx bxs-lock-open', 'bx bxs-like', 'bx bxs-left-arrow-circle', 'bx bxs-layer', 'bx bxs-joystick', 'bx bxs-joystick-alt', 'bx bxs-info-circle', 'bx bxs-inbox', 'bx bxs-image', 'bx bxs-hourglass', 'bx bxs-hot', 'bx bxs-home', 'bx bxs-hide', 'bx bxs-heart', 'bx bxs-hdd', 'bx bxs-group', 'bx bxs-grid-alt', 'bx bxs-gift', 'bx bxs-flag', 'bx bxs-flag-alt', 'bx bxs-first-aid', 'bx bxs-filter-alt', 'bx bxs-file', 'bx bxs-file', 'bx bxs-file-image', 'bx bxs-error', 'bx bxs-error-circle', 'bx bxs-envelope', 'bx bxs-eject', 'bx bxs-duplicate', 'bx bxs-droplet', 'bx bxs-drink', 'bx bxs-downvote', 'bx bxs-download', 'bx bxs-down-arrow-circle', 'bx bxs-dock-top', 'bx bxs-dock-right', 'bx bxs-dock-left', 'bx bxs-dock-bottom', 'bx bxs-dislike', 'bx bxs-discount', 'bx bxs-detail', 'bx bxs-cube', 'bx bxs-crown', 'bx bxs-coupon', 'bx bxs-copy', 'bx bxs-contact', 'bx bxs-collection', 'bx bxs-cog', 'bx bxs-coffee', 'bx bxs-cloud', 'bx bxs-cloud-upload', 'bx bxs-cloud-download', 'bx bxs-chip', 'bx bxs-chart', 'bx bxs-cart', 'bx bxs-cart-alt', 'bx bxs-car', 'bx bxs-captions', 'bx bxs-calculator', 'bx bxs-buoy', 'bx bxs-bulb', 'bx bxs-building', 'bx bxs-bug', 'bx bxs-briefcase-alt', 'bx bxs-briefcase', 'bx bxs-bookmark-star', 'bx bxs-book-open', 'bx bxs-bookmark-plus', 'bx bxs-bookmark', 'bx bxs-book', 'bx bxs-bolt', 'bx bxs-bell-off', 'bx bxs-bell', 'bx bxs-battery-full', 'bx bxs-battery-charging', 'bx bxs-battery', 'bx bxs-barcode', 'bx bxs-bar-chart-square', 'bx bxs-award', 'bx bxs-folder-plus', 'bx bxs-folder', 'bx bxs-camera-off', 'bx bxs-camera', 'bx bxs-archive', 'bx bxs-album', 'bx bxs-alarm-off', 'bx bxs-alarm', 'bx bxs-adjust',
        ];

        return $icon;
    }
endif;
