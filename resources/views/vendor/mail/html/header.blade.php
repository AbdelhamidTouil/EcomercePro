@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://th.bing.com/th/id/OIP.33Eucu9MYN4F0KQYQR9ZwgHaHa?pid=ImgDet&rs=1" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
