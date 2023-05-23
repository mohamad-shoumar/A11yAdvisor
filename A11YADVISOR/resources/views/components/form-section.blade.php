
<div class="section">
    <h4>{{ $title }}</h4>
    <div class="form-group">
      <input type="radio" name="{{ $resultName }}" id="pass_{{$resultId}}"  value="pass"> Pass
      <input type="radio" name="{{ $resultName }}" id="fail_{{$resultId}}" value="fail"> Fail
    </div>
    <div class="form-group" id="{{ $failReasonsId }}" style="display:none">
      <label for="{{ $failReasonId }}">Reason for Failure:</label>
      <select name="{{ $failReasonName }}" id="{{ $failReasonId }}" class="form-control">
        <option value="">Select a reason</option>
        @foreach ($failReasons as $reason)
          <option value="{{ $reason }}">{{ $reason }}</option>
        @endforeach
      </select>
    </div>
  </div>

  