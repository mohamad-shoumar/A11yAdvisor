@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/guide.css') }}" rel="stylesheet">
@endsection
@section('content')
    <h1 class="title">How to Test a Website</h1>

    @component('components.test', ['title' => 'Test 1: Images Alt Text', 'statement' => 'One by one, inspect the images on the page. For each image:', 'steps' => ['Is the image decorative?', 'Is the image used as a CAPTCHA?','Is the image of meaningful text?','Does the image convey information?'], 
    'nestedSteps' => ['Is the image decorative?' => ['If yes, skip this image for this test.'], 'Is the image used as a CAPTCHA?'=>['If yes, ensure there is alt text that describes the purpose of the CAPTCHA.'], 'Is the image of meaningful text?'=>['If yes, ensure the alt text matches the image text exactly'], 'Does the image convey information?'=>['If yes, ensure the alt text for the image conveys that information for people who cannot see the image.']  ], 
    'failures' => [
    'Decorative images have non-null value for alt text',
    'Image used as CAPTCHA lacks description',
    'Image of meaningful text lacks alt text',
    'Image of meaningful text has alt text that does not match the image text exactly',
    'Meaningful image lacks alt text',
    'Meaningful image has inappropriate or inadequate alt text'
]])
    @endcomponent
    

    @component('components.test', [
        'title' => 'Test 2: Headings and Structure',
        'statement' => 'Inspect the headings on the page to ensure correct markup and structure.',
        'steps' => [
            'Does the heading describe the purpose or topic of the content that follows?',
            'Is the heading correctly marked up as a heading (using H1, H2, H3, etc)?',
            'Do the headings correctly describe the structure of the document?'
        ],
        'nestedSteps' => [
            'Do the headings correctly describe the structure of the document?' => [
                'One H1 on the page',
                'Subsections have H2 headings',
                'Sub-subsections have H3 headings',
                'Heading levels are not skipped - section heading with an H2 has subsections with H3, not H4'
            ]
        ],
        'failures' => [
            'Heading does not describe the purpose or topic of the content that follows',
            'Heading is not correctly marked up',
            'Headings do not correctly describe the structure of the document'
        ]
    ])
    @endcomponent
    
    @component('components.test', [
    'title' => 'Test 3: Links and Buttons',
    'statement' => 'Inspect each link and button on the page.',
    'steps' => [
        'Can the purpose of the link or button be determined by the link or button text?',
        'Do links and buttons have a visible focus state?',
        'All links and buttons can be activated without a mouse, by keyboard alone',
        'Are links and buttons correctly marked up with <a>, <button>, or <input> tags?'
    ],
    'nestedSteps' => [
        'Can the purpose of the link or button be determined by the link or button text?' => [
            'For buttons, button text should describe what action the button will perform',
            'For links, link text should describe the content the link leads to (e.g., not \'Click here\')'
        ],
        'Do links and buttons have a visible focus state?' => [
            'Using the keyboard, tab to each link or button - is there a visible indicator of which link or button currently has keyboard focus?'
        ],
        'All links and buttons can be activated without a mouse, by keyboard alone' => [
            'Enter key for links',
            'Enter or spacebar for buttons'
        ]
    ],
    'failures' => [
        'Link or button text does not convey purpose',
        'Lack of visible focus state',
        'Unable to activate link or button with keyboard alone',
        'Links or buttons marked up with <div>, <span>, or other markup and activated by JavaScript alone'
    ]
])
@endcomponent

@endsection
