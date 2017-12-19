<?php
return [
    ["label" => "Home", "url" => "/", "icon" => "home"],
    ["label" => "Layout", "url" => ["gentelella/layout"], "icon" => "files-o"],
    ["label" => "Error page", "url" => ["gentelella/error-page"], "icon" => "close"],
    [
        "label" => "Widgets",
        "icon" => "th",
        "url" => "#",
        "items" => [
            ["label" => "Menu", "url" => ["gentelella/menu"]],
            ["label" => "Panel", "url" => ["gentelella/panel"]],
            ["label" => "Alert", "url" => ["gentelella/alert"]],
            ["label" => "Gridview", "url" => ["gentelella/gridview"]],
            ["label" => "StatsTile", "url" => ["gentelella/statstile"]],
            ["label" => "Timeline", "url" => ["gentelella/timeline"]],
            ["label" => "Accordion", "url" => ["gentelella/accordion"]],
        ],
    ],
    [
        "label" => "Badges",
        "url" => "#",
        "icon" => "table",
        "items" => [
            [
                "label" => "Default",
                "url" => "#",
                "badge" => "123",
            ],
            [
                "label" => "Success",
                "url" => "#",
                "badge" => "new",
                "badgeOptions" => ["class" => "label-success"],
            ],
            [
                "label" => "Danger",
                "url" => "#",
                "badge" => "!",
                "badgeOptions" => ["class" => "label-danger"],
            ],
        ],
    ],
    [
        "label" => "Multilevel",
        "url" => "#",
        "icon" => "table",
        "items" => [
            [
                "label" => "Second level 1",
                "url" => "#",
            ],
            [
                "label" => "Second level 2",
                "url" => "#",
                "items" => [
                    [
                        "label" => "Third level 1",
                        "url" => "#",
                    ],
                    [
                        "label" => "Third level 2",
                        "url" => "#",
                    ],
                ],
            ],
        ],
    ],
];