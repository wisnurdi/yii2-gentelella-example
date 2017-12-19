<?=
\yiister\gentelella\widgets\Timeline::widget(
    [
        'items' => [
            [
                'title' => 'The first item',
                'content' => 'This is a content block here. It contains just a text but you can show any content here.',
            ],
            [
                'title' => 'The second item',
                'byline' => '<span>13 hours ago</span> by <a>John Doe</a>',
                'content' => 'It is a same block but with a <code>byline</code> string.',
            ],
            [
                'title' => 'The third item without content block',
                'byline' => '<span>14 hours ago</span> by <a>John Doe</a>',
            ],
            [
                'title' => 'The fourth item. Just a title',
            ],
        ]
    ]
)
?>