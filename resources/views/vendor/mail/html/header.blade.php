@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://asmarahotelzm.com/img/logo.png" class="logo" alt="Asmara Hotel ZM Logo">
@else
<img src="https://asmarahotelzm.com/img/logo.png" class="logo" alt="Asmara Hotel ZM Logo">
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
