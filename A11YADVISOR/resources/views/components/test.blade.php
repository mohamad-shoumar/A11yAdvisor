<div class="section">
    <h2>{{ $title }}</h2>
    <div class="main">
        
        <div class="steps">
            <h3>How to perform the test:</h3>
            @if(isset($statement))
            <h5>{{ $statement }}</h5>
        @endif
            <ul>
                @foreach($steps as $step)
                    <li>
                        {{ $step }}
                        @if(isset($nestedSteps[$step]))
                            <ul>
                                @foreach($nestedSteps[$step] as $nestedStep)
                                    <li>{{ $nestedStep }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="fail">
            <h3>Possible failures of the test:</h3>
            <ul>
                @foreach($failures as $failure)
                    <li>{{ $failure }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
