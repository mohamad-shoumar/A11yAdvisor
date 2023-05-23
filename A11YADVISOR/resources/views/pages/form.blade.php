@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper">
    <div class="formContainer">
  <form >
 
  <div class="form-group">
    <span>https://</span>
    <input class="form-field" type="text" placeholder="domain" required>
    

  </div>
 
  @component('components.form-section', [
    'title' => 'Test 1:Images',
    'resultId' => 'test1-result',
    'resultName' => 'test1-result',
    'failReasonsId' => 'test1-fail-reasons',
    'failReasonId' => 'test1-fail-reason',
    'failReasonName' => 'test1-fail-reason',
    'failReasons' => ['Empty alt text', 'CAPTCHA lacks description', 'Text doesnt match image text', 'Meaninigful image lacks/inadequate alt text']
  ])
  @endcomponent

  @component('components.form-section', [
    'title' => 'Test 2:Heading',
    'resultId' => 'test2-result',
    'resultName' => 'test2-result',
    'failReasonsId' => 'test2-fail-reasons',
    'failReasonId' => 'test2-fail-reason',
    'failReasonName' => 'test2-fail-reason',
    'failReasons' => ['Non discriptive', 'Not correctly marked up', 'Doesnt describe the structure of the document']
  ])
  @endcomponent

  @component('components.form-section', [
    'title' => 'Test 3:Buttons and links',
    'resultId' => 'test3-result',
    'resultName' => 'test3-result',
    'failReasonsId' => 'test3-fail-reasons',
    'failReasonId' => 'test3-fail-reason',
    'failReasonName' => 'test3-fail-reason',
    'failReasons' => ['Doesnt convey purpose', 'Lack focus', 'Not accessible by keyboard', 'Marked with markup activated by js alone']
  ])
  @endcomponent


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<table>
    <thead>
      <tr>
        <th>Website URL</th>
        <th>Test 1</th>
        <th>Test 2</th>
        <th>Test 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>https://www.facebook.com</td>
        <td>Pass</td>
        <td>Pass</td>
        <td>Fail<br>Reason: Doesnt convey purpose</td>
      </tr>
      <tr>
        <td>https://www.youtube.com</td>
        <td>Fail<br>Reason: Empty alt text</td>
        <td>Pass</td>
        <td>Pass</td>
      </tr>
      <tr>
        <td>https://www.pepsico.com</td>
        <td>Pass</td>
        <td>Fail<br>Reason: Non discriptive</td>
        <td>Fail<br>Reason: Not accessible by keyboard</td>
      </tr>
    </tbody>
  </table>
  
</div>
<script>
    const formSections = document.getElementsByClassName('section');
    Array.from(formSections).forEach(function (section) {
      const failRadio = section.querySelector('input[name$="-result"][value="fail"]');
      const failReasonsDiv = section.querySelector('.form-group[id$="-fail-reasons"]');
      const failReasonSelect = section.querySelector('select[name$="-fail-reason"]'); 
      failRadio.addEventListener('change', function () {
        if (this.checked) {
          failReasonsDiv.style.display = 'block';
          
        } else {
          failReasonsDiv.style.display = 'none';
          failReasonSelect.selectedIndex = 0;
        }
      });
      
    });
    
  </script>

@endsection
