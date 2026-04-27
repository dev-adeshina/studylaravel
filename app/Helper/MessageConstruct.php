<?php

namespace App\Helper;


class MessageConstruct {

    function messageContent($data) {
        return collect([
            "<p>" .__($data['greetings']) ."</p>",

            isset($data['title']) ? "<h1>" . __($data['title'] ?? 'Notification') . "</h1>" : null,

            // 2. Lead/Intro (Optional)
            isset($data['lead']) ? "<p><strong>" . __($data['lead']) . "</strong></p>" : null,

            // 3. Main Body Paragraphs
            "<p>" . __($data['body'], $data['placeholders'] ?? []) . "</p>",

            // 4. Greetings/Sign-off
            "<p>" . __('Best regards,') . "<br>" . config('app.name') . "</p>"
        ])
        ->filter()
        ->implode("\n\n");
    }

}